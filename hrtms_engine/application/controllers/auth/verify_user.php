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
 * @subpackage 	Controllers
 * @category    Auth Controllers
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
 * Verify User Class
 *
 * @category	Controllers
 * @author		Leo Jeremiah Vicente
 * 				Niel Pio Lozano
 */

class Verify_user extends CI_Controller {

	function __construct() {

		parent::__construct();
	}

	/**
	 * Verify Login
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

	function index() {

		$this->load->model('common/login_model');

		$login_type = $this->session->userdata("login_type");

		$result = $this->login_model->validate($login_type);

		$permission = $this->session->userdata('permission');

		if(!$result || !$this->session->userdata('is_logged_in')) {

        	redirect(base_url().$login_type.'/login');
		}
		else {
				
			redirect($this->session->userdata('last_visit'));
		}
	}
}

/* End of file authenticate.php */
/* Location: ./application/controllers/auth/verify_user.php */