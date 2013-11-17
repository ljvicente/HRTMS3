<?php

class Request_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

    function send_request($data) { 
     
		$this->db->insert('request', $data);
        
    }
    

    function list_request() {
        
        $this->db->select('*');
        $this->db->order_by('company','asc');
        //$this->db->order_by('is_active','asc');
        $query = $this->db->query("SELECT * FROM request ORDER BY request_id desc");
        return $query->result();
    }

    function confirm_request($id, $data) {

        $this->db->where('request_id', $id);
        $this->db->update('request', $data); 
    }
    
    function list_confirmed() {

        $query = $this->db->query("SELECT * FROM request WHERE confirmed=1 AND is_read=0 AND company='".$this->session->userdata("company")."'");
        return $query->result();
    }

    function hide_confirmed($id, $data) {

        $this->db->where('request_id', $id);
        $this->db->update('request', $data); 
    }


    function viewRequest($id){

        $query = $this->db->query("SELECT * FROM request WHERE request_id = '".$id."'");
        return $query->result();
    }
}