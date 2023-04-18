<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$inner_data = [];
		$message = null;
		$error = false;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (!$error && empty($user_data['email'])) {
				$message = 'Email is not valid';
				$error = true;
			} else {
				$inner_data['email_session'] = $user_data['email'];
			}

			if (!$error && !filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
				$message = 'Email is not valid';
				$error = true;
			}

			if (!$error && empty($user_data['password'])) {
				$message = 'Password is not valid';
				$error = true;
			}

			if (!$error) {
				$password = $user_data['password'] . SALT_PASS;
				$password_hash = sha1(md5($password));

				$user_info = $this->db->get_where('users', ['email' => $user_data['email'], 'password' => $password_hash, 'status' => 'active']);
				if ($user_info->num_rows() == 1) {
					$this->session->set_userdata('user_info', $user_info->row());
					$site_lang = $this->Language_model->get_user_language($user_info->row()->user_language);
					$this->session->set_userdata('site_lang', strtolower($site_lang->row()->language_name));

					return redirect('user/home');
				} else {
					$message = 'User is not exist';
					$error = true;
				}
			}
		}

		$inner_data['message'] = $message;
		$inner_data['error'] = $error;

		$data['content'] = $this->load->view('user/log/login', $inner_data, true);
		$this->load->view('user/log/index', $data);
	}

	public function sign_up()
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
			}

			$new_email = $this->db->get_where('users', ['email' => $user_data['email']]);

			if (!$error && $new_email->num_rows() > 0) {
				$message = 'This email exist. Please change your email';
				$error = true;
			}

			if (!$error && empty($user_data['phone'])) {
				$message = 'Phone is not valid';
				$error = true;
			} else {
				$inner_data['phone_session'] = $user_data['phone'];
			}

			if (!$error && empty($user_data['password'])) {
				$message = 'Password is not valid';
				$error = true;
			}

			if (!$error && empty($user_data['confirm_password'])) {
				$message = 'Confirm password is not valid';
				$error = true;
			}

			$password_hash = md5($user_data['password']);
			$confirm_password_hash = md5($user_data['confirm_password']);

			if (!$error && ($password_hash != $confirm_password_hash)) {
				$message = 'Password and Confirm password are not the same';
				$error = true;
			}

			if (!$error) {
				$final_data = array(
					'full_name' => $user_data['full_name'],
					'email'  => $user_data['email'],
					'phone'  => $user_data['phone'],
					'user_language'  => $user_data['user_language']
				);

				if (!empty($user_data['password'])) {
					$password = $user_data['password'] . SALT_PASS;
					$final_data['password'] = sha1(md5($password));
				}
				$query = $this->db->insert('users', $final_data);

				if ($query) {
					$user_id = $this->db->insert_id();
					$user_info = $this->db->get_where('users', ['id' => $user_id]);
					$this->session->set_userdata('user_info', $user_info->row());
					$this->session->set_userdata('sign_up', 1);
					$site_lang = $this->Language_model->get_user_language($user_info->row()->user_language);
					$this->session->set_userdata('site_lang', strtolower($site_lang->row()->language_name));

					return redirect('user/home');
				} else {
					$error = true;
					$message = 'Problme in sign up. Please try again';
				}
			}
		}

		$inner_data['message'] = $message;
		$inner_data['error'] = $error;

		$data['content'] = $this->load->view('user/log/sign_up', $inner_data, true);
		$this->load->view('user/log/index', $data);
	}

	public function steps()
	{
		$data['content'] = $this->load->view('user/log/steps', NULL, true);
		$this->load->view('user/log/index', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user_info');
		return redirect('home');
	}
}
