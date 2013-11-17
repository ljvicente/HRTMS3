<?php

class Hris_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
     function trainee_list() {
   
        $this->db->select('*');     
        $this->db->from('hris');
        //$this->db->where('user_table.user_id',$id);
        //$this->db->join('hris', 'hris.trainee_id = user_table.user_id');
        $query = $this->db->get();
        return $query->result();
    } 
 
    //Display Information
    function profile_trainee($id) {
        
        $this->db->select('*');     
        $this->db->from('user_table');
        $this->db->where('user_table.user_id',$id);
        $this->db->join('hris', 'hris.trainee_id = user_table.user_id');
        $query = $this->db->get();
        return $query->result();
    } 
    function civilStatus($id){
        $this->db->select('civil_status');
        $this->db->where('trainee_id', $id);
        $this->db->from('hris');
        $query = $this->db->get();
        return $query->result();

    }

    function marital_info($id) {

        $this->db->select('*');    
        $this->db->from('hris_children');
        $this->db->where('hris_children.trainee_id',$id);
        $query = $this->db->get();
        return $query->result();

    }

    function employment_history($id) {

        $this->db->select('*');    
        $this->db->from('hris_employment_history');
        $this->db->where('hris_employment_history.trainee_id',$id);
        $query = $this->db->get();
        return $query->result();

    }

    function dependent($id){

        $this->db->select('*');    
        $this->db->from('hris_dependent');
        $this->db->where('hris_dependent.trainee_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
     function beneficiary($id){

        $this->db->select('*');    
        $this->db->from('hris_beneficiary');
        $this->db->where('hris_beneficiary.trainee_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
    function character_reference($id){

        $this->db->select('*');    
        $this->db->from('hris_character_reference');
        $this->db->where('hris_character_reference.trainee_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
   
    


    //UPDATE Information

    function personal_info($data,$id) {
        $this->db->where('trainee_id', $id);
        $this->db->update('hris', $data);
        return true;
    }  

    function insert_children($data) {
       	$this->db->insert('hris_children', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;	
    }
    function insert_employment_history($data) {
       	$this->db->insert('hris_employment_history', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;	
    }

    function insert_dependent($data) {
       	$this->db->insert('hris_dependent', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;	
    }

    function insert_beneficiary($data) {
       	$this->db->insert('hris_beneficiary', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;	
    }

    function insert_character_reference($data) {
       	$this->db->insert('hris_character_reference', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;	
    }



    //Get ID
    function getIdDependent($id){

        $this->db->select('*');    
        $this->db->from('hris_dependent');
        $this->db->where('hris_dependent.trainee_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    function getIdChildren($id){

        $this->db->select('*');    
        $this->db->from('hris_children');
        $this->db->where('hris_children.trainee_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function getIdCharacterReference($id){

        $this->db->select('*');    
        $this->db->from('hris_character_reference');
        $this->db->where('hris_character_reference.trainee_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function getIdBeneficiary($id){

        $this->db->select('*');    
        $this->db->from('hris_beneficiary');
        $this->db->where('hris_beneficiary.trainee_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function getIdEmploymentHistory($id){

        $this->db->select('*');    
        $this->db->from('hris_employment_history');
        $this->db->where('hris_employment_history.trainee_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    
}  