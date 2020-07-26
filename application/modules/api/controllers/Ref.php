<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Ref extends Rest_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
		$this->form_validation->set_error_delimiters('',''); 
    }

	public function jenisTes_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_jenis_tes');
			}
			$this->db->from('ref_jenis_tes this');
			$this->model->where('this.id', $this->get('id'));
			$this->db->where('this.is_deleted', 0);
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$this->db->order_by('nama_jenis_tes', 'asc');
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

	public function jenisPeserta_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_jenis_peserta');
			}
			$this->db->from('ref_jenis_peserta this');
			$this->model->where('this.id', $this->get('id'));
			$this->db->where('this.is_deleted', 0);
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$this->db->order_by('nama_jenis_peserta', 'asc');
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

	public function tujuanTes_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_tujuan_tes');
			}
			$this->db->from('ref_tujuan_tes this');
			$this->model->where('this.id', $this->get('id'));
			$this->db->where('this.is_deleted', 0);
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$this->db->order_by('nama_tujuan_tes', 'asc');
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

	public function lokasiUjian_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_lokasi_ujian');
			}
			$this->db->from('ref_lokasi_ujian this');
			$this->model->where('this.id', $this->get('id'));
			$this->db->where('this.is_deleted', 0);
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$this->db->order_by('nama_lokasi_ujian', 'asc');
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

	public function country_get()
	{
		$this->model->check_is_ajax();
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'country_id' => $this->get('country_id'),
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
		$this->form_validation->set_rules('country_id', 'Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('count(this.country_id) as x');
			}else{
				$this->db->select('this.country_id, name');
			}
			$this->db->from('country this');
			$this->model->where('this.country_id', $this->get('country_id'));
			if ($this->get("limit") != null) {
				$this->db->limit($this->get("limit"));
			}
			$this->db->order_by('name', 'asc');
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

	public function dimensi_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, this.nama_dimensi');
			}
			$this->db->from('dimensi this');
			$this->model->where('this.id', $this->get('id'));
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

	public function jadwalUjian_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'lokasi_ujian_id' => $this->get("lokasi_ujian_id"),
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
		$this->form_validation->set_rules('lokasi_ujian_id', 'Lokasi Ujian Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('this.id, this.tanggal, keterangan, nama_lokasi_ujian');
			}
			$this->db->from('jadwal_ujian this');
			$this->db->join('ref_lokasi_ujian lu', 'lu.id = this.lokasi_ujian_id', 'left');
			$this->model->where('this.id', $this->get('id'));
			$this->model->where("this.lokasi_ujian_id", $this->get("lokasi_ujian_id"));
			$this->db->where('this.is_deleted', 0);
			$this->db->where('lu.is_deleted', 0);
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
			if ($data->num_rows() > 0) {
				foreach ($data->result() as $key => $value) {
					$result['data'][$key]->tanggal = set_date($value->tanggal, "d, F Y");	
				}
			}
		}
		$this->response($result, $result['status_code']);
	}

	public function jenjangPendidikan_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_jenjang_pendidikan');
			}
			$this->db->from('ref_jenjang_pendidikan this');
			$this->model->where('this.id', $this->get('id'));
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

	public function provinsi_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
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
				$this->db->select('this.id, nama_provinsi');
			}
			$this->db->from('provinsi this');
			$this->model->where('this.id', $this->get('id'));
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

	public function kota_get()
	{
		$result['error'] = 3;
		$result['message'] = "Error Method";
		$result['status_code'] = 203;
		$status_validation = false;
		$data_validation = array(
			'id' => $this->get('id'),
			'provinsi_id' => $this->get("provinsi_id"),
			'limit' => $this->get("limit"),
			'count' => $this->get("count"), 
			);
		foreach ($this->get() as $key => $value) {
			if (!array_key_exists($key, $data_validation) and $key != "token") {
				$result['error_validation'][$key] = "The $key are not available";
				$result['error'] = 2;
				$result['message'] = "Data is not valid";
				$this->response($result, 410);
			}
		}			
		$this->form_validation->set_data($data_validation);
		$this->form_validation->set_rules('id', 'Id', 'trim|min_length[1]|max_length[11]|numeric');
		$this->form_validation->set_rules('provinsi_id', 'Provinsi Id', 'trim|max_length[11]|numeric');
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
				$this->db->select('this.*, p.nama_provinsi');
			}
			$this->db->from("kota this");
			$this->db->join('provinsi p', 'p.id = this.provinsi_id', 'left');
			$this->model->where("this.id", $this->get("id"));
			$this->model->where("this.provinsi_id", $this->get("provinsi_id"));
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

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */