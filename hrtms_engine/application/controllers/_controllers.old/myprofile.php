<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyProfile extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			
			
			//$this->load->view('company/company_view', $data);
			$this->load->view('myprofile_view');
		}
		else {
   
    		$this->load->view('login_view');
		}	
	}

	

}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */




