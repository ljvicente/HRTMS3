<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("register_model");
		$this->load->library("form_validation");
	}


	public function register(){
		//load the registration helper under helper folder
		$this->load->helper('registration_helper');

		//validate form input
		$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'xss_clean');
		/*$this->form_validation->set_rules('birth_date_year', 'Year', 'required');
		$this->form_validation->set_rules('birth_date_month', 'Month', 'required');
		$this->form_validation->set_rules('birth_date_day', 'Day', 'required');*/
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'required|xss_clean');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('province', 'Province', 'required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
		$this->form_validation->set_rules('height', 'Height', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('civil_status', 'Civil Status', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		//$this->form_validation->set_rules('email_confirm', 'Email Address Confrimation', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]|is_unique[user_table.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[password2]|min_length[6]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', '');
		
 
		$query =$this->db->query("select count(*) as count from registration where month(date_created) = month(now()) and year(date_created) = year(now()) group by month(date_created)");
		//$query2 =$this->db->query("select  register_id from registration order by register_id desc");
	
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->count + 1;
		   }
			$p = sprintf("%04d",$p) ;
			$date = date('Y'); //this returns the current date time
			$date2 = date('m');
			$reg_id = 'AMI' . substr($date, -2) .$date2 .'-REG-'.$p;
		}
		else
		{
			$p = '0001';
			$p = sprintf("%04d",$p) ;
			$date = date('Y'); //this returns the current date time
			$date2 = date('m');
			$reg_id = 'AMI' . substr($date, -2) .$date2 .'-REG-'.$p;

		}
		

		if ($this->form_validation->run() == true)
		{
			//$reg_id = "AMI1308-REG-0030";
			$data = array(
				'register_id'	=> $reg_id,
				'username' 		=> strtolower($this->input->post('username')),
				'email'    		=> $this->input->post('email'),
				'password' 		=> md5($this->input->post('password')),
				'first_name' 	=> $this->input->post('first_name'),
				'last_name'  	=> $this->input->post('last_name'),
				'middle_name'	=> $this->input->post('middle_name'),
				//'birth_date'  	=> $this->input->post('birth_date_year') . '-' .$this->input->post('birth_date_month') . '-'. $this->input->post('birth_date_day') ,
				'birth_date'	=> $this->input->post('date_of_birth'),
				'gender'		=> $this->input->post('gender'),
				'address'    	=> $this->input->post('address'),
				'city'    		=> $this->input->post('city'),
				'province'    	=> $this->input->post('province'),
				'phone'       	=> $this->input->post('phone'),
				'civil_status'  => $this->input->post('civil_status'),
				'height'       	=> $this->input->post('height'),
				'date_created'	=> date('Y-m-d H:i:s')
			);
			$userTable = array(
				'user_id'		=> $reg_id,
				'username' 		=> strtolower($this->input->post('username')),
				'email'    		=> $this->input->post('email'),
				'password' 		=> md5($this->input->post('password')),
				'first_name' 	=> $this->input->post('first_name'),
				'last_name'  	=> $this->input->post('last_name'),
				'middle_name'	=> $this->input->post('middle_name'),
				'date_created'	=> date('Y-m-d H:i:s'),
				'permission'    => 'Applicant'
				);
			
		}
		if ($this->form_validation->run() == true && $this->register_model->register($data) && $this->register_model->userTable($userTable))
		{ 
			//check to see if we are creating the user
			//redirect them to checkout page
	 		$this->load->view('registration/success');
	 		//$this->load->library('../controllers/authenticate/reg_to_login',strtolower($this->input->post('username')),$this->input->post('password'));
	 		//echo "Success";
		}
		else
		{ 

			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			/*			
			$this->data['birth_date_year'] = buildYearDropdown('birth_date_year', $this->input->post('birth_date_year'));
			
			$this->data['birth_date_month'] = buildMonthDropdown('birth_date_month', $this->input->post('birth_date_month'));
			
			$this->data['birth_date_day'] = buildDayDropdown('birth_date_day', $this->input->post('birth_date_day'));
			
			$this->data['country'] = buildCountryDropdown('country', $this->input->post('country'));*/

			$this->load->view('registration/registration_view', $this->data);
			
		}
		
	}
	
	

	//Registration
	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {

    		$this->load->view('Registration/guide_registration');
    		//$this->load->view('registration/guide_registration');
		}	
	
	} 

	function vacancy(){
		/*if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'dashboard');
		}
		else {*/

			$this->load->model('register_model');
			$data['records'] = $this->register_model->getRequestInfo();
			//var_dump($data['records']);
			$this->load->view('registration/vacancy',$data); 
		//}
	}

 
	//Location - SITE MAP
	public function site_map(){
		if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/site_map');
		}
		
	} 

	/* Requirements */
 

	public function requirements(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/requirements');
		}
		
	}
	public function screening(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/screening');
		}
		
	}



	//Photo
	public function photo_requirement(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/photo_requirements');
		}
		
	}
	//Documents
	public function required_documents(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/required_documents');
		}
		
	}
	//Expenses
	public function expenses(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/expenses');
		}
		
	}

	/* Screening */
	//Preliminary Exam
	public function prelim_exam(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/prelim_exam');
		}
		
	}
	//Interview
	public function interview_screen(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/interview_screen');
		}
		
	}
	//Medical Referral
	public function medical_referral(){
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/medical_referral');
		}
		
	}
 
	

}

/* End of file registration.php */
/* Location: ./application/controllers/registration.php */