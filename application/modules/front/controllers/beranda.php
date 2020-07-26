<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Beranda extends Rest_Controller {
	
	function __construct($config = 'rest') {
        parent::__construct($config);
		$this->form_validation->set_error_delimiters('','');  
    }

	public function index_get()
	{
		$data = array(
			'url' => '',
			'title' => '',
			'module' => '',
			'content' => 'front/front-beranda-data',
		);
		$this->load->view("template/frontend/template", $data);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */