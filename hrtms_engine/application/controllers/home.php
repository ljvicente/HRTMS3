<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *---------------------------------------------------------------
 * Human Resource Training and Management System (HRTMS) for AMI 
 *---------------------------------------------------------------
 *
 * An thesis project that allows AMI to get a jumpstart in managing
 * their application, training and deployment processes.
 *
 * VERSION 3.0:
 * Every line of codes are re-thought, re-designed and re-developed
 * to increase the reliability and performance of this application.
 *
 * @package		HRTMS Version 3.0
 * @author		HRTMS Dev Team
 * @copyright 	You have the right to copy (c) 2012-2013
 * @license  	Wait. What?
 * @link 		http://www.github.com/jemnuine/HRTMS
 * @since     	Version 1.0
 * @why? 		RD
 * @feels 		:(
 * @filesource
 */

class Home extends CI_Controller {

	/**
	 * Homepage
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	public function index() {

		if($this->session->userdata('is_logged_in')) {

			redirect(base_url().'dashboard');
		}
		else {

			$this->session->unset_userdata('login_type');

    		$this->load->view('index');
		}	
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */