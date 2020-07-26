<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class My404 extends Rest_Controller
{
	
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->form_validation->set_error_delimiters('', '');
    }

    public function index()
    {
        $this->load->view("template/404");
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */