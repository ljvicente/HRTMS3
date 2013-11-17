<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('attendance_model');
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			
			$query = $this->attendance_model->trainee_list();
			$data['records'] = $query;

		
			$this->load->view('user/training/attendance_view',$data);
		}
		else {
   			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	
	}


    function checker(){

    	$id = $this->input->post('id');
    	//$id = "AMI1305-TRAINEE-0002";
    	$q = $this->attendance_model->checker($id);
    	//$p = '';
    	
    	if($q){
    		$q2 = $this->attendance_model->is_already_present($id);

    		if($q2){
    			foreach ($q2 as $row) {
		    		$p = $row->present_days + 1;
		    	}
		    	$data = array(
		    			'present_days'=> $p,
		    			'last_attend' => date('Y-m-d') , 
		    		);
		    	$this->attendance_model->present($id,$data);
		    	echo 1;
    		}
    		
    		else
    		{
    			echo 0;
    		}
    		
    	}
    	else
    	{
    		echo json_encode($q);
    	} 
    


    }


  
// 	function present_applicant(){

// 		$data = array(
//  			   'name' => $name,
//     			'email' => $email
// );

// 		$this->
// 	}

	

}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */




