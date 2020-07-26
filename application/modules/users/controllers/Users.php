<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Users extends Rest_Controller {
	
	var $kode_menu = "M999001";
	var $table = "users";
	var $menu;

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Users_model', 'm');
		$this->form_validation->set_error_delimiters('','');  
		$this->model->CheckAuthorize();
		$this->menu = $this->model->GetMenu($this->kode_menu);
    }

	public function email_check($value, $id='')
	{
		$value = input($value);
		$this->model->where("id !=", input($id));
		$check = $this->model->GetSelect("id", $this->table, "email = '$value' and is_deleted = '0'")->num_rows();
		if ($check > 0 ) {
			$this->form_validation->set_message('email_check', "{field} sudah ada.");
			return false;
		}else{
			return true;
		}
	}

	public function index_get()
	{
		$this->model->CheckAllowAccessShow($this->kode_menu);
		$data = array(
			'first_menu' => 'M999',
			'second_menu' => $this->kode_menu,
			'third_menu' => '',
			'kode_menu' => $this->kode_menu,
			'url' => $this->menu->url,
			'title' => $this->menu->name_menu,
			'module' => $this->menu->name_menu,
			'content' => 'users/users-data',
			'listUsersLevel' => $this->model->GetSelect("id, name_level", "users_level", "is_deleted = '0' order by name_level asc"),
		);
		$this->load->view("template/backend/template", $data);
	}

	public function where_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'users_level_id' => $this->get("users_level_id"),
			'status' => $this->get('status'),
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
		$this->form_validation->set_rules('users_level_id', 'Users Level Id', 'trim|max_length[11]|numeric');
		$this->form_validation->set_rules('status', 'Status', 'trim|min_length[3]|max_length[50]');
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
				$this->db->select('this.*, ul.name_level');
			}
			$this->db->from($this->table.' this');
			$this->db->join('users_level ul', 'ul.id = this.users_level_id', 'left');
			$this->model->where('this.id', $this->get('id'));
			$this->model->where('this.users_level_id', $this->get('users_level_id'));
			$this->model->where('this.status', $this->get('status'));
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
            if ($value->allow_edit and $access_edit) {
            	$opsi .= "<a href='".site_url()."akun/login_as/".$id."/Users' class='btn btn-xs btn-primary waves-effect'>Login As</a>";
            }
            $result['data'][$key] = array(
            	'id' => $this->model->select_data($value->id),
                'name_user' => $this->model->select_data($value->name_user),
                'email' => $this->model->select_data($value->email),
                'name_level' => $this->model->select_data($value->name_level),
                'status' => $this->model->select_data($value->status),
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
			'name_user' => $this->post('name_user'),
			'email' => $this->post('email'),
			'no_hp' => $this->post('no_hp'),
			'password' => $this->post('password'),
			'confirm_password' => $this->post('confirm_password'),
			'users_level_id' => $this->post('users_level_id'),
			'status' => $this->post('status'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('name_user', 'Nama', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|valid_email|max_length[150]');
		$this->form_validation->set_rules('no_hp', 'No-Hp', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[32]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|max_length[32]|matches[password]');
		$this->form_validation->set_rules('users_level_id', 'Level', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->run();
		foreach ($data_validation as $key => $value) {
			if (form_error($key)) {
				$error_validation[$key] = form_error($key);
			}
		}
		if (form_error('email') == null) {
			$this->form_validation->set_rules('email', 'Email', 'callback_email_check');
			$this->form_validation->run();
			if (form_error('email')) {
				$error_validation['email'] = form_error('email');
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
			unset($data_validation['confirm_password']);
			$data = $data_validation;
			foreach ($this->post() as $key => $value) {
				if (!array_key_exists($key, $data) and $key != "confirm_password" and $key != "id") {
					$result['error_validation'][$key] = "The $key are not available";
					$result['error'] = 1;
				}
			}	
			if ($result['error'] == 1) {
				$result['message'] = "Data is not valid";
				$this->response($result, 202);exit;
			}
			if (!empty($_FILES['file']['name'])) {
				$config['upload_path'] = './uploads/users/foto/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['remove_spaces'] = TRUE;
		        $config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('file')){
				    $data['file'] = $this->upload->data("file_name");
			    }else{
			    	$result['error'] = 4;//error upload file
			    	$result['message'] = $this->upload->display_errors();
			    	$result['status_code'] = 202;
			    	$this->response($result, $result['status_code']);exit;
			    }
			}
			$data['id'] = $this->model->GenerateString(32);
			$data['username'] = $this->model->post("email");
			$data['password'] = password_hash($this->post('password'), PASSWORD_BCRYPT);
			$data['created_by'] = $this->model->BaseFieldBy();
			$data['created_date'] = $this->model->DateTime();
			if ($this->db->insert($this->table, $data)) {
				// $this->model->CreateLog($this->module, "Tambah data pada id = ".$data['id']);
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
		$file_unlink = false;
		$status_validation = "";
		$error_validation = [];
		if (!$this->model->CheckAllowAccess($this->kode_menu, "edit")) {
			$result['error'] = 6;
			$result['message'] = "Not allowed to edit";
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$data_validation = array(
			'name_user' => input($this->post('name_user')),
			'email' => input($this->post('email')),
			'no_hp' => input($this->post('no_hp')),
			'users_level_id' => $this->post('users_level_id'),
			'status' => input($this->post('status')),
			);
		if (!empty($this->post("password"))) {
			$data_validation['password'] = input($this->post("password"));
			$data_validation['confirm_password'] = input($this->post("confirm_password"));
		}
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('name_user', 'Nama', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|valid_email|max_length[150]');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'trim|required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('users_level_id', 'Level', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|min_length[3]|max_length[50]');
		if (!empty($this->post("password"))) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[32]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|max_length[32]|matches[password]');
		}
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
			$file_last = $myData->row()->file;
			if (form_error('email') == null) {
				$this->form_validation->set_rules('email', 'Email', 'callback_email_check['.$this->post("id").']');
				$this->form_validation->run();
				if (form_error('email')) {
					$error_validation['email'] = form_error('email');
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
						if (!array_key_exists($key, $data) and $key != "id" and $key != "confirm_password" and $key != "password") {
							$result['error_validation'][$key] = "The $key are not available";
							$result['error'] = 1;
						}
					}	
					if ($result['error'] == 1) {
						$result['message'] = "Data is not valid";
						$this->response($result, 202);exit;
					}
					if (!empty($_FILES['file']['name'])) {
						$config['upload_path'] = './uploads/users/foto/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
				        $config['remove_spaces'] = TRUE;
				        $config['encrypt_name'] = TRUE;
				        $config['max_size'] = 2000;
						$this->load->library('upload', $config);
						if ($this->upload->do_upload('file')){
						    $data['file'] = $this->upload->data("file_name");
						    $file_unlink = true;
					    }else{
					    	$result['error'] = 4;//error upload file
					    	$result['message'] = $this->upload->display_errors();
					    	$result['status_code'] = 202;
					    	$this->response($result, $result['status_code']);
					    }
					}
					if (!empty($this->post("password"))) {
						$data['password'] = password_hash($this->post('password'), PASSWORD_BCRYPT);
					}
					$data['username'] = $this->model->post("email");
					$data['last_modified_by'] = $this->model->BaseFieldBy();
					$data['last_modified_date'] = $this->model->DateTime();
					if ($this->db->update($this->table, $data, array('id' => $this->post('id'))) == 1) {
						// $this->model->CreateLog($this->module, "Update data pada id = ".$this->post("id"));
						if ($file_unlink == true and file_exists('./uploads/users/foto/'.$file_last) == true and $file_last != null){
							unlink('./uploads/users/foto/'.$file_last);
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
		$this->form_validation->set_rules('id', 'Id', 'trim|required|min_length[32]|max_length[32]');
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
			$this->form_validation->set_rules('id', 'Id', 'trim|required|min_length[32]|max_length[32]');
			if ($this->form_validation->run() == FALSE) {
				$result['error'] = 1;
				$result['error_validation'] = form_error('id');
				$result['message'] = "Data is not valid";
				$result['status_code'] = 202;
				break;
			} else {		
				if ($this->model->IsDelete($this->table, "id = '$value' and allow_delete = '1' and is_deleted = '0'") == 1) {
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

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */