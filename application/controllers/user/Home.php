<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_info')){
			return redirect('user/login');
		}

		$this->lang->load('information','english');
	}

	public function index()
	{
        $data['content'] = $this->load->view('user/home/index', NULL, true);
		$this->load->view('user/master_page', $data);
	}
}
