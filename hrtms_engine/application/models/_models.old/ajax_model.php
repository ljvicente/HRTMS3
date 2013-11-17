<?php

class Ajax_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

    function search($fname,$id) { 

        //insert muna sa table ng examination
        //$this->db->insert('examination', $data);
        $this->db->select('*');
        $this->db->where('name',$fname);
        $this->db->where('id',$id);
        $this->db->from('students');
        $query = $this->db->get(); 
        return $query->result();
    }
    

}