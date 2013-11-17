<?php

class Report_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }


    function list_trainee($batch) {
        $this->db->select('*');
        $this->db->where('batch_control_no',$batch);
        $this->db->from('hris');
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result(); 
    }


    function trainee_attendance($batch) {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id','left');
        $this->db->where('training_days !=','0');
        $this->db->where('present_days !=','0');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result(); 
    }
    
    function training_info($batch){
        $this->db->select('training_days,date_start');
        $this->db->from('batch_no');
        $this->db->where('batch_control_no', $batch);
        $query = $this->db->get();
        return $query->result(); 


    }
 
    function gradesheet() {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('status','PASSED');
        //$this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }

     function byBatch() {
        $this->db->select('batch_control_no');
        $this->db->distinct();
        //$this->db->from('hris');
        //$this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->from('batch_no');
        $this->db->order_by("batch_control_no", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }


    function gradesheetByBatch($batch) {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->where('status','PASSED');
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }

      function traineeAttendanceByBatch($batch) {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    
    function exam_set_batch(){
        $this->db->select('batch_id');
        $this->db->distinct();
        $this->db->from('exam_set');
        $query = $this->db->get();
        return $query->result();
    }

    function certificate(){
        


    }
} 