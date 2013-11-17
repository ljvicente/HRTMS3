<?php if($this->session->userdata('permission') != 'Administrator'&& $this->session->userdata('permission') != 'HR') { redirect(base_url() . 'index.php/404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - HRTMS Administration
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

						<li class="green">
							<a href="<?php echo base_url(); ?>messenger">
								<i class="icon-envelope-alt icon-only"></i> Inbox
								<span class="badge badge-success"></span>
							</a>
						</li>

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
		<?php } ?>
		<div class="container-fluid" id="main-container">
			<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
			<!--	<div id="sidebar-shortcuts">
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
				-->
				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>


						<ul class="submenu">
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li>
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
							<li  class="active">
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>



					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>
					<?php }?>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>

							
						</ul>
					</li>
					<?php }?>
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
			
				</ul>

				<!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


			
			<?php } ?>
		<?php if(isset($records)) : foreach($records as $row) : ?>
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
						<li class=""><a href="<?php echo base_url();?>applicant">Registration</a></li>
						<span class="divider">
								<i class="icon-angle-right"></i>
						</span>
						<li class="active"><?php echo $row->register_id;?></li>
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
					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div id="user-profile-2" class="user-profile row-fluid">
									<div class="tabbable">
								
										<div class="tab-content no-border padding-24">
											<div id="home" class="tab-pane in active">
												<div class="row-fluid">
													<div class="span3 center">
														<span class="profile-picture">
															<img class="editable" alt="Alex&#39;s Avatar" id="avatar" src="<?php echo base_url();?>hrtms_resources/images/profile-pic.jpg">
														</span>
														<div class="width-80 label label-info label-large arrowed-in arrowed-in-right">
															<div class="inline position-relative">
																<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-circle light-green middle"></i>
																	&nbsp;
																	<span class="white middle bigger-120"><?php 
																	$mid = $row->middle_name;
																	if($mid != null)	{$m = $row->middle_name[0].'.';} else { $m = $mid;}
																		

																		echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
																</a>
															</div>
														</div>

														<div class="space space-4"></div>

													</div><!--/span-->

													<div class="span9">
													<form class="form-horizontal" method="POST" action="<?php echo base_url();?>applicant/edit_info/<?php echo $row->register_id;?>">
														<div class="alert alert-info">
										                  <p>Items marked with an asterisk (<span class="mandatory_star">*</span>) are required.</p>  
										              	</div>
										               
											              <div id="infoMessage" align="center"><?php 
											              $success = $this->session->flashdata('success');
											              if ($message == null){

											              }
											              else{
											              echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
											              echo '<div class="alert alert-error">';
											              echo $message;
											              echo '</div>';
											              }

											              if($success != null){
												              echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
												              echo '<div class="alert alert-success">';
												              echo $success;
												              echo '</div>';

											              }
											              else
											              {

											              }
											              ?>
											              </div>

														<div class="profile-user-info">
													
															<div class="profile-info-row">
																<div class="profile-info-name">Full Name </div>
																
																<div class="profile-info-value">
																	
																	<div class="control-group">
																		<label class="control-label" for="first_name" >First Name</label>

																		<div class="controls">
																			<input type="text" id="first_name" name="first_name" value="<?php echo $row->first_name;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="last_name" >Last Name</label>

																		<div class="controls">
																			<input type="text" id="last_name" name="last_name" value="<?php echo $row->last_name;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="middle_name">Middle Name</label>

																		<div class="controls">
																			<input type="text" id="middle_name"  name="middle_name" value="<?php echo $row->middle_name;?>">
																		</div>
																	</div>

																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Location </div>
																<div class="profile-info-value">
																	
																	<div class="control-group">
																		<label class="control-label" for="address" >Address</label>

																		<div class="controls">
																			<input type="text" id="address" name="address" value="<?php echo $row->address;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="city" >City</label>

																		<div class="controls">
																			<input type="text" id="city" name="city" value="<?php echo $row->city;?>">
																		</div>
																	</div>

																	<div class="control-group">
																		<label class="control-label" for="province" >Province</label>

																		<div class="controls">
																			<input type="text" id="province" name="province" value="<?php echo $row->province;?>">
																		</div>
																	</div>

																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Birthday </div>

																<div class="profile-info-value">
																		<div class = "controls input-append" >
																		<input  placeholder="Click to add date" class="span10 date-picker" name="birth_date" id="birthdate"  value ="<?php echo $row->birth_date;?>" type="text" data-date-format="yyyy-mm-dd">
																		<span class="add-on">
																			<i class="icon-calendar"></i>
																		</span>
														          		</div>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Height </div>

																<div class="profile-info-value">
																	<input type="text" name="height" class="controls span2" value="<?php echo $row->height;?>">
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Civil Status </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="" ></label>

																		<div class="controls">
																			 <select id="" name = "civil_status">
													                          <option disabled = "disabled" selected = "selected" value="">Select Status..</option>
													                          <option value = "Single" <?php if($row->civil_status=='Single') echo 'selected';?>>Single</option>
													                          <option value = "Married" <?php if($row->civil_status=='Married') echo 'selected';?>>Married</option>
													                          <option value = "Separated" <?php if($row->civil_status=='Separated') echo 'selected';?>>Separated</option>
													                          <option value = "Widowed" <?php if($row->civil_status=='Widowed') echo 'selected';?>>Widowed</option>
													                          <option value = "Divorced" <?php if($row->civil_status=='Divorced') echo 'selected';?>>Divorced</option>
													                        </select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Phone </div>

																<div class="profile-info-value">
																	
																	<input class="controls input-mask-phone" type="text" id="form-field-mask-2" name="phone" value="<?php echo $row->phone;?>" />

																</div>
															</div>
															<div class="form-actions">
															<button class="btn btn-info btn-small" type="submit">
																<i class="icon-ok bigger-110"></i>
																Submit
															</button>

															&nbsp; &nbsp; &nbsp;
															</div>
													</form>
													<form method="POST" action="<?php echo base_url();?>profile/">
															<div class="profile-info-row">
																<div class="profile-info-name"> Account </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="username" name="username">Username</label>

																		<div class="controls">
																			<input type="text" id="username" value="<?php echo $row->username;?>">
																		</div>
																	</div>
																	<div class="control-group">
																		<label class="control-label" for="email" name="email">Email</label>

																		<div class="controls">
																			<input type="text" id="email" value="<?php echo $row->email;?>">
																		</div>
																	</div>
																</div>
																
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Password </div>

																<div class="profile-info-value">
																	<div class="control-group">
																		<label class="control-label" for="oldPass" name="oldPass">Old Password</label>

																		<div class="controls">
																			<input type="password" id="oldPass" value="<?php echo $row->password;?>">
																		</div>
																	</div>
																	<div class="control-group">
																		<label class="control-label" for="newPass" name="newPass">New Password</label>

																		<div class="controls">
																			<input type="text" id="newPass">
																		</div>
																	</div>
																</div>
																
															</div>


														
														
														
														<div class="form-actions">
															<button class="btn btn-info btn-small" type="submit">
																<i class="icon-ok bigger-110"></i>
																Submit
															</button>

															&nbsp; &nbsp; &nbsp;
														</div>
													</form>
														<div class="hr hr-8 dotted"></div>

												
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20"></div>

											</div><!--#home-->

										</div>
									</div>
						</div>
					<?php endforeach;?> 
					<?php endif; ?>
									         
						<!--PAGE CONTENT ENDS HERE-->
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
				$.mask.definitions['~']='[+-]';
      			$('.input-mask-phone').mask('(999) 999-9999');
				

				$('.dialogs,.comments').slimScroll({
			        height: '300px'
			    });
				
				$('#tasks').sortable();
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});

				//datatable initialization
				var oTable1 = $('#table_report').dataTable( {
				"aoColumns": [
			      null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
				$('[data-rel=tooltip]').tooltip();


				$('.date-picker').datepicker().next().on(ace.click_event, function() {
					$(this).prev().focus();
				});

				$('.date-picker').datepicker({
				    onSelect: function(dateText, inst) {
				      $("#date_requested").val(dateText);
					}
				});

			});	

		</script>
	</body>
</html>
