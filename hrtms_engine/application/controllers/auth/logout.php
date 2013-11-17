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
 *---------------------------------------------------------------
 * Logout Class
 *---------------------------------------------------------------
 *
 * @access	public
 *
 */

class Logout extends CI_Controller {

	/**
	 * Logout
	 *
	 * @access	public
	 * @param	
	 * @return	void
	 */

 	public function index () {

 		$this->session->sess_destroy();

 		redirect(base_url(), 'refresh');
 	}

}