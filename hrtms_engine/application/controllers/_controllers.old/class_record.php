<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_Record extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query2 = $this->report_model->exam_set_batch();
			$data['records2'] = $query2;
			
			$this->load->view('user/training/class_record_view',$data);
		}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	
	}

	function exam_id(){
    	$batch=$this->input->post('batch');

        
        $batch=$this->input->post('batch');

        $q = $this->db->query('SELECT sum(over) as over from gradesheet group by trainee_id order by over desc limit 1');

        $max = $q->row()->over;
        $query1 = $this->db->query('SELECT hris.first_name, hris.last_name, hris.middle_name, gradesheet.id, exam_id, hris.trainee_id, sum(score) as score, sum(over) as over, batch_id, status 
            FROM gradesheet LEFT JOIN HRIS ON gradesheet.trainee_id = hris.trainee_id  WHERE STATUS != "failed"
            GROUP BY trainee_id
            HAVING MAX( over ) < over');



        //$this->db->join('examination','exam_set.exam_id = examination.examination_id');
        $str['overall'] = "";
        if ($query1->num_rows() > 0)
        {   
            $str['overall'] .= "<button onclick='xf()' class='btn btn-conf btn-danger btn-small' style='margin-bottom:10px;'>Add  Batch to Deployment Queue</button>";
             $str['overall'] .= "  <table class='table table-striped table-bordered' id='table_report' > 
                            <thead>
                            <tr>
                                <th class='center'>
                                    Training ID
                                </th>
                                <th class='center'> Name
                                </th>
                                <th class='center'>
                                    Scores
                                </th>
                                <!--<th  class='center'>
                                    Status
                                </th>-->
                            </tr> 
                            </thead>        
                    ";  
            $str['overall'] .= "<tbody>"; 
            
           foreach ($query1->result() as $row)
           {
              
              $str['overall'] .= "<tr> 
                            <td> $row->trainee_id</td>
                            <td>  $row->last_name, $row->first_name $row->middle_name </td>
                            <td class='center'> $row->score/$row->over</td>
                            <!--<td class='center'> ". strtoupper($row->status)."</td>-->
                        </tr>";
                 $this->db->query('DELETE FROM deployment_pooling WHERE training_id="'.$row->trainee_id.'"');

                 //$query3 = $this->db->query('SELECT deployment_pooling WHERE training_id="'.$row->trainee_id.'"');
                 
                 //$count = $query3->num_rows();

                 //if($count === 0) {
                    
                    $this->db->query('INSERT INTO deployment_pooling (training_id, batch_control_no) VALUES ("'.$row->trainee_id.'","'.$row->batch_id.'")');
                //}
            }
            $str['overall'] .= "</tbody></table>";
           
        }
        

       	$this->db->select('*');
        $this->db->from('exam_set');
        $this->db->join('examination','exam_set.exam_id = examination.examination_id');
       // $this->db->where('batch_id',$batch);
        $query = $this->db->get();
       
        $str['exam_id'] = "";
	    if ($query->num_rows() > 0)
		{	
			$str['exam_id'] .= "<label >Examination name: </label>";
			$str['exam_id'] .= "<select class=\"chzn-select\" id=\"exam\">";
			$str['exam_id'] .= "<option value=\"\"></option>";
		   foreach ($query->result() as $row)
		   {
		      
		      $str['exam_id'] .= "<option value=".$row->exam_id." exam_name="."'".$row->examination_name."'".">";
		      $str['exam_id'] .= $row->examination_name;
		      $str['exam_id'] .= "</option>";
		   
		  
			}
			$str['exam_id'] .= "</select>";
		}
		//echo $str;
        echo json_encode($str);
        //echo json_encode($batch);

    }

	
    function gradesheetByExamId() {

    	$exam_id = $this->input->post('id');
    	$batch = $this->input->post('batch');
    	$exam_name = $this->input->post('name');
    	//echo json_encode($exam_id);


    	$this->db->select('hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status');
    	$this->db->from('hris');
    	$this->db->join('gradesheet', 'hris.trainee_id = gradesheet.trainee_id');
        $this->db->where('gradesheet.exam_id',$exam_id);
        $this->db->where('gradesheet.status','PASSED');
        $query = $this->db->get();

      	/*  $query = $this->db->query('select hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status 
        	from hris inner join gradesheet on hris.trainee_id = gradesheet.trainee_id where exam_id = '.$exam_id .'where status = "PASSED"');
        *///$this->db->order_by("hris.trainee_id", "asc"); 
        //
        $str = "";
        if ($query->num_rows() > 0)
		{	
			//$str .= "Examination name: ";
			$str .= "  <table class='table table-striped table-bordered' id='table_report' > 
                            <thead>
                            <tr>
                                <th class='center'>
                                    Training ID
                                </th>
                                <th class='center'> Name
                                </th>
                                <th class='center'>
                                    Scores
                                </th>
                                <!--<th  class='center'>
                                    Status
                                </th>-->
                            </tr> 
                            </thead>        
                    ";  
            $str .= "<tbody>"; 
		   	foreach ($query->result() as $row)
		   	{
		     	
		   		$str .= "<tr> 
                            <td> $row->trainee_id</td>
                            <td> $row->last_name, $row->first_name $row->middle_name</td>
                            <td class='center'> $row->score/$row->over</td>
                            <!--<td class='center'> ". strtoupper($row->status)."</td>-->
                        </tr>";
			}

			$str .= "</tbody></table>";
			
		}
		else
		{
			$str .= "NO RESULT";
		}
		echo json_encode($str);
    }

    function removalQueue() {

    	$exam_id = $this->input->post('id');
    	$batch = $this->input->post('batch');
    	$exam_name = $this->input->post('name');
    	//echo json_encode($exam_id);


    	$this->db->select('hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status');
    	$this->db->from('hris');
    	$this->db->join('gradesheet', 'hris.trainee_id = gradesheet.trainee_id');
        $this->db->where('gradesheet.exam_id',$exam_id);
        $this->db->where('gradesheet.status','FAILED');
        $query = $this->db->get();

      	/*  $query = $this->db->query('select hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status 
        	from hris inner join gradesheet on hris.trainee_id = gradesheet.trainee_id where exam_id = '.$exam_id .'where status = "PASSED"');
        *///$this->db->order_by("hris.trainee_id", "asc"); 
        //
        $str = "";
        $b = encrypt($batch);
        if ($query->num_rows() > 0)
		{	
			$str .= "<a class='btn btn-danger btn-small' style='margin-bottom:10px;' href='class_record/retake?bid=$b'>Conduct Removal Exam</a>";
			$str .= "  <table class='table table-striped table-bordered' id='table_report2' > 
                            <thead>
                            <tr>
                                <th class='center'>
                                    Training ID
                                </th>
                                <th class='center'> Name
                                </th>
                                <th class='center'>
                                    Scores
                                </th>
                                <!--<th  class='center'>
                                    Status
                                </th>-->
                            </tr> 
                            </thead>        
                    ";  
            $str .= "<tbody>"; 
		   	foreach ($query->result() as $row)
		   	{
		     	
		   		$str .= "<tr> 
                            <td> $row->trainee_id</td>
                            <td> $row->last_name, $row->first_name $row->middle_name</td>
                            <td class='center'> $row->score/$row->over</td>
                            <!--<td class='center'> ". strtoupper($row->status)."</td>-->
                        </tr>";
			}

			$str .= "</tbody></table>";
			
		}
		else
		{
			$str .= "NO RESULT";
		}
		echo json_encode($str);
    }

    function retake() {

    	$bid = decrypt($this->input->get("bid"));
    	$r = $this->db->query("DELETE FROM gradesheet WHERE batch_id='$bid' AND status='failed'");
    	$this->session->set_flashdata('message', '<div class="alert alert-info"><i class="icon-spin icon-spinner"></i> Removal Exam is now available.</div>');
    	redirect(base_url().'class_record','refresh');
    }
}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */