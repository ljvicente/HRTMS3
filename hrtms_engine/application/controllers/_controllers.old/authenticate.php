<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('login_model');

		$login_type = $this->session->userdata("login_type");

		$result = $this->login_model->validate($login_type);

		//check permission of the user from session data
		$permission = $this->session->userdata('permission');

		if(!$result || !$this->session->userdata('is_logged_in')) {
            
            /*$data = array (
            	'error_msg' => '<div class="alert alert-danger">Invalid username and/or password.</div>'
            );
        	
            $this->load->view('includes/nocache'); 
        	$this->load->view('login_view');*/

        	if($login_type == "employee") {

        		redirect(base_url() . 'login');
        	}
        	else if($login_type == "client") {

        		redirect(base_url() . 'login/client');
        	}
        	else if($login_type == "candidate") {

        		redirect(base_url() . 'login/training');
        	}
		}
		else {
				
			redirect(base_url() . 'dashboard');
		}
	}
}

/* End of file authenticate.php */
/* Location: ./application/controllers/authenticate.php */