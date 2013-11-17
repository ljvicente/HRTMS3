<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HRTMS extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		
		if($this->session->userdata('is_logged_in')) {

			echo "This is HRTMS AJAX Agent, what can I do for you?";

		}
		else {

    		$this->load->view('login_view');
		}	
	}

	function module_init() {

		echo "http://www.jemnuine.com/elfinder/";
	}

}

/* End of file hrtms.php */
/* Location: ./application/controllers/hrtms.php */