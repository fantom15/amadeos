<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
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
		$innert_data = [];
		$innert_data['messages'] = $this->db->get_where('message', ['user_id' => $this->user_info->id]);
		$data['content'] = $this->load->view('user/message/index', $innert_data, true);
		$this->load->view('user/master_page', $data);
	}

	public function insert()
	{
		$message = null;
		$error = false;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (!$error && empty($user_data['text_message'])) {
				$message = 'Please write your message';
				$error = true;
			}

			if (!$error) {
				$user_data['user_id'] = $this->user_info->id;
				$query = $this->db->insert('message', $user_data);
				if ($query) {
					$this->session->set_userdata('send_message', true);
					$this->session->mark_as_flash(['send_message']);
					$error = false;
					$message = 'Your message has been sent';
				} else {
					$message = 'Problem in sending message';
					$error = true;
				}
			}
		}

		$this->session->set_userdata('error_session', $error);
		$this->session->set_userdata('message_sesion', $message);
		$this->session->mark_as_flash(['message_sesion', 'error_session']);

		return redirect('user/message');
	}
}
