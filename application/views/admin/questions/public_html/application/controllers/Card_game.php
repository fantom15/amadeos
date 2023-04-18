<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Card_game extends CI_Controller
{

	public function index()
	{
		$data['content'] = $this->load->view('card_game', NULL, true);
		$this->load->view('master', $data);
	}

	public function insert()
	{
		$return = array('success' => false);
		try {
			$user_data = $this->input->post();

			if(empty($user_data['answer'])){
				throw new Exception('Please select one option.');
			}

			$cards = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six', 7 => 'seven', 8 => 'eight', 9 => 'nine'];
			$final_data = [
				'user_hash' => $_SESSION['user_hash'],
				'card_'.$cards[$user_data['question_id']] => $user_data['answer'],
			];

			$user_hash = $this->db->get_where('card_games', ['user_hash' => $_SESSION['user_hash']]);

			if ($user_hash->num_rows() == 0) {
				$this->db->insert('card_games', $final_data);
			} else {
				$this->db->where('user_hash', $_SESSION['user_hash']);
				$this->db->update('card_games', $final_data);
			}


			$return['message'] = 'inserted';
			$return['success'] = true;
		} catch (Exception $e) {
			$return['message'] = $e->getMessage();
		}
		

		echo json_encode($return);
	}
}
