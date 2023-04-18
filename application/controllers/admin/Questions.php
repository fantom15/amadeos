<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Questions extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->Login_model->is_logged_in()) {
			if (!$this->Permission_model->can('questions')) {
				return redirect(base_url() . 'admin');
			}
		} else {
			return redirect(base_url() . 'admin');
		}

		$this->load->model(array('Question_model'));
	}

	public function index($topic_id = null, $question_id = null)
	{
		$inner_data = [];
		$inner_data['question'] = null;
		$inner_data['topic_id'] = $topic_id;
		$inner_data['question_id'] = $question_id;
		if (!empty($topic_id)) {
			if (!empty($question_id)) {
				$question = $this->db->get_where('questions', array('id' => $question_id));
				if ($question->num_rows() == 1) {
					$inner_data['question'] = $question;
				}
			}

			$topic = $this->db->get_where('ebooks', array('id' => $topic_id));
			if ($topic->num_rows() == 1) {
				$inner_data['topic_language'] = $this->db->get_where('languages', ['id' => $topic->row()->language_id]);
			}
		}
		$inner_data['languages'] = $this->db->get_where('languages', array('status' => 'active'));
		$inner_data['topic'] = $this->db->get('ebooks');
		$inner_data['questions_list'] = $this->db->get_where('questions', ['topic_id' => $topic_id]);
		$inner_data['images'] = $this->db->get('images_list');

		
		
		$data['title'] = 'Questions';
		$data['content'] = $this->load->view('admin/questions/index', $inner_data, true);
		$this->load->view('admin/master_page', $data);
	}

	public function upload_image()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$return['message'] = $this->Question_model->upload_image();
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}

	public function insert()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$return = array('success' => false);
		try {
			$return['message'] = $this->Question_model->insert();
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}

		echo json_encode($return);
	}

	public function change_status($topic_id = null, $question_id = null)
	{
		if (!empty($question_id) && !empty($topic_id)) {
			$this->db->query("UPDATE questions SET status = IF(status='active', ?, ?) WHERE id = ?", ['inactive', 'active', $question_id]);
			return redirect('/admin/questions/index/' . $topic_id . '/' . $question_id);
		}

		return redirect('admin/questions/index');
	}


	public function gallery_list()
	{
		if (!$this->input->is_ajax_request()) {
			show_404();
			exit;
		}

		$inner_data = [];
		
		$this->load->view('admin/questions/gallery', $inner_data);
	}
}
