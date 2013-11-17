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
								Dependent/ Beneficiary/ Character Reference
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
						  <!-- Tab 1 -->
					  	<div class="tabbable tabs-left">
							<ul class="nav nav-tabs" id="myTab">
								<li class="active">
									<a data-toggle="tab" href="#tab_dependent">
										<i class="pink icon-dashboard bigger-110"></i>
										Dependent
									</a>
								</li>

								<li class="">
									<a data-toggle="tab" href="#tab_beneficiary">
										<i class="blue icon-user bigger-110"></i>
										Beneficiary
									</a>
								</li>

								<li class="">
									<a data-toggle="tab" href="#tab_character_reference">
										<i class="icon-rocket"></i>
										Character Reference
									</a>
								</li>
							</ul>

							<div class="tab-content">
								<div id="tab_dependent" class="tab-pane active">
									<div class="table-header">
										<b>Name(s) of Dependent</b>
				                      	<i>(if none, proceed to the next step)</i> 
									</div>
									<table id="table_dependent" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Birthday</th>
			               					<th>Relationship</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
									<?php if(isset($records)) : foreach($records as $row) : ?>
		                    		
		                    			<tr>
		                    				<td><?php echo $row->dependent_name;?></td>
		                    				<td><?php echo $row->dependent_birthdate;?></td>
		                    				<td><?php echo $row->dependent_relationship?></td>
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
			                      	
				                  	<div id="dependentDiv" style="display:none">
										<h2>Dependent's Information</h2>

					               		<form id="dependent_form" class="form-horizontal">
					               			<div class="control-group">
												<label class="control-label" for="dependent_name">Full Name</label>

												<div class="controls">
													<input type="text" id="dependent_name" name="dependent_name">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="dependent_dob">Date of Birth</label>

												<div class="controls">
													 <!-- <input type ="date"  id="dependent_dob"  class="input-medium" name="dependent_dob"> -->
													<span class="input-append">
														<span class="add-on">	
															<i class="icon-calendar"></i>
														</span>
														<input  class="span6 input-date datepicker" id="dependent_dob"  class="input-medium" name="dependent_dob" type="text">	
													</span>				
												</div> 
											</div>

					               			<div class="control-group">
												<label class="control-label" for="dependent_relationship">Relationship to Dependent</label>

												<div class="controls">
													<input type="text" id="dependent_relationship" name="dependent_relationship">
												</div>
											</div>
					                      	<div class="form-actions">
												<button class="btn btn-info btn-small" type="submit">
													<i class="icon-ok bigger-110"></i>
													Submit
												</button>

												&nbsp; &nbsp; &nbsp;
												<button class="btn btn-small" type="reset">
													<i class="icon-undo bigger-110"></i>
													Reset
												</button>
											</div>
						                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addDependentDiv" >
			                       		<a href="#" id="addDependent" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Dependent's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelDependentDiv" style="display:none">
			                       		<a href="#" id="cancelDependent" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>

								<div id="tab_beneficiary" class="tab-pane">
									<div class="table-header">
										<b>Name(s) of Beneficiary</b>
					                    <i>(if none, proceed to the next step)</i> 
									</div>
									<table id="table_beneficiary" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Birthday</th>
			               					<th>Relationship</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
									<?php if(isset($records2)) : foreach($records2 as $row) : ?>
		                    		
		                    			<tr>
		                    				<td><?php echo $row->beneficiary_name;?></td>
		                    				<td><?php echo $row->beneficiary_birthdate;?></td>
		                    				<td><?php echo $row->beneficiary_relationship?></td>
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
				                  	
					               <div id="beneficiaryDiv" style="display:none">
										<h2>Beneficiary's Information</h2>

					               		<form id="beneficiary_form" class="form-horizontal">
					               			<div class="control-group">
												<label class="control-label" for="beneficiary_name">Full Name</label>

												<div class="controls">
													<input type="text" id="beneficiary_name" name="beneficiary_name">
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="beneficiary_dob">Date of Birth</label>

												<div class="controls">
													<!-- <input type ="date"  id="beneficiary_dob"  class="input-medium" name="beneficiary_dob"> -->
													<span class="input-append">
														<span class="add-on">	
															<i class="icon-calendar"></i>
														</span>
														<input  class="span6 input-date datepicker" id="beneficiary_dob"  class="input-medium" name="beneficiary_dob" type="text" >	
													</span>		 
												</div>
											</div>

					               			<div class="control-group">
												<label class="control-label" for="beneficiary_relationship">Relationship to beneficiary</label>

												<div class="controls">
													<input type="text" id="beneficiary_relationship" name="beneficiary_relationship">
												</div>
											</div>
					                      	<div class="form-actions">
												<button class="btn btn-info btn-small" type="submit">
													<i class="icon-ok bigger-110"></i>
													Submit
												</button>

												&nbsp; &nbsp; &nbsp;
												<button class="btn btn-small" type="reset">
													<i class="icon-undo bigger-110"></i>
													Reset
												</button>
											</div>
						                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addBeneficiaryDiv" >
			                       		<a href="#" id="addBeneficiary" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Beneficiary's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelBeneficiaryDiv" style="display:none">
			                       		<a href="#" id="cancelBeneficiary" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>

								<div id="tab_character_reference" class="tab-pane">
									<div class="table-header">
										<b>Character Reference</b>
										<i>(except family and relatives)</i> 
									</div>
									<table id="table_character_reference" class="table table-striped table-bordered table-hover">
			               			<thead>
			               				<tr>
			               					<th>Name</th>
			               					<th>Company</th>
			               					<th>Contact No</th>
			               					<th></th>
			               				</tr>
			               			</thead>
			               			<tbody>
					              	<?php if(isset($records3)) : foreach($records3 as $row) : ?>
					              			
			                    			<tr>
			                    				<td><?php echo $row->character_name;?></td>
			                    				<td><?php echo $row->character_company;?></td>
			                    				<td><?php echo $row->character_contact_no?></td>
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
	
		                    	    <div id="characterReferenceDiv" style="display:none">
									<h2>Character Reference's Information</h2>

				               		<form id="character_reference_form" class="form-horizontal">
				               			<div class="control-group">
											<label class="control-label" for="CR_name">Full Name</label>

											<div class="controls">
												<input type="text" id="CR_name" name="CR_name">
											</div>
										</div>

				               			<div class="control-group">
											<label class="control-label" for="CR_company_name">Name of Company</label>

											<div class="controls">
												 <input type ="text"  id="CR_company_name"  class="" name="CR_company_name">
											</div> 
										</div>

				               			<div class="control-group">
											<label class="control-label" for="CR_contact_no">Contact No</label>

											<div class="controls">
												<input class="input-mask-phone" type="text" id="CR_contact_no" name="CR_contact_no">
											</div>
										</div>
				                      	<div class="form-actions">
											<button class="btn btn-info btn-small" type="submit">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-small" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
					                </form>
									</div>
									<div class="pager" >    
				   	         		<div class="btn-group" id="addCharacterReferenceDiv" >
			                       		<a href="#" id="addCharacterReference" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
			                      		<span class="help-inline">Click Add+ to add more Character Reference's Information.</span>
			                       	</div>
			                       	<div class="btn-group" id="cancelCharacterReferenceDiv" style="display:none">
			                       		<a href="#" id="cancelCharacterReference" class="btn btn-info copy1" rel=".child"><i class="icon-remove"></i>Cancel</a>
		                       		</div>
									</div> 
								</div>
							</div>
						</div>
			
		             
		               
                <!-- End of Tab 1 -->
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
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-tag.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>

	    <script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>

		<!--inline scripts related to this page-->
		<script type="text/javascript">
		
		$( document ).ready(function() {


			var selectedTab = localStorage['selectedTab'];
			if (selectedTab) $('#myTab a[href="'+selectedTab+'"]').tab('show');

			$('a[data-toggle="tab"]').on('shown', function (e) {
			   localStorage['selectedTab']=$(e.target).attr('href');
			});		

			$('.input-mask-phone').mask('(999) 999-9999');
  			/*
			$(".date_start").datepicker().next().on(ace.click_event, function() {
				$(this).prev().focus();
			});*/

			$('.datepicker').datepicker({
			  	format: "yyyy-mm-dd",
			    //startDate: "now",
			    //todayBtn: true,
			    orientation: "top auto", 
			    autoclose: true
			}) 
			

			$.extend($.gritter.options, { 
	        position: 'bottom-right', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
			fade_in_speed: 'medium', // how fast notifications fade in (string or int)
			fade_out_speed: 1000, // how fast the notices fade out
			time: 1000 // hang on the screen for...
			});
		/** Add Dependent **/	
			$("#addDependent").click(function() {
			  $("#dependentDiv").slideDown();
			  $("#addDependentDiv").slideUp();
			  $('#cancelDependentDiv').slideDown();

			});

			$("#cancelDependent").click(function() {
	      		$('#cancelDependentDiv').hide();
			 	$('#dependentDiv').slideUp();
				$("#addDependentDiv").slideDown();

			});
		/** **/
		/** Add Beneficiary **/	
			$("#addBeneficiary").click(function() {
			  $("#beneficiaryDiv").slideDown();
			  $("#addBeneficiaryDiv").slideUp();
			  $('#cancelBeneficiaryDiv').slideDown();

			});

			$("#cancelBeneficiary").click(function() {
	      		$('#cancelBeneficiaryDiv').hide();
			 	$('#beneficiaryDiv').slideUp();
				$("#addBeneficiaryDiv").slideDown();

			});
		/** **/	
		/** Add Character Reference **/	
			$("#addCharacterReference").click(function() {
			  $("#characterReferenceDiv").slideDown();
			  $("#addCharacterReferenceDiv").slideUp();
			  $('#cancelCharacterReferenceDiv').slideDown();

			});

			$("#cancelCharacterReference").click(function() {
	      		$('#cancelCharacterReferenceDiv').hide();
			 	$('#characterReferenceDiv').slideUp();
				$("#addCharacterReferenceDiv").slideDown();

			});
			/** **/	
			//other

			//datatable initializatino
			var oTable1 = $('#table_dependent').dataTable( {
			"aoColumns": [
		     	null, null, null,
			  { "bSortable": false }],
			  "aLengthMenu": [[5, 10, 15, 25, -1], [5, 10, 15, 25, "All"]],
				"iDisplayLength" : 5
			   } );
			
			//datatable initializatino
			var oTable2 = $('#table_beneficiary').dataTable( {
			"aoColumns": [
		     	null, null, null,
			  { "bSortable": false }],
			  	"aLengthMenu": [[3], [3]],
				"iDisplayLength" : 3,
				});

			//datatable initializatino
			var oTable3 = $('#table_character_reference').dataTable( {
			"aoColumns": [
		     null, null, null,
			  { "bSortable": false }],
			  "aLengthMenu": [[5, 10, 15, 25, -1], [5, 10, 15, 25, "All"]],
				"iDisplayLength" : 5,
			 } );

				
			$('[data-rel=tooltip]').tooltip();

			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
			

 			var	beneficiarySize = oTable2.fnGetData().length;
 			if(beneficiarySize >= 3){
 				/*$('#addBeneficiary').addClass('disabled');*/
 				
 				$('#addBeneficiary').attr('disabled', 'disabled');
 			} 
 			else
 			{
 				$('#addBeneficiary').removeClass('disabled');
 			} 

			
		/**************** Validations *******************/
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
 
	        $('#dependent_form').validate({
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	            dependent_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            dependent_dob: {
	              required:true,
	              date:true,
	          	},
	          	dependent_relationship: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },

	          },
	      
	          messages: {
	          	dependent_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	dependent_relationship: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          		//nameValidation: "Relationship must not contain special characters except comma, dash and period.",
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
	            console.log('SUBMIT DEPENDENT FORM');
	            dependent_submit();
	            $('input').closest('.control-group').removeClass('success');
	          },
	          invalidHandler: function (form) {
	            
	          },

	        });


			$('#beneficiary_form').validate({
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	            beneficiary_name: {
	              required: true,
	              minlength:2,
             	  nameValidation:true,
	            },
	            beneficiary_dob: {
	              required:true,
	              date:true,
	          	},
	          	beneficiary_relationship: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },

	          },
	         
	          messages: {
	          	beneficiary_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	beneficiary_relationship: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          		//nameValidation: "Relationship must not contain special characters except comma, dash and period.",
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
	            console.log('SUBMIT BENEFICIARY FORM');
	            beneficiary_submit();
	            $('input').closest('.control-group').removeClass('success');

	          },
	          invalidHandler: function (form) {
	            
	          },

	        });



			$('#character_reference_form').validate({
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	            CR_name: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },
	            CR_company_name: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	          	},
	          	CR_contact_no: {
	              required: true,
	              phone: true
	            },

	          },
	      
	          messages: {
	          	CR_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	CR_company_name: {
	          		minlength: jQuery.format("At least {0} characters required."),

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
	            console.log('SUBMIT CHARACTER REFERENCE FORM');
	            character_reference_submit();
	            $('input').closest('.control-group').removeClass('success');
	          },
	          invalidHandler: function (form) {
	            
	          },

	        });

		/**************** Validations *******************/

	      	

		});
		
		var dependent_submit = function() {
			
		  this.disabled = 'true';
		  var sData = $('#dependent_form').serialize();
		  console.log(sData);
		  $.ajax({
               url:"<?php echo base_url();?>hris/insertDependent",
                type:'POST',
                data:sData,
               	//dataType:"json",
                success:function(result){
    
		                $.gritter.add({
							title: 'Human Resource Information Update',
							text: '<i class="icon-spinner icon-spin green icon-2x"></i> Dependent/Dependents has been updated.',
							class_name: 'gritter-success gritter-center gritter-light'
						});

		                $( '#dependent_form' ).each(function(){
						    this.reset();
						});
						$('#dependentDiv').slideUp();
						$("#addDependentDiv").slideDown();
						$('#cancelDependentDiv').hide();

						console.log(result);
						var str,str2="";
						var obj = $.parseJSON(result);
			                $.each(obj, function(){
			                	str =	'<div class="hidden-phone visible-desktop btn-group">';
		                		str +=	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
								str +=	'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>';
								str += 	'</div>';


							   $('#table_dependent').dataTable().fnAddData([
									this['dependent_name'],
									this['dependent_birthdate'],
								   	this['dependent_relationship'],
								 	str ]
								 	);
			                });
				}
                //$("html, body").animate({ scrollTop: 0 }, "slow");

               

            });


		};

		var beneficiary_submit =  function(){
		
		  //event.preventDefault();
		  this.disabled = 'true';
		  var sData = $('#beneficiary_form').serialize();
		  console.log(sData);
		  $.ajax({
               url:"<?php echo base_url();?>hris/insertBeneficiary",
                type:'POST',
                data:sData,
               	//dataType:"json",
                success:function(result){
    
                $.gritter.add({
					title: 'Human Resource Information Update',
					text: '<i class="icon-spinner icon-spin green icon-2x"></i> Beneficiary/Beneficiaries has been updated.',
					class_name: 'gritter-success gritter-center gritter-light'
				});
                $( '#beneficiary_form' ).each(function(){
				    this.reset();
				});
				$('#beneficiaryDiv').slideUp();
				$("#addBeneficiaryDiv").slideDown();
				$('#cancelBeneficiaryDiv').hide();

				console.log(result);
				var str,str2="";
				var obj = $.parseJSON(result);
	                $.each(obj, function(){
                		str =	'<div class="hidden-phone visible-desktop btn-group">';
                		str +=	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
						str +=	'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>';
						str += 	'</div>';
									
					$('#table_beneficiary').dataTable().fnAddData([
							this['beneficiary_name'],
							this['beneficiary_birthdate'],
						   	this['beneficiary_relationship'],
						 	str ]
						 	);
	                });
		
                //$("html, body").animate({ scrollTop: 0 }, "slow");

                }

            });

 
		};
			
		
		var character_reference_submit = function() {
		  //event.preventDefault();
		  this.disabled = 'true';
		  var sData = $('#character_reference_form').serialize();
		  console.log(sData);
		   $.ajax({
                url:"<?php echo base_url();?>hris/insertCharacterReference",
                type:'POST',
                data:sData,
                //dataType:"json",
               
                success:function(result){
                //$("#success").show();
                //$("#success").attr('class', 'alert alert-success');
                //var output_string = "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button><p><strong><i class=\"icon-ok\"></i>Well done!</strong> You successfully added an applicant.</p><p><a class=\"btn btn-small btn-success\" href=\"<?php echo base_url();?>training\">Trainee List</a><button class=\"btn btn-small\">Or This One</button></p></div>";
               // $("#success").html(output_string);
                //$("#result_table").hide();
                // location.reload();
                $.gritter.add({
					title: 'Human Resource Information Update',
					text: '<i class="icon-spinner icon-spin green icon-2x"></i> Character Reference has been updated.',
					class_name: 'gritter-success gritter-center gritter-light'
				});
				
	           	$( '#character_reference_form' ).each(function(){
				    this.reset();
				});
				$('#characterReferenceDiv').slideUp();
				$("#addCharacterReferenceDiv").slideDown();
				$('#cancelCharacterReferenceDiv').hide();

				console.log(result);
					var str,str2="";
					var obj = $.parseJSON(result);
		                $.each(obj, function(){
		                	str =	'<div class="hidden-phone visible-desktop btn-group">';
	                		str +=	'<button class="btn btn-mini btn-info"><i class="icon-edit bigger-120"></i></button>';
							str +=	'<button class="btn btn-mini btn-danger"><i class="icon-trash bigger-120"></i></button>';
							str += 	'</div>';
										
						   $('#table_character_reference').dataTable().fnAddData([
								this['character_name'],
								this['character_company'],
							   	this['character_contact_no'],
							 	str ]
							 	);
		                });
                }

            });

		};

		</script>
	</body>
</html>
