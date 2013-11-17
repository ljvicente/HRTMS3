<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->load->model('applicant_model');
			$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;

			
			$this->load->view('help_view',$data);
		}
		else {

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

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */