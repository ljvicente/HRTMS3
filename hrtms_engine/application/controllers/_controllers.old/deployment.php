<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deployment extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$this->load->model('applicant_model');
			$query = $this->applicant_model->list_request();
			
			$data['records2'] = $query;
			
			$this->load->view('trainee/deployment_view',$data);
		}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	

	}

	function list_deployment(){
		$id = $this->input->post('id');

		$this->load->model('deployment_model');
		$data = $this->deployment_model->request_info($id);

		//$id = 'AMI-REQ-130001';
		$q = $this->db->query('SELECT batch_control_no FROM batch_no where request_id = "'.$id.'"');
	    $query = "";
      	foreach ($q->result() as $row) {
        	$query .= "deployment_pooling.batch_control_no = '$row->batch_control_no' || ";
      	}

      	$query = substr($query,0,(strlen($query)-3));
      	//echo $query;

      	$data2 = $this->deployment_model->list_trainee($query);
      	//var_dump($data);
		$str['info'] = "";
		foreach ($data as $row) {
			$client_name = $row->company;
	        $no_of_manpower = $row->no_of_manpower;
	        $date_requested = $row->date_requested;
	        $is_to = $row->is_to;
	        $emp_type = $row->emp_type;
		        if($emp_type == 1){
					$emp_type = "Contractual";
				}
				if($emp_type == 2){

					$emp_type = "Regular";
				}
				if($emp_type == 3){

					$emp_type = "Probation";
				}

			$emp_department = $row->emp_department;
			 $emp_gender = $row->emp_gender;
	            
	            if($emp_gender == 1) {

	              $emp_gender  = "Male Only";
	            }
	            if($emp_gender == 2) {

	              $emp_gender  = "Female Only";
	            }
	            if($emp_gender == 3) {

	              $emp_gender  = "Male / Female";
	            }
            $remarks = $row->remarks;
            $remarks = $remarks. ", $emp_gender";
            $remarks = preg_replace('/\.$/', '', $remarks); //Remove dot at end if exists
            $array = explode(',', $remarks); //split string into array seperated by ', '
            $remarks = "";

            foreach($array as $value) //loop over values
            {
              $remarks .= $value .", "; //print value
            }

            $emp_reqdocuments = $row->emp_reqdocuments;
            $emp_reqdocuments = preg_replace('/\.$/', '', $emp_reqdocuments); //Remove dot at end if exists
            $array = explode(',', $emp_reqdocuments); //split string into array seperated by ', '
            $emp_reqdocuments ="";

            foreach($array as $value) //loop over values
            {
              $emp_reqdocuments .= $value .", "; //print value
            }

		}
	

		$str['info'] .= "<table class=\"table table-bordered\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
		$str['info'] .="<tr><td>Company :</td><td>". $client_name ."</td></tr>";
		$str['info'] .= "<tr><td>Manpower :</td><td>". $no_of_manpower ."</td></tr>";
		$str['info'] .= "<tr><td>From :</td><td>". $date_requested ."</td></tr>";
		$str['info'] .= "<tr><td>To :</td><td>". $is_to ."</td></tr>";
		$str['info'] .= "<tr><td>Type :</td>";
		$str['info'] .= "<td>". $emp_type ."</td></tr>";
		//$str['info'] .= "</td></tr>";
		$str['info'] .= "<tr><td>Department :</td><td>". $emp_department ."</td></tr>";
		$str['info'] .= "<tr><td>Remarks :</td><td>". $remarks ."</td></tr>";
		$str['info'] .= "<tr><td>Documents :</td><td>". $emp_reqdocuments ."</td></tr>";
		$str['info'] .= "</table>";
		$str['hris']  = "";
		$str['hris'] .= "<table class='table table-striped table-bordered' id='table_report' > 
                            <thead>
                            <tr>
                                <th class='center'>
                                    Training ID
                                </th>
                                <th class='center'> Name
                                </th>
                                <th class='center'>
                                    Contact No.
                                </th>
                                <th >
                                   
                                </th>
                            </tr> 
                            </thead> ";
       	$str['hris'] .= "<tbody>";
       	foreach($data2 as $row ){
			$str['hris'] .= "<tr>";
			$str['hris'] .= "<td>$row->trainee_id</td>";
			$str['hris'] .= "<td>$row->last_name, $row->first_name  $row->middle_name</td>";
			$str['hris'] .= "<td>$row->mobile_no / $row->home_no</td>";
			$str['hris'] .= "<td><button class=\"btn btn-info btn-mini\" onclick=\"confirm('$row->trainee_id')\">Confirmation</button></td>";
			$str['hris'] .= "</tr>";

		}

       	$str['hris'] .= "</tbody></table>";

		echo json_encode($str);





	}

	function deploy_trainee(){

		$id = $this->input->post('id');
		$this->load->model('deployment_model');
		$this->deployment_model->deploy($id);
		echo $id;

	}
	
}

/* End of file deployment.php */
/* Location: ./application/controllers/deployment.php */