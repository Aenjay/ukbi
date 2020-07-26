<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_menu_model extends CI_Model {
	
	var $table = 'users_menu';
	var $column_order = array(null, null, null, 'kode_menu', 'name_menu', 'url','sequence','icon', null);
	var $column_search = array('kode_menu', 'name_menu', 'url','sequence','icon');
	var $order_default = "sequence asc";

	private function _get_datatables_query()
	{
		$this->db->select('id, kode_menu, name_menu, url, sequence, icon, allow_detail, allow_edit, allow_delete');
		$this->db->from($this->table);
		$this->db->where('is_deleted', 0);
		$this->db->where('rel', 0);
		$this->model->like('kode_menu', $this->model->post('kode_menu'));
		$this->model->like('name_menu', $this->model->post('name_menu'));
		$this->model->like('url', $this->model->post('url'));
		$this->model->like('sequence', $this->model->post('sequence'));
		$this->model->like('icon', $this->model->post('icon'));
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
		return $this->db->count_all_results();
	}

	function GetById($id='')
	{
		$id = input($id);
		return $this->db->get_where($this->table, "id = '$id' and is_deleted = 0");
	}

	function GetAll()
	{
		$this->db->where('is_deleted', 0);
		return $this->db->get($this->table);
	}
	
	function GetMenuSub($rel)
	{
		$this->db->select('*');
		$this->db->order_by('sequence', 'asc');
		return $this->db->get_where($this->table, "is_deleted = '0' and rel = '$rel'");
	}

}

/* End of file Users_menu_model.php */
/* Location: ./application/models/Users_menu_model.php */