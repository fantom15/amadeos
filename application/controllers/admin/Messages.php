<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Messages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_logged_in()) {
            if (!$this->Permission_model->can('messages')) {
                return redirect(base_url() . 'admin');
            }
        } else {
            return redirect(base_url() . 'admin');
        }
    }

    public function index()
    {
        $inner_data = [];

        $query = "SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = ? AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC";

        $config = [];
        $config["base_url"] = base_url() . "admin/messages";
        $config["total_rows"] = $this->db->query($query, ['unread'])->num_rows();
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

        $query = $query . ' LIMIT ?, ?';
        $inner_data['messages'] = $this->db->query($query, ['unread', (int)$page, (int)$config["per_page"]]);

        $data['title'] = 'Messages';
        $data['content'] = $this->load->view('admin/messages/index', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }



    /**
     * show user messages
     *
     * @param  mixed $id
     * @return void
     */
    public function user($id = null)
    {
        if (empty($id)) {
            return redirect('admin/messages');
        }

        $message = null;
        $error = false;
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user_data = $this->input->post();

            if (!$error && empty($user_data['text_message'])) {
                $message = 'Please write your message';
                $error = true;
            }

            if (!$error && empty($user_data['user_id'])) {
                $message = 'User id is not valid';
                $error = true;
            }

            if (!$error) {
                $user_data['admin_id'] = $this->session->userdata('user_id');
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

            $this->session->set_userdata('error_session', $error);
            $this->session->set_userdata('message_sesion', $message);
            $this->session->mark_as_flash(['message_sesion', 'error_session']);
        }

        $this->db->set('seen', 'yes');
        $this->db->where(['user_id' => $id, 'admin_id' => NULL]);
        $this->db->update('message');

        $inner_data = [];
        $inner_data['user_id'] = $id;
        $inner_data['messages'] = $this->db->get_where('message', ['user_id' => $id]);

        $data['title'] = 'Messages';
        $data['content'] = $this->load->view('admin/messages/user', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }


    public function close()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user_data = $this->input->post();

            $this->db->set('status', 'read');
            $this->db->where(['user_id' => $user_data['user_id'], 'admin_id' => NULL]);
            $this->db->update('message');
        }

        return redirect('admin/messages');
    }
}
