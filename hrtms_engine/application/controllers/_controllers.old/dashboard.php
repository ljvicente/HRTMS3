<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		

		$this->session->set_userdata("sender_id","0");

		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->model('request_model');
			$data['record'] = $this->request_model->list_request();
			$this->load->view('admin/dashboard_view', $data);
			
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			//$this->load->view('User/hris/dashboard_view');
			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->model('request_model');

			$data["record"] = $this->request_model->list_confirmed();
			$this->load->view('User/client/dashboard_view',$data);
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {

			$id = $this->session->userdata('user_id');
			$this->load->model("profile_model");
			$query = $this->profile_model->profile_trainee($id);
			$data['records'] = $query;

			$this->load->model("examination_model");
			$this->examination_model->active_exam();
			
			$id = $this->session->userdata("user_id");
	        $b_id = $this->session->userdata("b_id");
	        $this->session->set_userdata("show_exam","0");
	        $this->examination_model->exam_progress();

	        if($this->input->get("take_exam")) {

	        	$this->session->set_userdata("take_exam_id", $this->input->get("take_exam"));
	        	$this->session->set_userdata("show_exam","1");

	        }
	        else { 

	        	$this->session->unset_userdata("take_exam_id");
	        	$this->session->set_userdata("show_exam","0");

	        }

	        $is_took = $this->examination_model->check_gradesheet($id, $b_id, $this->input->get("take_exam"));
	        
	        if($is_took == 0) {

	        	$this->session->set_userdata("is_taken","0");
	        }
	        else {

	        	$this->session->set_userdata("is_taken","1");
	        }

	        $data["sets"] = $this->examination_model->exam_set_info($b_id);
	        $data["score"] = $this->examination_model->get_gradesheet($id, $b_id);
			
			$this->load->model("module_model");
	        $data["modules"] = $this->module_model->list_company_module();

			$this->load->view('User/trainee/dashboard_view',$data);

		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant') {
			$id = $this->session->userdata('user_id');
			$this->load->model('profile_model');
			$query = $this->profile_model->incDocuments($id);
			if($query){
				$data['records'] = $query;
				//echo "Meron";
			}
			else
			{
				$data = "";
			} 
			$this->load->view('User/Applicant/dashboard_view',$data);
		}
		else {

			$data = 0 ;
    		$this->load->view('index', $data);
		}
		
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */