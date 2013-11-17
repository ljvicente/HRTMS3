
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Class Record - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
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

					<li class="active">
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
						<li class="active">Class Record</li>
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
							Class Record
							<small>
								<i class="icon-double-angle-right"></i>
								Training Management
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span8">
							
							<?php echo $this->session->flashdata('message')?>
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Examination Scores
										<small>Performance Assessment</small>
									</h4>

									<div class="widget-toolbar no-border">
										<ul class="nav nav-tabs" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#passers"><i class="icon-ok green"></i> Passers</a>
											</li>

											<li>
												<a data-toggle="tab" href="#fail"><i class="icon-remove red"></i> For Removal Exam</a>
											</li>

											
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main padding-6">
										<div class="tab-content">
											<div id="passers" class="tab-pane in active">
												<div class="alert alert-success">
													<i class="icon-info"></i> Select batch to view examination scores.
												</div>
												<div id="result_table"></div>
											</div>

											<div id="fail" class="tab-pane">
												<div class="alert alert-success">
													<i class="icon-info"></i> Select batch to view examination scores.
												</div>
												<div id="result_table2"></div>
											</div>

											
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="span4">
							<div class="widget-box">
								<div class="widget-header header-color-dark">
									<h4 class="smaller">
										Summary
										<small>Finished Tests</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<form class="form-inline" method="POST" action="">
		
											Batch :<br>
											<select class="chzn-select" id="batch" name="batch">
													<option selected></option>
													<?php if(isset($records2)) : foreach($records2 as $row) : ?>
														<option value="<?php echo $row->batch_id;?>"><?php echo $row->batch_id;?></option>
													<?php endforeach;?>
													<?php endif; ?>
											</select><br><br>
													
										<div id="exam_set"></div>
			
										</form>
									</div>
								</div>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>

		<!--ace scripts-->
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {

			
				
				$(".chzn-select").chosen(); 
				$(".chzn-select-deselect").chosen({allow_single_deselect:true});



			$('#batch').change(function () {
                var batch =  $(this).find("option:selected").attr('value');
                console.log(batch);
           		$.ajax({    
                    url: "<?php echo base_url();?>class_record/exam_id", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: "batch="+batch, //The variables which are going.
                    dataType: 'json', //Return data type (what we expect).
                     
                    //This is the function which will be called if ajax call is successful.
                    success: function(output_string) {
                        //data is the html of the page where the request is made.
                        //alert(selState); 
                        console.log(output_string);
                        $('#result_table').html(output_string.overall);
                        $('#exam_set').html(output_string.exam_id);
                        $(".chzn-select").chosen();
                        var oTable1 = $('#table_report').dataTable( {
						"aoColumns": [
					      null, null,
						  { "bSortable": false }
						] } );
                        exam_id();
                        //datatable initializatino
						
                    } 
                });

            });

      
			})

		var xf = function(){

			$.gritter.add({
			//title: 'Error!',
			text:  'Batch is already added to Deployment Queue.',
			class_name: 'gritter-info gritter'
			});
			
			var t=setTimeout(function(){location.reload();},3000);
		}

		
  		var exam_id = function(){

        	 $('#exam').change(function () {
                var exam_id =  $(this).find("option:selected").attr('value');
                var batch =  $('#batch').find("option:selected").attr('value');
                var name =  $(this).find("option:selected").attr('exam_name');
                console.log(exam_id+" : "+ name);
                //console.log(batch);
           		$.ajax({    
                    url: "<?php echo base_url();?>class_record/gradesheetByExamId", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: {id : exam_id, batch : batch, name : name}, //The variables which are going.
                    dataType: 'json', //Return data type (what we expect).
                     
                    //This is the function which will be called if ajax call is successful.
                    success: function(output_string) {
                        //data is the html of the page where the request is made.
                        //alert(selState); 
                        console.log(output_string);
                        $('#result_table').html(output_string);
                        var oTable1 = $('#table_report').dataTable( {
						"aoColumns": [
					      null, null,
						  { "bSortable": false }
						] } );
                       
                    } 
                });
				
				$.ajax({    
                    url: "<?php echo base_url();?>class_record/removalQueue", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: {id : exam_id, batch : batch, name : name}, //The variables which are going.
                    dataType: 'json', //Return data type (what we expect).
                     
                    //This is the function which will be called if ajax call is successful.
                    success: function(output_string) {
                        //data is the html of the page where the request is made.
                        //alert(selState); 
                        console.log(output_string);
                        $('#result_table2').html(output_string);
                        var oTable1 = $('#table_report2').dataTable( {
						"aoColumns": [
					      null, null,
						  { "bSortable": false }
						] } );
                       
                    } 
                })
            });

			

        }  
		</script>
	</body>
</html>
