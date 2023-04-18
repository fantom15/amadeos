<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_info')) {
			return redirect('user/login');
		}
	}

	public function index()
	{
		$lang = ucfirst($this->session->userdata('site_lang'));
		$site_language = $this->db->get_where('languages', ['en_lang_name'=>$lang]);
		$inner_data = [];
		$this->db->select('*');
		$this->db->where(['status' => 'active', 'language_id' => $site_language->row()->id]);
		$this->db->from('ebooks');
		$inner_data['ebooks'] = $this->db->get();
		$data['content'] = $this->load->view('user/books/index', $inner_data, true);
		$this->load->view('user/master_page', $data);
	}

	public function read($id = null)
	{
		if (empty($id)) {
			show_404();
			exit();
		}

		if (!is_numeric($id)) {
			show_404();
			exit();
		}

		$inner_data = [];
		$this->db->select('*');
		$this->db->where(['id' => $id, 'status' => 'active']);
		$this->db->from('ebooks');
		$inner_data['ebook'] = $this->db->get();

		if (empty($inner_data['ebook'])) {
			show_404();
			exit();
		}

		$inner_data['first_question'] = $this->first_question($id);

		$data['content'] = $this->load->view('user/books/read', $inner_data, true);
		$this->load->view('user/master_page', $data);
	}

	private function first_question($id = null)
	{
		if (empty($id)) {
			return false;
		}

		$this->db->select('id');
		$this->db->from('questions');
		$this->db->where(['topic_id' => $id, 'status' => 'active']);
		$this->db->order_by('id', 'ASC');
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row()->id;
		} else {
			return false;
		}
	}
}
