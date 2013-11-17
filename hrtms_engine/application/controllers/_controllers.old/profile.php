<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("profile_model");
		$this->load->library("form_validation");
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('User/hris/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			$id = $this->session->userdata('user_id');
			//$this->load->model('profile_model');
			$query = $this->profile_model->profile_client($id);
			$data['records'] = $query;	  
			$this->load->view('User/client/profile_view',$data);
	 
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			$id = $this->session->userdata('user_id');
			//$this->load->model('profile_model');
			$query = $this->profile_model->profile_trainee($id);
			$data['records'] = $query;	
			$this->load->view('User/trainee/profile_view',$data);
		}  
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant') {
			$id = $this->session->userdata('user_id');
			//$this->load->model('profile_model');
			$query = $this->profile_model->profile_applicant($id);
			$data['records'] = $query;

		
			$this->load->view('User/applicant/profile_view',$data);
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
		
	}
	public function HRIS()
	{
		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('User/hris/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->view('User/client/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			$id = $this->session->userdata('user_id');
			$query = $this->profile_model->profile_trainee($id);
			$data['records'] = $query;			
			$this->load->view('User/trainee/hris_view',$data);
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant') {
			$id = $this->session->userdata('user_id');
			$query = $this->profile_model->profile_applicant($id);
			$data['records'] = $query;
			$this->load->view('User/applicant/profile_view',$data);
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
		
	}


	public function edit_profile(){

   		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('User/hris/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->view('User/client/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			
			$this->load->view('User/trainee/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant')
		{

			//load the registration helper under helper folder
			$this->load->helper('registration_helper');

			//validate form input
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
			$this->form_validation->set_rules('middle_name', 'Middle Name', 'xss_clean');
			$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'required|xss_clean');
			$this->form_validation->set_rules('province', 'Province', 'required|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
			$this->form_validation->set_rules('height', 'Height', 'required');
			$this->form_validation->set_rules('civil_status', 'Civil Status', 'required');
			
			
			if ($this->form_validation->run() == true)
			{
				$data = array(
					'first_name' 	=> $this->input->post('first_name'),
					'last_name'  	=> $this->input->post('last_name'),
					'middle_name'	=> $this->input->post('middle_name'),
					//'birth_date'  	=> $this->input->post('birth_date_year') . '-' .$this->input->post('birth_date_month') . '-'. $this->input->post('birth_date_day') ,
					'birth_date'    => $this->input->post('date_of_birth'),
					'address'    	=> $this->input->post('address'),
					'city'    		=> $this->input->post('city'),
					'province'    	=> $this->input->post('province'),
					'phone'      	=> $this->input->post('phone'),
					'height'      	=> $this->input->post('height'),
					'civil_status'  => $this->input->post('civil_status'),
					'date_change'	=> date('Y-m-d H:i:s'),
				);
			}
			if ($this->form_validation->run() == true )
			{ 
				//check to see if we are creating the user
				//redirect them to checkout page
				$id = $this->session->userdata('user_id');
      			$this->profile_model->change_info($id,$data);
      			$success_message = "Changes Successfully";
      		 	//$this->session->set_flashdata('message2',"Changes Successfully"); 
		       
		       	$this->session->set_flashdata('success',$success_message); 
		        redirect(base_url().'profile/edit_profile', 'refresh');
		        //$this->load->view('User/applicant/edit_profile_view',$this->data);
			}
			else
			{ 
				$id = $this->session->userdata('user_id');
				//$this->load->model('profile_model');
				$query = $this->profile_model->profile_applicant($id);
				$this->data['records'] = $query;
				//display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
				
	
				$this->data['err'] = '';
				$this->load->view('User/applicant/edit_profile_view',$this->data);
				//$this->load->view('registration/registration_view', $this->data);
				
			}
			//
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
	}
	public function edit_account(){

   		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('User/hris/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->view('User/client/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			
			$this->load->view('User/trainee/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant')
		{

			//validate form input
	
			
			$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
			//$this->form_validation->set_rules('email_confirm', 'Email Address Confrimation', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]|is_unique[registration.username]');
			$this->form_validation->set_rules('oldpassword', 'Password', 'required|matches[password_confirm]|min_length[6]');
			$this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');
			$this->form_validation->set_rules('agree', '...', 'callback_terms_check');
			
			
			if ($this->form_validation->run() == true)
			{
				$data = array(
					'username' 		=> strtolower($this->input->post('username')),
					'password' 		=> md5($this->input->post('password')),
					'email' 		=> $this->input->post('email'),
					'date_change'	=> date('Y-m-d H:i:s'),
				);
			}
			if ($this->form_validation->run() == true )
			{ 
				//check to see if we are creating the user
				//redirect them to checkout page
      			$this->profile_model->change_info($data);
      			$success = "Changes Successfully";
      			$this->data = array (
		            	'message' => $success
		          );  
		        $this->session->set_userdata($this->data);
		        redirect(base_url().'profile/edit_profile', 'refresh');
		        //$this->load->view('User/applicant/edit_profile_view',$this->data);
			}
			else
			{ 
				$id = $this->session->userdata('user_id');
				//$this->load->model('profile_model');
				$query = $this->profile_model->profile($id);
				$this->data['records'] = $query;
				//display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			
				$this->load->view('User/applicant/edit_profile_view',$this->data);
				//$this->load->view('registration/registration_view', $this->data);
				
			}
			//
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
	}

	function do_upload()
	{
		$config['upload_path'] = './assets/avatars/';	
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '';
		$config['overwrite'] = true;
		$config['file_name'] = $this->input->post('applicant_id');
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		$id = $this->session->userdata('user_id');

		if ( ! $this->upload->do_upload())
		{
			$this->load->helper('registration_helper');
			
			//$this->load->model('profile_model');
			$query = $this->profile_model->profile_applicant($id);
			$this->data['records'] = $query;
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			
			foreach($this->data['records'] as $row){
			
			$birthdate = $row->birth_date;
			
			}
			//$birthdate = $this->data['records']['full_name'];

			list($y,$m,$d) = explode('-', $birthdate);
			/**/
			$this->data['birth_date_year'] = buildYearDropdown('birth_date_year', $y);
			
			$this->data['birth_date_month'] = buildMonthDropdown('birth_date_month', $m );
			
			$this->data['birth_date_day'] = buildDayDropdown('birth_date_day', $d );
			
			$this->data['country'] = buildCountryDropdown('country', $this->input->post('country'));

			$this->data['err'] = $this->upload->display_errors();
			$this->load->view('user/applicant/edit_profile_view', $this->data);
		}
		else
		{	

			$file_name = $config['file_name'].".jpg";
			$data = array(
				'image_url' => $file_name
				);
			$id = $this->session->userdata('user_id');
  			$this->profile_model->change_info($id,$data);
  			$success_message = "Changes Successfully";

  			//Register on user_table as well
  			$this->db->query("UPDATE user_table SET image_file='$file_name' WHERE user_id='$id'");
  		 	//$this->session->set_flashdata('message2',"Changes Successfully"); 
	       
	       	$this->session->set_flashdata('success',$success_message); 

	       	redirect(base_url().'profile/edit_profile','refresh');
			
			//var_dump($data);
		}
		
	}

	function change_avatar()
	{
		$config['upload_path'] = './assets/avatars/';	
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '';
		$config['overwrite'] = true;
		$config['file_name'] = $this->input->post('user_id');
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);

		$this->upload->initialize($config); 

		$id = $this->session->userdata('user_id');

		$this->upload->do_upload();

		$file_name = $config['file_name'].".jpg";

		$data = array(
			'image_file' => $file_name
			);
		
		$this->db->query("UPDATE user_table SET image_file='$file_name' WHERE user_id='$id'");

		$success_message = "Changes Successfully";
       
       	$this->session->set_flashdata('success',$success_message); 
       	$this->session->set_userdata('image_file', $file_name);

       	redirect(base_url().'myprofile','refresh');

	}

	function change_pass() {

		$oldpassword = md5($this->input->post('old_password'));
		$newpassword = md5($this->input->post('password'));
		$id = $this->session->userdata('user_id');

		$q = $this->db->query("SELECT password FROM user_table WHERE user_id='$id'");

		if(md5($q->row()->password) == md5($oldpassword)) {

			$this->db->query("UPDATE user_table SET password='$newpassword' WHERE user_id='$id'");
			$this->session->set_userdata('password', $newpassword);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Password successfully changed.</div>'); 
			redirect(base_url().'myprofile','refresh');
		}
		else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Invalid password.</div>'); 
			redirect(base_url().'myprofile','refresh');
		}

	}

	function change_email() {

		
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');
		$id = $this->session->userdata('user_id');

		$q = $this->db->query("SELECT password FROM user_table WHERE user_id='$id'");

		$this->form_validation->set_rules('email', 'email', 'is_unique[user_table.email]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-warning">Email is existing.</div>'); 
			redirect(base_url().'myprofile','refresh');
			return false;
		}

		if(md5($q->row()->password) == md5($password)) {

			$this->db->query("UPDATE user_table SET email='$email' WHERE user_id='$id'");
			$this->session->set_userdata('email', $email);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Email successfully changed.</div>'); 
			redirect(base_url().'myprofile','refresh');
		}
		else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Invalid password.</div>'); 
			redirect(base_url().'myprofile','refresh');
		}

	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
