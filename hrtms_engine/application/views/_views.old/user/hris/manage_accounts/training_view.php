<?php if($this->session->userdata('permission') != 'Administrator') { redirect(base_url() . 'index.php/404');} ?>
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

		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>

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
					
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li >
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

					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
 
					<li  class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li  class="">
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li class="active">
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
			<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-shield"></i>
							<a href="#">Manage Accounts</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Training Department</li>
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
							Training Department Management
							<small>
								<i class="icon-double-angle-right"></i>
								Trainer Accounts
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span9">

							<div class="box">
									<div class="box-header well" data-original-title>
										<h2><i class="icon-key"></i> Login Accounts for Trainer</h2>
										<div class="box-icon">
											<!--
											<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
											<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
											<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
										-->
										</div>
									</div>
									<div class="box-content"> 

										<div class="row-fluid">
											
											<div class="table-header">
												 Results for "Accounts"
											</div>
											<table id="trainee_list" class="table table-striped table-bordered table-hover">
											<thead>
											<tr>
												
												<th>
													Name
												</th>
												<th>
													Username
												</th>
												<th class="hidden-480">
													Email Address
												</th>
												<th class="hidden-phone">													
													Date Created
												</th>
												<th class="hidden-480">
													Last Login
												</th>
												<th> 
												</th>
											</tr> 
											</thead>
											<tbody>
												<?php if(isset($records)) : foreach($records as $row) : ?>
													<tr>
														
														<td><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name;?></td>
														<td><?php echo $row->username;?></td>
														<td><?php echo $row->email;?></td>														
														<td><?php echo $row->date_created;?></td>
														<td><?php echo $row->last_login;?></td>	
														<td class="td-actions">

																<!--
																		<a id="<?php echo $row->id;?>" style="cursor:pointer;" class="editbutton btn btn-info"><i class="icon-edit icon-white"></i></a>
																		<a id="<?php echo $row->id;?>" style="cursor:pointer;" class="deletebutton btn btn-danger"><i class="icon-trash icon-white"></i> </a>	
																		!-->
														 <div class="hidden-phone visible-desktop btn-group">
															<button class="btn btn-mini btn-success">
																<i class="icon-ok bigger-120"></i>
															</button>

															<button class="btn btn-mini btn-info">
																<i class="icon-edit bigger-120"></i>
															</button>

															<button class="btn btn-mini btn-danger">
																<i class="icon-trash bigger-120"></i>
															</button>

															<button class="btn btn-mini btn-warning">
																<i class="icon-flag bigger-120"></i>
															</button> 
														</div>
									
														</td>
													</tr>
													<?php endforeach;?>

												<?php endif; ?>
											</tbody>
											</table>
										</div>

										<small>Page rendered in: {elapsed_time} seconds</small>
									</div>
								</div>

								
							</div> 

						<div class="span3">

							<!-- ADD HR START -->
							
							<!-- ADD HR END -->

							<div class="widget-box">

										<div class="widget-header">
											<h4><i class="icon-user"></i>Add Account</h4>
											
											<span class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="icon-chevron-up"></i>
												</a>

												<a href="#" data-action="reload">
													<i class="icon-refresh"></i>
												</a>

												
											</span>
										</div>

										<div class="widget-body"><div class="widget-body-inner">
											<div class="widget-main">
												<div class="row-fluid">

													<?php if(!is_null($this->session->userdata('error_trainer'))) echo $this->session->userdata('error_trainer'); ?>
													<form method="post" action="<?php echo base_url();?>manage/add_trainer">

														<label><i class="light-red icon-asterisk"></i> Username:  </label>
														<input autofocus  style="width: 94%" placeholder="Enter Username" type="text" id="username" name="username">

														<label><i class="light-red icon-asterisk"></i> Password: </label>
														<input style="width: 94%" type="password" id="password" name="password">

														<label><i class="light-red icon-asterisk"></i> Confirm Password: </label>
														<input style="width: 94%" type="password" id="password_confirm" name="password_confirm">

														<label><i class="light-red icon-asterisk"></i> First Name: </label>
														<input style="width: 94%" type="text" id="first_name" name="first_name">

														<label><i class="light-red icon-asterisk"></i> Last Name: </label>
														<input style="width: 94%" type="text" id="last_name" name="last_name">

														<label>Middle Name: </label>
														<input style="width: 94%" type="text" id="middle_name" name="middle_name">

														<label><i class="light-red icon-asterisk"></i> Email address: </label>
														<input  style="width: 94%" type="email" id="email" name="email" >

														<hr>

														<button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add HR</button>

														
													</form>	
												</div>

												
											</div>
										</div></div>
									</div>

						</div>

						

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

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
			
				$('.dialogs,.comments').slimScroll({
			        height: '300px'
			    });
				
				$('#tasks').sortable();
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});

				//datatable initializatino
				var oTable1 = $('#trainee_list').dataTable( {
				"aoColumns": [			     
			      null, null,null, null, null,
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

			});	
		</script>
	</body>
</html>
