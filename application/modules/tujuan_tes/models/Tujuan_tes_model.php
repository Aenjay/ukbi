<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan_tes_model extends CI_Model {

	var $table = 'ref_tujuan_tes';
	var $column_order = array(null,null, null, 'nama_tujuan_tes');
	var $column_search = array('nama_tujuan_tes');
	var $order_default = "nama_tujuan_tes asc";

	private function _get_datatables_query()
	{
		$this->db->select('id, nama_tujuan_tes, allow_detail, allow_edit, allow_delete');
		$this->db->from($this->table." this");
		$this->db->where('this.is_deleted', 0);
		$this->model->like('this.nama_tujuan_tes', $this->model->post('nama_tujuan_tes'));
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