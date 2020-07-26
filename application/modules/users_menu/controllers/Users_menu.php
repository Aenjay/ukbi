<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Users_menu extends REST_Controller {

	var $table = "users_menu";
	var $kode_menu = "M999003";
	var $menu;

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Users_menu_model', 'm');
		$this->form_validation->set_error_delimiters('',''); 
		$this->model->CheckAuthorize();
		$this->menu = $this->model->GetMenu($this->kode_menu);  
    }

	public function kode_menu_check($value, $id='')
	{
		$value = input($value);
		$this->model->where("id !=", input($id));
		$check = $this->model->GetSelect('id', $this->table, "kode_menu = '$value' and is_deleted = '0'")->num_rows();
		if ($check > 0 ) {
			$this->form_validation->set_message('kode_menu_check', "{field} sudah ada.");
			return false;
		}else{
			return true;
		}		
	}

	public function index_get()
	{
		$this->model->CheckAllowAccessShow($this->kode_menu);
		$file = fopen(site_url()."assets/icon.txt", "r");
		$members = array();
		while (!feof($file)) {
		   $members[] = fgets($file);
		}
		fclose($file);
		$data = array(
			'first_menu' => "M999",
			'second_menu' => $this->kode_menu,
			'third_menu' => '',
			'kode_menu' => $this->kode_menu,
			'url' => $this->menu->url,
			'title' => $this->menu->name_menu,
			'module' => $this->menu->name_menu,
			'content' => 'users_menu/users-menu-data',
			'menu' => $this->model->GetSelect("id, name_menu", $this->table, "is_deleted = '0' and rel = '0' order by sequence"),
			'icon' => $members,
			);
		$this->load->view('template/backend/template', $data);	
	}

	public function get_menu_get()
	{
        $data = array();
        $this->db->order_by('sequence', 'asc');
		$menu = $this->db->get_where($this->table, "is_deleted = 0 and rel = 0");
		if ($menu->num_rows() > 0) {
			foreach ($menu->result() as $d) { 
	            $row = array();
	            $row["id"] = $this->model->select_data($d->id);
	            $row["kode_menu"] = $this->model->select_data($d->kode_menu);
	            $row["name_menu"] = $this->model->select_data($d->name_menu);
	            $row["url"] = $this->model->select_data($d->url);
	            $row["icon"] = $this->model->select_data($d->icon);
	            $row["sequence"] = $this->model->select_data($d->sequence);
	            $data[] = $row;
		        foreach ($this->m->GetMenuSub($d->id)->result() as $s) {  
		            $row = array();
		            $row["id"] = $this->model->select_data($s->id);
		            $row["kode_menu"] = "=== ".$this->model->select_data($s->kode_menu);
		            $row["name_menu"] = "=== ".$this->model->select_data($s->name_menu);
		            $row["url"] = $this->model->select_data($s->url);
		            $row["icon"] = $this->model->select_data($s->icon);
		            $row["sequence"] = $this->model->select_data($s->sequence);
		            $data[] = $row;
			        foreach ($this->m->GetMenuSub($s->id)->result() as $m) {  
			            $row = array();
			            $row["kode_menu"] = "====== ".$this->model->select_data($m->kode_menu);
			            $row["name_menu"] = "====== ".$this->model->select_data($m->name_menu);
			            $row["url"] = $this->model->select_data($m->url);
			            $row["icon"] = $this->model->select_data($m->icon);
			            $row["sequence"] = $this->model->select_data($m->sequence);
			            $row["id"] = $this->model->select_data($m->id);
			            $data[] = $row;
			        }
		        }
			}
		}
		$result['error'] = 0;
		$result['message'] = "Successfully Read Data";
		$result['data'] = $data;
		$result['total_data'] = count($data);
		$this->response($result, 201);
	}

	public function where_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'kode_menu' => $this->get('kode_menu'),
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
		$this->form_validation->set_rules('kode_menu', 'Kode Menu', 'trim|min_length[4]|max_length[20]');
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
				$this->db->select('this.*, p.name_menu as parent_name');
			}
			$this->db->from($this->table." this");
			$this->db->join('users_menu p', 'p.id = this.rel', 'left');
			$this->model->where('this.id', $this->get('id'));
			$this->model->where('this.kode_menu', $this->get('kode_menu'));
			$this->db->where('this.is_deleted', 0);
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
        $access_detail = $this->model->CheckAllowAccess($this->kode_menu, "detail");
        $access_edit = $this->model->CheckAllowAccess($this->kode_menu, "edit");
        $access_delete = $this->model->CheckAllowAccess($this->kode_menu, "delete");
        $data = array();
        $data_result = $this->m->get_datatables();
        foreach ($data_result as $d) { 
            $row = array();
            $row["kode_menu"] = $this->model->select_data($d->kode_menu);
            $row["name_menu"] = $this->model->select_data($d->name_menu);
            $row["url"] = $this->model->select_data($d->url);
            $row["icon"] = $this->model->select_data($d->icon);
            $row["sequence"] = $this->model->select_data($d->sequence);
            $row["id"] = $this->model->select_data($d->id);
            $opsi = "";
            if ($access_detail) {$opsi .= "<button class='btn btn-xs btn-success waves-effect' ng-click='Detail(\"".$d->id."\")'>Detail</button> "; }
            if ($access_edit) {$opsi .= "<button class='btn btn-xs btn-info waves-effect' ng-click='Edit(\"".$d->id."\")'>Edit</button> "; }
            if ($access_delete) { $opsi .= "<button class='btn btn-xs btn-danger waves-effect' ng-click='Delete(\"".$d->id."\")'>Delete</button> ";}
	    	$row['icon'] = "<center><i class='fa fa-$d->icon'></i></center>";
	    	$row['opsi'] = "<center>$opsi</center>";
            $data[] = $row;
	        foreach ($this->m->GetMenuSub($d->id)->result() as $s) {  
	            $row = array();
	            $row["kode_menu"] = $this->model->select_data($s->kode_menu);
	            $row["name_menu"] = "=== ".$this->model->select_data($s->name_menu);
	            $row["url"] = $this->model->select_data($s->url);
	            $row["icon"] = $this->model->select_data($s->icon);
	            $row["sequence"] = $this->model->select_data($s->sequence);
	            $row["id"] = $this->model->select_data($s->id);
	            $opsi = "";
	            if ($access_detail) {$opsi .= "<button class='btn btn-xs btn-success waves-effect' ng-click='Detail(\"".$s->id."\")'>Detail</button> "; }
	            if ($access_edit) {$opsi .= "<button class='btn btn-xs btn-info waves-effect' ng-click='Edit(\"".$s->id."\")'>Edit</button> "; }
	            if ($access_delete) { $opsi .= "<button class='btn btn-xs btn-danger waves-effect' ng-click='Delete(\"".$s->id."\")'>Delete</button> ";}
		    	$row['icon'] = "<center><i class='fa fa-$s->icon'></i></center>";
		    	$row['opsi'] = "<center>$opsi</center>";
	            $data[] = $row;
		        foreach ($this->m->GetMenuSub($s->id)->result() as $m) {  
		            $row = array();
		            $row["kode_menu"] = $this->model->select_data($m->kode_menu);
		            $row["name_menu"] = "====== ".$this->model->select_data($m->name_menu);
		            $row["url"] = $this->model->select_data($m->url);
		            $row["icon"] = $this->model->select_data($m->icon);
		            $row["sequence"] = $this->model->select_data($m->sequence);
		            $row["id"] = $this->model->select_data($m->id);
		            $opsi = "";
		            if ($access_detail) {$opsi .= "<button class='btn btn-xs btn-success waves-effect' ng-click='Detail(\"".$m->id."\")'>Detail</button> "; }
		            if ($access_edit) {$opsi .= "<button class='btn btn-xs btn-info waves-effect' ng-click='Edit(\"".$m->id."\")'>Edit</button> "; }
		            if ($access_delete) { $opsi .= "<button class='btn btn-xs btn-danger waves-effect' ng-click='Delete(\"".$m->id."\")'>Delete</button> ";}
			    	$row['icon'] = "<center><i class='fa fa-$m->icon'></i></center>";
			    	$row['opsi'] = "<center>$opsi</center>";
		            $data[] = $row;
		        }
	        }
        }
		$result = array(
			"draw" 				=> $_POST['draw'],
			"recordsTotal" 		=> count($data),
			"recordsFiltered" 	=> $this->m->count_filtered(),
			"data" 				=> $data,
		);
        $this->response($result, 200);
	}

	public function add_post()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
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
			'kode_menu' => $this->post("kode_menu"),
			'name_menu' => $this->post('name_menu'),
			'url' => $this->post('url'),
			'rel' => $this->post('rel'),
			'icon' => $this->post('icon'),
			'sequence' => $this->post('sequence'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('name_menu', 'Name Menu', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('url', 'URL', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('rel', 'Rel', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('icon', 'Icon', 'trim|max_length[150]');
		$this->form_validation->set_rules('sequence', 'Sequence', 'trim|required|max_length[11]|numeric');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		if (form_error('kode_menu') == null) {
			$this->form_validation->set_rules('kode_menu', 'Kode Menu', 'callback_kode_menu_check');
			$this->form_validation->run();
			if (form_error('kode_menu')) {
				$error_validation['kode_menu'] = form_error('kode_menu');
			}else{
				$status_validation .= "1";
			}
		}
		if ($this->form_validation->run() == FALSE or $status_validation != "1") {
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
			$data['created_by'] = $this->model->BaseFieldBy();
			$data['created_date'] = $this->model->DateTime();
			if ($this->db->insert($this->table, $data) == 1) {
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
			'id' => $this->post('id'),
			'kode_menu' => $this->post("kode_menu"),
			'name_menu' => $this->post('name_menu'),
			'url' => $this->post('url'),
			'rel' => $this->post('rel'),
			'icon' => $this->post('icon'),
			'sequence' => $this->post('sequence'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('kode_menu', 'Kode Menu', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('name_menu', 'Name Menu', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('url', 'URL', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('rel', 'Rel', 'trim|max_length[11]');
		$this->form_validation->set_rules('icon', 'Icon', 'trim|max_length[150]');
		$this->form_validation->set_rules('sequence', 'Sequence', 'trim|required|max_length[11]');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		$myData = $this->m->GetById($this->model->post("id"));
		if ($myData->num_rows() == 0) {
			$result['error'] = 2;
			$result['message'] = "Unknown ID";
			$result['status_code'] = 202;
		}else{
			if (form_error('kode_menu') == null) {
				$this->form_validation->set_rules('kode_menu', 'Kode Menu', 'callback_kode_menu_check['.$this->post("id").']');
				$this->form_validation->run();
				if (form_error('kode_menu')) {
					$error_validation['kode_menu'] = form_error('kode_menu');
				}else{
					$status_validation .= "1";
				}
			}
			if ($myData->row()->allow_edit == 0) {
				$result['error'] = 6;
				$result['message'] = "Data is not allowed to be edited";
				$result['status_code'] = 206;
			}else{
				if ($this->form_validation->run() == FALSE or $status_validation != "1") {
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
					$data['last_modified_by'] = $this->model->BaseFieldBy();
					$data['last_modified_date'] = $this->model->DateTime();
					if ($this->db->update($this->table, $data, array('id' => input($this->post('id')))) == 1) {
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
					$result['status_code'] = 206;
				}else{
					if ($this->model->IsDelete($this->table, "id = '$id' and is_deleted = 0") == 1) {
						// $this->model->CreateLog($this->module, "Delete data pada id = $id");
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
			}else{
				if ($this->model->IsDelete($this->table, "id = '$value' and allow_delete = 1 and is_deleted = 0") == 1) {
					// $this->model->CreateLog($this->module, "Delete data pada id = $value");
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

	function icon_get()
	{
		$file = fopen(site_url()."assets/icon.txt", "r");
		$members = array();
		while (!feof($file)) {
		   $members[] = fgets($file);
		}
		fclose($file);
		print_r($members);
	}


}

/* End of file user.php */
/* Location: ./application/controllers/user.php */