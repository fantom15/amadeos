<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public $ip;
	public $user_hash;

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		if (!isset($_SESSION['user_hash'])) {
			$this->ip = $this->input->ip_address();
			$session = $this->ip . time() . rand(10000, 99999);
			$this->user_hash = md5($session);
			$_SESSION['user_hash'] = $this->user_hash;
			$finil_data = [
				'ip' => $this->ip,
				'session' => $this->user_hash
			];
			$this->db->insert('users', $finil_data);
		}

		$inner_data = [
			'error' => false,
			'error_msg' => null
		];
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (empty($user_data)) {
				$inner_data['error'] = true;
				$inner_data['error_msg'] = 'Please select your country.';
			}

			if (!$inner_data['error']) {
				$this->db->where('session', $_SESSION['user_hash']);
				$this->db->update(
					'users',
					[
						'country' => $user_data['country'],
						'year' => $user_data['year'],
						'user_agent' => null
					]
				);

				return redirect('card_game');
			}
		}

		$data['content'] = $this->load->view('home', $inner_data, true);
		$this->load->view('master', $data);
	}

	public function end()
	{
		$data['content'] = $this->load->view('end', NULL, true);
		$this->load->view('master', $data);
	}

	public function insert_email()
	{
		$return = ['success' => false, 'message' => null];
		try {
			$email = $this->input->post('email');
			if (empty($email)) {
				throw new Exception('Please type your email');
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				throw new Exception('Email is not valid.');
			}

			$this->db->where('session', $_SESSION['user_hash']);
			$this->db->update('users', ['email' => $email]);
			$return['message'] = 'Thank you.';
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}
}
