<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Baterai extends Rest_Controller {
	
	var $kode_menu = "M003002";
	var $table = "baterai";
	var $menu;

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Baterai_model', 'm');
		$this->form_validation->set_error_delimiters('','');  
		$this->model->CheckAuthorize();
		$this->menu = $this->model->GetMenu($this->kode_menu);
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
			'content' => 'baterai/baterai-data',
			'listJumlahSoal' => $this->model->GetSelect("jumlah_soal", "estimasi_jawaban", "id != '' group by jumlah_soal"),
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
			'dimensi_tingkat_id' => $this->get("dimensi_tingkat_id"),
			'dimensi_id' => $this->get("dimensi_id"),
			'tingkat_id' => $this->get("tingkat_id"),
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
		$this->form_validation->set_rules('id', 'Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('dimensi_tingkat_id', 'Dimensi Tingkat Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('dimensi_id', 'Dimensi Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('tingkat_id', 'Tingkat Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('this.*, d.nama_dimensi, t.nama_tingkat');
			}
			$this->db->from($this->table.' this');
			$this->db->join('dimensi_tingkat dt', 'dt.id = this.dimensi_tingkat_id', 'left');
			$this->db->join('dimensi d', 'd.id = dt.dimensi_id', 'left');
			$this->db->join('tingkat t', 't.id = dt.tingkat_id', 'left');
			$this->model->where('this.id', $this->get('id'));
			$this->model->where("this.dimensi_tingkat_id", $this->get("dimensi_tingkat_id"));
			$this->model->where("dt.dimensi_id", $this->get("dimensi_id"));
			$this->model->where("dt.tingkat_id", $this->get("tingkat_id"));
			$this->db->where('this.is_deleted', 0);
			$this->db->where('dt.is_deleted', 0);
			$this->db->where('d.is_deleted', 0);
			$this->db->where('t.is_deleted', 0);
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

	public function soal_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'baterai_id' => $this->get("baterai_id"),
			'banksoal_id' => $this->get("banksoal_id"),
			'dimensi_tingkat_id' => $this->get("dimensi_tingkat_id"),
			'dimensi_id' => $this->get("dimensi_id"),
			'tingkat_id' => $this->get("tingkat_id"),
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
		$this->form_validation->set_rules('id', 'Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('baterai_id', 'Baterai Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('banksoal_id', 'Banksoal Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('dimensi_tingkat_id', 'Dimensi Tingkat Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('dimensi_id', 'Dimensi Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('tingkat_id', 'Tingkat Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('this.*, d.nama_dimensi, t.nama_tingkat, b.nama_baterai, karakter_butir, teslet, b.suara, bs.nis');
			}
			$this->db->from('baterai_soal this');
			$this->db->join('baterai b', 'b.id = this.baterai_id', 'left');
			$this->db->join('dimensi_tingkat dt', 'dt.id = b.dimensi_tingkat_id', 'left');
			$this->db->join('dimensi d', 'd.id = dt.dimensi_id', 'left');
			$this->db->join('tingkat t', 't.id = dt.tingkat_id', 'left');
			$this->db->join('banksoal bs', 'bs.id = this.banksoal_id', 'left');
			$this->db->where('this.is_deleted', 0);
			$this->db->where('t.is_deleted', 0);
			$this->db->where('d.is_deleted', 0);
			$this->model->where('this.id', $this->get('id'));
			$this->model->where('this.baterai_id', $this->get('baterai_id'));
			$this->model->where('this.banksoal_id', $this->get('banksoal_id'));
			$this->model->where('dt.dimensi_id', $this->get('dimensi_id'));
			$this->model->where('dt.tingkat_id', $this->get('tingkat_id'));
			$this->db->where('this.is_deleted', 0);
			$this->db->where('t.is_deleted', 0);
			$this->db->where('d.is_deleted', 0);
			$this->db->order_by('b.sequence, d.sequence, t.sequence, this.nomor_soal', 'asc');
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

	public function estimasi_jawaban_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'baterai_id' => $this->get("baterai_id"),
			'estimasi_jawaban_id' => $this->get("estimasi_jawaban_id"),
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
		$this->form_validation->set_rules('id', 'Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('baterai_id', 'Baterai Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('estimasi_jawaban_id', 'Estimasi Jawaban Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('ej.*, tetha, skor, pembulatan');
			}
			$this->db->from('baterai_estimasi_jawaban this');
			$this->db->join('baterai b', 'b.id = this.baterai_id', 'left');
			$this->db->join('estimasi_jawaban ej', 'ej.id = this.estimasi_jawaban_id', 'left');
			$this->db->where('this.is_deleted', 0);
			$this->db->where('b.is_deleted', 0);
			$this->db->where('ej.is_deleted', 0);
			$this->db->order_by('ej.sequence', 'asc');
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
                'nama_dimensi' => $this->model->select_data($value->nama_dimensi),
                'nama_tingkat' => $this->model->select_data($value->nama_tingkat),
                'nama_baterai' => $this->model->select_data($value->nama_baterai),
                'karakter_butir' => $this->model->select_data($value->karakter_butir),
                'teslet' => $this->model->select_data($value->teslet),
                'jumlah_soal' => $this->model->select_data($value->jumlah_soal),
                'nomor_awal_soal' => $this->model->select_data($value->nomor_awal_soal),
                'opsi' => "<center>$opsi</center>",
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
			'dimensi_tingkat_id' => $this->post("dimensi_tingkat_id"),
			'nama_baterai' => $this->post('nama_baterai'),
			'karakter_butir' => $this->post('karakter_butir'),
			'teslet' => $this->post('teslet'),
			'jumlah_soal' => $this->post('jumlah_soal'),
			'nomor_awal_soal' => $this->post('nomor_awal_soal'),
			'sequence' => $this->post('sequence'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('dimensi_tingkat_id', 'Dimensi Tingkat', 'trim|required|numeric');
		$this->form_validation->set_rules('nama_baterai', 'Nama Baterai', 'trim|required');
		$this->form_validation->set_rules('karakter_butir', 'Karakter Butir', 'trim|required');
		$this->form_validation->set_rules('teslet', 'Teslet', 'trim|required');
		$this->form_validation->set_rules('jumlah_soal', 'Jumlah Soal', 'trim|required|numeric');
		$this->form_validation->set_rules('nomor_awal_soal', 'Nomor Awal Soal', 'trim|required|numeric');
		$this->form_validation->set_rules('sequence', 'Urutan', 'trim|required|max_length[11]|numeric');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		if ($this->form_validation->run() == FALSE) {
			$result['error'] = 1;
			$result['error_validation'] = $error_validation;
			$result['message'] = "Data is not valid";
			$result['status_code'] = 202;
		}else{
			$data = $data_validation;
			foreach ($this->post() as $key => $value) {
				if (!array_key_exists($key, $data) and $key != "id" and $key != "suara" and $key != "estimasi_jawaban_id" and $key != "skor" and $key != "tetha") {
					$result['error_validation'][$key] = "The $key are not available";
					$result['error'] = 1;
				}
			}	
			if ($result['error'] == 1) {
				$result['message'] = "Data is not valid";
				$this->response($result, 202);exit;
			}
			if (!empty($_FILES['suara']['name'])) {
				$config['upload_path'] = './uploads/baterai/suara/';
				$config['allowed_types'] = 'mp3';
				$config['remove_spaces'] = TRUE;
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('suara')){
					$data['suara'] = $this->upload->data("file_name");
				}else{
					$result['error'] = 2;//error upload file
					$result['message'] = $this->upload->display_errors();
					$result['status_code'] = 202;
					$this->response($result, $result['status_code']);
					exit;
				}
			}
			$data['created_by'] = $this->model->BaseFieldBy();
			$data['created_date'] = $this->model->DateTime();
			if ($this->db->insert($this->table, $data)) {
				$insert_id = $this->db->insert_id();
				$this->model->CreateLog($this->menu->name_menu, "Tambah data pada id = ".$insert_id);
				for ($i = 0; $i < $this->post("jumlah_soal"); $i++) {
					$data_insert = array(
						'baterai_id' => $insert_id,
						'nomor_soal' => $this->post("nomor_awal_soal")+$i,
						'created_by' => $data['created_by'],
						'created_date' => $data['created_date'],
					);
					$this->db->insert('baterai_soal', $data_insert);
				}
				foreach ($this->post("estimasi_jawaban_id") as $key => $value) {
					$data_insert = array(
						'baterai_id' => $insert_id,
						'estimasi_jawaban_id' => $value,
						'tetha' => $this->post("tetha")[$key],
						'skor' => $this->post("skor")[$key],
						'pembulatan' => round($this->post("skor")[$key]),
						'created_by' => $data['created_by'],
						'created_date' => $data['created_date'],
					);
					$this->db->insert('baterai_estimasi_jawaban', $data_insert);
				}
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
		$file_suara_unlink = false;
		if (!$this->model->CheckAllowAccess($this->kode_menu, "edit")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to edit";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$data_validation = array(
			'id' => $this->model->post('id'),
			'dimensi_tingkat_id' => $this->post("dimensi_tingkat_id"),
			'nama_baterai' => $this->post('nama_baterai'),
			'karakter_butir' => $this->post('karakter_butir'),
			'teslet' => $this->post('teslet'),
			'sequence' => $this->post('sequence'),
			);		
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('dimensi_tingkat_id', 'Dimensi Tingkat', 'trim|required|numeric');
		$this->form_validation->set_rules('nama_baterai', 'Nama Baterai', 'trim|required');
		$this->form_validation->set_rules('karakter_butir', 'Karakter Butir', 'trim|required');
		$this->form_validation->set_rules('teslet', 'Teslet', 'trim|required');
		$this->form_validation->set_rules('sequence', 'Urutan', 'trim|required|max_length[11]|numeric');
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
			if ($myData->row()->allow_edit == 0) {
				$result['error'] = 6;
				$result['message'] = "Data is not allowed to be edited";
				$result['status_code'] = 206;
			}else{
				if ($this->form_validation->run() == FALSE) {
					$result['error'] = 1;
					$result['error_validation'] = $error_validation;
					$result['message'] = "Data is not valid";
					$result['status_code'] = 202;
				}else{
					unset($data_validation['confirm_password']);
					$data = $data_validation;
					foreach ($this->post() as $key => $value) {
						if (!array_key_exists($key, $data) and $key != "id" and $key != "suara" and $key != "estimasi_jawaban_id" and $key != "skor" and $key != "tetha") {
							$result['error_validation'][$key] = "The $key are not available";
							$result['error'] = 1;
						}
					}	
					if ($result['error'] == 1) {
						$result['message'] = "Data is not valid";
						$this->response($result, 202);exit;
					}
					if (!empty($_FILES['suara']['name'])) {
						$config['upload_path'] = './uploads/baterai/suara/';
						$config['allowed_types'] = 'mp3';
						$config['remove_spaces'] = TRUE;
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload', $config);
						if ($this->upload->do_upload('suara')){
							$data['suara'] = $this->upload->data("file_name");
							$file_suara_unlink = true;
						}else{
							$result['error'] = 2;//error upload file
							$result['message'] = $this->upload->display_errors();
							$result['status_code'] = 202;
							$this->response($result, $result['status_code']);
							exit;
						}
					}
					$file_suara_last = $myData->row()->suara;
					$data['last_modified_by'] = $this->model->BaseFieldBy();
					$data['last_modified_date'] = $this->model->DateTime();
					if ($this->db->update($this->table, $data, array('id' => $this->post('id'))) == 1) {
						$id = $this->model->post("id");
						$this->model->CreateLog($this->menu->name_menu, "Update data pada id = ".$this->post("id"));
						if ($file_suara_unlink == true and file_exists('./uploads/baterai/suara/'.$file_suara_last) == true and $file_suara_last != null){
							unlink('./uploads/baterai/suara/'.$file_suara_last);
						}
						foreach ($this->post("estimasi_jawaban_id") as $key => $value) {
							$data_update = array(
								'tetha' => $this->post("tetha")[$key],
								'skor' => $this->post("skor")[$key],
								'pembulatan' => round($this->post("skor")[$key]),
								'last_modified_by' => $data['last_modified_by'],
								'last_modified_date' => $data['last_modified_date'],
							);
							$this->db->update('baterai_estimasi_jawaban', $data_update, ["baterai_id" => $id, "estimasi_jawaban_id" => $value]);
						}
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