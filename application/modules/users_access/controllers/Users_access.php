<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Users_access extends REST_Controller {

	var $table = "users_access";
	var $kode_menu = "M999004";
	var $menu;

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('Users_access_model', 'm');
		$this->form_validation->set_error_delimiters('','');
		$this->model->CheckAuthorize();
		$this->menu = $this->model->GetMenu($this->kode_menu);     
    }

	public function index_get()
	{
		$data = array(
			'first_menu' => "M999",
			'second_menu' => $this->kode_menu,
			'third_menu' => '',
			'kode_menu' => $this->kode_menu,
			'url' => $this->menu->url,
			'title' => $this->menu->name_menu,
			'module' => $this->menu->name_menu,
			'content' => 'users_access/users-access-data',
			'listUsersLevel' => $this->model->GetSelect("id, name_level", "users_level", "is_deleted = '0' order by sequence asc"),
		);
		$this->load->view('template/backend/template', $data);	
	}

	public function table_post()
	{
		$this->model->check_is_ajax();
        $data = array();
        $data_result = $this->m->get_datatables();
        $users_level_id = $this->model->post('users_level_id');
        foreach ($data_result as $d) { 
            $row = array();
            $row["id"] = $this->model->select_data($d->id);
            $row["kode_menu"] = $this->model->select_data($d->kode_menu);
            $row["name_menu"] = $this->model->select_data($d->name_menu);
            $row["url"] = $this->model->select_data($d->url);
            $row["sequence"] = $this->model->select_data($d->sequence);
	    	$row['icon'] = "<center><i class='fa fa-$d->icon'></i></center>";
        	$row["show"] = $d->xshow;
        	$row["add"] = $d->xadd;
        	$row["edit"] = $d->xedit;
        	$row["detail"] = $d->xdetail;
        	$row["delete"] = $d->xdelete;
            $data[] = $row;
	        foreach ($this->m->GetMenuSub($d->id, $users_level_id)->result() as $s) {  
	            $row = array();
	            $row["id"] = $this->model->select_data($s->id);
	            $row["kode_menu"] = $this->model->select_data($s->kode_menu);
	            $row["name_menu"] = "=== ".$this->model->select_data($s->name_menu);
	            $row["url"] = $this->model->select_data($s->url);
	            $row["sequence"] = $this->model->select_data($s->sequence);
		    	$row['icon'] = "<center><i class='fa fa-$s->icon'></i></center>";
	        	$row["show"] = $s->xshow;
	        	$row["add"] = $s->xadd;
	        	$row["edit"] = $s->xedit;
	        	$row["detail"] = $s->xdetail;
	        	$row["delete"] = $s->xdelete;
	            $data[] = $row;
		        foreach ($this->m->GetMenuSub($s->id, $users_level_id)->result() as $m) {  
		            $row = array();
		            $row["id"] = $this->model->select_data($m->id);
		            $row["kode_menu"] = $this->model->select_data($m->kode_menu);
		            $row["name_menu"] = "====== ".$this->model->select_data($m->name_menu);
		            $row["url"] = $this->model->select_data($m->url);
		            $row["sequence"] = $this->model->select_data($m->sequence);
			    	$row['icon'] = "<center><i class='fa fa-$m->icon'></i></center>";
		        	$row["show"] = $m->xshow;
		        	$row["add"] = $m->xadd;
		        	$row["edit"] = $m->xedit;
		        	$row["detail"] = $m->xdetail;
		        	$row["delete"] = $m->xdelete;
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

	public function save_post()
	{
		$this->model->check_is_ajax();
		if (!$this->model->CheckAllowAccess($this->kode_menu, "edit")) {
			$result['error'] = 6;
			$result['message'] = lang('access_denied');
			$result['status_code'] = 201;
			$this->response($result, $result['status_code']);exit;
		}
		$result['error'] = 3;
		$result['message'] = lang('error_method');
		$result['status_code'] = 203;
		$users_level_id = $this->model->post('users_level_id');
		$data_validation = array(
			'users_level_id' => $this->post('users_level_id'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('users_level_id', 'Users Level Id', 'trim|required|max_length[11]|numeric');
		if ($this->form_validation->run() ==  FALSE) {
			$result['error'] = 1;
			$result['error_validation']['users_level_id'] = form_error("users_level_id");
			$result['message'] = lang('invalid_data');
			$result['status_code'] = 202;
		}else{
			if ($this->db->get_where("users_level", "id = '$users_level_id' and is_deleted = 0")->num_rows() > 0) {
				if (!empty($this->post('access_show'))) {

					$this->db->where('users_level_id', $users_level_id);
					$this->db->where_not_in("users_menu_id", $this->post('access_show'));
					$this->db->where('access', "show");
					$this->db->delete($this->table);

					foreach ($this->post('access_show') as $value) {
						$check = $this->model->GetSelect("*", $this->table, "users_level_id = '$users_level_id' and users_menu_id = '$value' and access = 'show'");
						if ($check->num_rows() == 0) {
							$this->db->insert($this->table, ['users_level_id' => $users_level_id, 'users_menu_id' => $value, 'access' => "show"]);
						}
					}

				}else{
					$this->db->where('users_level_id', $users_level_id);
					$this->db->where('access', 'show');
					$this->db->delete($this->table);
				}

				if (!empty($this->post('access_add'))) {

					$this->db->where('users_level_id', $users_level_id);
					$this->db->where_not_in("users_menu_id", $this->post('access_add'));
					$this->db->where('access', "add");
					$this->db->delete($this->table);

					foreach ($this->post('access_add') as $value) {
						$check = $this->model->GetSelect("*", $this->table, "users_level_id = '$users_level_id' and users_menu_id = '$value' and access = 'add'");
						if ($check->num_rows() == 0) {
							$this->db->insert($this->table, ['users_level_id' => $users_level_id, 'users_menu_id' => $value, 'access' => "add"]);
						}
					}

				}else{
					$this->db->where('users_level_id', $users_level_id);
					$this->db->where('access', 'add');
					$this->db->delete($this->table);
				}

				if (!empty($this->post('access_edit'))) {

					$this->db->where('users_level_id', $users_level_id);
					$this->db->where_not_in("users_menu_id", $this->post('access_edit'));
					$this->db->where('access', "edit");
					$this->db->delete($this->table);

					foreach ($this->post('access_edit') as $value) {
						$check = $this->model->GetSelect("*", $this->table, "users_level_id = '$users_level_id' and users_menu_id = '$value' and access = 'edit'");
						if ($check->num_rows() == 0) {
							$this->db->insert($this->table, ['users_level_id' => $users_level_id, 'users_menu_id' => $value, 'access' => "edit"]);
						}
					}

				}else{
					$this->db->where('users_level_id', $users_level_id);
					$this->db->where('access', 'edit');
					$this->db->delete($this->table);
				}

				if (!empty($this->post('access_detail'))) {

					$this->db->where('users_level_id', $users_level_id);
					$this->db->where_not_in("users_menu_id", $this->post('access_detail'));
					$this->db->where('access', "detail");
					$this->db->delete($this->table);

					foreach ($this->post('access_detail') as $value) {
						$check = $this->model->GetSelect("*", $this->table, "users_level_id = '$users_level_id' and users_menu_id = '$value' and access = 'detail'");
						if ($check->num_rows() == 0) {
							$this->db->insert($this->table, ['users_level_id' => $users_level_id, 'users_menu_id' => $value, 'access' => "detail"]);
						}
					}

				}else{
					$this->db->where('users_level_id', $users_level_id);
					$this->db->where('access', 'detail');
					$this->db->delete($this->table);
				}

				if (!empty($this->post('access_delete'))) {

					$this->db->where('users_level_id', $users_level_id);
					$this->db->where_not_in("users_menu_id", $this->post('access_delete'));
					$this->db->where('access', "delete");
					$this->db->delete($this->table);

					foreach ($this->post('access_delete') as $value) {
						$check = $this->model->GetSelect("*", $this->table, "users_level_id = '$users_level_id' and users_menu_id = '$value' and access = 'delete'");
						if ($check->num_rows() == 0) {
							$this->db->insert($this->table, ['users_level_id' => $users_level_id, 'users_menu_id' => $value, 'access' => "delete"]);
						}
					}

				}else{
					$this->db->where('users_level_id', $users_level_id);
					$this->db->where('access', 'delete');
					$this->db->delete($this->table);
				}

				$result['error'] = 0;
				$result['message'] = lang('success_save');
				$result['status_code'] = 201;
			}else{
				$result['error'] = 1;
				$result['message'] = lang('invalid_data');
				$result['status_code'] = 202;
			}
		}		
		$this->response($result, $result['status_code']);	
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */