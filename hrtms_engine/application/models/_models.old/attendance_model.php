<?php 

class Attendance_model extends CI_Model{

	function __construct() {
	    parent::__construct();
	}


    function trainee_list() {
        $this->db->select('*');
        $this->db->from('batch_no');
		$this->db->join('hris', 'hris.batch_control_no = batch_no.batch_control_no');
		$this->db->where('batch_no.is_training',1);
        $query = $this->db->get();
        return $query->result();
    }   
 

 	function checker($id){
 		
 		/*$this->db->select('*');
 	 	$this->db->from('batch_no');
		$this->db->join('trainee_attendance', 'trainee_attendance.batch_no = batch_no.batch_control_no');
		$this->db->where('batch_no.is_training',1);
		$query = $this->db->get();*/
		$query = $this->db->query('SELECT training_id from batch_no INNER JOIN trainee_attendance ON trainee_attendance.batch_no = batch_no.batch_control_no 
			where batch_no.is_training = "1" 
			
			&& trainee_attendance.training_id = "'.$id.'"');  
	
        return $query->result(); 
 	}  

 	function is_already_present($id){
 		$date = date('Y-m-d');
 		$query = $this->db->query('SELECT training_id, present_days from trainee_attendance
			where training_id = "'.$id.'"
			&&  present_days < training_days
			&& trainee_attendance.last_attend != "'.$date.'"');
        return $query->result(); 

 	}

 	function present($id,$data){
 	    $this->db->update('trainee_attendance',$data);
 	    $this->db->where('training_id', $id);
 		
 	} 


	  
} 

