<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function is_logged_in()
	{
		$user_id = $this->session->userdata('user_id');
		$username = $this->session->userdata('email');
		if (intval($user_id) > 0 && $username != '')
			return true;

		return false;
	}

	function login($username, $password)
	{
		if(empty($username))
			return false;

		if (empty($password))
        return false;

		$password = $password.SALT_PASS;
		$password = sha1(md5($password));

		$result = $this->db->query("SELECT * FROM admin WHERE  email = ? AND password = ? LIMIT 1", array($username, $password));

		if ($result->num_rows() == 1) {

			$user = $result->row();

			if ($user->email == $username && $user->password == $password && $user->status == 'inactive') {
				return false;
			}else{
				$this->session->set_userdata('user_id', $user->id);
				$this->session->set_userdata('email', $user->email);
				// log admin logins
				$this->log_login();

				return true;
			}
		}

		return false;
	}


	function log_login($id = null)
	{

		$ip = $this->input->ip_address();
		$user_agent = $this->input->user_agent();

		if ($id == null)
			$id = $this->session->userdata("user_id");

		return $this->db->query("INSERT INTO `admin_logins` (`login_id`, `user_id`, `login_time`, `login_ip`, `login_agent`) VALUES (NULL, ?, ?, ?, ?)", array($id, time(), $ip, $user_agent));
	}
}
