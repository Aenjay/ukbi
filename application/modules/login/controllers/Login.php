<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Login extends REST_Controller {

	var $table = "users";
	var $url = "login";

	function __construct($config = 'rest') {
        parent::__construct($config);
		$this->form_validation->set_error_delimiters('','');   
    }

	public function index_get()
	{
		$this->session->unset_userdata('ukbi_auth_key');   	
		$this->session->unset_userdata('ukbi_auth_id');    	
		$this->session->unset_userdata('ukbi_auth_id_old');    	
		$this->session->unset_userdata('ukbi_auth_name');    	
		$this->session->unset_userdata('ukbi_auth_email');
		$this->session->unset_userdata('ukbi_auth_users_level_id');
		$this->session->unset_userdata('ukbi_auth_login_as');
		$this->session->unset_userdata('ukbi_auth_is_user');
		$this->session->unset_userdata('ukbi_auth_is_user_old');
		$data = array(
			'module' => 'Login'
			);
		$this->load->view("login-data", $data);
	}

	function index_post()
	{
		// $this->model->check_is_ajax();
		$result = array();
		$result['error'] = 0;
		$result['message'] = lang('error_method');
		$result['status_code'] = 202;
		$email = $this->model->post("username");
		$password = $this->model->post("password");
		$captcha = strtoupper(input($this->post("captcha")));
		$this->db->select('this.id, this.name_user, email, this.users_level_id, ul.name_level, this.password, this.status');
		$this->db->from('users this');
		$this->db->join('users_level ul', 'ul.id = this.users_level_id', 'left');
		$this->db->where('email', $email);
		$check_users = $this->db->get();
		if ($captcha == $this->session->userdata("captchaCode")) {
			if ($check_users->num_rows() > 0 and password_verify($password, $check_users->row()->password)) {
				if ($check_users->row()->status == "Aktif") {
					$set_ses = array(
						'ukbi_auth_key' => $this->model->GenerateString(32),
						'ukbi_auth_id' => $check_users->row()->id,
						'ukbi_auth_name' => $check_users->row()->name_user,
						'ukbi_auth_email' => $check_users->row()->email,
						'ukbi_auth_level' => $check_users->row()->users_level_id,
						'ukbi_auth_level_name' => $check_users->row()->name_level,
						'ukbi_auth_is_user' => 1,
					);
					$this->session->set_userdata($set_ses);	
					$this->session->set_flashdata('success', lang('login_successfully'));
					$result['error'] = 0;
					$result['message'] = lang("login_successfully");
					$result['status_code'] = 202;
				}else{
					$result['error'] = 2;
					$result['message'] = lang('account_not_active');
					$result['status_code'] = 202;
					$this->session->set_flashdata('warning', lang('account_not_active'));
				}
			}else{
				$result['error'] = 2;
				$result['message'] = lang('account_not_registered');
				$result['status_code'] = 202;
			}
		}else{
			$result['error'] = 2;
			$result['message'] = lang('captcha_error');
			$result['status_code'] = 202;
		}
        if (file_exists('./captcha/' . $this->session->userdata('captchaTime') . ".jpg") == 1) {
	        unlink("./captcha/" . $this->session->userdata("captchaTime") . ".jpg");
	    }
		$this->response($result, $result['status_code']);
	}

	public function refresh_captcha_post()
	{
		$this->model->check_is_ajax();
		echo json_encode(array('error' => "0", 'captcha' => $this->model->CreateCaptcha()));
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */