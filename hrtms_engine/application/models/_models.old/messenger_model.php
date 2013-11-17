<?php

class Messenger_Model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function load_messages() {

        $this->db->select('*');
        $this->db->from('inbox');
        $query = $this->db->get();

        return $query->result();
        
    } 

    function send_message($data) {

        $this->db->insert('inbox', $data);
    }
   
    function messenger_query($q) {

        $query = $this->db->query($q);
        return $query->result();
    }

    function latest_chat() {

        $s = 

        "SELECT sender_id
        FROM inbox 
        WHERE EXISTS (SELECT message FROM inbox) 
        AND is_read=0
        ORDER BY message_id LIMIT 1";

        $query = $this->db->query($s);

        if($query->num_rows == 1) {

            return $query->row();
        }

        return 0;
    }

    function latest_noti() {

        $s = 

        "SELECT COUNT(message_id) AS unread
        FROM inbox
        WHERE is_read=0 AND receiver_id=".$this->session->userdata('id');

        $query = $this->db->query($s);

        if($query->num_rows == 1) {

            return $query->row();
        }

        return 0;
    }
}  
