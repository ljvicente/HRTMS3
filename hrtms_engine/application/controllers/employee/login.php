<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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
 * @subpackage 	Controllers
 * @category    Employee Controllers
 * @author		HRTMS Dev Team
 * @copyright 	You have the right to copy (c) 2012-2013
 * @license  	Wait. What?
 * @link 		http://www.github.com/jemnuine/HRTMS
 * @since     	Version 1.0
 * @why? 		RD
 * @feels 		:(
 * @filesource
 */

/**
 * Employee Login Class
 *
 * @category	Controllers
 * @author		Leo Jeremiah Vicente
 * 				Niel Pio Lozano
 */

class Login extends CI_Controller {

	/**
	 * Client Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	function index() {

		if($this->session->userdata('is_logged_in')) {

			redirect($this->session->userdata('last_visit'));
		}
		else {

			if($this->input->get('forgot')) {

				$data['is_forgot'] = 1;
			}
			else {

				$data['is_forgot'] = NULL;
			}

			$this->session->set_userdata('login_type', 'employee');

    		$this->load->view('employee/login_view', $data);	
		}		
	}	

	// --------------------------------------------------------------------
}

/* End of file login.php */
/* Location: ./application/controllers/employee/login.php */