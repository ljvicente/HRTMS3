<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function load_view($view_name) {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'index.php/dashboard');
		}
		else {

    		$this->load->view($view_name);
		}	

	}

	function index() {

		$this->session->set_userdata('login_type', 'employee');

		$this->load_view('login_view');		
	}

	function client() {

		$this->session->set_userdata('login_type', 'client');
		
		$this->load_view('login_view_client');	
	}

	function training() {
		
		$this->session->set_userdata('login_type', 'candidate');

		$this->load_view('login_view_training');	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */