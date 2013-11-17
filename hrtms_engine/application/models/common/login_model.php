<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
 * @package     HRTMS Version 3.0
 * @subpackage  Models
 * @category    Common Models
 * @author      HRTMS Dev Team
 * @copyright   You have the right to copy (c) 2012-2013
 * @license     Wait. What?
 * @link        http://www.github.com/jemnuine/HRTMS
 * @since       Version 1.0
 * @why?        RD
 * @feels       :(
 * @filesource
 */

/**
 * Login Model Class
 *
 * @category    Model
 * @author      Leo Jeremiah Vicente
 *              Niel Pio Lozano
 */

class Login_model extends CI_Model{

    function __construct() {

        parent::__construct();
    }

    /**
     * Validate Login
     *
     * @access  public
     * @param   
     * @return  bool
     */
    
    function validate($login_type) {
        
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        
        $query = $this->db->get('user_table');

        if($query->num_rows == 1) {
            
            $row = $query->row();

            $data = array(
                'id' => $row->id,
                'user_id' => $row->user_id,
                'username' => $row->username,
                'password' => $row->password,
                'last_name' => $row->last_name,
                'middle_name' => $row->middle_name,
                'image_file' => $row->image_file,
                'first_name' => $row->first_name,
                'phone' => $row->phone,
                'security_question' => $row->security_question,
                'security_answer' => $row->security_answer,
                'email' => $row->email,
                'permission' => $row->permission,
                'is_logged_in' => true,
                'company' => $row->company,
                'is_active' => $row->is_active,
                'last_visit' => base_url().$row->permission.'dashboard'
            );

            //filter login
            //deny login if user exists but used wrong login page
            //or deny if user is inactive
            $permission = $row->permission;

            $is_active = $row->is_active;

            if(($permission == "HR" || $permission == "Administrator" || $permission == "Trainer") && $is_active != 0) {

                $user_group = "employee";
                
            }
            else if(($permission == "Applicant" || $permission == "Trainee") && $is_active != 0) {

                $user_group = "candidate";
            }
            else if($permission == "Client" && $is_active != 0) {

                $user_group = "client";
            }
            
            if($user_group != $login_type) {

                if($is_active == 0) {

                    $this->session->set_flashdata('error_msg', '<label style="font-size:12px;"><i class="icon-exclamation red"></i> User account currently is disabled.</label>');
                }
                else {

                    $this->session->set_flashdata('error_msg', '<label style="font-size:12px;"><i class="icon-asterisk red"></i> Invalid username and/or password.</label>');
                }

                return false;
            }

            $this->session->set_userdata($data);
            
            //if trainee, check active exams
            if($permission == "Trainee") {

                $this->is_active(); 
            }

            return true;
        }

        // If the previous process did not validate
        // then return false.
        $this->session->set_flashdata('error_msg', '<label style="font-size:12px;"><i class="icon-asterisk red"></i> Invalid username and/or password.</label>');
        
        return false;
    }

    /**
     * Check if examination is active for trainees
     *
     * @access  public
     * @param   
     * @return  void
     */
    function is_active() {

        //$str = "SELECT * FROM exam_set WHERE is_active=1 AND batch_id='".."'";
        $query = $this->db->query("SELECT batch_control_no FROM hris WHERE trainee_id='".$this->session->userdata("user_id")."'");

        $str = "SELECT SUM(is_active) AS is_active FROM exam_set WHERE batch_id='".$query->row()->batch_control_no."'";

        $query = $this->db->query($str);

        $this->session->set_userdata("is_active",$query->row()->is_active);
    }
}