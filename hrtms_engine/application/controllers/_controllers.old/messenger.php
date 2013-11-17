<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messenger extends CI_Controller {
	

	public function index()
	{

		$this->load->model('Messenger_Model');

		$q = 
	
		"SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
		CONCAT(first_name, ' ', last_name) AS full_name, permission  
		FROM inbox 
		INNER JOIN user_table 
		ON receiver_id=id
		AND ((receiver_id=". $this->session->userdata('sender_id')  . " AND sender_id=" . $this->session->userdata('id') . ") 
		OR (receiver_id=" . $this->session->userdata('id') . " AND sender_id=". $this->session->userdata('sender_id')  . "))";

		$query = $this->Messenger_Model->messenger_query($q);

		$data['records'] = $query;

		$q = "SELECT * FROM user_table WHERE permission='Administrator' OR permission='Client' OR permission='Trainer' OR permission='HR'";
		
		$query = $this->Messenger_Model->messenger_query($q);

		$data['user_records'] = $query;

		$this->load->view('messenger_view', $data);
		//echo $this->session->userdata('sender_id');
		
	}

	public function load_messages() {

		$this->load->model('Messenger_Model');

		$q = 
	
		"SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
		CONCAT(first_name, ' ', last_name) AS full_name, permission  
		FROM inbox 
		INNER JOIN user_table 
		ON receiver_id=id
		AND ((receiver_id=". $this->session->userdata('sender_id')  . " AND sender_id=" . $this->session->userdata('id') . ") 
		OR (receiver_id=" . $this->session->userdata('id') . " AND sender_id=". $this->session->userdata('sender_id')  . "))";
	
		$query = $this->Messenger_Model->messenger_query($q);

		echo json_encode($query);

	}

	public function send_message() {

		if($this->input->post('ajax')) {

			$this->load->model('Messenger_Model');

			$data = array(

				'sender_id' => $this->input->post('sender_id'),
				'receiver_id' => $this->input->post('receiver_id'),
				'message' => $this->input->post('message'),
				'time_sent' => date('Y-m-d H:i:s')

			);
			
			$this->Messenger_Model->send_message($data);

			//le break MVC rules

			//$limit = $this->Messenger_Model->latest_chat();	

			$q = 
		
			"SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
			CONCAT(first_name, ' ', last_name) AS full_name, permission  
			FROM inbox 
			INNER JOIN user_table 
			ON receiver_id=id
			AND ((receiver_id=". $this->session->userdata('sender_id')  . " AND sender_id=" . $this->session->userdata('id') . ") 
			OR (receiver_id=" . $this->session->userdata('id') . " AND sender_id=". $this->session->userdata('sender_id')  . "))";

			$query = $this->Messenger_Model->messenger_query($q);

			echo json_encode($query);

		}
		else {

			return;
			//redirect(base_url() . 'index.php/examination');

		}

	}

	public function switch_chat() {

		if($this->input->post('ajax')) {


			$this->session->set_userdata('sender_id', $this->input->post('sender_id'));

			//echo "sender_id: ".$this->session->userdata('sender_id');
		}
		else {

			echo ":(";
		}

	}

	public function notify() {

		$this->load->model('Messenger_Model');

		$query = $this->Messenger_Model->latest_noti();

		echo json_encode($query);
	}

	public function beta() {

		$this->load->view("beta");
	}
}
/* End of file messenger.php */
/* Location: ./application/controllers/messenger.php */