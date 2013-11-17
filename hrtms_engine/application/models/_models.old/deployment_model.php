<?php

class Deployment_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

   	function request_info($id){

   		$this->db->select('*');
   		$this->db->from('request');
   		$this->db->where('request_id', $id);
   		$query = $this->db->get();
   		return $query->result();
   		
   	}

    function list_trainee($str){

    
    $query = $this->db->query('SELECT * FROM deployment_pooling INNER JOIN HRIS ON deployment_pooling.training_id = hris.trainee_id where ('.$str.') && status = "pending"');
	  return $query->result(); 
     
    }
    
    function deploy($id){
        $this->db->where('training_id',$id);
        $this->db->update('deployment_pooling', array('status' => 'deployed'));
        //return $id;
    }
    

}