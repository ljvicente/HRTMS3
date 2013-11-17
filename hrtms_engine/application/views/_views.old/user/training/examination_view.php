
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Examination - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />

		<style type="text/css">
			input[type=checkbox],
			input[type=radio] {
				opacity: 100;
				position: relative;
				z-index: 12;
				width: 18px;
				height: 18px;
				display:inline; margin:0px; padding:0px;
			}

		</style>
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
							AMI - Training Center Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<!--<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
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
									8 Notifications
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
										Bob just signed up as an editor ...
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
						</li>-->

						<li class="green">
							<a href="<?php echo base_url(); ?>messenger">
								<i class="icon-envelope-alt icon-only"></i> Inbox
								<span class="badge badge-success"></span>
							</a>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php if($this->session->userdata('image_file')=='') { echo base_url().'hrtms_resources/avatars/user.jpg'; } else { echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');}?>" alt="<?php echo $this->session->userdata('username');?>'s Photo" />
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
							<i class="icon-ok"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-puzzle-piece"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-star"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-print"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-danger"></span>

						<span class="btn btn-warning"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					<li>
						<a href="modules">
							<i class="icon-folder-open"></i>
							<span>Manage Modules</span>
						</a>
					</li>

					<li>
						<a href="presenter">
							<i class="icon-desktop"></i>
							<span>Classroom Presenter</span>
						</a>
					</li>

					<li class="active">
						<a href="examination">
							<i class="icon-puzzle-piece"></i>
							<span>Manage Examination</span>
						</a>
					</li>

					<li>
						<a href="attendance">
							<i class="icon-ok"></i>
							<span>Attendance Checker</span>
						</a>
					</li>

					<li>
						<a href="class_record">
							<i class="icon-star"></i>
							<span>Class Record</span>
						</a>
					</li>

					<!--<li>
						<a href="reports">
							<i class="icon-print"></i>
							<span>Reports</span>
						</a>
					</li>

					<li>
						
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
							<a href="dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Manage Examination</li>
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
							Manage Examination
							<small>
								<i class="icon-double-angle-right"></i>
								Training Performance
							</small>
						</h1>
					</div><!--/.page-header-->


					<div class="row-fluid">
						
						<!--<div class="span6">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Examination Control
										<small></small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">

										<table class="table">
											<tbody>
												<tr>
													
													<td>
														<div class="alert alert-warning">
															<button type="button" class="close" data-dismiss="alert">
																<i class="icon-remove"></i>
															</button>
															<strong>Heads Up!</strong>

															When you deactivate exams, it will 
															no longer be available to the trainees. And the scores will be recorded.
															<br>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														
														<button id="dexam" class="btn btn-block btn-danger"><i class="icon-stop icon-white"></i> Deactivate All Exams</button>
													</td>
												</tr>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>-->

					</div>
					<p></p>
					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span12">
							

							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
									<i class="icon-dashboard"></i> 
										Examinations
										<small>Test Modules</small>
									</h4>

									<div class="widget-toolbar no-border">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#home"><span class="badge badge-success">1</span> Modules</a>
											</li>

											<li class="">
												<a data-toggle="tab" href="#profile"><span class="badge badge-warning">2</span> Deploy Exam</a>
											</li>

											
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main padding-6">
										<div class="tab-content">
											<div id="home" class="tab-pane active">

												<div class="alert alert-info">
													<b>Note:</b> When a module exam is active, the containing items are read-only.
												</div>

												<div class="well well-small"> 
													<fieldset>
														<label>Module Examination Name (<span class="required">*</span>): </label>
															<input required autofocus type="text" id="examination_name" name="examination_name">
															<br><button id="create_exam" class="btn btn-purple btn-mini"><i class="icon-pencil icon-white"></i> Create Examination</button>		
														<span class="help-block"></span>
													</fieldset>
												</div>
												
												<table id="exam_table" class="table table-striped table-bordered">
													<thead>
														<tr>
															<th class="center">
																Module Examination Name
															</th>
															<th width="70px" class="center">
																Items
															</th>
															<!--<th width="130px" class="center">
																Date Modified
															</th>-->
															<th class="center" width="70px">
																Status
															</th>
															<th class="center" width="300px">
																
															</th>
														</tr> 
													</thead>
													<tbody></tbody>
												</table> 		
											</div>

											<div id="profile" class="tab-pane">

												<div class="row-fluid">
													<div class="span5">
														<div class="widget-box transparent">
															<div class="widget-header">
																<h4 class="lighter"><i class="icon-plus orange"></i> Create New Set</h4>
																<div class="widget-toolbar no-border">
																	

																	<a href="#" data-action="collapse">
																		
																	<i class="icon-chevron-up"></i>
																	</a>

																	
																</div>
																
															</div>

															<div class="widget-body">
																<div class="widget-body-inner">
																<div class="widget-main padding-6">
																	<div class="table-header">
																		 Batch Exam Details
																	</div>
																	
																	
																		<div class="well well-small"> 
																			
																			<label>Set Name (<span class="required">*</span>): </label>
																			<input required type="text" id="examination_name2" name="examination_name">

																			<label>Assign to Batch (<span class="required">*</span>): </label>

																			<select id="batch_id">
																				<option value="0">Please select a batch</option>
																				<?php if(isset($batches)) { 
																					foreach($batches as $row) {?>
																					<option value="<?php echo $row->batch_control_no;?>"><?php echo $row->batch_control_no;?></option>
																				<?php }} 
																				?>
																			</select>

																			<label>Select Active Examinations (<span class="required">*</span>): </label>
																			<div class="slimScrollDiv">
																				<div id="chat_div" class="dialogs">

																					<table id="set_table1" class="table table-striped table-bordered">
																						<thead>
																							<tr>
																								<th class="center">
																									
																								</th>
																								<th class="center">
																									Module Exam
																								</th>
																								<th class="center">
																									No. of Items
																								</th>
																								
																							</tr> 
																						</thead>
																						<tbody>
																							
																							<?php if(isset($exams)) { 
																								foreach($exams as $row) {?>
																								<div class="exam_check">
																								<?php if($row->is_active==1){?>
																								<tr>
																									<td><input class="cexam" type="checkbox" id="<?php echo $row->examination_id;?>" value="<?php echo $row->examination_id;?>" name="module"></td>
																									<td><?php echo $row->examination_name;?></td>
																									
																									<td class="e<?php echo $row->examination_id;?>"><?php echo $row->items;?></td>
																								</tr>
																								<?php }?>
																								</div>
																							<?php }} else { ?>
																								

																							<?php } ?>

																						</tbody>
																					</table>
																					
																					
																				</div>

																				<div class="slimScrollBar ui-draggable">
																				</div>
																				<div class="slimScrollRail">
																				</div>
																			</div>
																			<hr>
																			<label>
																				Total Modules: 
																				<span class="tot2">0</span>
																			</label>
																			<label>
																				Total Items: 
																				<span class="tot">0</span>
																			</label>
																			


																		</div>

																		</div>
																		<hr>	
																		<button class="btn btn-success btn-set"><i class="icon-plus"></i> Add to List</button>

																</div>
															</div>
														</div>
														
													</div>

													<div class="span7">
														<div class="widget-box transparent">
															<div class="widget-header">
																<h4 class="lighter"><i class="icon-info orange"></i> Batch Examination Sets</h4>

																
															</div>

															<div class="widget-body"><div class="widget-body-inner">
																<div class="widget-main padding-6">
																	<div class="table-header">
																		 Batch Exam List
																	</div>
																	<table id="set_table2" class="table table-striped table-bordered">
																		<thead>
																			<tr>
																				<th>
																					Set Name
																				</th>
																				<th>
																					Batch Control No
																				</th>
																				<th class="center">
																					Total Items
																				</th>
																				<th class="center">
																					Status
																				</th>
																				<!--<th width="130px" class="center">
																					Date Modified
																				</th>-->
																				
																				<th class="center">
																					
																				</th>
																			</tr> 
																		</thead>
																		<tbody>
																			
																			<?php if(isset($sets)) { 
																				foreach($sets as $row) {?>
																				<tr>
																					<td><?php echo $row->set_name;?></td>
																					<td><div class="label label-success"><?php echo $row->batch_id;?></div></td>
																					<td><?php echo $row->items;?></td>
																					<td><?php echo $row->is_active;?></td>
																					<td>
																						<div class="btn-group">
																							
																									<button id="<?php echo $row->batch_id;?>" class="btn btn-mini btn-success btn_activate"><i class="icon-play"></i></button>
																								

																								
																									<button id="<?php echo $row->batch_id;?>" class="btn btn-mini btn-purple btn_info"><i class="icon-info"></i></button>
																								

																								
																									<button id="<?php echo $row->batch_id;?>" class="btn btn-mini btn-danger btn-del-set"><i class="icon-trash"></i></button>
																								

			
																							
																						</div>
																						
																					</td>
																				</tr>

																			<?php }}?>	

																		</tbody>
																	</table> 
																</div>
															</div></div>
														</div>

													</div>
												</div>
											</div>

											

										</div>
									</div>
								</div>
							</div>


						</div>

						


						<!--PAGE CONTENT ENDS HERE-->
					</div>

					<!--/row-->
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-templ.js" type="text/javascript"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">

			/*$("#setbatch").validate({ 

			});*/
			
			$(".btn-set").click(function() {
				var i = 0;
				$('input[type="checkbox"]').each(function() {
				    if ($(this).is(":checked")) {

				        var id = $(this).val();
				       	if(id && $.trim($("#examination_name2").val())!="" && $("#batch_id").val()!=0) {
						    $.ajax({
								url: "<?php echo base_url();?>examination/set_exam",
								type: "post",
								data: {
									id: id,
									batchid: $("#batch_id").val(),
									examination_name: $("#examination_name2").val(),
									items: $(".e"+id).text()
								},
								success: function(e) {
									
									alert("Successfully created an exam set.");
									$("#examination_name2").val("");
									clearcheck();
									$("#batch_id").val(0);
									setTimeout(function() {
									    location.reload();
									}, 800);
									
								}
							});
							i++;
				       	}
				    }	    
				});
				if(i == 0) {

					alert("Please fill the forms correctly.");
				}
				if($.trim($("#examination_name2").val())=="") {

					alert("Please fill the forms correctly.");
				}

			});

			var clearcheck = function() {

				$('input[type="checkbox"]').each(function() {

					$(this).prop('checked', false);
				});
			}

			var n = 0, o = 0;

			$('input[type="checkbox"]').click(function () {
				
				if($(this).is(':checked')) {
					
					n += parseInt($(".e"+$(this).val()).text());
	           		o++;
				}
				else {

					n -= parseInt($(".e"+$(this).val()).text());
					o--;
					
				}

	            $(".tot").text(n)
	            $(".tot2").text(o)
	        });

	        $(".btn-del-set").click(function() {

	        	delete_set($(this).attr("id"));
	        });

	        var delete_set = function(id) {

				var str = "<h3>Confirm</h3>Examination set will be deleted";
				str += ". Do you want to proceed?";

				bootbox.dialog(str, [{
						"label" : "<i class=\'icon-trash\'></i> Delete",
						"class" : "btn-small btn-danger",
						"callback": function() {
							//Example.show("great success");

							$.ajax({
								url: "examination/remove_set",
								type: "post",
								data: {
									id: id
								},
								success: function(e) {
									
									location.reload();
								}
							});
							
						}
						}, {
							"label" : "Cancel",
							"class" : "btn-small"
						}]
					);

			} 



			/************************** CUSTOM ALERT() *****************************/

			var alert = function(alert_str) {

				$.extend($.gritter.options, { 
				    position: 'bottom-right', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
					fade_in_speed: 'medium', // how fast notifications fade in (string or int)
					fade_out_speed: 2000, // how fast the notices fade out
					time: 4000 // hang on the screen for...
				});

				$.gritter.add({
					//title: '',
					text: alert_str,
					//image: $path_assets+'/avatars/avatar3.png',
					sticky: false,
					before_open: function() {

						if($('.gritter-item-wrapper').length >= 6)
						{
							return false;
						}
					}	
				});
			}

			var init_datatable = function() {
				var oTable1 = $('#exam_table').dataTable( {

					"bProcessing": true,
					"aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
					"iDisplayLength" : 5,
					"sAjaxSource": "<?php echo base_url();?>examination/list_exam",
					"aoColumns": [
						{ "mDataProp": "examination_name" },
						{ "mDataProp": "items" },	
						//{ "mDataProp": "date_modified" },
						{ "mDataProp": "is_active" },
						{ 
							"mDataProp": "examination_id", 
							//"bVisible": false,
							"bSortable": false,
							"fnRender": function (o) {
									
		                    return '<div class="btn-group"><button onClick="activate_exam(' + o.aData['examination_id'] + ')" class="btn btn-small btn-purple" id=' + o.aData['examination_id'] + '>' + '<i class="icon-time icon-white"></i>  Toggle Exam' + '</button> '+
		                    '<button onClick="edit_exam(' + o.aData['examination_id'] + ')" class="btn btn-small btn-success" id=' + o.aData['examination_id'] + '>' + '<i class="icon-edit icon-white"></i>  Edit' + '</button> '+
		                    '<button onClick="rename_exam(' + o.aData['examination_id'] + ')" class="btn btn-small btn-info" id=' + o.aData['examination_id'] + '>' + '<i class="icon-pencil icon-white"></i>  ' + '</button> '+
		                    '<button onClick="delete_exam(' + o.aData['examination_id'] + ')" class="btn btn-small btn-danger" id=' + o.aData['examination_id'] + '>' + '<i class="icon-trash icon-white"></i>' + '</button></div>';

		                	}
						}
					]
				});

				$('#set_table2').dataTable({

					"aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
					"iDisplayLength" : 10,
					"aoColumns": [
						null,
						null,
						null,
						null,
						{ 
							"bSortable": false}
						]
				});
				
			}

			$("#dexam").click(function() {

				bootbox.dialog("<h3>Confirm</h3>Are you sure that you want to deactivate all examinations?", [{
					"label" : "<i class=\'icon-stop\'></i> Deactivate and Record Examinations Taken",
					"class" : "btn-small btn-danger",
					"callback": function() {
						//Example.show("great success");
						$.ajax({
							url: "examination/toggle_activate_all",
							type: "post",
							data: {
								action: "activate",
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

			var rename_exam = function(id) {

				bootbox.prompt("Rename Exam", function(result) {

					if($.trim(result)!="") {
						$.ajax({
							url: "examination/rename_exam",
							type: "post",
							data: {
								id: id, 
								rename: result
							},
							success: function(e) {
								location.reload();
								

							}
						});
					}
				});

			} 

			var delete_exam = function(id) {

				var str = "<h3>Confirm</h3>Examination items will also be deleted";
				str += ". Do you really want to delete this examination?";

				bootbox.dialog(str, [{
						"label" : "<i class=\'icon-trash\'></i> Delete",
						"class" : "btn-small btn-danger",
						"callback": function() {
							//Example.show("great success");

							$.ajax({
								url: "examination/delete_exam",
								type: "post",
								data: {
									id: id
								},
								success: function(e) {
									
									location.reload();
								}
							});
							
						}
						}, {
							"label" : "Cancel",
							"class" : "btn-small"
						}]
					);

			} 

			var activate_exam = function(id) {
				//var id = $(this).attr("id");

				var str = '<h3>Toggle Module</h3><div class="alert alert-info">';
				str += 'When you <strong>Activate</strong> the Module Exams';
				str += ', the items cannot be modified.';
				str += '<br>';
				str += '</div>';

				bootbox.dialog(str, [{
						"label" : "<i class=\'icon-play\'></i> Activate",
						"class" : "btn-small btn-success",
						"callback": function() {
							//Example.show("great success");
							$.ajax({
								url: "examination/toggle_activate",
								type: "post",
								data: {
									action: "activate",
									id: id
								},
								success: function(e) {
									console.log(e);
									location.reload();
								}
							});
						}
						}, {
						"label" : "<i class=\'icon-stop\'></i> Deactivate",
						"class" : "btn-small btn-danger",
						"callback": function() {
							//Example.show("uh oh, look out!");
							$.ajax({
								url: "examination/toggle_activate",
								type: "post",
								data: {
									action: "deactivate",
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

			}

			$(".btn_activate").click(function() {

				var id = $(this).attr("id");
				alert(id);

				var str = '<h3>Toggle Examination Set</h3><div class="alert alert-info">';
				str += 'When you <strong>Activate</strong> the Set';
				str += ', the trainees will be able to take the exams on their accounts.';
				str += '<br>';
				str += '</div>';

				bootbox.dialog(str, [{
						"label" : "<i class=\'icon-play\'></i> Activate",
						"class" : "btn-small btn-success",
						"callback": function() {
							//Example.show("great success");
							$.ajax({
								url: "examination/toggle_activate_set",
								type: "post",
								data: {
									action: "activate",
									id: id
								},
								success: function(e) {
									console.log(e);
									location.reload();
								}
							});
						}
						}, {
						"label" : "<i class=\'icon-stop\'></i> Deactivate",
						"class" : "btn-small btn-danger",
						"callback": function() {
							//Example.show("uh oh, look out!");
							$.ajax({
								url: "examination/toggle_activate_set",
								type: "post",
								data: {
									action: "deactivate",
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

			$(document).ready(function() {

				init_datatable();
				 //Initialize Scroll 
			    $('.slimScrollDiv').slimScroll({
			        height: '200px',
			        size: '10px',
			        alwaysVisible: true,
			        start: 'top'
			    });

			    var now = new Date();
				//now.format("dd/MM/yy h:mm tt");
			    $("#examination_name2").val("AMI Exam "+Math.random().toString(36).substr(2, 5).toUpperCase()+now.getFullYear()+now.getDate()+(now.getMonth()+1));

			    /**********************************************************************************/

				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
				
				$(".btn_info").on(ace.click_event, function(e) {
					e.preventDefault();
					var id = $(this).attr("id");
					//console.log(id);
					//showDialog(id);

					$.ajax({
						url: "<?php echo base_url();?>examination/set_info",
						type: "post",
						data: {
							id: id
						},
						//dataType: 'json',
						success: function(e) {
							console.log(e);
							$('#view').html(e);

							//result(e);*/
							showDialog(e);
						}
					});

					showDialog("");
					
				});

				var selectedTab = localStorage['selectedTab'];
				if (selectedTab) $('#myTab a[href="'+selectedTab+'"]').tab('show');

				$('a[data-toggle="tab"]').on('shown', function (e) {
				   localStorage['selectedTab']=$(e.target).attr('href');
				});	
			});

			$("#create_exam").click(function() {

				if($("#examination_name").val().trim() != "") {

					var request = $.ajax({
			        	url: "<?php echo base_url();?>examination/create_exam",
			        	type: 'POST',
			        	data: { 
			        		ajax: '1',
			        		examination_name: $("#examination_name").val()
			        	}
			        });

			        request.done(function (response, textStatus, jqXHR) {

						console.log(response);
						location.reload();
						$("#examination_name").val("");

				    });
				}
				else {

					//gritter here
					alert("Enter Examination Name");
				}

			});

			var id = 0;
			
			var edit_exam = function(id) {
	
				window.location.href = "<?php echo base_url();?>examination/edit_exam/"+id;
			}

			
		


		//});
		
		var showDialog = function(id){

			$( "#dialog" ).removeClass('hide').dialog({
				dialogClass: "no-close",
				resizable: false,
				modal: true,
				closeOnEscape: true,
				title: "<div class='widget-header'><h4 class='smaller'><i class='icon-info'></i> Exam Set Details</h4></div>",
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
