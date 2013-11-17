<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('manage_model');
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}

	/******************* USERS UNIQUE VALUES ***************************************/
	function email_exists(){ 
	    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$email = $this->input->post('email');
			//$email = "jdc@mail.com";
			if ($this->manage_model->email_exists($email) == TRUE ) {
		      echo json_encode(FALSE); 
		    } else {
		      echo json_encode(TRUE); 
		    }

	   }
	   else {
		    header( 'Location: ../dashboard' );
		}
	}
	function username_exists(){ 
   	 	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$username = $this->input->post('username');
			if ( $this->manage_model->username_exists($username) == TRUE ) {
		      echo json_encode(FALSE);
		    } else {
		      echo json_encode(TRUE);
	   	 	}

	   }
	   else {
		    header( 'Location: ../dashboard' );
		}
	}
	function clientname_exists(){
   	 	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$client_name = $this->input->post('client_name');
			if ( $this->manage_model->clientname_exists($client_name) == TRUE ) {
		      echo json_encode(FALSE);
		    } else { 
		      echo json_encode(TRUE);
	   	 	}
	   }
	   else {
		    header( 'Location: ../dashboard' );
		}
	} 

	/******************* List HR USER ***************************************/

	function hr() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('manage_model');
			$query = $this->manage_model->list_hr();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/hr_view', $data);
		}
		else {
	    	$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');

		}	
	}

	/******************* ADD HR USER ***************************************/

	function add_hr() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');


        //$this->session->unset_userdata('error_hr');
		$query = $this->db->query("select * from user_count where count_id = 1");
        if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->hr_count + 1;
		   }
		   	$hr_count = $p;
			$p = sprintf("%04d",$p) ;
			$permi = "-HR-";
			$user_id = 'AMI' .$permi.$p;
		}
		else
		{
			$this->db->insert('user_count', array('hr_count' => '1' ));
			$p = "1";
			$p = sprintf("%04d",$p) ;
			$permi = "-HR-";
			$user_id = 'AMI' .$permi.$p;

		}

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			'user_id' => $user_id,
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'phone' => $this->input->post('phone'),
        			'email' => $this->input->post('email'),
        			'permission' => 'HR',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		$count = array('hr_count' => $hr_count);

			$this->load->model('manage_model');
			$this->manage_model->add_hr($data,$count);

			$success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>HR account has successfully added.</div>';
 			$this->session->set_flashdata('hr_message',$success_string); 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'hr_message' => $error_string,
					'username' => $this->input->post('username'),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'phone' => $this->input->post('phone')

				);	
			//$this->session->set_userdata($data);
			$this->session->set_flashdata($data); 
		}

		redirect(base_url().'manage/hr', 'refresh');	
	}


	/******************* List TRAINER USER ***************************************/


	function training() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('manage_model');
			$query = $this->manage_model->list_trainer();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/training_view', $data);
		}
		else {

	    	$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');

		}	
	}



	/******************* ADD TRAINER USER ***************************************/

	function add_trainer() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');


        //$this->session->unset_userdata('error_trainer');
		$query = $this->db->query("select * from user_count where count_id = 1");
        if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->trainer_count + 1;
		   }
		   	$trainer_count = $p;
			$p = sprintf("%04d",$p) ;
			$permi = "-TRAINER-";
			$user_id = 'AMI' .$permi.$p;
		}
		else
		{
			$this->db->insert('user_count', array('trainer_count' => '1' ));
			$p = "1";
			$p = sprintf("%04d",$p) ;
			$permi = "-TRAINER-";
			$user_id = 'AMI' .$permi.$p;

		}

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			'user_id'		=> $user_id,
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'phone' => $this->input->post('phone'),
        			'email' => $this->input->post('email'),
        			'permission' => 'Trainer',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		$count = array('trainer_count' => $trainer_count);

			$this->load->model('manage_model');
			$this->manage_model->add_trainer($data,$count);

			$success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Trainer account has successfully added.</div>';
 			$this->session->set_flashdata('trainer_message',$success_string); 
 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'trainer_message' => $error_string,
					'username' => $this->input->post('username'),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'phone' => $this->input->post('phone')

				);	
			//$this->session->set_userdata($data);
			$this->session->set_flashdata($data); 
			
		}

		redirect(base_url().'manage/training', 'refresh');	
	}



	/******************* View USEr ******************************/
	function view_user(){
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		   
				$id = $this->input->post('id');
				$this->load->model('manage_model');
				$data = $this->manage_model->user_info($id);
				foreach ($data as $row) {
					$user_id = $row->user_id;
					$username = $row->username;
					$position = $row->permission;
					$first_name = $row->first_name;
					$last_name = $row->last_name;
					$contact = $row->phone;
					$email = $row->email;
					$status = $row->is_active;
					$date_created = $row->date_created;

					//$status ="";
					if($status == 1){
						$status = "<span class=\"label label-lg label-success arrowed-right\">Actived</span>";

					}
					else if($status == 0){
						$status = "<span class=\"label label-lg label-important arrowed-right\">Deactivated</span>";
					}
					else{
						$status = "<span class=\"label label-lg label-danger arrowed-right\">No Records</span>";
					}

					
				}
				//echo json_encode($id);
			/********************* Ouput ******************************/
				$output_string = "<div><table class=\"table table-striped\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
				$output_string .= "<colgroup>";
				$output_string .= "<col span=\"1\" style=\"width: 40%;\">";
				$output_string .= "<col span=\"1\" style=\"width: 60%;\">";
				$output_string .= "</colgroup>";

				$output_string .= "<tr>";
				$output_string .= "<td>Account Status</td>";
				$output_string .= "<td>".$status."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>ID</td>";
				$output_string .= "<td>".$user_id."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Name</td>";
				$output_string .= "<td>".$first_name." ".$last_name."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Position</td>";
				$output_string .= "<td>".$position."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Contact</td>";
				$output_string .= "<td>".$contact."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Username</td>";
				$output_string .= "<td>".$username."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Email</td>";
				$output_string .= "<td>".$email."</td>";
				$output_string .= "</tr>";
				$output_string .= "<tr>";
				$output_string .= "<td>Date Created</td>";
				$output_string .= "<td>".$date_created."</td>";
				$output_string .= "</tr>";
				//$output_string .= "<tr>";
				//$output_string .= "<td>&nbsp;</td>";
				//$output_string .= "<td><span class=\"pull-right\"><a href=\"".base_url()."applicant/batch_list_view/".$batch_no."\"><i class=\"icon-long-arrow-right\"></i> View List</a></span></td>";
				//$output_string .= "</tr>";


		       	$output_string .= "</table><div>";



			/********************* Ouput ******************************/   	

				echo json_encode($output_string);
			}
			else {
			    header( 'Location: ../dashboard' ) ;
			}

		}
		else {
		   	$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');

		}

	}




	/******************* Delete User ******************************/

	function delete_user() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$id = $this->input->post("id");
			$username = $this->input->post("username");
			echo $id;
			$this->load->model('manage_model');
			//$this->manage_model->delete_user($id);

			$success_string = '<div class="alert alert-block alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="icon-remove"></i>
										</button>

										<p>
											<strong>
												<i class="icon-ok"></i>
												Well done!
											</strong>
											You successfully delete '.$client_name.'.'.
										'</p>

										<p>
											<button class="btn btn-small btn-success">Do This</button>
											<button class="btn btn-small">Undo</button>
										</p>
									</div>';
 			$this->session->set_flashdata('delete_message',$success_string); 


		}
		else {

    		$this->load->view('login_view');
		}	
	}

	/******************* Edit User ******************************/
	function edit_user($param="") {

		if($this->session->userdata('is_logged_in')) {

			if($param){
				
				$this->form_validation->set_rules('first_name', 'First Name', 'required');
				$this->form_validation->set_rules('last_name', 'Last Name', 'required');
				//$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('phone', 'Phone Number', 'required');
			
				if ($this->form_validation->run() == true)
				{
					$data = array(
						'first_name' => $this->input->post('first_name'),
	        			'last_name' => $this->input->post('last_name'),
	        			'middle_name' => $this->input->post('middle_name'),
	        			'phone' => $this->input->post('phone'),
						'date_change'	=> date('Y-m-d H:i:s'),
					);
				}
				if ($this->form_validation->run() == true )
				{ 
					//check to see if we are creating the user
					//redirect them to checkout page
	      			$this->load->model('manage_model');
	      			$this->manage_model->update_info($param,$data);
	      			$success_message = "Changes Successfully";
	      		 	//$this->session->set_flashdata('message2',"Changes Successfully"); 
			       
			       	$this->session->set_flashdata('success',$success_message); 
			        redirect(base_url().'manage/edit_user/'.$param, 'refresh');
			        
				}
				else
				{ 
					$this->load->model('manage_model');
					$query =  $this->manage_model->userTable_info($param);
					$this->data['records'] = $query;
					//display the create user form
					//set the flash data error message if there is one
					$error_string =  validation_errors();
					$err = array(
						'user_message' => $error_string
						);
				
					if(empty($query)){
						$this->load->view('error_404');
					}
					else
					{	
						$this->session->set_flashdata($err);
						$this->load->view('admin/manage_accounts/edit_user',$this->data);
					}
					
				}
				//redirect(base_url().'client/edit_info/'.$param, 'refresh');
			}
			else
			{
				//echo "Errrr";
				$this->load->view('error_404');
			}
			
	
	    	
	    }
	    else {
	    	$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');
	     
	    }

	}

  	function updateAccountStatus() {
  		if($this->session->userdata('is_logged_in')) {
			if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
				$id = $this->input->post('id');
				$user_id = $this->input->post('user_id');

				$this->load->model('client_model');
				$this->client_model->updateAccountStatus($user_id,$id);
				echo $id;

		   }
		   else {
			    header( 'Location: ../dashboard' );
			}

		 }
		else{

	    	$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');
	    

		 }


  	}




}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */