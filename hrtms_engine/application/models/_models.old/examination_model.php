<?php

class Examination_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function create_exam($data) {

        $this->db->insert('examination', $data);
    }
    
    function list_exam() {

        $str = "SELECT examination_id, COUNT( question_id ) AS items , examination_name, date_modified, IF(is_active=0,'<span class=\"label label-warning\">Inactive</span>','<span class=\"label label-success\">Active</span>') AS is_active
            FROM examination
            LEFT OUTER JOIN questions ON examination.examination_id = questions.exam_id 
            GROUP BY examination_id";
        $query = $this->db->query($str);
        return $query->result();

    }

    function list_exam_modules() {

        $str = "SELECT examination_id, COUNT( question_id ) AS items , examination_name, date_modified, IF(is_active=0,0,1) AS is_active
            FROM examination
            LEFT OUTER JOIN questions ON examination.examination_id = questions.exam_id 
            GROUP BY examination_id";
        $query = $this->db->query($str);
        return $query->result();
    }

    function add_item($data) {

        $this->db->insert('questions', $data);

        /*$this->db->where('examination_id', $this->session->userdata("eid"));
        $this->db->update('examination', array('date_modified' => date('Y-m-d H:i:s')));*/
    }

    function load_items() {

       // $str = "SELECT * FROM questions WHERE exam_id=".$this->session->userdata("eid");

        $str = "SELECT question_id, question, answers, key_answer, question_type, exam_id, no_of_choices, no_got_correct, no_of_takers, ROUND((no_got_correct/no_of_takers)*100,2) AS percent FROM questions WHERE exam_id=".$this->session->userdata("eid");
        $query = $this->db->query($str);
        return $query->result();
    }

    function take_items() {
        $id = decrypt($this->session->userdata("take_exam_id"));

        $str = "SELECT examination_name FROM examination WHERE examination_id=$id";
        $query = $this->db->query($str);
        $this->session->set_userdata("exam_name",$query->row()->examination_name);

        $str = "SELECT * FROM questions WHERE exam_id=$id";
        $query = $this->db->query($str);
        return $query->result();
    }

    function check_items() {
        $id = decrypt($this->session->userdata("take_exam_id"));
        $str = "SELECT * FROM questions WHERE exam_id=$id";
        $query = $this->db->query($str);
        return $query->result();
    }

    


    function name_exam() {

        $str = "SELECT examination_name FROM examination WHERE examination_id=".$this->session->userdata("eid");
        $query = $this->db->query($str);
        $this->session->set_userdata("ename",$query->row()->examination_name);
    }

    function toggle_activate($id, $data) {

        $this->db->where('examination_id', $id);
        $this->db->update('examination', $data); 
    }

    function toggle_activate_all($data) {

        $this->db->update('examination', $data); 
    }

    function rename_exam($id, $data) {

        $this->db->where('examination_id', $id);
        $this->db->update('examination', $data); 
    }


    function delete_exam($id) {

        $this->db->delete('examination', array('examination_id' => $id)); 
        $this->db->delete('questions', array('exam_id' => $id)); 
    }

    function delete_item($id) {

        $this->db->delete('questions', array('question_id' => $id)); 
    }

    function active_exam() {

        $q = $this->db->query("SELECT examination_id FROM examination WHERE is_active=1");

        //$data["eid"] = $q->row()->examination_id;
        //$this->session->set_userdata($data);

        $id = $this->session->userdata("user_id");

        // PUT BATCH CONTROL NO ON SESSION

        $query = $this->db->query("SELECT batch_control_no FROM hris WHERE trainee_id='".$id."'");
        $data["b_id"] = $query->row()->batch_control_no;

        $this->session->set_userdata($data);
    }

    function check_gradesheet($id, $b_id, $e_id) {

        $e_id = decrypt($e_id);

        $q = "SELECT * FROM gradesheet WHERE trainee_id='".$id."' AND batch_id='".$b_id."'"." AND exam_id='".$e_id."'";

        $query = $this->db->query($q);
        $count = $query->num_rows();

        return $count;

    }

    function get_gradesheet($id, $b_id) {

        $q = "SELECT * FROM gradesheet 
        LEFT JOIN examination
        ON gradesheet.exam_id=examination.examination_id 
        WHERE trainee_id='".$id."' AND batch_id='".$b_id."'";

        $query = $this->db->query($q);
        $result = $query->result();
        
        return $result;

    }

    //------------------------------------------------------
    /* TO FIX LATER
     */

    function update_score($score, $over, $status) {

        $id = $this->session->userdata("user_id");

        $b_id = $this->session->userdata("b_id");

        $e_id = decrypt($this->session->userdata("take_exam_id"));

        $count = $this->check_gradesheet($id, $b_id, $e_id);

        $data = array(

            "trainee_id" => $id,
            "exam_id" => $e_id,
            "batch_id" => $b_id,
            "score" => $score,
            "over" => $over,
            "status" => $status

        );

        if($count != 0) {

            $this->db->where('trainee_id', $id);
            $this->db->where('batch_id', $b_id);
            $this->db->where('exam_id', $e_id);
            $this->db->update('gradesheet', $data); 

            return true;
        }
        else {

            $this->db->insert('gradesheet', $data);

            return false;
        }
    }

    function is_editable_exam($id) {

        $q = "SELECT is_active FROM examination WHERE examination_id=".$id;
        $result = $this->db->query($q);
        $row = $result->row();
        
        if($row->is_active == '0') {
            

            return true;
        }
        else {
            
            return false;
        }
    }

    function add_exam_set($data) {

        $this->db->insert('exam_set', $data);
    }

    function if_exist_set($batch) {

        $str = "SELECT * FROM exam_set WHERE batch_id='".$batch."'";
        $q = $this->db->query($str);
        
        if($q->num_rows() > 0) {

            return false;
        }
        return true;
    }

    function list_batches() {

        $str = "SELECT batch_control_no FROM batch_no 
        LEFT JOIN exam_set
        ON batch_no.batch_control_no=exam_set.batch_id WHERE is_training=1 AND batch_control_no
        NOT IN (SELECT batch_id FROM exam_set) GROUP BY batch_control_no";
        $query = $this->db->query($str);
        return $query->result();
    }

    function list_exam_set() {

        $str = "SELECT id, batch_id, set_name, exam_id, SUM(items) as items, date_created, IF(is_active=0,'<span class=\"label label-warning\">Inactive</span>','<span class=\"label label-success\">Active</span>') AS is_active  FROM exam_set GROUP BY batch_id ORDER BY id DESC";
        $q = $this->db->query($str);

        return $q->result();
    }

    function exam_set_info($id) {

        $str = 
        "SELECT id, exam_id, batch_id, set_name, examination_name, items, date_created FROM exam_set 
        LEFT JOIN examination
        ON examination.examination_id=exam_set.exam_id
        WHERE batch_id='".$id."'";
        $q = $this->db->query($str);

        return $q->result();
    }

    function remove_exam_set($id) {

        $this->db->delete('exam_set', array('batch_id' => $id)); 
    }

    function list_batch_to_set($id) {

        $str = "SELECT * FROM exam_set WHERE batch_id=".$id;
        $query = $this->db->query($str);
        return $query->num_rows();
    }

    function toggle_activate_set($id, $data) {

        $this->db->where('batch_id', $id);
        $this->db->update('exam_set', $data); 
    }

    function exam_progress() {

        $q = "SELECT COUNT(batch_id) AS total_modules FROM exam_set WHERE batch_id='".$this->session->userdata('b_id')."'";
        $result = $this->db->query($q);

        $total_modules = $result->row()->total_modules;
        $this->session->set_userdata("total_modules", $total_modules);

        $q = "SELECT SUM(items) AS total_items FROM exam_set WHERE batch_id='".$this->session->userdata('b_id')."'";
        $result = $this->db->query($q);

        $total_items = $result->row()->total_items;
        $this->session->set_userdata("total_items", $total_items);

        $q = "SELECT COUNT(exam_id) AS total_modules_taken FROM gradesheet WHERE trainee_id='".$this->session->userdata('user_id')."'";
        $result = $this->db->query($q);

        $total_modules_taken = $result->row()->total_modules_taken;
        $this->session->set_userdata("total_modules_taken", $total_modules_taken);

        $q = "SELECT SUM(score) AS total_items_taken FROM gradesheet WHERE trainee_id='".$this->session->userdata('user_id')."'";
        $result = $this->db->query($q);

        $total_items_taken = $result->row()->total_items_taken;
        $this->session->set_userdata("total_items_taken", $total_items_taken);
    }

}