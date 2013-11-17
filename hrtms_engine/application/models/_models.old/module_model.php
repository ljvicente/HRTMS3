<?php

class Module_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

    function hrtms_ftp() {

        $config['hostname'] = 'ftp.jemnuine.com';
        $config['username'] = 'jemnuin2@jemnuine.com';
        $config['password'] = 'bakerking123';
        $config['debug']    = TRUE;

        return $config;        
    }

    function list_file($path = "") {

        $this->ftp->connect($this->hrtms_ftp());

        //$this->ftp->mirror('/', '/public_html/elfinder/files/');
        if($path) {

            $path = strtoupper($path)."/";
        }


        $list = $this->ftp->list_files('/public_html/elfinder/files/AMI-Training/'.$path);

        $this->ftp->close();

        $this->load->helper('directory');
        $map = directory_map('./files', 1);
        //return $map;
        //return $r;

        unset($list[0]);
        unset($list[1]);
        //unset($list[2]);
        //unset($list[3]);

        return $list;
    }

    function register_module($data) {

        $this->db->insert('modules', $data);

    }

    function list_module($param="") {

        $this->db->select('*');
        if($param!="") {

            $this->db->where($param);
        }
        $query = $this->db->get('modules');
        return $query->result();
    }

    function list_company_module() {

        $this->db->select('*');
        $query = $this->db->get_where('modules', array('company_name' => $this->session->userdata("company")));
        return $query->result();
    }

    function remove_list($param) {

        $this->db->where('module_id', $param);
        $this->db->delete('modules'); 
    }

}