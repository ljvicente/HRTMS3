<?php

class Client_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }


    function list_company() {
        
        $this->db->select('*');
        $this->db->from('client');
        $query = $this->db->get();
        return $query->result();
    }

    function add_client($data,$client_count,$userTable) { 

        //insert muna sa table ng examination
        //$this->db->insert('examination', $data);
     
        //$this->db->where('count_id','1');
        $this->db->update('user_count', $client_count);

        $this->db->insert('user_table',$userTable);
        //$id = $this->db->insert_id();
        //return (isset($id)) ? $id : TRUE;   
        
		$this->db->insert('client', $data);
		//$id = $this->db->insert_id();
		//return (isset($id)) ? $id : TRUE;	
        
    }

    function view($id) {
        $query =  $this->db->query("SELECT * 
        FROM client
        INNER JOIN user_table ON user_table.user_id = client.user_id
        WHERE client.client_id ={$id}");
        //$query = $this->db->query("SELECT * from client where client_id = {$id}");
        //$query = $this->db->get();
        return $query->result();

    }

    function info($id) {

        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('user_table', 'user_table.user_id=client.user_id');
        $this->db->where('client.user_id',$id);

        $query = $this->db->get();
        return $query->result();

    }

    function update_info($id,$data){

        $this->db->where('user_id',$id);
        $this->db->update('client',$data);


    }
    function update_userTable($id,$data){
        $this->db->where('user_id',$id);
        $this->db->update('user_table',$data);
    }

    function updateAccountStatus($id,$stat){
        
        $this->db->where('user_id',$id);
        $this->db->update('user_table',array('is_active'=>$stat));

        return $stat;

    }

    function view_request($id) {
        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('client_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
    

}