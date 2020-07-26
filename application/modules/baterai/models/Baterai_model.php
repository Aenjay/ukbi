<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baterai_model extends CI_Model {

	var $table = 'baterai';
	var $column_order = array(null,null,null, 'nama_dimensi', 'nama_tingkat', 'nama_baterai', 'karakter_butir', 'teslet', 'jumlah_soal', 'nomor_awal_soal');
	var $column_search = array('nama_dimensi', 'nama_tingkat', 'nama_baterai', 'karakter_butir', 'teslet', 'jumlah_soal', 'nomor_awal_soal');
	var $order_default = "d.sequence, t.sequence, this.sequence, this.id asc";

	private function _get_datatables_query()
	{
		$this->db->select('this.id, d.nama_dimensi, t.nama_tingkat, this.nama_baterai, karakter_butir, teslet, jumlah_soal, nomor_awal_soal, this.allow_detail, this.allow_edit, this.allow_delete');
		$this->db->from($this->table." this");
		$this->db->join('dimensi_tingkat dt', 'dt.id = this.dimensi_tingkat_id', 'left');
		$this->db->join('dimensi d', 'd.id = dt.dimensi_id', 'left');
		$this->db->join('tingkat t', 't.id = dt.tingkat_id', 'left');
		$this->db->where('this.is_deleted', 0);
		$this->db->where('dt.is_deleted', 0);
		$this->db->where('d.is_deleted', 0);
		$this->db->where('t.is_deleted', 0);
		$this->model->like('d.nama_dimensi', $this->model->post('nama_dimensi'));
		$this->model->like('t.nama_tingkat', $this->model->post('nama_tingkat'));
		$this->model->like('this.nama_baterai', $this->model->post('nama_baterai'));
		$this->model->like('this.karakter_butir', $this->model->post('karakter_butir'));
		$this->model->like('this.teslet', $this->model->post('teslet'));
		$this->model->like('this.jumlah_soal', $this->model->post('jumlah_soal'));
		$this->model->like('this.nomor_awal_soal', $this->model->post('nomor_awal_soal'));
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, trim($_POST['search']['value']));
				}else{
					$this->db->or_like($item, trim($_POST['search']['value']));
				}
				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}
		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else if(isset($this->order_default)){
			$this->db->order_by($this->order_default);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all()
	{
		$this->_get_datatables_query();
		return $this->db->count_all_results	();
	}

	function GetAll()
	{
		$this->db->where('is_deleted', 0);
		return $this->db->get($this->table);
	}

	function GetById($id)
	{
		$id = input($id);
		return $this->db->get_where($this->table, "id = '$id' and is_deleted = 0");
	}

}

/* End of file model_system_logs.php */
/* Location: ./application/models/model_system_logs.php */