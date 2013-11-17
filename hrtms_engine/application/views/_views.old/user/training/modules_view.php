
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Manage Modules - AMI</title>

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

		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css" />

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

					<li class="active">
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

					<li>
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
						<li class="active">Manage Modules</li>
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
							Manage Modules
							<small>
								<i class="icon-double-angle-right"></i>
								Training
							</small>
						</h1>
					</div><!--/.page-header-->

					<!--PAGE CONTENT STARTS HERE-->
					<div class="row-fluid">
						
						<div class="span8 widget-container-span ui-sortable">		
							<div class="widget-box">
								<div class="widget-header">
									<h5 class="smaller">
										Modules
										<small>Training Modules</small>
									</h5>

									<div class="widget-toolbar no-border">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#home">File Manager</a>
											</li>

											<li class="">
												<a data-toggle="tab" href="#regmod">Registered Modules</a>
											</li>

											
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<div class="tab-content">
											<div id="home" class="tab-pane active">
												<iframe id="browser" width="100%" height="425px" frameborder="0"></iframe>
												
											</div>

											<div id="regmod" class="tab-pane">
												<table id="modules" class="table table-striped table-bordered">
													<thead>
														<tr>
															<th class="center">
																Module Name
															</th>
															<th class="center">
																Company
															</th>
															<th class="center">
																Filename
															</th>
															<th class="center">
																
															</th>
															
														</tr> 
													</thead>
													<tbody id="module_list">
														
													</tbody>
												</table> 
											</div>

											
										</div>
									</div>
								</div>
							</div>	

						</div>
						<div class="span4">
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Register Module
										<small></small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<label>Module Name (<span class="required">*</span>): </label>
														<input placeholder="Type module name.." required autofocus="" type="text" id="module_name" name="module_name">
													</td>
													
												</tr>
												<tr>
													<td>
														<label>Company (<span class="required">*</span>): </label>
														<select required name="company_name" id="company_name">
															<option value="" selected="selected" style="color:#ddd;">Select Company...</option>
															<?php if(isset($client_record)) : foreach($client_record as $item) : ?>	
																<option value="<?php echo $item->client_name?>"><?php echo $item->client_name?></option>
															<?php endforeach;?>
															<?php endif;?>
														</select>
													</td>
												</tr>
												<tr>
													<td>
														<label>File Name (<span class="required">*</span>): </label>
														<select required name="file_name" id="file_name">
														</select>

														<i style="margin-left: 5px;" id="loading_file" class="icon-spinner icon-spin orange icon-2x"></i>
													</td>
												</tr>
												<tr>
													<td>
														<button id="reg_submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Register Module</button>
													</td>
													
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="row-fluid">
						
						

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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>
		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">

			var init_datatable = function() {
				var oTable1 = $('#modules').dataTable( {

					"bProcessing": true,
					"sAjaxSource": "<?php echo base_url();?>modules/list_module",
					"aoColumns": [
						{ "mDataProp": "module_name" },
						{ "mDataProp": "company_name" },
						{ "mDataProp": "file_name" },
						{ 
							"mDataProp": "module_id", 
							//"bVisible": false,
							"bSortable": false,
							"fnRender": function (o) {

		                    return '<!--<button class="btn-edit btn btn-small btn-info" id=' + o.aData['module_id'] + '>' + 'Edit' + '</button>--> '+
		                    '<button onclick="remove_list(' + o.aData['module_id'] + ')" class="btn-delete btn btn-small btn-danger" id=' + o.aData['module_id'] + '><i class="icon-trash"></i> ' + 'Remove From List' + '</button>';

		                	}
						}
					]
				});
				
			}

			$(document).ready(function() {

		        var request = $.ajax({
		        	url: "<?php echo base_url();?>hrtms/module_init",
		        	type: 'POST',
		        	data: { ajax: '1' }
		        });

		        request.done(function (response, textStatus, jqXHR) {

					$("#browser").attr("src", response);

			    });

			    $("#loading_file").hide();
			    init_datatable();

			    var selectedTab = localStorage['selectedTab'];
				if (selectedTab) $('#myTab a[href="'+selectedTab+'"]').tab('show');

				$('a[data-toggle="tab"]').on('shown', function (e) {
				   localStorage['selectedTab']=$(e.target).attr('href');
				});	
			});

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

			$("#company_name").change(function() {

				$("#loading_file").show();
				var request = $.ajax({
		        	url: "<?php echo base_url();?>modules/list_files/"+$("#company_name").val(),
		        	type: 'POST',
		        	data: { ajax: '1' }
		        });

		        request.done(function (response, textStatus, jqXHR) {

					var obj = jQuery.parseJSON(response);

					var result = [];

					for (var key in obj) {

						result.push(obj[key]);
					}

					var str = '<option value="">Please select file..</option>';

					for (var i = 0; i < result.length; i++) {

						if(result[i].indexOf(".") == -1) {

							continue;
						}

						
						str += "\n<option value='"+result[i]+"'>"+result[i]+"</option>\n";		

								

					};

					$("#file_name").html(str);
					$("#loading_file").hide();

			    });

			});

			var remove_list = function(id) {

				//var id = $(this).attr("id");

				bootbox.dialog("Remove From List?", [{
					"label" : "Remove",
					"class" : "btn-small btn-danger",
					"callback": function() {
						//Example.show("great success");
						$.ajax({
							url: "modules/remove_list",
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
						"label" : "Cancel",
						"class" : "btn-small"
					}]
				);
			}
			
			$('#reg_submit').click(function() {
				

				if($.trim($("#module_name").val())!="" && $("#company_name").val() != '' && $("#file_name").val() != '') {

					var request = $.ajax({
			        	url: "<?php echo base_url();?>modules/register_module",
			        	type: 'POST',
			        	data: { 
			        		ajax: '1',
			        		module_name: $("#module_name").val(),
			        		company_name: $("#company_name").val(),
			        		file_name: $("#file_name").val()
			        	}
			        });

			        request.done(function (response, textStatus, jqXHR) {

			        	//gritter here
			        	$("#module_name").val("");
			        	$("#company_name").val("");
			        	$("#file_name").html("");
			        	location.reload();
					});
				}
				else {

					alert("Please fill the forms correctly.");
				}

			});

			var getObjectSize = function(obj) {
		   		var len = 0, key;
			    for (key in obj) {
			        if (obj.hasOwnProperty(key)) len++;
			    }
			    return len;
			};


			var load_data = function() {

				var request = $.ajax({
		        	url: "<?php echo base_url();?>modules/list_module",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1'
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	//alert(response);
		        	/*
		        	var obj = jQuery.parseJSON(response);

					var str = "";

					//obj[i].message

					for (var i = 0; i < getObjectSize(obj); i++) {
						
						str += "<tr><td>"+obj[i].module_name+"</td>";
						str += "<td>"+obj[i].company_name+"</td>";
						str += "<td>"+obj[i].file_name+"</td>";
						str += "<td><span class='pull-right'><button id='"+obj[i].module_id+"' class='btn btn-small btn-primary'><i class='editbtn icon-edit icon-white'></i>Edit</button> ";	
						str += "<button id='"+obj[i].module_id+"'class='btn btn-small btn-danger'><i class='icon-trash icon-white'></i>Delete</button></span></td></tr>"

					};

					$("#module_list").html(str);
					*/
					//$("#Modules").dataTable(response);

					console.log(response);
					
				});

			}

		</script>
	</body>
</html>
