<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$user_data = $this->input->post();

			if (isset($user_data['others_3'])) {
				$question_three = $user_data['others_3'];
			} else {
				$question_three = $user_data['question_options_3'];
			}

			$quextion_two = [
				'question_21' => isset($user_data['question_options_21']) ? $user_data['question_options_21'] : '',
				'question_22' => isset($user_data['question_options_22']) ? $user_data['question_options_22'] : '',
				'question_23' => isset($user_data['question_options_23']) ? $user_data['question_options_23'] : '',
				'question_24' => isset($user_data['question_options_24']) ? $user_data['question_options_24'] : '',
				'question_25' => isset($user_data['question_options_25']) ? $user_data['question_options_25'] : '',
				'question_26' => isset($user_data['question_options_26']) ? $user_data['question_options_26'] : '',
				'question_27' => isset($user_data['question_options_27']) ? $user_data['question_options_27'] : '',
			];

			$quextion_two = json_encode($quextion_two);

			$final_data = [
				'user_hash' => $_SESSION['user_hash'],
				'question_one' => isset($user_data['question_options_1']) ? $user_data['question_options_1'] : null,
				'question_two' => $quextion_two,
				'question_three' => $question_three,
				'question_four' => isset($user_data['question_options_4'])?$user_data['question_options_4']:null,
				'question_five' => isset($user_data['question_options_5'])?$user_data['question_options_5']:null,
				'question_six' => null,
				'question_seven' => null,
			];

			$this->db->insert('video_pitch', $final_data);
			return redirect('end');
		}

		$data['content'] = $this->load->view('video', NULL, true);
		$this->load->view('master', $data);
	}
}
