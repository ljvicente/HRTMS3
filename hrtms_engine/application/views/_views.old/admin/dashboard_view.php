<?php if($this->session->userdata('permission') != 'Administrator'&& $this->session->userdata('permission') != 'HR') {  echo $this->session->userdata('permission');}//redirect(base_url() . 'index.php/logout');} ?>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
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
					
					<li class="active">
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
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li>
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
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
							<li  >
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
						<li class="active">Control Panel</li>
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
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Dashboard
							</small>
						</h1>
					</div><!--/.page-header-->
					<div class="row-fluid">
						<div class="alert alert-success" data-step="1" data-intro="Let's take a quick guide with the basics!">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
									<strong>Hello there!</strong>
										You logged as <?php echo $this->session->userdata("permission");?>.
									<br>

								</div>
					</div>

					<div class="row-fluid">

						<!--PAGE CONTENT STARTS HERE-->
							<div class="span5">
								
								<div class="widget-box">
									<div class="widget-header">
										<h4 class="smaller">
											<i class="icon-info"></i> Introduction
											<small>HRTMS</small>
										</h4>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<p align="center">
												In this account you will be able to manage HR information and accounts.
											</p>
											<p align="center">
												<a class="btn btn-success btn-small tooltip-success" data-rel="tooltip" data-placement="right" title="" data-original-title="Right Success" href="javascript:void(0);" onclick="javascript:introJs().start();"><i class="icon-star"></i> Start A Tour</a>
												<span class="btn btn-primary btn-small tooltip-error" data-rel="tooltip" data-placement="top" title="" data-original-title="Top Danger"><i class="icon-book"></i> See Documentation</span>
												
												
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="span7">
								

								
								
								<div class="widget-box">
								<div class="widget-header header-color-blue">
									<h5><i class="icon-folder-close"></i> Reports</h5>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<a target ="_blank" href="<?php echo base_url();?>Reports/list_trainee">List of Trainee</a><br>
										<a target ="_blank" href="<?php echo base_url();?>Reports/trainee_attendance">Trainee Attendance</a><br>
										<a target ="_blank" href="<?php echo base_url();?>Reports/gradesheet">Gradesheet</a><br>
										<a target ="_blank" href="<?php echo base_url();?>Reports/certificate">Certificate</a><br>
										<a target ="_blank" href="<?php echo base_url();?>Reports/certificate">Completed Modules</a>
									</div>
								</div>
							</div>

							<!--PAGE CONTENT ENDS HERE-->
							</div>

						<!--/row-->

				</div>
				<p></p>
				<?php if($this->session->userdata("permission")=="Administrator") {?>
				<div class="row-fluid">
					
					<div class="span12">
							
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> Manpower Request Status</h5>
								</div>

								<div class="widget-body">
									<div class="widget-main">

										<div class="alert alert-danger">
											<strong>Note:</strong> Requests that are filled with trainees cannot be declined.
										</div>
										
							          <table id="table-request" class="table table-striped table-bordered table-hover">

							          	<thead>
							          		<tr>
							          			<th>Request ID</th>
							          			<th>Company</th>
							          			<th>Status</th>
							          			<th>Date Requested</th>
							          			<th>&nbsp;</th>
							          			
							          		</tr>
							          	</thead>
							          	<tbody>
							          		

							          		<?php if(isset($record)) : foreach($record as $row) : ?>
												<tr>
													<td><?php //$date = date("Y",strtotime($row->date_requested)); echo "AMI-REQ-".substr($date,-2)."".sprintf("%04d", $row->request_id);
														echo $row->request_id;
														?>
													</td>
													<td><?php echo $row->company;?></td>
								          			<td><?php if($row->confirmed == "0") {
								          				echo '<span class="label label-warning">Not Confirmed</span>';
								          				}
								          				else {
								          					echo '<span class="label label-success">Confirmed</span>';
								          				}
								          			?></td>
								          			<td><?php echo   date("d M Y", strtotime($row->date_requested) );?></td>
								          			<td>
								          				<button id="<?php echo $row->request_id?>" class="bview btn btn-info btn-mini">More info</button>
								          				<?php $dep = $row->is_deployed ; $train = $row->is_training;
								          				if($train == 0 && $dep == 0){?>
								          				<button id="<?php echo $row->request_id?>" class="bconfirm btn btn-success btn-mini">Edit Confirmation</button>
								          				<?php }
								          				else {?>
								          				<button id="<?php echo $row->request_id?>" class="bconfirm btn btn-success btn-mini" disabled>Edit Confirmation</button>
								          				<?php }?>
								          			</td>
								          			
												</tr>
											<?php endforeach;?>
											<?php endif; ?>
							          	</tbody>

							          </table>
									</div>
								</div>
							</div>
							<p>
							</p>
							

						</div>
				</div>
				<?php }?>
				<!--/#page-content-->

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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-templ.js" type="text/javascript"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	

		$(document).ready(function() {

		  	var oTable =  $('#table-request').dataTable({
				"aoColumns": [
					null,null,null,
					null,
					{ "bSortable": false },
				],
				
			});
			oTable.fnSort( [ [3,'desc']] );

			$(".bconfirm").on(ace.click_event, function() {

				var id = $(this).attr("id");
				bootbox.dialog("Edit Request Confirmation", [{
					"label" : "Confirm Request",
					"class" : "btn-small btn-success",
					"callback": function() {
						//Example.show("great success");
						$.ajax({
							url: "<?php echo base_url();?>administrative/confirm_request",
							type: "post",
							data: {
								action: "confirm",
								id: id
							},
							success: function(e) {
								console.log(e);
								location.reload();
							}
						});
					}
					}, {
					"label" : "Decline Request",
					"class" : "btn-small btn-danger",
					"callback": function() {
						$.ajax({
							url: "<?php echo base_url();?>administrative/confirm_request",
							type: "post",
							data: {
								action: "pogi",
								id: id
							},
							success: function(e) {
								console.log(e);
								location.reload();
							}
						});
					}
					}, {
					"label" : "Cancel",
					"class" : "btn-small"
					}]
				);
			});


			$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
				_title: function(title) {
					var $title = this.options.title || '&nbsp;'
					if( ("title_html" in this.options) && this.options.title_html == true )
						title.html($title);
					else title.text($title);
				}
			}));
			$(".bview").on(ace.click_event, function(e) {
				e.preventDefault();
				var id = $(this).attr("id");

				$.ajax({
					url: "<?php echo base_url();?>administrative/viewRequest",
					type: "post",
					data: {
						id: id
					},
					dataType: 'json',
					success: function(e) {
						console.log(e);
						$('#view').html(e);

						//result(e);
						showDialog(id);
					}
				});
				
			});
		


		});
		
			var showDialog = function(id){
				$( "#dialog" ).removeClass('hide').dialog({
					dialogClass: "no-close",
					resizable: false,
					modal: true,
					closeOnEscape: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-exchange'></i> "+id+". Manpower Details.</h4></div>",
					title_html: true,
					width: 600,
					//maxWidth: 800,
					maxHeight: 500,
					buttons: [
						    {
						      text: "OK",
						      "class" : "btn btn-info btn-mini",
						      click: function() {
						        $( this ).dialog( "close" );
						      }
						    }
						  ]
					
				});

			}
						 
		</script>

	</body>
	<div id="dialog">
	   <div id="view"></div>
	</div>
</html>
