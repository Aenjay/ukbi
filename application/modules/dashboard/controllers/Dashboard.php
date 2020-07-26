<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Dashboard extends Rest_Controller {
	
	var $kode_menu = "M001";

	function __construct($config = 'rest') {
        parent::__construct($config);
		$this->form_validation->set_error_delimiters('','');  
		$this->model->CheckAuthorize();
    }

	public function index_get()
	{
		$data = array(
			'first_menu' => $this->kode_menu,
			'second_menu' => '',
			'third_menu' => '',
			'kode_menu' => $this->kode_menu,
			'url' => "dashboard",
			'title' => 'Dashboard',
			'module' => 'Dashboard',
			'content' => 'dashboard/dashboard-data',
		);
		$this->load->view("template/backend/template", $data);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */