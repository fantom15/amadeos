<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Questions extends CI_Controller
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

	private function make_muck_exam()
	{
		return 'muck';
	}


	/**
	 * get list of questions into a session
	 *
	 * @param  mixed $topic_id
	 * @return void
	 */
	private function get_topic_questions($topic_id)
	{
		$this->db->select('id');
		$this->db->from('questions');
		$this->db->where(['topic_id' => $topic_id, 'status' => 'active']);
		$questions_query = $this->db->get()->result_array();
		$questions_list = [];
		foreach ($questions_query as $item) {
			$questions_list[] = $item['id'];
		}
		$this->session->set_userdata('questions_count', $questions_list);
	}


	/**
	 * make special hash for any test
	 *
	 * @param  mixed $user_id
	 * @param  mixed $topic_id
	 * @return void
	 */
	private function make_question_hash($user_id, $topic_id)
	{
		$characters = $user_id . '-' . $topic_id . '-' . time() . '-' . rand(1000, 9999);
		$hash = md5($characters);
		return $hash;
	}

	/**
	 * check_question_hash
	 *
	 * @param  mixed $topic_id
	 * @param  mixed $question_id
	 * @return void
	 */
	private function check_question_hash($topic_id, $question_id)
	{
		if (!$this->session->userdata('test_hash')) {
			$question_hash = $this->make_question_hash($this->user_info->id, $topic_id);
			$question_temp = [
				'user_id' => $this->user_info->id,
				'topic_id' => $topic_id,
				'question_id' => $question_id,
				'question_hash' => $question_hash
			];
			$this->db->insert('user_answers_temp', $question_temp);
			$this->session->set_userdata('test_hash', $question_hash);

			return false;
		} else {
			if ($this->session->userdata('topic_id') != $topic_id) {
				$question_hash = $this->make_question_hash($this->user_info->id, $topic_id);
				$question_temp = [
					'user_id' => $this->user_info->id,
					'topic_id' => $topic_id,
					'question_id' => $question_id,
					'question_hash' => $question_hash
				];
				$this->db->insert('user_answers_temp', $question_temp);
				$this->session->set_userdata('test_hash', $question_hash);

				return false;
			} else {
				$check_question = $this->db->get_where('user_answers_temp', [
					'user_id' => $this->user_info->id,
					'topic_id' => $topic_id,
					'question_id' => $question_id,
					'question_hash' => $this->session->userdata('test_hash')
				]);

				if ($check_question->num_rows() == 0) {
					$question_temp = [
						'user_id' => $this->user_info->id,
						'topic_id' => $topic_id,
						'question_id' => $question_id,
						'question_hash' => $this->session->userdata('test_hash')
					];
					$this->db->insert('user_answers_temp', $question_temp);
					return false;
				}

				return true;
			}
		}
	}

	/**
	 * index page - show question data
	 *
	 * @param  mixed $topic_id
	 * @param  int $question_id
	 * @return void
	 */
	public function index($topic_id = null, $question_id = null)
	{
		$inner_data = [];
		$before_question = false;

		if (empty($topic_id)) {
			show_404();
			exit();
		}

		if (empty($question_id)) {
			show_404();
			exit();
		}

		if (!$this->session->userdata('topic_id')) {
			$this->session->set_userdata('topic_id', $topic_id);
		}

		$check_topic_question = $this->db->get_where(
			'questions',
			[
				'topic_id' => $topic_id,
				'id' => $question_id
			]
		);

		if ($check_topic_question->num_rows() == 0) {
			show_404();
			exit();
		}

		if ($topic_id == 'muck') {
			$inner_data['questions_list'] = 'asd';
			$this->session->set_userdata('topic_id', 'muck');
			$before_question = $this->check_question_hash($topic_id, $question_id);
		} else if (is_numeric($topic_id)) {
			$before_question = $this->check_question_hash($topic_id, $question_id);
			if ($this->session->userdata('topic_id') != $topic_id) {
				$this->session->set_userdata('topic_id', $topic_id);
				$this->get_topic_questions($topic_id);
			} else {
				if (!$this->session->userdata('questions_count')) {
					$this->get_topic_questions($topic_id);
				}
			}
		} else {
			return redirect('user/home');
		}

		$questions_data = [];
		$questions_data['question'] = null;
		$questions_data['user_answer'] = null;
		if ($question_id != null) {
			$questions_data['question'] = $this->db->get_where('questions', ['id' => $question_id])->row();

			$user_answer = $this->db->get_where(
				'user_answers_temp',
				[
					'user_id' => $this->user_info->id,
					'topic_id' => $topic_id,
					'question_id' => $question_id,
					'question_hash' => $this->session->userdata('test_hash')
				]
			);

			if ($user_answer->num_rows() == 1) {
				$questions_data['user_answer'] = $user_answer->row();
			}
		}

		$page = null;
		if ($questions_data['question']->question_type == 'drag_and_drop') {
			$page = 'drag_and_drop_type';
		} else {
			$page = 'question_page';
		}

		$inner_data['question_id'] = $question_id;
		$inner_data['question_page'] = $this->load->view('user/question/' . $page, $questions_data, true);
		$data['content'] = $this->load->view('user/question/index', $inner_data, true);
		$this->load->view('user/master_page', $data);
	}



	/**
	 * answer
	 *
	 * @return void
	 */
	public function answer()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$id = $this->input->post('id');
			$answer = $this->input->post('answer');
			if (empty($id)) {
				throw new Exception('id is empty.');
			}

			if (empty($answer)) {
				throw new Exception('answer is empty.');
			}

			$this->db->select('*');
			$this->db->from('questions');
			$this->db->where(['id' => $id]);
			$question = $this->db->get();

			$check_answer = $this->db->get_where(
				'user_answers_temp',
				[
					'user_id' => $this->user_info->id,
					'question_id' => $id,
					'question_hash' => $this->session->userdata('test_hash')
				]
			);

			if (empty($check_answer->row()->status)) {
				$return['answered'] = false;
				if ($question->row()->answers == $answer) {
					$return['message'] = true;
					$status = 'true';
				} else {
					$return['message'] = false;
					$status = 'false';
				}

				$user_answer_array = [
					'answer' => $answer,
					'status' => $status
				];

				$this->db->where(['id' => $check_answer->row()->id]);
				$this->db->update('user_answers_temp', $user_answer_array);
			} else {
				$return['answered'] = true;
			}

			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}

	public function drag_and_drop_answer()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$question_id = $this->input->post('question_id');
			$option_id = $this->input->post('option_id');
			$result = $this->input->post('result');
			if (empty($question_id)) {
				throw new Exception('question id is empty.');
			}

			if (empty($question_id)) {
				throw new Exception('question id is empty.');
			}

			if (empty($option_id)) {
				throw new Exception('option id is empty.');
			}

			if (empty($result)) {
				throw new Exception('result is empty.');
			}

			//$check_answer = $this->db->get_where('user_answers', ['user_id' => $this->user_info->id, 'question_id' => $question_id]);

			$check_answer = $this->db->get_where(
				'user_answers_temp',
				[
					'user_id' => $this->user_info->id,
					'question_id' => $question_id,
					'question_hash' => $this->session->userdata('test_hash')
				]
			);


			$return['answered'] = false;
			if (empty($check_answer->row()->status)) {
				$answer = [];
				$answer['answer_' . $option_id] = $result;
			} else {
				$answer = json_decode($check_answer->row()->answer, true);
				$answer['answer_' . $option_id] = $result;
			}

			$user_answer_array = [
				'answer' => json_encode($answer),
				'status' => 'both'
			];

			$this->db->where(['id' => $check_answer->row()->id]);
			$this->db->update('user_answers_temp', $user_answer_array);


			$return['message'] = true;
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}


	public function next_question()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$user_data = $this->input->post();
			if (empty($user_data['topic_id'])) {
				throw new Exception('topic id is not valid');
			}

			if (empty($user_data['question_id'])) {
				throw new Exception('question id is not valid');
			}

			if (empty($user_data['next_question'])) {
				throw new Exception('next question id is not valid');
			}

			$question = $this->db->get_where(
				'user_answers_temp',
				[
					'user_id' => $this->user_info->id,
					'topic_id' => $user_data['topic_id'],
					'question_id' => $user_data['question_id'],
					'question_hash' => $this->session->userdata('test_hash')
				]
			);

			if ($question->num_rows() > 0 && empty($question->row()->status)) {
				$this->db->where(
					[
						'user_id' => $this->user_info->id,
						'topic_id' => $user_data['topic_id'],
						'question_id' => $user_data['question_id'],
						'question_hash' => $this->session->userdata('test_hash')
					]
				);
				$this->db->update('user_answers_temp', ['status' => 'not_answered']);
			}

			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}

	public function finish_exam($topic_id = null)
	{
		if (empty($topic_id)) {
			show_404();
			exit();
		}

		$get_answers = $this->db->get_where(
			'user_answers_temp',
			[
				'user_id' => $this->user_info->id,
				'topic_id' => $topic_id,
				'question_hash' => $this->session->userdata('test_hash')
			]
		);

		foreach ($get_answers->result_array() as $answer) {
			$check_answer = $this->db->get_where(
				'user_answers',
				[
					'user_id' => $this->user_info->id,
					'topic_id' => $topic_id,
					'question_hash' => $this->session->userdata('test_hash')
				]
			);

			if ($check_answer->num_rows() == 0) {
				$final_data = [
					'user_id' => $answer['user_id'],
					'topic_id' => $answer['topic_id'],
					'question_id' => $answer['question_id'],
					'question_hash' => $answer['question_hash'],
					'answer' => $answer['answer'],
					'status' => $answer['status']
				];

				$this->db->insert('user_answers', $final_data);
			}
		}

		return redirect('user/questions/result/' . $topic_id);
	}


	public function result($topic_id)
	{
		if (empty($topic_id)) {
			show_404();
			exit();
		}

		$inner_data = [];
		$test_hash = $this->session->userdata('test_hash');
		$get_answers = $this->db->get_where(
			'user_answers',
			[
				'user_id' => $this->user_info->id,
				'topic_id' => $topic_id,
				'question_hash' => $test_hash
			]
		);

		$this->session->unset_userdata('test_hash');

		$inner_data['answers'] = $get_answers;
		$data['content'] = $this->load->view('user/question/result', $inner_data, true);
		$this->load->view('user/master_page', $data);
	}
}
