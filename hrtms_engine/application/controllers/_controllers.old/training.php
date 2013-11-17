<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
		$this->load->model('hris_model');
		$query = $this->hris_model->trainee_list();
		$data['records'] = $query;

		
		$this->load->view('trainee/trainee_view',$data);
		}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	
	}

	function hr() {

		$this->load->view('admin/manage_accounts/hr');
	}

	function training() {

		$this->load->view('admin/manage_accounts/training');
	}
}

/* End of file training.php */
/* Location: ./application/controllers/training.php */