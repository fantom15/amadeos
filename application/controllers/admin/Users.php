<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_logged_in()) {
            if (!$this->Permission_model->can('users')) {
                return redirect(base_url() . 'admin');
            }
        } else {
            return redirect(base_url() . 'admin');
        }
    }

        
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $inner_data = [];

        $config = array();
        $config["base_url"] = base_url() . "admin/users";
        $config["total_rows"] = $this->db->count_all('users');
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $config['next_link']        = '»';
        $config['prev_link']        = '«';
        $config['first_link']       = false;
        $config['last_link']        = false;
        $config['full_tag_open']    = '<ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul>';
        $config['attributes']       = ['class' => 'page-link'];
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $inner_data["links"] = $this->pagination->create_links();

        $this->db->limit($config["per_page"], $page);
        $inner_data['users'] = $this->db->get('users');

        $data['title'] = 'Users';
        $data['content'] = $this->load->view('admin/users/index', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }
}
