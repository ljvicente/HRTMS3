<?php

class Applicant_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
/************************** List of Applicants  *********************************/
    function applicant_list() {
    	
        $this->db->select('*');
        $query = $this->db->get('registration');
        return $query->result();
    }

    function info($register_id) {
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('register_id', $register_id );
        $query = $this->db->get();
        return $query->result(); 
      
    }

/************************** List of Applicants  *********************************/


/************************** Batch Control  *********************************/
    
    function list_batch_control(){
        $this->db->select('*');
        $this->db->where('is_training','1');
        $this->db->from('batch_no');
        $query = $this->db->get();
        return $query->result();


    }

    function list_request(){
        //$query = $this->db->query("SELECT * FROM request WHERE current != limit_no && is_training =1 ORDER BY batch_control_no ASC LIMIT 1");
        $this->db->select('*');
        $this->db->where('is_deployed',0);
        $this->db->where('confirmed',1);
        $this->db->from('request');
        $query = $this->db->get();
        return $query->result();
    }

    /********* EDIT BATCH ******/
    function getBatchDetails($id){

        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from('batch_no');
        $query = $this->db->get();
        return $query->result();

    }

    function editBatchControl($id,$data){
        $this->db->where('id',$id);
        $this->db->update('batch_no', $data);
        return true;
    }

    /********* EDIT BATCH ******/
    function getCompany($id){
        $this->db->select('*');
        $this->db->where('request_id',$id);
        $this->db->from('request');
        $query = $this->db->get();
        return $query->result();
    }

    function getIdBatchControl($id){

        $this->db->select('*');    
        $this->db->from('batch_no');
        $this->db->where('request_id',$id);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }


    function addBatchNo($data){

        $this->db->insert('batch_no', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;  
    }


    function updateRequest($id){
      
        $this->db->where('request_id', $id);
        $this->db->update('request',array('is_training'=>'1'));
        return TRUE;
    }

    function batchInfoView($id){
        
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from('batch_no');
        $query = $this->db->get();
        return $query->result();


    }

    function batch_list_view($id){
        $this->db->select('*');
        $this->db->where('batch_control_no',$id);
        $this->db->from('hris');
        $query = $this->db->get();
        return $query->result();
    }

/************************** Batch Control  *********************************/
    

/************************** Accept Applicant  *********************************/

    function getInfo($id){
        $status = "0";
        $this->db->select('*');
        $this->db->where('register_id',$id);
        $this->db->where('active', $status);
        $this->db->from('registration');
        $query = $this->db->get();
        return $query->result();
         
         /*if( $query->num_rows() > 0 ) {
                echo json_encode($query);
            } 
            else {
                $output_string = "There is no result";
                echo json_encode($output_string);
            }
        */ 
    }

    function batchInfo($id,$batch_no){
        $query = $this->db->query("SELECT *
                        FROM batch_no
                        JOIN request ON batch_no.request_id = request.request_id
                        WHERE (
                        current != limit_no
                        AND batch_no.batch_control_no =  '".$batch_no."'
                        )
                        AND batch_no.request_id =  '".$id."'");
        /*$this->db->select('*');     
        $this->db->from('batch_no');
        $this->db->where('batch_no.batch_control_no',$batch_no);
        $this->db->where('batch_no.request_id',$id);
        $this->db->join('request', 'request.request_id = batch_no.request_id');
        $query = $this->db->get();*/
        return $query->result();

    }

    
    function add_trainee_hris($data) {  
 
        $this->db->insert('hris', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    }

    function update_userTable($reg_id,$data){

        $this->db->where('user_id', $reg_id);
        $this->db->update('user_table',$data);
       
        return TRUE;
        //$id = $this->db->update_id();
        //return (isset($id)) ? $id : TRUE;     

    }

    function update_registration($id){

        $this->db->where('register_id', $id);
        $this->db->update('registration',array('active'=>'1'));
        return TRUE;
        //$id = $this->db->update_id();
        //return (isset($id)) ? $id : TRUE; 

    }

    function updateBatch($batch_control_no,$current){
        $this->db->where('batch_control_no',$batch_control_no);
        $this->db->update('batch_no',array('current' => $current));
        return TRUE;
    }

    function insertAttendance($data){
        $this->db->insert('trainee_attendance', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   

    }


    function getBatch(){
        $query = $this->db->query("SELECT * 
                        FROM batch_no
                        WHERE is_training =1
                        AND current != limit_no
                        GROUP BY request_id
                        ORDER BY batch_control_no ASC 
                        LIMIT 0 , 30");
        return $query->result();

    }


    /*************************/ 
    function is_registration_queue($id){
        $this->db->select('*');
        $this->db->where('register_id',$id);
        $this->db->from('registration_queue');
        $query = $this->db->get();
        return $query->result();
    }

    function insertIncDocuments($data){
        $this->db->insert('registration_queue', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   

    }

    function updateIncDocuments($id,$data){
        
        $this->db->where('register_id',$id);
        $this->db->update('registration_queue',array('requirements'=>$data));
        return TRUE;
    }

/************************** Accept Applicant  *********************************/ 







  
    


    


 


}