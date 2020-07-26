<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_access_model extends CI_Model {
	
	var $table = 'users_access';
	var $column_order = array(null, 'kode_menu', 'name_menu', 'url', 'sequence', 'icon', null,  null, null, null, null);
	var $column_search = array('kode_menu', 'name_menu', 'url', 'sequence', 'icon');
	var $order_default = "um.sequence asc";

	private function _get_datatables_query()
	{
		$users_level_id = $this->model->post("users_level_id");
		$this->db->select("
			um.id, um.kode_menu, um.name_menu, um.url, um.sequence, um.icon,
			COUNT(CASE WHEN `access` = 'show' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xshow, 
			COUNT(CASE WHEN `access` = 'add' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xadd,
			COUNT(CASE WHEN `access` = 'edit' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xedit,
			COUNT(CASE WHEN `access` = 'detail' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xdetail,
			COUNT(CASE WHEN `access` = 'delete' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xdelete,
			");
		$this->db->from('users_menu um');
		$this->db->join($this->table.' this', 'this.users_menu_id = um.id', 'left');
		$this->db->where('um.rel', '0');
		$this->db->where('um.is_deleted', 0);
		$this->db->group_by('um.id');
		if (empty($users_level_id)) {
			$this->db->where('um.id', '');
		}
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, input($_POST['search']['value']));
				}else{
					$this->db->or_like($item, input($_POST['search']['value']));
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
		$this->db->where('guard_name', 'web');
		$this->db->where('is_deleted', 0);
		return $this->db->get_where($this->table, "id = '$id'");
	}

	function GetAll()
	{
		$this->db->where('guard_name', 'web');
		$this->db->where('is_deleted', 0);
		$this->db->where('companyId', $this->model->GetSes('companyId'));
		return $this->db->get($this->table);
	}
	
	function GetMenuSub($parent, $role_id)
	{
		$users_level_id = $role_id;
		$this->db->select("
			um.id, um.kode_menu, um.name_menu, um.url, um.sequence, um.icon,
			COUNT(CASE WHEN `access` = 'show' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xshow, 
			COUNT(CASE WHEN `access` = 'add' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xadd,
			COUNT(CASE WHEN `access` = 'edit' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xedit,
			COUNT(CASE WHEN `access` = 'detail' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xdetail,
			COUNT(CASE WHEN `access` = 'delete' AND this.`users_level_id` = '$users_level_id' THEN 1 END) AS xdelete,
			");
		$this->db->from('users_menu um');
		$this->db->join($this->table.' this', 'this.users_menu_id = um.id', 'left');
		$this->db->where('um.rel', $parent);
		$this->db->where('um.is_deleted', 0);
		$this->db->group_by('um.id');
		$this->db->order_by('um.sequence', 'asc');
		if (empty($role_id)) {
			$this->db->where('um.id', '');
		}
		return $this->db->get();
	}

	function GetListPermissionId($name='')
	{
		$this->db->select('id');
		$this->db->from('permissions');
		$this->db->where('is_deleted', 0);
		$this->db->where('guard_name', 'web');
		$this->db->where('name', $name);
		$this->db->where('companyId', $this->model->GetSes("companyId"));
		$data = $this->db->get();
		$listId = array();
		foreach ($data->result() as $value) {
			$listId[] = $value->id;
		}
		return $listId;
	}

}

/* End of file Users_menu_model.php */
/* Location: ./application/models/Users_menu_model.php */