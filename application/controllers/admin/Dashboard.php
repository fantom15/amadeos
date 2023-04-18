<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->Login_model->is_logged_in())
			redirect(base_url() . 'admin');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['content'] = $this->load->view('admin/dashboard/index', NULL, true);
		$this->load->view('admin/master_page', $data);
	}
}
