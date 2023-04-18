<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->Login_model->is_logged_in()) {
			if (!$this->Permission_model->can('admin_users')) {
				return redirect(base_url() . 'admin');
			}
		} else {
			return redirect(base_url() . 'admin');
		}
	}

	public function index()
	{
		$inner_data = [];
		$inner_data['admins'] = $this->db->get_where('admin', ['hidden'=>0]);
		$data['title'] = 'Admin';
		$data['content'] = $this->load->view('admin/admin_users/index', $inner_data, true);
		$this->load->view('admin/master_page', $data);
	}

	public function update($admin_id = null)
	{
		if (empty($admin_id)) {
			return redirect('admin/admin_users');
		}

		if (!is_numeric($admin_id)) {
			return redirect('admin/admin_users');
		}

		$inner_data = [];
		$message = null;
		$error = false;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (!$error && empty($user_data['full_name'])) {
				$message = 'Full name is not valid';
				$error = true;
			}

			if (!$error && empty($user_data['email'])) {
				$message = 'Email is not valid';
				$error = true;
			}

			if (!$error && !filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
				$message = 'Email is not valid';
				$error = true;
			}

			$new_email = $this->db->get_where('admin', ['email' => $user_data['email'], 'id !=' => $admin_id]);

			if (!$error && $new_email->num_rows() > 0) {
				$message = 'This email exist. Please change your email';
				$error = true;
			}

			if (!$error && empty($user_data['phone'])) {
				$message = 'Phone is not valid';
				$error = true;
			}

			if (!$error && empty($user_data['status'])) {
				$message = 'Status is not valid';
				$error = true;
			}

			if (!$error) {
				$final_data = array(
					'full_name' => $user_data['full_name'],
					'email'  => $user_data['email'],
					'phone'  => $user_data['phone'],
					'status' => $user_data['status']
				);

				if (!empty($user_data['password'])) {
					$password = $user_data['password'] . SALT_PASS;
					$final_data['password'] = sha1(md5($password));
				}

				$this->db->where('id', $user_data['id']);
				$this->db->update('admin', $final_data);

				$message = 'Data updated successfully';

				if (!empty($user_data['access']) && is_array($user_data['access'])) {
					$this->db->delete('admin_permission', array('admin_id' => $user_data['id']));
					for ($i = 0; $i < count($user_data['access']); $i++) {
						$access[] = [
							'admin_id' => $user_data['id'],
							'permission_id' => $user_data['access'][$i]
						];
					}

					if (!empty($access)) {
						$this->db->insert_batch('admin_permission', $access);
						$message = 'Data updated successfully';
					}
				}
			}
		}

		$inner_data['message'] = $message;
		$inner_data['error'] = $error;
		$inner_data['admin'] = $this->db->get_where('admin', array('id' => $admin_id));
		$inner_data['all_menu'] = $this->db->get('menu')->result_array();

		$menus = $this->Permission_model->menu_access($admin_id);
		$inner_data['permissions'] = [];
		foreach ($menus as $menu) {
			$inner_data['permissions'][] = $menu['id'];
		}
		$data['title'] = 'Edit Admin';
		$data['content'] = $this->load->view('admin/admin_users/update', $inner_data, true);
		$this->load->view('admin/master_page', $data);
	}

	public function delete($admin_id = null)
	{
		if (empty($admin_id)) {
			return redirect('admin/admin_users');
		}

		if (!is_numeric($admin_id)) {
			return redirect('admin/admin_users');
		}

		$final_data = array(
			'hidden' => 1
		);

		$this->db->where('id', $admin_id);
		$this->db->update('admin', $final_data);

		return redirect('admin/admin_users');

	}


	public function insert()
	{
		$inner_data = [];
		$message = null;
		$error = false;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (!$error && empty($user_data['full_name'])) {
				$message = 'Full name is not valid';
				$error = true;
			} else {
				$inner_data['full_name_session'] = $user_data['full_name'];
			}

			if (!$error && empty($user_data['email'])) {
				$message = 'Email is not valid';
				$error = true;
			} else {
				$inner_data['email_session'] = $user_data['email'];
			}

			if (!$error && !filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
				$message = 'Email is not valid';
				$error = true;
			} else {
				$inner_data['email_session'] = $user_data['email'];
			}

			if (!$error && $this->exist_user($user_data['email'])) {
				$message = 'This email exist. Please change your email';
				$error = true;
			} else {
				$inner_data['email_session'] = $user_data['email'];
			}

			if (!$error && empty($user_data['phone'])) {
				$message = 'Phone is not valid';
				$error = true;
			} else {
				$inner_data['phone_session'] = $user_data['phone'];
			}

			if (!$error && isset($user_data['status']) && empty($user_data['status'])) {
				$message = 'Status is not valid';
				$error = true;
			} else {
				$inner_data['status_session'] = $user_data['status'];
			}

			if (!$error) {

				$password = $user_data['phone'] . SALT_PASS;
				$password_hashed = sha1(md5($password));

				$final_data = array(
					'full_name' => $user_data['full_name'],
					'email'  => $user_data['email'],
					'password'  => $password_hashed,
					'image'  => 'user.png',
					'phone'  => $user_data['phone'],
					'status' => $user_data['status']
				);

				$this->db->insert('admin', $final_data);
				$user_id = $this->db->insert_id();

				$message = 'User added successfully';

				if (!empty($user_data['access']) && is_array($user_data['access'])) {
					for ($i = 0; $i < count($user_data['access']); $i++) {
						$access[] = [
							'admin_id' => $user_id,
							'permission_id' => $user_data['access'][$i]
						];

						$inner_data['access_session'][] = $user_data['access'][$i];
					}

					if (!empty($access)) {
						$this->db->insert_batch('admin_permission', $access);
						$message = 'User added successfully';
					}
				}
			}
		}

		$inner_data['message'] = $message;
		$inner_data['error'] = $error;
		$inner_data['all_menu'] = $this->db->get('menu')->result_array();

		$data['title'] = 'Insert New User';
		$data['content'] = $this->load->view('admin/admin_users/insert', $inner_data, true);
		$this->load->view('admin/master_page', $data);
	}

	private function exist_user($email = null)
	{
		if (!empty($email)) {
			$query = $this->db->get_where('admin', ['email' => $email]);
			if ($query->num_rows() > 0) {
				return true;
			}
		}

		return false;
	}
}
