<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Banksoal extends Rest_Controller {
	
	var $kode_menu = "M003003";
	var $table = "banksoal";
	var $menu;

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Banksoal_model', 'm');
		$this->form_validation->set_error_delimiters('','');  
		$this->model->CheckAuthorize();
		$this->menu = $this->model->GetMenu($this->kode_menu);
    }

	public function nis_check($value, $id='')
	{
		$value = input($value);
		$this->model->where("id !=", input($id));
		$check = $this->model->GetSelect("id", $this->table, "nis = '$value' and is_deleted = '0'")->num_rows();
		if ($check > 0 ) {
			$this->form_validation->set_message('nis_check', "{field} sudah ada.");
			return false;
		}else{
			return true;
		}
	}

	public function index_get()
	{
		$this->model->CheckAllowAccessShow($this->kode_menu);
		$data = array(
			'first_menu' => 'M003',
			'second_menu' => $this->kode_menu,
			'third_menu' => '',
			'kode_menu' => $this->kode_menu,
			'url' => $this->menu->url,
			'title' => $this->menu->name_menu,
			'module' => $this->menu->name_menu,
			'content' => 'banksoal/banksoal-data',
		);
		$this->load->view("template/backend/template", $data);
	}

	public function where_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'nis' => $this->get('nis'),
			'limit' => $this->get("limit"),
			'count' => $this->get("count"),
			);
		foreach ($this->get() as $key => $value) {
			if (!array_key_exists($key, $data_validation) and $key != "token") {
				$result['error_validation'][$key] = "The $key are not available";
				$result['error'] = 2;
				$result['message'] = "Data is not valid";
				$this->response($result, 202);exit;
			}
		}			
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|min_length[32]|max_length[32]');
		$this->form_validation->set_rules('nis', 'Nis', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('limit', 'Limit', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('count', 'Count', 'trim|max_length[1]|numeric');
		if ($this->form_validation->run() ==  FALSE) {
			$result['error_validation'] = [];
			foreach ($data_validation as $key => $value) {
				if (form_error($key)) {
					$result['error_validation'][$key] = form_error($key);
				}
			}
			$result['error'] = 1;
			$result['message'] = "Data is not valid";
			$result['status_code'] = 202;
		}else{
			if ($this->get("count") == 1) {
				$this->db->select('count(this.id) as x');
			}else{
				$this->db->select('this.*');
			}
			$this->db->from($this->table.' this');
			$this->model->where('this.id', $this->get('id'));
			$this->db->where('this.is_deleted', 0);
			$this->db->order_by('this.nis', 'asc');
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$data = $this->db->get();
			if ($data->num_rows() == 0) {
				$result['error'] = 2;
				$result['message'] = "No Data";
				$result['status_code'] = 200;
			}else{
				$result['error'] = 0;
				$result['message'] = "Successfully Read Data";
				$result['status_code'] = 200;
			}
			$result['total_data'] = ($this->get("count") == 1) ? $data->row()->x : $data->num_rows();
			$result['data'] = $data->result();
		}
		$this->response($result, $result['status_code']);
	}

	public function table_post()
	{
		$this->model->check_is_ajax();
        $result = array('data' => array());
        $data = $this->m->get_datatables();
        $access_detail = $this->model->CheckAllowAccess($this->kode_menu, "detail");
        $access_edit = $this->model->CheckAllowAccess($this->kode_menu, "edit");
        $access_delete = $this->model->CheckAllowAccess($this->kode_menu, "delete");
        foreach ($data as $key => $value) {
        	$opsi = "";
            $id = $this->model->select_data($value->id);
            if ($value->allow_detail and $access_detail) {
            	$opsi .= "<button class='btn btn-xs btn-success' ng-click='Detail(\"".$id."\")'>Detail</button> ";
            }
            if ($value->allow_edit and $access_edit) {
            	$opsi .= "<button class='btn btn-xs btn-info' ng-click='Edit(\"".$id."\")'>Edit</button> ";
            }
            if ($value->allow_delete and $access_delete) {
            	$opsi .= "<button class='btn btn-xs btn-danger' ng-click='Delete(\"".$id."\")'>Delete</button> ";
            }
            $result['data'][$key] = array(
            	'id' => $this->model->select_data($value->id),
                'opsi' => "<center>$opsi</center>",
                'nis' => $this->model->select_data($value->nis),
                'jenis_soal' => $this->model->select_data($value->jenis_soal),
                'soal' => ($value->jenis_soal == "Normal") ? $value->soal : $value->soal_x.$value->soal_y,
            );
        }
        $result['draw'] = $_POST['draw'];
        $result['recordsTotal'] = $this->m->count_all();
        $result['recordsFiltered'] = $this->m->count_filtered();
		$this->response($result, 200);
	}

	public function add_post()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Requests";
		$result['status_code'] = 203;
		$status_validation = "";
		$error_validation = [];
		if (!$this->model->CheckAllowAccess($this->kode_menu, "add")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to add";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$data_validation = array(
			'nis' => $this->post('nis'),
			'jenis_soal' => $this->post('jenis_soal'),
			'jawaban' => $this->post('jawaban'),

			'normal_soal' => $this->post('normal_soal'),
			'normal_a' => $this->post('normal_a'),
			'normal_b' => $this->post('normal_b'),
			'normal_c' => $this->post('normal_c'),
			'normal_d' => $this->post('normal_d'),

			'xy_soal_x' => $this->post('xy_soal_x'),
			'xy_a' => $this->post('xy_a'),
			'xy_b' => $this->post('xy_b'),
			'xy_soal_y' => $this->post('xy_soal_y'),
			'xy_c' => $this->post('xy_c'),
			'xy_d' => $this->post('xy_d'),
		);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('jenis_soal', 'Jenis Soal', 'trim|required');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'trim|required');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		if (form_error('nis') == null) {
			$this->form_validation->set_rules('nis', 'NIS', 'callback_nis_check');
			$this->form_validation->run();
			if (form_error('nis')) {
				$error_validation['nis'] = form_error('nis');
			}else{
				$status_validation .= "1";
			}
		}
		if ($status_validation != "1" or $this->form_validation->run() == FALSE) {
			$result['error'] = 1;
			$result['error_validation'] = $error_validation;
			$result['message'] = "Data is not valid";
			$result['status_code'] = 202;
		}else{
			$data = $data_validation;
			foreach ($this->post() as $key => $value) {
				if (!array_key_exists($key, $data) and $key != "id") {
					$result['error_validation'][$key] = "The $key are not available";
					$result['error'] = 1;
				}
			}	
			if ($result['error'] == 1) {
				$result['message'] = "Data is not valid";
				$this->response($result, 202);exit;
			}
			$data = array(
				'nis' => $this->post('nis'),
				'jenis_soal' => $this->post('jenis_soal'),
				'jawaban' => $this->post('jawaban'),
			);
			if ($this->post("jenis_soal") == 'Normal') {
				$data['soal'] = $this->post("normal_soal");
				$data['a'] = $this->post("normal_a");
				$data['b'] = $this->post("normal_b");
				$data['c'] = $this->post("normal_c");
				$data['d'] = $this->post("normal_d");
			}else if ($this->post("jenis_soal") == 'Pertanyaan 1 & 2'){
				$data['soal_x'] = $this->post("xy_soal_x");
				$data['soal_y'] = $this->post("xy_soal_y");
				$data['a'] = $this->post("xy_a");
				$data['b'] = $this->post("xy_b");
				$data['c'] = $this->post("xy_c");
				$data['d'] = $this->post("xy_d");
			}else{
				$result['error'] = 2;
				$result['message'] = "Jenis Soal tidak diketahui";
				$result['status_code'] = 202;
				$this->response($result, $result['status_code']);exit;
			}
			$data['id'] = $this->model->GenerateString(32);
			$data['created_by'] = $this->model->BaseFieldBy();
			$data['created_date'] = $this->model->DateTime();
			if ($this->db->insert($this->table, $data)) {
				$this->model->CreateLog($this->menu->name_menu, "Tambah data pada id = ".$data['id']);
				$result['error'] = 0;
				$result['message'] = "Successfully Create Data";
				$result['status_code'] = 201;
			}
		}
		$this->response($result, $result['status_code']);
	}

	public function update_post()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Requests";
		$result['status_code'] = 203;
		$status_validation = "";
		$error_validation = [];
		if (!$this->model->CheckAllowAccess($this->kode_menu, "edit")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to edit";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$data_validation = array(
			'id' => $this->model->post("id"),
			'nis' => $this->post('nis'),
			'jenis_soal' => $this->post('jenis_soal'),
			'jawaban' => $this->post('jawaban'),

			'normal_soal' => $this->post('normal_soal'),
			'normal_a' => $this->post('normal_a'),
			'normal_b' => $this->post('normal_b'),
			'normal_c' => $this->post('normal_c'),
			'normal_d' => $this->post('normal_d'),

			'xy_soal_x' => $this->post('xy_soal_x'),
			'xy_a' => $this->post('xy_a'),
			'xy_b' => $this->post('xy_b'),
			'xy_soal_y' => $this->post('xy_soal_y'),
			'xy_c' => $this->post('xy_c'),
			'xy_d' => $this->post('xy_d'),
		);	
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|required|min_length[32]|max_length[32]');
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('jenis_soal', 'Jenis Soal', 'trim|required');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'trim|required');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		$myData = $this->m->GetById($this->post('id'));
		if ($myData->num_rows() == 0) {
			$result['error'] = 2;
			$result['message'] = "Unknown ID";
			$result['status_code'] = 202;
		}else{
			if (form_error('nis') == null) {
				$this->form_validation->set_rules('nis', 'NIS', 'callback_nis_check['.$this->post("id").']');
				$this->form_validation->run();
				if (form_error('nis')) {
					$error_validation['nis'] = form_error('nis');
				}else{
					$status_validation .= "1";
				}
			}
			if ($myData->row()->allow_edit == 0) {
				$result['error'] = 6;
				$result['message'] = "Data is not allowed to be edited";
				$result['status_code'] = 206;
			}else{
				if ($status_validation != "1" or $this->form_validation->run() == FALSE) {
					$result['error'] = 1;
					$result['error_validation'] = $error_validation;
					$result['message'] = "Data is not valid";
					$result['status_code'] = 202;
				}else{
					unset($data_validation['confirm_password']);
					$data = $data_validation;
					foreach ($this->post() as $key => $value) {
						if (!array_key_exists($key, $data) and $key != "id") {
							$result['error_validation'][$key] = "The $key are not available";
							$result['error'] = 1;
						}
					}	
					if ($result['error'] == 1) {
						$result['message'] = "Data is not valid";
						$this->response($result, 202);exit;
					}
					$data = array();
					if ($this->post("jenis_soal") == 'Normal') {
						$data['soal'] = $this->post("normal_soal");
						$data['a'] = $this->post("normal_a");
						$data['b'] = $this->post("normal_b");
						$data['c'] = $this->post("normal_c");
						$data['d'] = $this->post("normal_d");
					}else if ($this->post("jenis_soal") == 'Pertanyaan 1 & 2'){
						$data['soal_x'] = $this->post("xy_soal_x");
						$data['soal_y'] = $this->post("xy_soal_y");
						$data['a'] = $this->post("xy_a");
						$data['b'] = $this->post("xy_b");
						$data['c'] = $this->post("xy_c");
						$data['d'] = $this->post("xy_d");
					}else{
						$result['error'] = 2;
						$result['message'] = "Jenis Soal tidak diketahui";
						$result['status_code'] = 202;
						$this->response($result, $result['status_code']);exit;
					}
					$data['last_modified_by'] = $this->model->BaseFieldBy();
					$data['last_modified_date'] = $this->model->DateTime();
					if ($this->db->update($this->table, $data, array('id' => $this->post('id'))) == 1) {
						$id = $this->model->post("id");
						$this->model->CreateLog($this->menu->name_menu, "Update data pada id = ".$this->post("id"));
						$result['error'] = 0;
						$result['message'] = "Successfully Update Data";
						$result['status_code'] = 200;
					}
				}
			}
		}
		$this->response($result, $result['status_code']);
	}

	public function delete_delete($id='')
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Requests";
		$result['status_code'] = 203;
		if (!$this->model->CheckAllowAccess($this->kode_menu, "delete")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to delete";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$data_validation = array(
			'id' => $id
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]|numeric');
		if ($this->form_validation->run() == FALSE) {
			$result['error'] = 1;
			$result['error_validation'] = form_error('id');
			$result['message'] = "Data is not valid";
			$result['status_code'] = 202;
		}else{
			$data = $this->m->GetById($id);
			if ($data->num_rows() == 0) {
				$result['error'] = 2;
				$result['message'] = "Unknown ID";
				$result['status_code'] = 202;
			}else{
				if ($data->row()->allow_delete == 0) {
					$result['error'] = 6;
					$result['message'] = "Data is not allowed to be deleted";
					$result['status_code'] = 202;
				}else{
					if ($this->model->IsDelete($this->table, "id = '$id' and is_deleted = '0'") == 1) {
						$this->model->CreateLog($this->menu->name_menu, "Delete data pada id = $id");
						$result['error'] = 0;
						$result['message'] = "Successfully Deleted Data";
						$result['status_code'] = 200;
					}
				}
			}
		}
		$this->response($result, $result['status_code']);
	}

	public function delete_selected_post()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Requests";
		$result['status_code'] = 203;
		if (!$this->model->CheckAllowAccess($this->kode_menu, "delete")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to delete";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		foreach ($this->post('id') as $value) {
			$data_validation = array(
				'id' => $value,
				);
			$this->form_validation->set_data($data_validation);
			$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]|numeric');
			if ($this->form_validation->run() == FALSE) {
				$result['error'] = 1;
				$result['error_validation'] = form_error('id');
				$result['message'] = "Data is not valid";
				$result['status_code'] = 202;
				break;
			} else {		
				if ($this->model->IsDelete($this->table, "id = '$value' and allow_delete = '1' and is_deleted = '0'") == 1) {
					$this->model->CreateLog($this->menu->name_menu, "Delete data pada id = $value");
					$result['error'] = 0;
					$result['message'] = "Successfully Delete Selected Data";
					$result['status_code'] = 200;
				}else{
					$result['error'] = 5;
					$result['message'] = "Error Delete on Id = $value";
					$result['status_code'] = 202;
					break;
				}
			}
		}
		$this->response($result, $result['status_code']);	
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */	