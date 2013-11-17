<?php

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate($login_type) {
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        
        // Run the query
        $query = $this->db->get('user_table');

        // Let's check if there are any results
        if($query->num_rows == 1) {
            // If there is a user, then create session data
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
                'is_active' =>$row->is_active

            );

            //filter login
            //deny login if user exists but used wrong login page
            $permission = $row->permission;
            $is_active = $row->is_active;
            if(($permission == "HR" || $permission == "Administrator" || $permission == "Trainer") && $is_active != 0){

                $user_group = "employee";
                
            }
            else if(($permission == "Applicant" || $permission == "Trainee") && $is_active != 0) {

                $user_group = "candidate";
            }
            else if($permission == "Client" && $is_active != 0){

                $user_group = "client";
            }
            else{
                echo "NO RECORDS";
            }
            
            if($user_group != $login_type) {

                $this->session->set_flashdata('error_msg', '<label style="font-size:12px;"><i class="icon-asterisk red"></i> Invalid username and/or password.</label>');
                return false;
            }

            //if remember checked
            /*if($this->input->post('remember')) {

                $this->config->load('no_expire', TRUE);
            }*/

            $this->session->set_userdata($data);
            $this->is_active();
            return true;
        }
        // If the previous process did not validate
        // then return false.

        $this->session->set_flashdata('error_msg', '<label style="font-size:12px;"><i class="icon-asterisk red"></i> Invalid username and/or password.</label>');
        return false;
    }

    /****************************** FOR TRAINEE VIEW *********************************/
    function is_active() {

        //$str = "SELECT * FROM exam_set WHERE is_active=1 AND batch_id='".."'";
        $query = $this->db->query("SELECT batch_control_no FROM hris WHERE trainee_id='".$this->session->userdata("user_id")."'");
        $str = "SELECT SUM(is_active) AS is_active FROM exam_set WHERE batch_id='".$query->row()->batch_control_no."'";
        $query = $this->db->query($str);
        $this->session->set_userdata("is_active",$query->row()->is_active);
    }
}