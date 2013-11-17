<?php if($this->session->userdata('permission') != 'Trainee') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>HRIS - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />
		<!--<script src="<?php echo base_url();?>hrtms_resources/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-barcode.js"></script>
		/*Barcode
		-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]--> 

		<!--inline styles if any-->


		
	
		
		
	</head>

	<body>
	 	<?php if(isset($records3)) : foreach($records as $row) : ?>
	 		<input type="hidden" value="<?php echo $row->civil_status?>" id="civil_status">
	 	<?php endforeach;?>
		<?php endif; ?>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - HRTMS Training
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
							
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 2</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 3</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 4</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Error Occured
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->
					

					<!--
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i> Inbox
								<span class="badge badge-success"></span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									Messages
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>hrtms_resources/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>hrtms_resources/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>hrtms_resources/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>messenger">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						-->

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php if($this->session->userdata('image_file')=='') { echo base_url().'hrtms_resources/avatars/user.jpg'; } else { echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');}?>" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">

								<li>
									<a href="<?php echo base_url();?>myprofile">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
		
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					

					<li class="active">
						<a href="<?php echo base_url();?>profile/HRIS">
							<i class="icon-user"></i>
							<span>HRIS</span>
						</a>
					</li>

				
					<!--<li>
						
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="<?php echo base_url(); ?>about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


		<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url();?>dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">HRIS</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

			<div id="page-content" class="clearfix">
				<div class="page-header position-relative">
					<h1>
						HRIS
						<small>
							<i class="icon-double-angle-right"></i>
							Marital Information (If you are married)
						</small>
					</h1>
				</div><!--/.page-header-->

					
			<div class="row-fluid">
		       	<?php if(isset($records)) : foreach($records as $row) : ?>           
	                <form id="marital_info_form" class="form-horizontal">
	               		
	                    <h4>Marriage Information</h4>
	                    <div class="control-group">
	                    	<label class="control-label" for="marriage_date">Date of Marriage</label>
	                    	<div class="controls">
	                    		<span class="input-append">
								<span class="add-on">	
									<i class="icon-calendar"></i>
								</span>
								<input  class="span6 input-date datepicker" id="marriage_date"  name="marriage_date" type="text" value="<?php echo $row->marriage_date;?>">	
							</span>
	                    	</div>	
	                    </div> 
	                   	
	                   	<div class="control-group">
	                   		<label class="control-label" for="marriage_place">Place of Marriage</label>
	                   		<div class="controls">
	                   			<input type="text" class="input-large" id="marriage_place" name="marriage_place" value="<?php echo $row->marriage_place;?>">
	                   		</div>
	                   	</div>
	                 
	                    <b>Spouse's Information</b> 
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_first_name">First Name</label>
	                    	<div class="controls">
	                    		<input type="text" class="input-medium" id="spouse_first_name" name="spouse_first_name" value="<?php echo $row->spouse_first_name;?>">
	                    	</div>
	                    </div> 	
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_last_name">Last Name</label>
	                    	<div class="controls">
	                    		<input type="text" class="input-medium" id="spouse_last_name" name="spouse_last_name" value="<?php echo $row->spouse_last_name;?>">
	                    	</div>
	                    </div>
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_middle_name">Middle Name</label>
	                    	<div class="controls">
	                    		<input type="text" class="input-medium" id="spouse_middle_name" name="spouse_middle_name" value="<?php echo $row->spouse_middle_name;?>">
	                    	</div>
	                    </div>
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_birthdate">Date of Birth</label>
	                    	<div class="controls">
	                    		<div class="span3 input-prepend">
									<span class="add-on">	
										<i class="icon-calendar"></i>
									</span>
									<input  class="span6 input-date datepicker" id="spouse_birthdate"  name="spouse_birthdate" type="text" value="<?php echo $row->spouse_birthdate;?>">	
	                    		</div>
	                    		
	                    	</div>
	                    </div>
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_contact_no">Contact No.</label>
	                    	<div class="controls">
	                    		<div class="span3 input-prepend">
	                    			<span class="add-on">
						        		<i class="icon-phone"></i>
						      		</span>
	                    		 <input type="text" id="spouse_contact_no" class="input-medium phone" name = "spouse_contact_no" value="<?php echo $row->spouse_contact_no;?>">
	                    	
	                    		</div>
	                    	</div>
	                    </div>
	                    <div class="control-group">
	                    	<label class="control-label" for="spouse_occupation">Occupation</label>
	                    	<div class="controls">
	                    		<input type="text" id="spouse_occupation" class="input-medium" name = "spouse_occupation" value="<?php echo $row->spouse_occupation;?>">
	                    	</div>
	                    </div>
	                    <div class="control-group">
           					<label class="control-label" for="spouse_occupation_address">Address/Location of Employment</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="spouse_occupation_address" name ="spouse_occupation_address" value="<?php echo $row->spouse_occupation_address;?>">
           					</div>
           				</div>
	                 
	                    <!-- <label>First Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Middle Name &nbsp; &nbsp; &nbsp; &nbsp;
	                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Last Name</label>
	                        <input type="text" class="input-medium" name = "spouse_first_name" value="<?php echo $row->spouse_first_name;?>">
	                        <input type="text" class="input-medium" name = "spouse_middle_name" value="<?php echo $row->spouse_middle_name;?>">
	                        <input type="text" class="input-medium" name = "spouse_last_name" value="<?php echo $row->spouse_last_name;?>"> -->
	                     <!--
	                     <label>Date of Birth</label>
	                        <input type = "date"  class="input-medium" name = "spouse_birthdate" value="<?php echo $row->spouse_birthdate;?>"> -
							<span class="input-append">
								<span class="add-on">	
									<i class="icon-calendar"></i>
								</span>
								<input  class="span6 input-date datepicker" id="spouse_birthdate"  name="spouse_birthdate" type="text" value="<?php echo $row->spouse_birthdate;?>">	
							</span>
	                    <label>Occupation</label>
	                        <input type="text" class="input-medium" name = "spouse_occupation" value="<?php echo $row->spouse_occupation;?>">
	                    <label>Contact No.</label>
	                    <input type="text" class="input-medium phone" name = "spouse_contact_no" value="<?php echo $row->spouse_contact_no;?>">
	                   -->
	                    <br>
	                    <br>
                        <div class = "pager">
                        <div class="btn-group">
                           <button type="submit" class="btn btn-info btn-small">Save changes</button>
                        </div>
                      	</div>
                      	<div id="output"></div>
		                </form>
                <?php endforeach;?>
				<?php endif; ?>
	                <div class="table-header">
						<b>Name(s) of Children</b>
              			<i>(if none, proceed to the next step)</i> 
					</div>
					<table id="table_children" class="table table-striped table-bordered table-hover">
           			<thead>
           				<tr>
           					<th>Name</th>
           					<th>Birthdate</th>
           					<th>School / Work</th> 
           					<th></th> 
           				</tr>
           			</thead>
           			<tbody>
	              	<?php if(isset($records2)) : foreach($records2 as $row) : ?>
	              			
            			<tr>
            				<td><?php echo $row->children_name;?></td>
            				<td><?php echo $row->children_birthdate;?></td>
            				<td><?php echo $row->children_school_or_work;?></td>
            				<td><div class="btn-group"><button class="btn btn-mini btn-info">
									<i class="icon-edit bigger-120"></i>
								</button>
								<button class="btn btn-mini btn-danger">
									<i class="icon-trash bigger-120"></i>
								</button>
								</div>
							</td>
            			</tr>
                			
	                <?php endforeach;?>
					<?php endif; ?>
					</tbody>
					</table>
					<small>Page rendered in: {elapsed_time} seconds</small>
					<hr>
		
					<div id="childDiv" style="display:none">
						<h2>Child Information</h2>
	               		<form id="children_form" class="form-horizontal">
	               			<div class="control-group">
								<label class="control-label" for="child_name">Full Name</label>

								<div class="controls">
									<input type="text" id="child_name" name="child_name">
								</div>
							</div>

	               			<div class="control-group">
								<label class="control-label" for="child_dob">Date of Birth</label>

								<div class="controls">
									<!--  <input type ="date"  id="child_dob"  class="input-medium" name="child_dob"> -->
									<span class="input-append">
										<span class="add-on">	
											<i class="icon-calendar"></i>
										</span>
										<input  class="span6 input-date datepicker" id="child_dob"  class="input-medium" name="child_dob" type="text">	
									</span>			 
								</div>
							</div>

	               			<div class="control-group">
								<label class="control-label" for="child_work_school">Name of School or Place of Work</label>

								<div class="controls">
									<input type="text" id="child_work_school" name="child_school_work">
								</div>
							</div> 
	                      	<div class="form-actions">
								<button class="btn btn-info btn-small" type="submit">
									<i class="icon-ok bigger-110"></i>
									Submit
								</button>
								<button class="btn btn-small" type="reset">
									<i class="icon-undo bigger-110"></i>
									Reset
								</button>
							</div>
		                </form>
		            </div>
	                <div class="pager" >    
	   	         		<div class="btn-group" id="addDiv" >
                       		<a href="#" id="add" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
                      		<span class="help-inline">Click Add+ to add more Children's Information.</span>
                       	</div>
                       	<div class="btn-group" id="cancelDiv" style="display:none">
                       		<a href="#" id="cancel" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
                       	</div>
					</div>   
					<br>
					<br>  
					<br>  
					<br>


					
				</div><!--/row-->

			</div><!--/#page-content-->

		</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->


		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.min.js"></script>

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>hrtms_resources/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>

		

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>	

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>

	    <script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>

		<!--inline scripts related to this page-->
		
		<script type="text/javascript">
		$(document).ready(function(){

			var data = $('#marital_info_form').serialize();
			console.log(data);

			
			var stat = $('#civil_status').val();
			alert(stat); 
			$('.phone').mask('(999) 999-9999');
			if(stat == 'Single'){ 
				$('#single_message').show();
				//alert('Show ' + stat );
			    $("#marital_info_form a").click(function (e) { 
			        $(this).fadeTo("fast", .5).removeAttr("href"); 
			        //e.preventDefault();
			    });
			    //$('#marital_info_form').hide();
			    $('#marital_info_form').find(':input:not(:disabled)').prop('disabled',true)
			    //$("#marital_info_form :input").attr("disabled", true);
			}
			if(stat == 'Married' || stat == 'Separated' || stat == 'Widowed' || stat == 'Divorced' )
			{
				$('#single_message').hide();
				//alert('Hide ' + stat );
				
			}
			 
		 
			/*$(".date_start").datepicker().next().on(ace.click_event, function() {
				$(this).prev().focus();
			});*/
			$('.datepicker').datepicker({
			  	format: "yyyy-mm-dd",
			    //startDate: "now",
			    //todayBtn: true,
			    orientation: "top auto", 
			    autoclose: true
			}) 
			
			
	      	$( "#add" ).click(function() {
	      	  
			  $("#childDiv").slideDown();
			  $("#addDiv").slideUp();
			  $('#cancelDiv').slideDown();

			});

			$( "#cancel" ).click(function() {
	      		$('#cancelDiv').hide();
			 	$('#childDiv').slideUp();
				$("#addDiv").slideDown();

			});

	      	

		      	
		    //datatable initializatino
			var oTable1 = $('#table_children').dataTable( {
			"aoColumns": [
		     null, null, null,
			  { "bSortable": false }] ,
				 "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
				"iDisplayLength" : 5
			});

			
			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 1000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
			

			jQuery.validator.addMethod("nameValidation", function(value, element) {
	          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
	        }, "Name must not contain special characters except comma, dash and period.");

			jQuery.validator.addMethod("phone", function (value, element) {
	          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
	        }, "Enter a valid phone number.");

			jQuery.validator.setDefaults({
	          debug: true,
	          //success: "valid"
	        });
	        $('#marital_info_form').validate({
	          errorElement: 'span', 
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	          	marriage_date:{
	          	  required:true,
	          	},
	          	marriage_place:{
	          	  required:true
	          	},
	            spouse_first_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            spouse_middle_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            spouse_last_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            spouse_birthdate: {
	              required:true,
	              date:true,
	          	},
	          	spouse_contact_no:{
	          	  required: true,
	          	  phone:true
	          	},
	          	spouse_occupation: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },
				spouse_occupation_address: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },

	          },
	       
	          messages: {
	          	spouse_first_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	spouse_middle_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	spouse_last_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	spouse_occupation: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          		//nameValidation: "School/Work must not contain special characters except comma, dash and period.",
	          	},
	          	spouse_occupation_address: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          		//nameValidation: "School/Work must not contain special characters except comma, dash and period.",
	          	},
	 			
	  
	          },
	      
	          invalidHandler: function (event, validator) { //display error alert on form submit   
	            $('.alert-error', $('.login-form')).show();
	          },
	      
	          highlight: function (e) {
	            $(e).closest('.control-group').removeClass('success').addClass('error');
	          },
	      
	          success: function (e) {
	            $(e).closest('.control-group').removeClass('error').addClass('success');
	            $(e).remove();
	          }, 
	      
	          errorPlacement: function (error, element) {
	            if(element.is(':checkbox') || element.is(':radio')) {
	              var controls = element.closest('.controls');
	              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
	              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
	            }
	            else if(element.is('.select2')) {
	              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
	            }
	            else if(element.is('.chzn-select')) {
	              error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
	            }
	            else error.insertAfter(element);
	          },
	          showErrors: function(errorMap, errorList) {
	            $("#summary").html("<div class=\"alert alert-error\">Your form contains "
	              + this.numberOfInvalids()
	              + " errors, see details below.</div>");
	              this.defaultShowErrors();
	          },
	          submitHandler: function (form) {
	            console.log('SUBMIT CHILDREN FORM');
	            submit_form();
	            $('input').closest('.control-group').removeClass('success');
	          }, 
	          invalidHandler: function (form) { 
	            $("html, body").animate({ scrollTop: 0 }, "slow");
	          },  

	        });

	        $('#children_form').validate({
	          errorElement: 'span', 
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	            child_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            child_dob: {
	              required:true,
	              date:true,
	          	},
	          	child_school_work: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },

	          },
	      
	          messages: {
	          	child_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	child_school_work: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          		//nameValidation: "School/Work must not contain special characters except comma, dash and period.",
	          	},
	 			
	  
	          },
	      
	          invalidHandler: function (event, validator) { //display error alert on form submit   
	            $('.alert-error', $('.login-form')).show();
	          },
	      
	          highlight: function (e) {
	            $(e).closest('.control-group').removeClass('success').addClass('error');
	          },
	      
	          success: function (e) {
	            $(e).closest('.control-group').removeClass('error').addClass('success');
	            $(e).remove();
	          }, 
	      
	          errorPlacement: function (error, element) {
	            if(element.is(':checkbox') || element.is(':radio')) {
	              var controls = element.closest('.controls');
	              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
	              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
	            }
	            else if(element.is('.select2')) {
	              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
	            }
	            else if(element.is('.chzn-select')) {
	              error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
	            }
	            else error.insertAfter(element);
	          },
	          showErrors: function(errorMap, errorList) {
	            $("#summary").html("<div class=\"alert alert-error\">Your form contains "
	              + this.numberOfInvalids()
	              + " errors, see details below.</div>");
	              this.defaultShowErrors();
	          },
	          submitHandler: function (form) {
	            console.log('SUBMIT CHILDREN FORM');
	            children_submit();
	            $('input').closest('.control-group').removeClass('success');
	          }, 
	          invalidHandler: function (form) { 
	            
	          },  

	        });

          	$( "#marital_info_form" ).on( "submit", function( event ) {
          	 
			});

			$( "#children" ).on( "submit", function( event ) {
			  event.preventDefault();
			  
			});//End #children Submit

				
		});
		var submit_form = function(){
			var sData = $('#marital_info_form').serialize();
			console.log(sData);
			var clicked = this; 
			$.ajax({
               	url:"<?php echo base_url();?>hris/updateMaritalInfo",
                type:'POST',
                data:sData, 
              
                success:function(result){  
                $.gritter.add({
					title: 'Human Resource Information Update',
					text: '<i class="icon-spinner icon-spin green icon-2x"></i> Marital Information has been updated.',
					class_name: 'gritter-success gritter-center gritter-light'
				});
				
                $("html, body").animate({ scrollTop: 0 }, "slow");

                }

	        });

		}
		var children_submit = function(){
			this.disabled = 'true';
			var sData = $('#children_form').serialize();
			  console.log(sData);
			  $.ajax({
	               url:"<?php echo base_url();?>hris/insertChildren",
	                type:'POST',
	                data:sData,
	                //dataType: "json",
	                success:function(result){
	    
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Child/Children has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					$( '#children_form' ).each(function(){
					    this.reset(); 
					});
					$('#childDiv').slideUp();
					$("#addDiv").slideDown();
					$('#cancelDiv').hide(); 

					console.log(result);
					var str,str2="";
					var obj = $.parseJSON(result);
		                $.each(obj, function(){
	                		str =	'<div class="hidden-phone visible-desktop btn-group">';
	                		str +=	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
							str +=	'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>';
							str += 	'</div>';
										
						   $('#table_children').dataTable().fnAddData([
								this['children_name'],
								this['children_birthdate'],
							   	this['children_school_or_work'],
							 	str ]
							 	);
		                });
					
	                }//End Success

	            	});
		}
			








	</script>
		
		
		
	</body>
		
</html>
