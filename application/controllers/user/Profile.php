<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile  extends CI_Controller
{

	private $user_info;

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_info')) {
			return redirect('user/login');
		} else {
			$this->user_info = $this->session->userdata('user_info');
		}
	}

	public function index()
	{
		$inner_data = [];

		$inner_data['user_data'] = $this->db->get_where('users', ['id' => $this->user_info->id])->row();
		$inner_data['languages'] = $this->db->get('languages');
		$data['content'] = $this->load->view('user/profile/index', $inner_data, true);
		$this->load->view('user/master_page', $data);
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
			}

			if (!$error && empty($user_data['email'])) {
				$message = 'Email is not valid';
				$error = true;
			}

			if (!$error && !filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)) {
				$message = 'Email is not valid';
				$error = true;
			}

			$new_email = $this->db->get_where('users', ['email' => $user_data['email'], 'id !=' => $this->user_info->id]);

			if (!$error && $new_email->num_rows() > 0) {
				$message = 'This email exist. Please change your email';
				$error = true;
			}

			if (!$error && empty($user_data['phone'])) {
				$message = 'Phone is not valid';
				$error = true;
			}

			if (!$error && !is_numeric($user_data['phone'])) {
				$message = 'Phone is not valid';
				$error = true;
			}

			$final_data = [
				'full_name'  => $user_data['full_name'],
				'email'  => $user_data['email'],
				'phone'  => $user_data['phone'],
				'birth_date'  => $user_data['birth_date'],
				'gender'  => $user_data['gender'],
				'address'  => $user_data['address'],
				'user_language'  => $user_data['user_language'],
				'updated'  => date('Y-m-d H:i:s'),
			];

			if (!$error && isset($_FILES['image_input']) && $_FILES['image_input']['size'] != 0) {
				$file = explode(".", $_FILES["image_input"]["name"]);
				$new_name =  'user-image-' . $this->user_info->id . '-' . time();

				$white_list = array('jpg', 'png', 'jpeg');

				if (!in_array(end($file), $white_list)) {
					$message = 'This image is not valid. please choose (png, jpg) format';
					$error = true;
				} else {
					$new_name = $new_name . '.' . end($file);

					$file_place = 'assets/img/user/' . $new_name;
					if (move_uploaded_file($_FILES['image_input']['tmp_name'], $file_place)) {
						$error = false;
						$final_data['image'] = $new_name;
					} else {
						$message = 'Problem in upload image.';
						$error = true;
					}
				}
			}

			if (!$error) {
				$this->db->where('id', $this->user_info->id);
				$query = $this->db->update('users', $final_data);
				if ($query) {
					$this->session->set_userdata('update_profile_successfully', 'Your data updated');
					$this->session->mark_as_flash(['update_profile_successfully']);
					$user_info_updated = $this->db->get_where('users', ['id' => $this->user_info->id]);
					$this->session->set_userdata('user_info', $user_info_updated->row());
					$error = false;
				} else {
					$message = 'Problem in updating';
					$error = true;
				}
			}
		}

		$this->session->set_userdata('update_profile', $message);
		$this->session->set_userdata('error_profile', $error);
		$this->session->mark_as_flash(['update_profile', 'error_profile']);

		return redirect('user/profile');
	}
}
