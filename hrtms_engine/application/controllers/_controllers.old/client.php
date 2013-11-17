<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['records'] = $query;
			$this->load->view('company/company_view', $data);
		}
		else {

			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');

		}	
	
	}

	function add_client() {

			$this->form_validation->set_rules('client_name', 'Client Name', 'required|xss_clean|is_unique[client.client_name]');
			$this->form_validation->set_rules('client_location', 'Location', 'required|xss_clean');
			$this->form_validation->set_rules('client_username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]|alpha_dash');
			$this->form_validation->set_rules('client_password', 'Password', 'trim|required|matches[client_password_confirm]|min_length[6]');
			$this->form_validation->set_rules('client_password_confirm', 'Password Confirmation', '');
			$this->form_validation->set_rules('client_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('client_phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('client_tel', 'Telephone Number', 'required');

			
			
	        //$this->session->unset_userdata('error_client');
	        $query = $this->db->query("select * from user_count where count_id = 1");
			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			      $p= $row->client_count + 1;
			   }
			   	$client_count = $p;
				$p = sprintf("%04d",$p) ;
				$permi = "-CLIENT-";
				$user_id = 'AMI' .$permi.$p;
			} 
			else
			{
				$this->db->insert('user_count', array('client_count' => '1' ));
				$p = "1";
				$p = sprintf("%04d",$p);
				$permi = "-CLIENT-";
				$user_id = 'AMI' .$permi.$p;

			}
	        if($this->form_validation->run() == true) {
	        	$username = strtolower($this->input->post('client_username'));
	        	$client_name = strtoupper($this->input->post('client_name'));

	        	$data = array(
	        			'user_id' => $user_id,
	        			'client_name' => $client_name,
	        			'client_location' => $this->input->post('client_location'),
	        			'client_username' => $username,
	        			'client_email' => $this->input->post('client_email'),
	        			'client_tel' => $this->input->post('client_tel'),
	        			'client_mobile' => $this->input->post('client_phone'),
	        			'contact_first_name' => $this->input->post('first_name'),
	        			'contact_last_name' => $this->input->post('last_name')
	        		);
	        	$userTable = array(
	        			'user_id' => $user_id,
	        			'username' => $username,
	        			'password' => md5($this->input->post('client_password')),
	        			'email' => $this->input->post('client_email'),
	        			'permission' => 'Client',
	        			'company' => $client_name,
	        			'first_name' => $this->input->post('first_name'),
	        			'last_name' => $this->input->post('last_name')
	        		);
	        	$count = array('client_count' => $client_count);
	    		
				$this->load->model('client_model');
				$this->client_model->add_client($data,$count,$userTable);


 
				$config['hostname'] = 'ftp.jemnuine.com';
		        $config['username'] = 'jemnuin2@jemnuine.com';
		        $config['password'] = 'bakerking123';
		        $config['debug']    = TRUE;

 
		        $success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Client account has successfully added.</div>';
	 			$this->session->set_flashdata('client_message',$success_string); 

	 			
		        $this->ftp->connect($config);

		        /*$this->ftp->mirror('/', '/public_html/elfinder/files/');
		        $list = $this->ftp->list_files('/public_html/elfinder/files/Modules/'.$path);*/ //remove slow as fuck
		        if(!$this->ftp->mkdir('/public_html/elfinder/files/AMI-Training/'.strtoupper($this->input->post('client_name')).'/', DIR_WRITE_MODE))
		        {
		        	redirect(base_url().'client', 'refresh');
		        	$this->ftp->close();
		        }
		        $this->ftp->close();
		        

			}

			else
			{

				$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
				$data = array (
						'client_message' => $error_string,
						'client_name' => $this->input->post('client_name'),
	        			'client_location' => $this->input->post('client_location'),
	        			'client_username' => $this->input->post('client_username'),
	        			'client_email' => $this->input->post('client_email'),
	        			'first_name' => $this->input->post('first_name'),
	        			'last_name' => $this->input->post('last_name'),
	        			'client_tel' => $this->input->post('client_tel'),
	        			'client_phone' => $this->input->post('client_phone')

					);	
				//$this->session->set_userdata($data);
				$this->session->set_flashdata($data); 
				
			}

			redirect(base_url().'client', 'refresh');	
		
	}

	/********************* Delete Client ************************/

	function delete_client(){
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$id = $this->input->post('id');
			$user_id = $this->input->post('user_id');
			$client_name = $this->input->post('client_name');

			$this->load->model('client_model');
			//$this->client_model->delete_client($id,$user_id);

			echo $id.'  '.$user_id;

			//$success_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Client account has successfully added.</div>';
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
 			$this->session->set_flashdata('delete_client_message',$success_string); 



			}
		else {
			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	



	}
	

	function view_client(){
		$id = $this->input->post('id');

		$this->load->model('client_model');
		$data = $this->client_model->view($id);
		
		//echo json_encode($data);
		
		foreach($data as $row) {
			$user_id = $row->user_id;
			$stat = $row->is_active;
			if($stat == 1)
			{
				$stat = "Activated";
				$stat = "<span class=\"label label-lg label-success arrowed-right\">Activated</span>";
			}
			elseif($stat ==0 ){
				$stat = "Deactivated";
				$stat = "<span class=\"label label-lg label-important arrowed-right\">Deactivated</span>";
			}
			else{
				$stat = "No Records";
			}

			$output_string  = "<div class=\"row-fluid\">";
			$output_string .= "<div class=\"span6\">";
			$output_string .=  "<table class=\"table table-striped\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
        	$output_string .= "<colgroup>";
			$output_string .= "<col span=\"1\" style=\"width: 30%;\">";
			$output_string .= "<col span=\"1\" style=\"width: 70%;\">";
			$output_string .= "</colgroup>";

			$output_string .= "<tr>";
				$output_string .= "<td>ID</td>";	
				$output_string .= "<td>".$row->user_id."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Name</td>";	
				$output_string .= "<td>".$row->client_name."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Location</td>";	
				$output_string .= "<td>".$row->client_location."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Phone #</td>";	
				$output_string .= "<td>".$row->client_mobile."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Telephone #</td>";	
				$output_string .= "<td>".$row->client_tel."</td>";
			$output_string .= "</tr>";
        	$output_string .= "<tr>";
				$output_string .= "<td>Email</td>";	
				$output_string .= "<td>".$row->client_email."</td>";
			$output_string .= "</tr>";

        	$output_string .= "</table>";
        	$output_string .= "</div>";

        	$output_string .= "<div class=\"span6\">";
        	$output_string .=  "<table class=\"table table-striped\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
        	$output_string .= "<colgroup>";
			$output_string .= "<col span=\"1\" style=\"width: 30%;\">";
			$output_string .= "<col span=\"1\" style=\"width: 70%;\">";
			$output_string .= "</colgroup>";
        	$output_string .= "<tr>";
				$output_string .= "<td>Username</td>";	
				$output_string .= "<td>".$row->client_username."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Contact Person</td>";	
				$output_string .= "<td>".$row->contact_first_name." ".$row->contact_last_name."</td>";
			$output_string .= "</tr>";
			$output_string .= "<tr>";
				$output_string .= "<td>Account Status</td>";	
				$output_string .= "<td>".$stat."</td>";
			$output_string .= "</tr>";
			$output_string .= "</table>";
        	$output_string .= "</div></div>";

        	//$output_string['result'] .= "<button class=\"btn btn-mini btn-success\" onclick=\"a('"."')\"><i class=\"icon-ok bigger-120\"></i></button>";


        }
        
        $data = $this->client_model->view_request($user_id);
        //$output_string .= "<h1>Request History</h1>";
        $output_string .= "<div class=\"row-fluid\">";
        $output_string .= "<div class=\"span12\">";
        $output_string .= "<div class=\"table-header\">Request History</div>";
    	$output_string .= "<table id=\"table_request\" class=\"table table-striped table-bordered table-hover\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
		$output_string .= "<colgroup>";
		$output_string .= "<col span=\"1\" style=\"width: 10%;\">";
		$output_string .= "<col span=\"1\" style=\"width: 10%;\">";
		$output_string .= "<col span=\"1\" style=\"width: 10%;\">";
		$output_string .= "<col span=\"1\" style=\"width: 15%;\">";
		$output_string .= "<col span=\"1\" style=\"width: 55%;\">";
		$output_string .= "</colgroup>";
    	$output_string .= "<thead>";
		$output_string .= "<tr>";
		$output_string .= "<th>Request ID</th>";
		$output_string .= "<th>No. of Manpower</th>";								
		$output_string .= "<th>Status</th>";								
		$output_string .= "<th>Date Request</th>";								
		$output_string .= "<th>Remarks</th>";						 
		$output_string .= "</tr>";
		$output_string .= "</thead>";
		$output_string .= "<tbody>";
        foreach($data as $row) {
        $stat = $row->confirmed;
        if ($stat==0) {
        	$stat = "<span class=\"label label-lg label-warning arrowed-right\">Not Confirmed</span>";
        }
        elseif ($stat==1) {
        	$stat = "<span class=\"label label-lg label-success arrowed-right\">Confirmed</span>";
        }
        else{
        	$stat = "<span class=\"label label-lg label-danger arrowed-right\">No records</span>";
        }
      
      
        $date =   date("d M Y", strtotime($row->date_requested) ) ." - ".   date("d M Y", strtotime($row->is_to) );

        	$output_string .= "<tr>";
        	$output_string .= "<td><a href=\"#\">".$row->request_id."</a></td>";
        	$output_string .= "<td>".$row->no_of_manpower."</td>";
        	$output_string .= "<td>".$stat."</td>";
        	$output_string .= "<td>".$date."</td>";
        	$output_string .= "<td>".$row->remarks."</td>";
        	$output_string .= "</tr>";
       	
        }
        $output_string .= "</tbody>";
        $output_string .= "</table>";
        $output_string .= "</div>";
        $output_string .= "</div>";
		
		//$output_string['id'] = $user_id;
		$this->output->set_output(json_encode($output_string));


	}

	function edit_info($param="") {
    	//check kung naka-login
	    if($this->session->userdata('is_logged_in')) {

			if($param){
				//$this->form_validation->set_rules('client_name', 'Client Name', 'required|xss_clean|is_unique[client.client_name]');
				$this->form_validation->set_rules('client_location', 'Location', 'required|xss_clean');
				//$this->form_validation->set_rules('client_username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]|alpha_dash');
				$this->form_validation->set_rules('first_name', 'Contact First Name', 'required');
				$this->form_validation->set_rules('last_name', 'Contact Last Name', 'required');
				$this->form_validation->set_rules('client_phone', 'Phone Number', 'required');
				$this->form_validation->set_rules('client_tel', 'Telephone Number', 'required');

				$this->form_validation->set_rules('agree', '...', 'callback_terms_check');
				
				
				if ($this->form_validation->run() == true)
				{
					$data = array(
						'client_location' => $this->input->post('client_location'),
	          			'client_tel' => $this->input->post('client_tel'),
	        			'client_mobile' => $this->input->post('client_phone'),
	        			'contact_first_name' => $this->input->post('first_name'),
	        			'contact_last_name' => $this->input->post('last_name'),
						'date_change'	=> date('Y-m-d H:i:s'),
					);
					$userTable = array(
	        			'email' => $this->input->post('client_email'),
	        			'permission' => 'Client',
	        			'first_name' => $this->input->post('first_name'),
	        			'last_name' => $this->input->post('last_name')
        		);
				}
				if ($this->form_validation->run() == true )
				{ 
					//check to see if we are creating the user
					//redirect them to checkout page
	      			$this->load->model('client_model');
	      			$this->client_model->update_info($param,$data);
	      			$this->client_model->update_userTable($param,$userTable);
	      			$success_message = "Changes Successfully";
	      		 	//$this->session->set_flashdata('message2',"Changes Successfully"); 
			       
			       	$this->session->set_flashdata('success',$success_message); 
			        redirect(base_url().'client/edit_info/'.$param, 'refresh');
			        
				}
				else
				{ 
					$this->load->model('client_model');
					$query =  $this->client_model->info($param);
					$this->data['records'] = $query;
					//display the create user form
					//set the flash data error message if there is one
					$error_string =  validation_errors();
					$err = array(
						'client_message' => $error_string
						);
					
				
					if(empty($query)){
						$this->load->view('error_404');
					}
					else
					{	
						$this->session->set_flashdata($err);
						$this->load->view('company/edit_client',$this->data);
					}
					
				}
				//redirect(base_url().'client/edit_info/'.$param, 'refresh');
			}
			else
			{
				
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
			    header( 'Location: ../Client' );
			}

		}
		else{
			$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');
		}


  	}


	function view_request(){ 
	
		if($this->session->userdata('is_logged_in')) {
			if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
				$id = $this->input->post('id');
				$this->load->model('client_model');
				$data = $this->client_model->view_request($id);
				$this->output->set_output(json_encode($data));

		   }
		   else {
			    header( 'Location: ../Client' );
			}

		}
		else{
			$this->session->set_userdata('login_type', 'employee');
	     	$this->load->view('login_view');
		}
	}

	





















	/********************* client view ************************/

	function send_request() {

		/*if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			

		}
		else {
		    header( 'Location: ../dashboard	' );
		}
		/**/
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$this->form_validation->set_rules('no_of_manpower', 'No. of Manpower', 'required|xss_clean');
			$this->form_validation->set_rules('date_range_picker', 'Date Request', 'required|xss_clean');
			$this->form_validation->set_rules('emp_type', 'Employee Type', 'required|xss_clean');
			$this->form_validation->set_rules('emp_department', 'Employee Department', 'required|xss_clean');
			$this->form_validation->set_rules('emp_gender', 'Gender', 'required|xss_clean');
			$this->form_validation->set_rules('remarks', 'Remarks', 'required|xss_clean');
			$this->form_validation->set_rules('documents_req', 'Documents', 'xss_clean');

			$query =$this->db->query("select count(*) as count from request where year(date_requested) = year(now()) group by year(date_requested)");
				if ($query->num_rows() > 0)
				{
				   foreach ($query->result() as $row)
				   { 
				      $p= $row->count + 1;
				   }
					$p = sprintf("%04d",$p) ;
					$date = date('Y'); //this returns the current date
					$req_id = 'AMI-REQ-' . substr($date, -2).$p;
				}
				else
				{ 
					$p = '0001';
					$p = sprintf("%04d",$p) ;
					$date = date('Y'); //this returns the current date
					$req_id = 'AMI-REQ-' . substr($date, -2).$p;

				}

			
			if ($this->form_validation->run() == true)
			{

				
				//echo date("Y-m-d", strtotime($arr[0]));
	  			$a =  $this->input->post("date_range_picker");
	  			$arr = explode("-",$a);
	  			/*if($arr){
	  				echo date("Y-m-d", strtotime($arr[1]))."<br>";

	  			} 
	  			else{
	  				echo "NO<br>";
	  			}*/
				$data = array(
					'request_id' => $req_id,
					'client_id' => $this->session->userdata('user_id'),
					'no_of_manpower' => $this->input->post("no_of_manpower"),
					'date_requested' => date("Y-m-d", strtotime($arr[0])),
					'is_to' => date("Y-m-d", strtotime($arr[1])),
					'remarks' => $this->input->post("remarks"),
					'emp_reqdocuments' => $this->input->post("documents_req"),
					'emp_type' => $this->input->post("emp_type"),
					'emp_department' =>$this->input->post("emp_department"),
					'emp_gender' =>$this->input->post("emp_gender"),
					'company' => $this->session->userdata("company")
				);

				$this->load->model('request_model');
				$this->request_model->send_request($data);
		  
				$success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Your Manpower Request has been sent. Just wait for confirmation.</div>';
				$this->session->set_flashdata('request_sent',$success_string); 

				//echo "ECHO";
				redirect(base_url().'dashboard', 'refresh');	
			}
		else
		{
			echo validation_errors();

		}

		}
		else {
		    header( 'Location: ../dashboard	' );
		}
		
			
	}

	function hide_confirmed() {
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$this->load->model('request_model');
			$this->request_model->hide_confirmed($this->input->post("id"), array("is_read" => "1"));
		}
		else {
		    header( 'Location: ../dashboard	' );
		}
	}
		

}

/* End of file client.php */
/* Location: ./application/controllers/client.php */