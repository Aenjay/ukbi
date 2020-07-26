<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Pendaftaran extends Rest_Controller {

	var $table = "peserta";
	
	function __construct($config = 'rest') {
        parent::__construct($config);
		$this->form_validation->set_error_delimiters('','');  
    }

	public function captcha_check($value)
	{
		$value = input($value);
		// echo $value.$this->session->userdata('pendaftaran_captchaCode');
		if ($value != $this->session->userdata('pendaftaran_captchaCode') ) {
			$this->form_validation->set_message('captcha_check', "{field} tidak sesuai.");
			return false;
		}else{
			return true;
		}
	}

	function coba_get(){
		echo $this->model->GetNoPendaftaran(1, 1);
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

	public function refresh_captcha_post()
	{
		$this->model->check_is_ajax();

        $this->load->library('antispam');
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            // 'font_path' => './font/timesbd.ttf',
            'img_width' => '150',
            'img_height' => 30,
            'expiration' => 100
        );
        $cap = $this->antispam->get_antispam_image($vals);
        if ($this->session->userdata("pendaftaran_captchaTime") != null) {
            if (file_exists('./captcha/' . $this->session->userdata('pendaftaran_captchaTime') . ".jpg") == 1) {
                unlink("./captcha/" . $this->session->userdata("pendaftaran_captchaTime") . ".jpg");
            }
        }
        $expiration = time() - 100;
        $this->db->delete('captcha', "time = '" . $this->session->userdata("pendaftaran_captchaTime") . "'");
        $this->session->unset_userdata('pendaftaran_captchaCode');
        $this->session->unset_userdata('pendaftaran_captchaTime');
        $this->session->set_userdata('pendaftaran_captchaCode', $cap['word']);
        $this->session->set_userdata('pendaftaran_captchaTime', $cap['time']);
        $this->db->insert('captcha', array('time' => $cap['time'], 'word' => $cap['word']));
		echo json_encode(array('error' => "0", 'captcha' => $cap['image']));
	}

	public function index_get()
	{
		$data = array(
			'url' => '',
			'title' => '',
			'module' => '',
			'content' => 'front/front-pendaftaran-data',
		);
		$this->load->view("template/frontend/template", $data);
	}

	function index_post()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Requests";
		$result['status_code'] = 203;
		$status_validation = "";
		$error_validation = [];
		$data_validation = array(
			'jenis_peserta_id' => $this->post('jenis_peserta_id'),
			'jenis_tes_id' => $this->post('jenis_tes_id'),
			'tujuan_tes_id' => $this->post('tujuan_tes_id'),
			'lokasi_ujian_id' => $this->post('lokasi_ujian_id'),
			'jadwal_ujian_id' => $this->post('jadwal_ujian_id'),
			'nomor_identitas' => $this->post('nomor_identitas'),
			'nama_peserta' => $this->post('nama_peserta'),
			'jenis_kelamin' => $this->post('jenis_kelamin'),
			'tempat_lahir' => $this->post('tempat_lahir'),
			'tanggal_lahir' => $this->post('tanggal_lahir'),
			'country_id' => $this->post('country_id'),
			'provinsi_id' => $this->post('provinsi_id'),
			'kota_id' => $this->post('kota_id'),
			'alamat' => $this->post('alamat'),
			'telp_kode_negara' => $this->post('telp_kode_negara'),
			'telp_nomor' => $this->post('telp_nomor'),
			'jenjang_pendidikan_id' => $this->post('jenjang_pendidikan_id'),
			'pekerjaan' => $this->post('pekerjaan'),
			'instansi' => $this->post('instansi'),
			'bahasa_ibu' => $this->post('bahasa_ibu'),
			'email' => $this->post('email'),
			'password' => $this->post('password'),
			'confirm_password' => $this->post('confirm_password'),
			'captcha' => $this->post('captcha'),
			);
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('jenis_peserta_id', 'Jenis Peserta', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('jenis_tes_id', 'Jenis Tes', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('tujuan_tes_id', 'Tujuan Tes', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('lokasi_ujian_id', 'Lokasi Ujian', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('jadwal_ujian_id', 'Jadwal Ujian Id', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('nomor_identitas', 'Nomor Identitas', 'trim|required');
		$this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('country_id', 'Kewarganegaraan', 'trim|required');
		$this->form_validation->set_rules('provinsi_id', 'Provinsi', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('kota_id', 'Kota', 'trim|required|max_length[11]|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('telp_kode_negara', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('telp_nomor', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('jenjang_pendidikan_id', 'Jenjang Pendidikan', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('instansi', 'Instansi', 'trim|required');
		$this->form_validation->set_rules('bahasa_ibu', 'Bahasa Ibu', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[5]|max_length[32]');
		$this->form_validation->set_rules('confirm_password', 'Konfirmasi Kata Sandi', 'trim|required|min_length[5]|max_length[32]|matches[password]');
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|max_length[6]');
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
		if (form_error('captcha') == null) {
			$this->form_validation->set_rules('captcha', 'Captcha', 'callback_captcha_check');
			$this->form_validation->run();
			if (form_error('captcha')) {
				$error_validation['captcha'] = form_error('captcha');
			}else{
				$status_validation .= "2";
			}
		}
		if ($status_validation != "12" or $this->form_validation->run() == FALSE) {
			$result['error'] = 1;
			$result['error_validation'] = $error_validation;
			$result['message'] = "Data is not valid";
			$result['status_code'] = 202;
		}else{
			unset($data_validation['confirm_password']);
			unset($data_validation['captcha']);
			$data = $data_validation;
			foreach ($this->post() as $key => $value) {
				if (!array_key_exists($key, $data) and $key != "confirm_password" and $key != "id" and $key != "captcha" and $key != "peserta_dimensi") {
					$result['error_validation'][$key] = "The $key are not available";
					$result['error'] = 1;
				}
			}	
			if ($result['error'] == 1) {
				$result['message'] = "Data is not valid";
				$this->response($result, 202);exit;
			}
			if (!empty($_FILES['foto_diri']['name'])) {
				$config['upload_path'] = './uploads/peserta/foto-diri/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['remove_spaces'] = TRUE;
		        $config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto_diri')){
				    $data['foto_diri'] = $this->upload->data("file_name");
			    }else{
			    	$result['error'] = 4;//error upload file
			    	$result['message'] = $this->upload->display_errors();
			    	$result['status_code'] = 202;
			    	$this->response($result, $result['status_code']);exit;
			    }
			}
			if (!empty($_FILES['foto_identitas']['name'])) {
				$config['upload_path'] = './uploads/peserta/foto-identitas/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
		        $config['remove_spaces'] = TRUE;
		        $config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto_identitas')){
				    $data['foto_identitas'] = $this->upload->data("file_name");
			    }else{
			    	$result['error'] = 4;//error upload file
			    	$result['message'] = $this->upload->display_errors();
			    	$result['status_code'] = 202;
			    	$this->response($result, $result['status_code']);exit;
			    }
			}
			if (empty($this->post("peserta_dimensi"))) {
				$result['error'] = 2;
				$result['message'] = "Silahkan pilih sesi";
				$result['status_code'] = 202;
				$this->response($result, $result['status_code']);exit;
			}
			$data['id'] = $this->model->GenerateString(32);
			$data['nopendaftaran'] = $this->model->GetNoPendaftaran($this->post("jenis_peserta_id"), $this->post("tujuan_tes_id"), $this->post("jadwal_ujian_id"));
			$data['password'] = password_hash($this->post('password'), PASSWORD_BCRYPT);
			$data['created_date'] = $this->model->DateTime();
			$data['is_verifikasi'] = 1;
			if ($this->db->insert($this->table, $data)) {
		        if (file_exists('./captcha/' . $this->session->userdata('pendaftaran_captchaTime') . ".jpg") == 1) {
			        unlink("./captcha/" . $this->session->userdata("pendaftaran_captchaTime") . ".jpg");
			    }
			    foreach ($this->post("peserta_dimensi") as $value) {
			    	$this->db->insert('peserta_dimensi', ["peserta_id" => $data['id'], "dimensi_id" => $value]);
			    }
				// $this->model->CreateLog($this->module, "Tambah data pada id = ".$data['id']);
				$result['error'] = 0;
				$result['message'] = "Pendaftaran berhasil dilakukan";
				$result['status_code'] = 201;
				$result['nopendaftaran'] = $data['nopendaftaran'];
			}
		}
		$this->response($result, $result['status_code']);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */