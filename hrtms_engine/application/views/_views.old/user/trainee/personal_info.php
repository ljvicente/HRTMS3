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
		 
   	 	<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.full.min.css" />
    	<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css"/>
	
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
		<style type="text/css">
		.tags{display:inline-block;padding:4px 6px;color:#777;vertical-align:middle;background-color:#FFF;border:1px solid #d5d5d5;width:50%}
		.lbl{font-size: 12px;}
		</style>
	</head>

	<body>
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
								Personal Information
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
					<form class="form-horizontal" id="personal_info_form" method="POST" />
					 <?php if(isset($records)) : foreach($records as $row) :
					 	$birthdate = $row->birthdate;												
					    list($y,$m,$d) = explode('-', $birthdate);

					    if (($m = (date('m') - $m)) < 0) {
					        $y++;
					    } elseif ($m == 0 && date('d') - $d < 0) {
					        $y++;
					    }
					    $age = date('Y') - $y;
					   
					  ?>
          				<input type="hidden" id="age" name="age" value="<?php echo $age;?>">
	                    <div class="control-group">
	                        <label class="control-label" for="first_name">First Name(<span class="required">*</span>):</label>
	 
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" name="first_name" id="first_name" class="span6" value="<?php echo $row->first_name;?>" readonly/>
	                          </div>
	                        </div>
	                    </div>
                      	<div class="control-group">
	                        <label class="control-label" for="last_name">Last Name(<span class="required">*</span>):</label>

	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" name="last_name" id="last_name" class="span6" value="<?php echo $row->last_name;?>" readonly />
	                          </div>
	                        </div>
                      	</div>
	                    <div class="control-group">
	                    	<label class="control-label" for="middle_name">Middle Name:</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" name="middle_name" id="middle_name" class="span6" value="<?php echo $row->middle_name;?>" readonly/>
	                          </div>
	                        </div> 
	                    </div>
	                    <div class="control-group">
			              	<label class="control-label" for="nickname">Nickname</label>
			              	<div class="controls">        
                          		<input type="text" class="input-medium" id="nickname" name ="nickname" value="<?php echo $row->nickname;?>">
			              	</div> 
				        </div>

                      	<div class="hr hr-dotted"></div>
                  
                      	<div class="control-group">
	                        <label class="control-label">Gender(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <span class="span12">
	                            <label class="blue">
	                            	<input name="gender" value="Male" type="radio" <?php if($row->gender=='Male') echo 'checked'; else echo 'disabled';?>/>
	                            	<span class="lbl"> Male</span>
	                            </label>

	                            <label class="blue">
	                            	<input name="gender" value="Female" type="radio" <?php if($row->gender=='Female') echo 'checked'; else echo 'disabled';?>/>
	                            	<span class="lbl"> Female</span>
	                            </label>
	                          </span>
	                        </div>
	                    </div>
	                    <div class="control-group">
	                        <label class="control-label" for="dob">Date of Birth(<span class="required">*</span>):</label>
	                        <div class="controls">
		                        <div class="row-fluid input-append">
		                            <span class="add-on">
		                              <i class="icon-calendar"></i>
		                            </span>
		                            <input class="span2 datepicker" id="dob" type="text" name="birthdate" value="<?php echo $row->birthdate;?>"/>
		                               
		                        </div>
	                        </div>
	                    </div>
	                    <div class="control-group">
			              	<label class="control-label" for="birthplace">Place of Birth(<span class="required">*</span>)</label>
			              	<div class="controls">        
			                	<input type="text" class="input-large" id="birthplace" name = "place_of_birth" value ="<?php echo $row->place_of_birth;?>"> &nbsp;
			              	</div> 
				        </div> 
			          	<div class="control-group">
			              	<label class="control-label" for="citizenship">Citizenship(<span class="required">*</span>)</label>
			              	<div class="controls">        
			                	<input type="text" class="input-large" id="citizenship" name = "citizenship" value="<?php echo $row->citizenship;?>"> &nbsp;
			              	</div> 
			          	</div>

  
                      	<div class="control-group">
                        	<label class="control-label" for="civil_status">Civil Status(<span class="required">*</span>):</label>
                        	<div class="controls">
                        		<input type="text" id="civil_status" name="civil_status" value="<?php echo $row->civil_status?>" readonly>
	                         <!--  <select id="civil_status" name = "civil_status" class="span2" readonly>
	                            <option selected = "selected" value="">Select Status..</option>
	                            <option value = "Single" <?php if($row->civil_status=='Single') echo 'selected';?>>Single</option>
	                            <option value = "Married" <?php if($row->civil_status=='Married') echo 'selected';?>>Married</option>
	                            <option value = "Separated" <?php if($row->civil_status=='Separated') echo 'selected';?>>Separated</option>
	                            <option value = "Widowed" <?php if($row->civil_status=='Widowed') echo 'selected';?>>Widowed</option>
	                            <option value = "Divorced" <?php if($row->civil_status=='Divorced') echo 'selected';?>>Divorced</option>
	                          </select> -->
                        	</div> 
                      	</div> 
                      	<div class="control-group">
						  	<label class="control-label" for="height">Height <span class="muted">(cm)</span>(<span class="required">*</span>):</label>
							<div class="controls">
							    <div class="span12">
							      	<input type="text" id="height" name = "height" value="<?php echo $row->height;?>" class="span2" />
							    </div>
							</div>
						</div>	
						<div class="control-group">
						  	<label class="control-label" for="weight">Weight <span class="muted">(kg)</span>(<span class="required">*</span>):</label>
							<div class="controls">
							    <div class="span12">
							      	<input type="text" id="weight" name = "weight" value="<?php echo $row->weight;?>" class="span2" />
							    </div>
							</div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="blood_type">Blood Type(<span class="required">*</span>):</label>
							<div class="controls">
							    <div class="span12">
							      	<select name = "blood_type" class="input-small">
				                        <option disabled = "disabled" selected = "selected" value="">Select...</option>
				                        <option value = "A" <?php if($row->blood_type=='A') echo 'selected';?>>A</option>
				                        <option value = "B" <?php if($row->blood_type=='B') echo 'selected';?>>B</option>
				                        <option value = "O" <?php if($row->blood_type=='O') echo 'selected';?>>O</option>
				                        <option value = "AB" <?php if($row->blood_type=='AB') echo 'selected';?>>AB</option>
			                        </select>
							    </div>
							</div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="religion">Religion:</label>
							<div class="controls">
							    <div class="span12">
							        <input type="text" id="religion"  name="religion" value="<?php echo $row->religion;?>">
							    </div>
							</div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="allergy">Allergy:</label>
							<div class="controls">
							    <div class="span12">
							        <input type="text" id="allergy" class="span6" name = "allergy" value="<?php echo $row->allergy;?>" placeholder="If allergic to anything - food, medicine, others - please specify ">
							    </div>
							</div>
						</div>
						<div class="control-group">
           					<label class="control-label" for="skills">Skills</label>
           					<div class="controls">
           						<input class="" id="skills" name="skills" value="<?php echo $row->skills;?>" placeholder="Enter for input">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="hobbies">Hobbies</label>
           					<div class="controls">
           						<input class="" id="hobbies" name="hobbies" value="<?php echo $row->hobbies;?>" placeholder="Enter for input">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="interests">Interest</label>
           					<div class="controls">
           						<input class="" id="interests" name="interests" value="<?php echo $row->interests;?>" placeholder="Enter for input">
           					</div>
           				</div>
                      	
                      	<div class="hr hr-dotted"></div>  	
                      	<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h4>
                      	<div class="control-group">
						 	<label class="control-label" for="phone">Phone(<span class="required">*</span>):</label>
						  	<div class="controls">
						    	<div class="span3 input-prepend">
						      		<span class="add-on">
						        		<i class="icon-phone"></i>
						      		</span>
						      		<input class="input-mask-tel input-medium" type="text" id="" name="home_no" value="<?php echo $row->home_no;?>" />
						    	</div>
						  	</div>
						</div>
						<div class="control-group">
						 	<label class="control-label" for="phone">Mobile(<span class="required">*</span>):</label>
						  	<div class="controls">
						    	<div class="span3 input-prepend">
						      		<span class="add-on">
						        		<i class="icon-mobile-phone"></i>
						      		</span>
						      		<input class="input-mask-phone input-medium" type="text" id="" name="mobile_no" value="<?php echo $row->mobile_no;?>" />
						    	</div>
						  	</div> 
						</div>
						<div class="control-group">
						 	<label class="control-label" for="phone">Alt. Mobile(<span class="required">*</span>):</label>
						  	<div class="controls">
						    	<div class="span3 input-prepend">
						      		<span class="add-on">
						        		<i class="icon-mobile-phone"></i>
						      		</span>
						      		<input class="input-mask-alt input-medium" type="text" id="" name="alternative_no" value="<?php echo $row->alternative_no;?>" />
						    	</div>
						  	</div>
						</div>
                      	<div class="hr hr-dotted"></div>
                      	<!-- Present Address -->
                      	<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Present Address</h4>
                      	<div class="control-group">
	                        <label class="control-label" for="address">Address(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="address" name="present_address" value="<?php echo $row->present_address;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="city">City/Municipality(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="city" name="present_city" value="<?php echo $row->present_city;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="province">Province(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="province" name="present_province" value="<?php echo $row->present_province;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
           				<!-- Provincial Address -->
           				<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Provincial Address</h4>
           				
		              	<div class="control-group">
		              		<div class="controls">
		              			<label>
					                <input type="checkbox" class="ace" name="sameashome" value="checkbox" onClick="sameadd(this.form);">
					                <span class="lbl"> <i>Same As Present Home Address</i></span>
				              	</label>
		              		</div>
		              	</div>

                      	<div class="control-group">
	                        <label class="control-label" for="paddress">Address(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="paddress" name="provincial_address" value="<?php echo $row->provincial_address;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="pcity">City/Municipality(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="pcity" name="provincial_city" value="<?php echo $row->provincial_city;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="pprovince">Province(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="pprovince" name="provincial_province" value="<?php echo $row->provincial_province;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
           				

                      	<!-- Mailing Address -->
                      	<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Mailing Address</h4>
                      	<div class="control-group">
                      		<div class="controls">
                      			<label>
                      				<input type="checkbox" class="ace" name="sameashome2" value="checkbox" onClick="sameadd2(this.form);">
				                	<span class="lbl"> <i>Same As Present Home Address</i></span>
                      			</label>
			            	</div>
                      	</div>
			           
                      	<div class="control-group">
	                        <label class="control-label" for="maddress">Address(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="maddress" name ="mailing_address" value="<?php echo $row->mailing_address;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="mcity">City/Municipality(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="mcity" name ="mailing_city" value="<?php echo $row->mailing_city;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
                      	<div class="control-group">
	                        <label class="control-label" for="mprovince">Province(<span class="required">*</span>):</label>
	                        <div class="controls">
	                          <div class="span12">
	                            <input type="text" id="mprovince" name ="mailing_province" value="<?php echo $row->mailing_province;?>" class="span6" />
	                          </div>
	                        </div>
                      	</div>
           				
           				<div class="hr hr-dotted"></div>
           				<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Parents Information</h4>
           				<h5 class="lighter block blue">&nbsp;&nbsp;&nbsp;&nbsp; Father</h5>
           				<div class="control-group">
           					<label class="control-label" for="father_name">Full Name</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="father_name" name ="father_name" value="<?php echo $row->father_name;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="father_age">Age</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="father_age" name ="father_age" value="<?php echo $row->father_age;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="father_occupation">Occupation</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="father_occupation" name ="father_occupation" value="<?php echo $row->father_occupation;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="father_occupation_address">Address/Location of Employment</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="father_occupation_address" name ="father_occupation_address" value="<?php echo $row->father_occupation_address;?>">
           					</div>
           				</div>
           				<div class="control-group">
                      		<div class="controls">
                      			<label>
                      				  	<input type="checkbox" class="ace" name="sameasfather" value="checkbox" onClick="sameaddfather(this.form);">
               							<span class="lbl"> <i>Same As Present Home Address</i></span>
                      			</label>
			            	</div>
                      	</div>
           				<div class="control-group">
           					<label class="control-label" for="father_address">Home Address</label>
           					<div class="controls">
           						<input type="text" class="span6" id="father_address" name ="father_address" value="<?php echo $row->father_address;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="father_contact_no">Contact No.</label>
           					<div class="controls">
           						<input type="text" class="span3" id="father_contact_no" name ="father_contact_no" value="<?php echo $row->father_contact_no;?>">
           					</div>
           				</div>
           				<h5 class="lighter block blue">&nbsp;&nbsp;&nbsp;&nbsp; Mother</h5>
           				<div class="control-group">
           					<label class="control-label" for="mother_name">Full Name</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="mother_name" name ="mother_name" value="<?php echo $row->mother_name;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="mother_age">Age</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="mother_age" name ="mother_age" value="<?php echo $row->mother_age;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="mother_occupation">Occupation</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="mother_occupation" name ="mother_occupation" value="<?php echo $row->mother_occupation;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="mother_occupation_address">Address/Location of Employment</label>
           					<div class="controls">
           						<input type="text" class="input-xlarge" id="mother_occupation_address" name ="mother_occupation_address" value="<?php echo $row->mother_occupation_address;?>">
           					</div>
           				</div>
           				<div class="control-group">
                      		<div class="controls">
                      			<label>
                      				 	<input type="checkbox" class="ace" name="sameasmother" value="checkbox" onClick="sameaddmother(this.form);">
                   						<span class="lbl"> <i>Same As Father Home Address</i></span>
                      			</label>
			            	</div>
                      	</div>
           				<div class="control-group">
           					<label class="control-label" for="mother_address">Home Address</label>
           					<div class="controls">
           						<input type="text" class="span6" id="mother_address" name ="mother_address" value="<?php echo $row->mother_address;?>">
           					</div>
           				</div>
           				<div class="control-group">
           					<label class="control-label" for="mother_contact_no">Contact No.</label>
           					<div class="controls">
           						<input type="text" class="span3" id="mother_contact_no" name ="mother_contact_no" value="<?php echo $row->mother_contact_no;?>">
           					</div>
           				</div>


           				<div class="hr hr-dotted"></div>
	                    <div class="form-actions">
	                        <button type="submit" class="btn btn-success btn-small">Submit</button>
	                        <button type="reset" class="btn btn-danger btn-small">Reset</button>
	                    </div>
                    
                    	<?php endforeach;?> 
    					<?php endif; ?>
                    </form>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-tag.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>
		
		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>


	

		<!--inline scripts related to this page-->
		<script type="text/javascript">
		$( document ).ready(function() {
			var data = $('#personal_info_form').serialize();
			console.log(data);
			/*$('.datepicker').datepicker({
			  	format: "yyyy-mm-dd",
			    //startDate: "now",
			    //todayBtn: true,
			    orientation: "top auto", 
			    autoclose: true
			}) */


			$.mask.definitions['~']='[+-]';
  			$('.input-mask-tel').mask('999-99-99');
  			$('.input-mask-phone').mask('(999) 999-9999');
  			$('.input-mask-alt').mask('(999) 999-9999');


			var tag_input = $('#skills');	
			if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
			{
				tag_input.tag(
				  {
					placeholder:tag_input.attr('placeholder'),
					//enable typeahead by specifying the source array
					source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
				  }
				);
			}
			else {
				//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
				tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
				//$('#skill').autosize({append: "\n"});
			}

			var tag_input2 = $('#hobbies');
			if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
			{
				tag_input2.tag(
				  {
					placeholder:tag_input2.attr('placeholder'),
					//enable typeahead by specifying the source array
					source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
				  }
				);
			}
			else {
				//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
				tag_input2.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
				//$('#hobbies').autosize({append: "\n"});
			}
			var tag_input3 = $('#interests');
			if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
			{
				tag_input3.tag(
				  {
					placeholder:tag_input3.attr('placeholder'),
					//enable typeahead by specifying the source array
					source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
				  }
				);
			}
			else {
				//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
				tag_input3.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
				//$('#interest').autosize({append: "\n"});
			}
		
	
			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
		
          	jQuery.validator.addMethod("nameValidation", function(value, element) {
	          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
	        }, "Name must not contain special characters except comma, dash and period.");

			jQuery.validator.addMethod("mobile", function (value, element) {
	          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
	        }, "Enter a valid mobile number.");
			jQuery.validator.addMethod("telephone", function (value, element) {
		          return this.optional(element) || /^\d{3}\-\d{2}\-\d{2}( x\d{1,6})?$/.test(value);
		        }, "Enter a valid telephone number.");
			jQuery.validator.setDefaults({
	          debug: true,
	          //success: "valid"
	        });
 
	        $('#personal_info_form').validate({
	          ignore:"",
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	           /* first_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            }, 
	            last_name: { 
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },	
	            middle_name: {
	              //required: true,
	              minlength:2,
             	  nameValidation:true,
	            },*/
	            nickname: {
	              //required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            /*gender: "required",
	            birthdate: "required",
	            civil_status: "required",
	            height: {
	              required: true ,
	              number: true,
	              min: 50
	            },*/
	            weight: {
	              //required: true ,
	              number: true,
	              min: 30
	            },
	            religion:{ 	
	              minlength:2,
	              letterswithbasicpunc:true,
	            },
	          /*  skills : "required",
	            hobbies : "required",
	            interests : "required",*/
	            home_no : {
	              //required: true,
	              telephone: true,
	            },
	            mobile_no: {
	              required: true,
	              mobile: true,
	            },
	            alternative_no: {
	              mobile: true
	            },
	            present_address:{
	              required: true

	            },
	            present_city:{
	              required: true

	            },
	            present_province:{
	              required: true

	            },
	            provincial_address:{
	              required: true

	            },
	            provincial_city:{
	              required: true

	            },
	            provincial_province:{
	              required: true 

	            }, 
	            mailing_address:{
	              required: true

	            },
	            mailing_city:{
	              required: true

	            },
	            mailing_province:{
	              required: true

	            },
	            father_name:{
	               nameValidation: true
	            },
	            father_age:{
	            	digits: true,
	            	min: (function(){return Number($("#age").val()); })
	            },
	            father_occupation:{
	            	minlength:2
	            },
	            father_occupation_address:{
	            	minlength:2
	            },
	            father_address:{
	            	minlength:5
	            },
	            father_contact_no:{
	            	
	            },

	            mother_name:{
	               nameValidation: true
	            },
	            mother_age:{
	            	digits: true,
	            	min: (function(){return Number($("#age").val()); })
	            },
	            mother_occupation:{
	            	minlength:2
	            },
	            mother_occupation_address:{
	            	minlength:2
	            },
	            mother_address:{
	            	minlength:5
	            },
	            mother_contact_no:{

	            }
	        	

	          },
	           
	       
	          messages: {
	          	first_name: {
	          	 
	          		minlength: jQuery.format("First name.At least {0} characters required."),
	          	},
	          	last_name: {
	           
	          		minlength: jQuery.format("Last name.At least {0} characters required."),
	          	},
	          	middle_name: {
	          		required: "First Name is required.",
	          		minlength: jQuery.format("Middle name.At least {0} characters required."),
	          	},
	          	 nickname: {
	              //required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	           
	            height: {
	              min: "Please enter a valid height.",
	            },
	            weight: {
	              min: "Please enter a valid weight.",
	            },
	            religion:{ 	
	            
	        
	            },
	        
	            home_no : {
	             
	            },
	            mobile_no: {
	              
	            },
	            alternative_no: {
	             
	            },

	            present_address:{
	             

	            },
	            present_city:{
	             

	            },
	            present_province:{
	             

	            },
	            provincial_address:{
	             

	            },
	            provincial_city:{
	             

	            },
	            provincial_province:{
	             

	            },
	            mailing_address:{
	             

	            },
	            mailing_city:{
	             

	            },
	            mailing_province:{
	             

	            },
	            father_name:{
	              
	            },
	            father_age:{
	             	min: "Please enter a valid age. You're older than your parent?."
	            	
	            },
	            father_occupation:{
	            	
	            },
	            father_occupation_address:{
	            	
	            },
	            father_address:{
	            	
	            },
	            father_contact_no:{
	            	
	            },

	            mother_name:{
	              
	            },
	            mother_age:{
	             	min: "Please enter a valid age. You're older than your parent?."
	            	
	            },
	            mother_occupation:{
	            	
	            },
	            mother_occupation_address:{
	            
	            },
	            mother_address:{
	            	
	            },
	            mother_contact_no:{

	            }
	          	 
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
	          	//var controls = element.closest('.controls');
	          	
 
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
	            console.log('SUBMIT PERSONAL INFORMATION FORM');
	            submit_form();
	            //$('input').closest('.control-group').removeClass('success');
	          },
	          invalidHandler: function (form) {
	          	$("html, body").animate({ scrollTop: 0 }, "slow");
	            
	          }, 

	        });

			

		});
		var submit_form = function(){
			
		  	var sData = $('#personal_info_form').serialize();
		  	console.log(sData); 
		   	$.ajax({
                url:"<?php echo base_url();?>hris/updatePersonalInfo",
                type:'POST',
                data:sData,
                success:function(result){
                $.gritter.add({
					title: 'Human Resource Information Update',
					text: '<i class="icon-spinner icon-spin green icon-2x"></i> Personal infromation has been updated.',
					class_name: 'gritter-success gritter-center gritter-light'
				});
                $("html, body").animate({ scrollTop: 0 }, "slow");

                }

            });
		}
		function sameadd(form){
	          	if(form.sameashome.checked){
	                form.provincial_address.value = form.present_address.value;
	                form.provincial_city.value = form.present_city.value;
	                form.provincial_province.value = form.present_province.value;
	              
	                }
	                else{
	                     form.provincial_address.value = "";
	                     form.provincial_city.value = "" ;
	                     form.provincial_province.value = "";
	                     
	                }
	        	}
        function sameadd2(form){
          if(form.sameashome2.checked){
              form.mailing_address.value = form.present_address.value;
              form.mailing_city.value = form.present_city.value;
              form.mailing_province.value = form.present_province.value;
           
              }
              else{
                   form.mailing_address.value = "" ;
                   form.mailing_city.value = "" ;
                   form.mailing_province.value = "";
                   
              }
            }
        function sameaddfather(form){
          if(form.sameasfather.checked){
                add = form.present_address.value;
                city = form.present_city.value;
                prov = form.present_province.value;
                fulladd = add.concat(", ",city,", ",prov);
                form.father_address.value = fulladd;

                }
                else{
                     form.father_address.value = "";
                                         
                }
          }
        function sameaddmother(form){
          if(form.sameasmother.checked){
                    form.mother_address.value = form.father_address.value;

                }
                else{
                     form.mother_address.value = "";
                                         
                }
          }
		</script>
	</body>
</html>
