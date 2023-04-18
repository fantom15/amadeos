<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->Login_model->is_logged_in()) {
            if (!$this->Permission_model->can('packages')) {
                return redirect(base_url() . 'admin');
            }
        } else {
            return redirect(base_url() . 'admin');
        }
    }


    public function index()
    {
        $inner_data = [];

        $message = null;
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $pkg_data = $this->input->post();
            foreach ($pkg_data['id'] as $id) {
                $this->db->where(['id' => $id]);
                $final_data = [
                    'period' => $pkg_data['period'][$id],
                    'price' => $pkg_data['price'][$id],
                    'discount' => $pkg_data['discount'][$id],
                    'days' => $pkg_data['days'][$id],
                    'status' => (isset($pkg_data['status'][$id])) ? 'active' : 'deactive',
                ];
                $this->db->update('packages', $final_data);
            }

            $message = 'Data saved successfully';
        }

        $inner_data['packages'] = $this->db->get('packages');
        $inner_data['discounts'] = $this->db->get('discount');
        $inner_data['error_message'] = $message;
        $data['content'] = $this->load->view('admin/packages/index', $inner_data, true);
        $this->load->view('admin/master_page', $data);
    }


    public function insert_discount_code()
    {
        $inner_data = [];
        $message = null;
        $error = false;
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user_data = $this->input->post();

            if (!$error && empty($user_data['code'])) {
                $message = 'Code is not valid';
                $error = true;
            } else {
                $inner_data['code_session'] = $user_data['code'];
            }

            if (!$error && empty($user_data['percentage'])) {
                $message = 'Percentage is not valid';
                $error = true;
            } else {
                $inner_data['percentage_session'] = $user_data['percentage'];
            }

            if (!$error && !is_numeric($user_data['percentage'])) {
                $message = 'Percentage is not valid';
                $error = true;
            } else {
                $inner_data['percentage_session'] = $user_data['percentage'];
            }

            $check_code = $this->db->get_where('discount', ['code' => $user_data['code']]);
            if (!$error && $check_code->num_rows() > 0) {
                $message = 'This code has been used. Please generate new code';
                $error = true;
            } else {
                $inner_data['expire_date_session'] = $user_data['expire_date'];
            }

            if (!$error && !isset($user_data['one_time'])) {
                if (empty($user_data['expire_date'])) {
                    $message = 'Please set expire date';
                    $error = true;
                }
            }

            if (!$error) {
                $final_data = [
                    'code'=>$user_data['code'],
                    'percentage'=>$user_data['percentage'],
                    'expire_date'=> (isset($user_data['one_time'])) ? null:$user_data['expire_date'],
                    'status'=>'deactive',
                    'admin_id'=>$this->session->userdata('user_id'),
                ];

                $this->db->insert('discount', $final_data);
                $message = 'Discount added successfully';
            }
        }

        $this->session->set_userdata('error_session', $error);
        $this->session->set_userdata('message_sesion', $message);
        $this->session->mark_as_flash(['message_sesion', 'error_session']);

        return redirect('admin/packages');
    }

    public function genereate_discount_code($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $characters_length = strlen($characters);
        $random_string = '';
        for ($i = 0; $i < $length; $i++) {
            $random_string .= $characters[rand(0, $characters_length - 1)];
        }

        $code = $this->db->get_where('discount', ['code' => $random_string]);
        if ($code->num_rows() > 0) {
            $this->genereate_discount_code($length = 10);
        } else {
            echo $random_string;
        }
    }


    public function change_status()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            exit();
        }

        $return = [];
        $return['success'] = false;

        try {
            $id = $this->input->post('id');

            if (empty($id)) {
                throw new Exception('Id is not valid');
            }

            $this->db->query("UPDATE discount SET status = IF(status='active', ?, ?) WHERE id = ?", ['deactive', 'active', $id]);
            $return['message'] = 'Status chenged';
            $return['success'] = true;
        } catch (Exception $e) {
            $return['message'] = $e->getMessage();
        }

        echo json_encode($return);
    }
}
