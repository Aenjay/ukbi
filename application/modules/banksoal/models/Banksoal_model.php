<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banksoal_model extends CI_Model {

	var $table = 'banksoal';
	var $column_order = array(null, null, null, 'nis', 'jenis_soal', 'soal');
	var $column_search = array('nis', 'jenis_soal', 'soal');
	var $order_default = "nis asc";

	private function _get_datatables_query()
	{
		$this->db->select('this.id, nis, jenis_soal, soal, soal_x, soal_y, this.allow_detail, this.allow_edit, this.allow_delete');
		$this->db->from($this->table." this");
		$this->db->where('this.is_deleted', 0);
		$this->model->like('nis', $this->model->post('nis'));
		$this->model->like('jenis_soal', $this->model->post('jenis_soal'));
		$this->model->like('soal', $this->model->post('soal'));
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}else{
					$this->db->or_like($item, $_POST['search']['value']);
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
		return $this->db->get_where($this->table, "id = '".input($id)."' and is_deleted = 0");
	}

}

/* End of file model_system_logs.php */
/* Location: ./application/models/model_system_logs.php */
