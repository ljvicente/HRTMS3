<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hris extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("hris_model");
		$this->load->library("form_validation");
	}

	public function personal_info(){
		
		if($this->session->userdata('is_logged_in')){
			$id = $this->session->userdata('user_id');
			//$this->load->model('hris_model');
			$query = $this->hris_model->profile_trainee($id);
			$data['records'] = $query;
			$this->load->view('user/trainee/personal_info',$data);
		}
		else
		{
			$this->session->set_userdata('login_type', 'candidate');
			$this->load->view('login_view_training');
		}
	
	}
	public function personal_accounts()
	{
		
		if($this->session->userdata('is_logged_in')){
			$id = $this->session->userdata('user_id');
			//$this->load->model('hris_model');
			$query = $this->hris_model->profile_trainee($id);
			$data['records'] = $query;
			$this->load->view('user/trainee/personal_acc',$data);
		}
		else
		{
			$this->session->set_userdata('login_type', 'candidate');
			$this->load->view('login_view_training');
		}
		
	}
	public function marital_info()
	{
		
		if($this->session->userdata('is_logged_in')){
			$id = $this->session->userdata('user_id');
			//$this->load->model('hris_model');
			$query = $this->hris_model->profile_trainee($id);
			$data['records'] = $query;
			$query2 = $this->hris_model->marital_info($id); 
			$data['records2'] = $query2;

			$query3 = $this->hris_model->civilStatus($id); 
			$data['records3'] = $query3;

			$this->load->view('user/trainee/marital_info',$data);
		}
		else
		{
			$this->session->set_userdata('login_type', 'candidate');
			$this->load->view('login_view_training');
		}
	
	}
	public function educational_background()
	{
		
		if($this->session->userdata('is_logged_in')){
			$id = $this->session->userdata('user_id');
			//$this->load->model('hris_model');
			$query = $this->hris_model->profile_trainee($id);
			$data['records'] = $query;
			$query2 = $this->hris_model->employment_history($id);
			$data['records2'] = $query2;

			$this->load->view('user/trainee/educational_background',$data);
		}
		else
		{
			$this->session->set_userdata('login_type', 'candidate');
			$this->load->view('login_view_training');
		} 
		
	} 
	public function others()
	{
		
		if($this->session->userdata('is_logged_in')){
			//Dependent Table
			$query = $this->hris_model->dependent($id);
			$data['records'] = $query;
			//Beneficiary Table
			$query2 = $this->hris_model->beneficiary($id);
			$data['records2'] = $query2;
			//Beneficiary Table
			$query3 = $this->hris_model->character_reference($id);
			$data['records3'] = $query3;

			$this->load->view('user/trainee/others',$data);
		}
		else
		{
			$this->session->set_userdata('login_type', 'candidate');
			$this->load->view('login_view_training');
		}
		$id = $this->session->userdata('user_id');
	
	}


	function updatePersonalInfo(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		$m = $this->input->post('middle_name');
		$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		$id = $this->session->userdata('user_id');
		//$this->output->set_output(json_encode($name));

		$this->form_validation->set_rules('first_name', 'first_name', 'trim|xss_clean');
		$this->form_validation->set_rules('last_name', 'last_name', 'trim|xss_clean');
		$this->form_validation->set_rules('middle_name', 'middle_name', 'trim|xss_clean');
		$this->form_validation->set_rules('nickname', 'nickname', 'trim|xss_clean');
		$this->form_validation->set_rules('birthdate', 'birthdate', 'trim|xss_clean');
		 
		$personal_info = array(
        			//'first_name' => $this->input->post('first_name'),
        			//'last_name' => $this->input->post('last_name'),
        			//'middle_name' => $this->input->post('middle_name'),
        			'nickname' => $this->input->post('nickname'),
        			//'birthdate' => $this->input->post('birthdate'),
        			'place_of_birth' => $this->input->post('place_of_birth'),
        			'allergy' => $this->input->post('allergy'),
        			'citizenship' => $this->input->post('citizenship'),
        			//'place_of_birth' => $this->input->post('place_of_birth'),
        			//'civil_status' => $this->input->post('civil_status'),
        			//'height' => $this->input->post('height'),
        			'weight' => $this->input->post('weight'),
        			'blood_type' => $this->input->post('blood_type'),
        			'religion' => $this->input->post('religion'),
        			'home_no' => $this->input->post('home_no'),
        			'mobile_no' => $this->input->post('mobile_no'),
        			'alternative_no' => $this->input->post('alternative_no'),        			
        			'present_address' => $this->input->post('present_address'),
        			'present_city' => $this->input->post('present_city'),
        			'present_province' => $this->input->post('present_province'),
        			//'gender' => $this->input->post('gender'),
        			'provincial_address' => $this->input->post('provincial_address'),
        			'provincial_city' => $this->input->post('provincial_city'),
        			'provincial_province' => $this->input->post('provincial_province'),
        			'mailing_address' => $this->input->post('mailing_address'),
        			'mailing_city' => $this->input->post('mailing_city'),
        			'mailing_province' => $this->input->post('mailing_province'),
        			'father_name' => $this->input->post('father_name'),
        			'father_occupation' => $this->input->post('father_occupation'),
        			'father_age' => $this->input->post('father_age'),
        			'father_occupation_address' => $this->input->post('father_occupation_address'),
        			'father_address' => $this->input->post('father_address'),
        			'father_contact_no' => $this->input->post('father_contact_no'),
        			'mother_name' => $this->input->post('mother_name'),
        			'mother_occupation' => $this->input->post('mother_occupation'),
        			'mother_age' => $this->input->post('mother_age'),
        			'mother_occupation_address' => $this->input->post('mother_occupation_address'),
        			'mother_address' => $this->input->post('mother_address'),
        			'mother_contact_no' => $this->input->post('mother_contact_no'),
        			'skills' => $this->input->post('skills'),
        			'hobbies' => $this->input->post('hobbies'),
        			'interests' => $this->input->post('interests'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
		//$name .= $this->input->post('present_address') . $this->input->post('present_city') . $this->input->post('present_province');
		//echo 'asd'.$this->input->post('skills');
    			
		$this->load->model('hris_model');
		$this->hris_model->personal_info($personal_info,$id);
	
		}
		else {

			 header( 'Location: personal_info' ) ;
		}
		
	}

	function updatePersonalAcc(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));
		$id = $this->session->userdata('user_id');
		$personal_info = array(
        			'sss_no' => $this->input->post('sss_no'),
        			'tin_no' => $this->input->post('tin_no'),
        			'philhealth_no' => $this->input->post('philhealth_no'),
        			'pagibig_no' => $this->input->post('pagibig_no'),
        			'tax_status' => $this->input->post('tax_status'),
        			/*'passport_no' => $this->input->post('passport_no'),
        			'passport_issue_date' => $this->input->post('passport_issue_date'),
        			'passport_issue_country' => $this->input->post('country'),
        			'passport_issue_place' => $this->input->post('passport_issue_place'),
        			'passport_expiration_date' => $this->input->post('passport_expiration_date'),*/
        			'license_type' => $this->input->post('license_type'),
        			//'license_issue_date' => $this->input->post('license_issue_date'),
        			'license_issue_place' => $this->input->post('license_issue_place'),
        			'license_expiration_date' => $this->input->post('license_expiration_date'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
		//$name .= $this->input->post('present_address') . $this->input->post('present_city') . $this->input->post('present_province');
		//echo $name;
		$date = $this->input->post('license_issue_date');
    	if($date){
    		//array_push($personal_info, "'license_issue_date' => $date");	
    		$personal_info['license_issue_date'] = $date;
    	}
    	else
    	{
    		$personal_info['license_issue_date'] = null;
    	}
			$this->load->model('hris_model');
			$this->hris_model->personal_info($personal_info,$id);
	
		}
		else {

			 header( 'Location: personal_acc' ) ;
		}
		
	}
	function updateMaritalInfo(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));
			$id = $this->session->userdata('user_id');
			$personal_info = array(
        			'marriage_date' => $this->input->post('marriage_date'),
        			'marriage_place' => $this->input->post('marriage_place'),
        			'spouse_first_name' => $this->input->post('spouse_first_name'),
        			'spouse_middle_name' => $this->input->post('spouse_middle_name'),
        			'spouse_last_name' => $this->input->post('spouse_last_name'),
        			'spouse_birthdate' => $this->input->post('spouse_birthdate'),
        			'spouse_contact_no' => $this->input->post('spouse_contact_no'),
        			'spouse_occupation' => $this->input->post('spouse_occupation'),
           		
        			'date_edit' => date('Y-m-d H:i:s')
        		);
			$date = $this->input->post('spouse_occupation_address');
			if($date){
				$personal_info['spouse_occupation_address'] = $date;
			}
			else{
				//$personal_info['spouse_occupation_address'] = null;
			}
			$this->load->model('hris_model');
			$this->hris_model->personal_info($personal_info,$id);
        
	 
		}
		else {

			 header( 'Location: Marital_info' ) ;
		}

		
	}
	function updateEducation(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));\
			$id = $this->session->userdata('user_id');
			$education = array(
        			'educational_level' => $this->input->post('highest_educ'),
        			'school_name' => $this->input->post('school'),
        			'education_from' => $this->input->post('school_s'),
        			'education_to' => $this->input->post('school_e'),
        			'education_course' => $this->input->post('course'),
        			'honors' => $this->input->post('school_honor'),
        			'vacancy' => $this->input->post('vacancy'),
        			'date_edit' => date('Y-m-d H:i:s')
        		); 
			//$this->load->model('hris_model');
			//echo $this->input->post('school_honor');
			$this->hris_model->personal_info($education,$id);
 			//echo $this->input->post('school_honor');
        	//echo $this->input->post();
	 
		}
		else {

			 header( 'Location: educational_background' ) ;
		}
		
	}
	function insertChildren(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('child_name');
			$dob=$this->input->post('child_dob');
			$school_work=$this->input->post('child_school_work');
			$id=$this->session->userdata('user_id');
			$count = count($this->input->post('child_name'));
    		/*$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'trainee_id' => $id, 
			           'children_name' => $name[$i],
			           'children_birthdate' => $dob[$i],
			           'children_school_or_work' => $school_work[$i],

			           );
			}
			$this->db->insert_batch('hris_children', $data);*/
			$data = array(
				'trainee_id' => $id, 
				'children_name' => $name,
				'children_birthdate' => $dob,
				'children_school_or_work' => $school_work 
				);

			$this->hris_model->insert_children($data);
			//$this->output->set_output(json_encode($name.'-'.$dob.'-'.$school_work));
			$query = $this->hris_model->getIdChildren($id);
			echo json_encode ($query);				


		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}

	function insertDependent(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('dependent_name');
			$dob=$this->input->post('dependent_dob');
			$relationship=$this->input->post('dependent_relationship');
			$id=$this->session->userdata('user_id');
			/*$count = count($this->input->post('dependent_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'trainee_id' => $id, 
			           'dependent_name' => $name[$i],
			           'dependent_birthdate' => $dob[$i],
			           'dependent_relationship' => $relationship[$i]

			           );
			}

			$this->db->insert_batch('hris_dependent', $data);
			*/
			$data = array(
			           'trainee_id' => $id, 
			           'dependent_name' => $name,
			           'dependent_birthdate' => $dob,
			           'dependent_relationship' => $relationship
			           );

			$this->hris_model->insert_dependent($data);
			//$this->output->set_output(json_encode($name.'&&'.$dob.'&&'.$relationship));

			$query = $this->hris_model->getIdDependent($id);
			echo json_encode ($query);
			
		}
		else {

			 header( 'Location: Others' ) ;
		}
		
	}
	function insertBeneficiary(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('beneficiary_name');
			$dob=$this->input->post('beneficiary_dob');
			$relationship=$this->input->post('beneficiary_relationship');
			$id=$this->session->userdata('user_id');
			/*$count = count($this->input->post('beneficiary_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'trainee_id' => $id, 
			           'beneficiary_name' => $name[$i],
			           'beneficiary_birthdate' => $dob[$i],
			           'beneficiary_relationship' => $relationship[$i]

			           );
			}

			$this->db->insert_batch('hris_beneficiary', $data);
			*/
			$data = array(
			           'trainee_id' => $id, 
			           'beneficiary_name' => $name,
			           'beneficiary_birthdate' => $dob,
			           'beneficiary_relationship' => $relationship

			           );
			$this->hris_model->insert_beneficiary($data);

			//$this->output->set_output(json_encode($name.'&&'.$dob.'&&'.$relationship));
			$query = $this->hris_model->getIdBeneficiary($id);
			echo json_encode ($query);

		}
		else {

			 header( 'Location: Others' ) ;
		}
		
	}
	
	function insertCharacterReference(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('CR_name');
			$company=$this->input->post('CR_company_name');
			$contact=$this->input->post('CR_contact_no');
			$id=$this->session->userdata('user_id');
			/*$count = count($this->input->post('CR_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'trainee_id' => $id, 
			           'character_name' => $name[$i],
			           'character_company' => $company[$i],
			           'character_contact_no' => $contact[$i]
			            );
			}

			$this->db->insert_batch('hris_character_reference', $data);
			*/
			$data = array(
			           'trainee_id' => $id, 
			           'character_name' => $name,
			           'character_company' => $company,
			           'character_contact_no' => $contact
			            );
			$this->hris_model->insert_character_reference($data);
			//$this->output->set_output(json_encode($name.'&&'.$company.'&&'.$contact));
			$query = $this->hris_model->getIdCharacterReference($id);
			echo json_encode ($query);

		}
		else {

			 header( 'Location: others' ) ;
		}
		
	}

	function insertEmploymentHistory(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('EH_company_name');
			$loc=$this->input->post('EH_company_location');
			$position=$this->input->post('EH_company_position');
			$start = $this->input->post('EH_company_date_s');
			$end = $this->input->post('EH_company_date_e');
			$reason = $this->input->post('reason');
			$id=$this->session->userdata('user_id');
			$count = count($this->input->post('EH_company_name'));
    		/*$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'trainee_id' => $id, 
			           'employment_company_name' => $name[$i],
			           'employment_location' => $loc[$i],
			           'employment_position' => $position[$i],
			           'employment_from' => $start[$i],
			           'employment_to' => $end[$i],
			           'employment_reason_leave' => $reason[$i]

			           );
			}*/
			//$this->db->insert_batch('hris_employment_history', $data);
			
			$data = array(
				   'trainee_id' => $id, 
		           'employment_company_name' => $name,
		           'employment_location' => $loc,
		           'employment_position' => $position,
		           'employment_from' => $start,
		           'employment_to' => $end,
		           'employment_reason_leave' => $reason

				);

			$this->hris_model->insert_employment_history($data);

			//$this->output->set_output(json_encode($name.'-'.$loc.'-'.$position.'-'.$start.'-'.$end.'-'.$reason));
			$query = $this->hris_model->getIdEmploymentHistory($id);
			echo json_encode ($query);

		}
		else {

			 header( 'Location: educational_background' ) ;
		}
		
	}
	

	

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */

