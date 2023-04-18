<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->input->server('REQUEST_METHOD') === 'POST'){
			$user_data = $this->input->post();
			$error = false;
			if(empty($user_data)){
				$this->session->set_flashdata('login_message', 'Email and passowrd is not valid');
				$this->session->set_flashdata('login_alert', 'alert-danger');
				$error = true;
			}

			if(empty($user_data['email'])){
				$this->session->set_flashdata('login_message', 'Email is not valid');
				$this->session->set_flashdata('login_alert', 'alert-danger'); 
				$error = true;
			}

			if(!filter_var($user_data['email'], FILTER_VALIDATE_EMAIL)){
				$this->session->set_flashdata('login_message', 'Email is not valid');
				$this->session->set_flashdata('login_alert', 'alert-danger');
				$error = true; 
			}

			if(empty($user_data['password'])){
				$this->session->set_flashdata('login_message', 'Password is not valid');
				$this->session->set_flashdata('login_alert', 'alert-danger');
				$error = true; 
			}

			$error_message = 'Email or password is invalid';

			if(!$error){
				$login = $this->Login_model->login($user_data['email'], $user_data['password']);
				if($login){
					return redirect('admin/dashboard');
				}

				$error_message = 'Error in login';
			}

			$this->session->set_userdata('login_data',$user_data);
			$this->session->set_flashdata('login_message', $error_message);
			$this->session->set_flashdata('login_alert', 'alert-danger');
			return redirect('admin/login');
			 
		}
		$this->load->view('admin/login/index');
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		return redirect('admin/login');
	}
}
