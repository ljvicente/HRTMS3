<?php

class Presenter_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_module($param="") {

        $q = "SELECT module_name FROM modules";
        if($param != "") {

            $q = $q . " WHERE company_name='".$param."'";
        }
        $query = $this->db->query($q);

        return $query->result();
    }

    function list_file($param="", $param2="") {

        $q = "SELECT file_name FROM modules";
        if($param != "") {

            $q = $q . " WHERE company_name='".$param."' AND module_name='".$param2."'";
        }
        $query = $this->db->query($q);

        return $query->result();
    }
}  