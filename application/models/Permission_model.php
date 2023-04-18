<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permission_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function menu($user_id = NULL)
	{

		if (!$this->Login_model->is_logged_in())
			return false;

		if ($user_id == NULL)
			$user_id = $this->user_id();

		$query = $this->db->query("SELECT * FROM admin_permission WHERE admin_id = ?", array($user_id));
		if (!empty($query)) {
			$menu_list = [];
			foreach ($query->result_array() as $item) {
				$menu = $this->db->get_where('menu', array('id' => $item['permission_id']));
				$menu_list[] = [
					'id' => $menu->row()->id,
					'menu_name' => $menu->row()->menu_name,
					'title' => $menu->row()->title,
					'icon' => $menu->row()->icon
				];
			}

			return $menu_list;
		}

		return false;
	}

	public function user_id($user_id = NULL)
	{

		if ($user_id == NULL) {
			$user_id = $this->session->userdata('user_id');
		}

		$user = $this->get_user($user_id);
		if (!$user)
			return 0;

		return $user['id'];
	}

	public function get_user($user_id = NULL)
	{

		if ($user_id == NULL) {
			$user_id = $this->session->userdata('user_id');
		}

		$query = $this->db->query('SELECT * FROM admin WHERE  id = ? LIMIT 1', array($user_id));

		if ($query->num_rows() == 0)
			return false;

		return $query->row_array();
	}

	public function can($permission_name = null, $admin_id = null)
	{
		if ($admin_id == null) {
			$admin_id = $this->user_id();
		}

		if (empty($permission_name)) {
			return false;
		}

		$permission = $this->db->get_where('menu', ['menu_name' => $permission_name]);
		if ($permission->num_rows() == 1) {
			$query = $this->db->get_where('admin_permission', ['admin_id' => $admin_id, 'permission_id' => $permission->row()->id]);

			if ($query->num_rows() == 1)
				return true;
		}

		return false;;
	}

	public function menu_access($user_id = NULL)
	{
		if ($user_id == NULL)
			return false;

		$query = $this->db->query("SELECT * FROM admin_permission WHERE admin_id = ?", array($user_id));
		if (!empty($query)) {
			$menu_list = [];
			foreach ($query->result_array() as $item) {
				$menu = $this->db->get_where('menu', array('id' => $item['permission_id']));
				$menu_list[] = [
					'id' => $menu->row()->id,
					'menu_name' => $menu->row()->menu_name,
					'title' => $menu->row()->title,
					'icon' => $menu->row()->icon
				];
			}

			return $menu_list;
		}

		return false;
	}
}
