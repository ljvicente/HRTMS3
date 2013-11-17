
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Examination - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/textext.core.css" />
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
	</head>

	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - Employee Module
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
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>modules">
							<i class="icon-folder-open"></i>
							<span>Manage Modules</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>presenter">
							<i class="icon-desktop"></i>
							<span>Classroom Presenter</span>
						</a>
					</li>

					<li class="active">
						<a href="<?php echo base_url();?>examination">
							<i class="icon-puzzle-piece"></i>
							<span>Manage Examination</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>attendance">
							<i class="icon-ok"></i>
							<span>Attendance Checker</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>class_record">
							<i class="icon-star"></i>
							<span>Class Record</span>
						</a>
					</li>

					<!--<li>
						<a href="<?php echo base_url();?>reports">
							<i class="icon-print"></i>
							<span>Reports</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="<?php echo base_url();?>about">
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
							<a href="<?php echo base_url();?>examination">Manage Examination</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Edit Examination Items</li>
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
							Edit Examination Items
							<small>
								<i class="icon-double-angle-right"></i>
								<?php echo $this->session->userdata("ename");?>
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						
						<div class="span<?php if($this->session->userdata("editable") == '1') { echo 8; } else { echo 12;}?>">

							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Examination Items
										<small>Test Modules</small>
									</h4>
									<div>
					                  
					                </div>
					                <div class="widget-toolbar">
										<a href="<?php echo base_url()?>examination"><i class="icon-reply"></i> Back</a>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main">

										<div class="loader">
											<h4 align="center" class="smaller lighter grey">
												<i class="icon-spinner icon-spin orange bigger-125"></i>
												Loading Items..
												<small></small>
											</h4>
										</div>

										<table id="item_table" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th class="center" width="30px">
														#
													</th>
													<th class="center">
														Item
													</th>					
												</tr> 
											</thead>
											<tbody id="item_data">
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<?php if($this->session->userdata("editable") == '1') {?>
						<div class="span4">

							<div class="widget-box">
								<div class="widget-header widget-hea1der-small header-color-dark">
									<h4 class="smaller">
										<span class="item_control">Add Items</span>
										<small>Test Modules</small>
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<p>
										<b>Item Type: </b><br>
										
										<select class="item_type">
											<option value="0">Please Select Type..</option>
											<option value="1">Multiple Choice</option>
											<option value="2">True or False</option>
											<option value="3">Identification</option>
											<option value="4">Select Multiple</option>
											<!--<option value="5">Arrange By Order</option>-->
										</select>
										<br>
										</p>

										<span class="multiple_setting" style="display: none;">
											<p>
											<b>Number of Choices: </b>
											<br>

											<select class="no_of_choices">
												<option value="0">--</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
											<br>
											</p>
										</span>
										<p>
										<b>Question: </b>

										<textarea id="question" style="width:95%"></textarea>
										</p>
										<p>
										<b>Answers: </b>

										<span class="answers">
											
										</span>
										<!-- End of Answers -->

										<br>
										</p>
										
										<hr>
										<span class="add-mode">
											<button class="btn btn-purple add_item"><i class="icon-arrow-left"></i> Add Item</button>
										</span>
										<span class="edit-mode">
											<button class="btn btn-pink edit_item"><i class="icon-save"></i> Save</button>
											<button class="btn" onclick="location.reload()"><i class=""></i> Cancel</button>
										</span>
										
									</div>
								</div>
							</div>
						</div>
						<?php }?>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-tag.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/textext.core.js"></script>


		<!--inline scripts related to this page-->

		<script type="text/javascript">

			
			var separator = "~/&^%-";
			var items = ""; //for reference only

			var question;
			var answers;
			var key_answer;
			var question_type;
			var no_of_choices;

			$(document).ready(function() {

				
				$(".answers").html("<pre>(Please specify the item type)</pre>");

				load_state(1);
				load_state(2);

				//hide settings on document load
				$(".multiple_setting").hide();

				load_items();

				$('#item_table').dataTable({
					"aoColumns": [
						null,
						{ "bSortable": false }
					],
					'iDisplayLength': -1
				});

				$("#item_table_wrapper").find(".row-fluid").remove();

				$(".item-list").sortable();
				$(".edit-mode").hide();
				$(".item_type").trigger("change");

				<?php 
					if($this->session->userdata("editable") == '0') { 
						echo 'alert("Examination is currently active. Items cannot be modified.")'; 
				}?>

	
			});

			var scrolltop = function() {

				$("html, body").animate({scrollTop:0});
			}

			
			/********************** SAVE ADDING SETTINGS STATE ************************/

			var save_adding_state = function() {

				$.ajax({
		        	url: "<?php echo base_url();?>examination/save_adding_state",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1',
		        		question_type: question_type,
		        		no_of_choices: no_of_choices
		        	}
		        });
			}

			/********************** LOAD ADDING SETTINGS STATE ************************/

			var load_state = function(s) {

				var t, u = $.Deferred();
				s==1?t = "load_qt":t = "load_noc";
				$.ajax({
	        		url: "<?php echo base_url();?>examination/"+t,
		        	type: 'POST',
		        	data: {ajax: '1'},
		        	success: function(e) {
		        		u.resolve(e);
		        		if(s==1) {
		        			$(".item_type").val(e);
		        			if(e==1||e==4||e==5) {
		        				$(".multiple_setting").show();
		        			}
		        		}
		        		else {
		        			$(".no_of_choices").val(e).change();
		        		}
		        	}
		        });
		        return u.promise();
			}

			load_state().done(function(e) {

				//TESTING LANG

			});

			/******************** SPECIFY ELEMENT PROPERTIES ***********************/

			$(".item_type").change(function(){

				//clear answers
				$(".answers").html("");

				if($(".item_type").val() == 0 || $(".item_type").val() == 2 || $(".item_type").val() == 3) {

					if($(".item_type").val() == 0) {

						$(".answers").html("<pre>(Please specify item type)</pre>");
					}

					//hide for single answer questions
					$(".multiple_setting").hide();

					if($(".item_type").val() == 2) {
						
						var choices_str = "<input id=\"tf\"  type=\"radio\" class=\"ace\" value=\"true\" name=\"tf\"> True<br><input id=\"tf\" type=\"radio\" class=\"ace\" value=\"false\" name=\"tf\"> False";
						choices_str = "<pre>" + choices_str + "</pre>";
						$(".answers").html(choices_str);

					}
					else if($(".item_type").val() == 3) {
						
						var choices_str = "<textarea id=\"id_text\" style=\"width:95%\"></textarea>";
						choices_str = "<pre>" + choices_str + "</pre>";
						$(".answers").html(choices_str);

					}
					
				}
				else {		

					$(".multiple_setting").show(function(){

						$(".no_of_choices").val("0");
					});

					$(".answers").html("<pre>(Please specify the number of choices)</pre>");

				}
			});

			/******************** INITIALIZATION OF CHOICES ***********************/

			var init_choices = function (input_type) {

				var choices_str = "";
				var bracket = "";

				if(input_type=="order") {

					for (var i = 0; i < parseInt($(".no_of_choices").val()); i++) {

						choices_str += (i+1) + ") <textarea  style=\"width:85%\" name=\"multiple_answers[]\"></textarea><br>";

					};

					choices_str = "<pre>" + choices_str + "</pre>";
					return choices_str;
				}

				for (var i = 0; i < parseInt($(".no_of_choices").val()); i++) {

					if(input_type=="checkbox") {

						bracket = "[]";
					}

					choices_str += "<input id=\"choices\" value=\""+(i+1)+"\" class=\"ace\" name=\"choices"+bracket+"\" type=\"" + input_type + "\"><textarea  style=\"width:85%\" name=\"multiple_answers[]\"></textarea><br>";

				};

				if(choices_str=="") {

					//clear answers
					choices_str = "<pre>(Please specify the number of choices)</pre>";
				}

				choices_str = "<pre>" + choices_str + "</pre>";
				return choices_str;

			};

			/******************** SPECIFY NUMBER OF CHOICES ***********************/

			$(".no_of_choices").change(function() {	

				if ($(".item_type").val() == 1) { 

					$(".answers").html(init_choices("radio"));
				}
				if ($(".item_type").val() == 4) { 
					
					$(".answers").html(init_choices("checkbox"));

				}
				if ($(".item_type").val() == 5) { 
					
					$(".answers").html(init_choices("order"));

				}
				else {
					
				}
			});

			/************************* CLEAR FIELDS *******************************/

			var reset_field  = function(param) {

				$("textarea").val("");
				$("input:radio").removeAttr("checked");
				$("input:checkbox").removeAttr("checked");
				
				$(".loader").show();
				$("#item_data").html("");
				if(param) {

					alert("You successfully edited an item!");
					return;
				}

				alert("You successfully added an item!");

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

			/********************** LOAD ITEMS FROM DB ******************************/

			var load_items = function() {

				var request = $.ajax({
		        	url: "<?php echo base_url();?>examination/load_items",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1'
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	$(".loader").hide();
		        	strip_data(response);
					
			    });
			}


			/************************* INSTRUCTOR DECODER ENGINE ********************************/

			var strip_data = function(data) {

				//console.log(data);

				obj = jQuery.parseJSON(data);

				var len = 0, key;

			    for (key in obj) {

			        if (obj.hasOwnProperty(key)) len++;
			    }

			    var str = "";

				for (var i = 0; i < len; i++) {

					//obj[i].module_name

					str += '<div class="pull-right">';

					var percent = 0;
					var no_got_correct = parseInt(obj[i].no_got_correct,10);
					var no_of_takers = parseInt(obj[i].no_of_takers,10);
					var percent = (no_got_correct/no_of_takers)*100;

					/*if(percent==0) {

						str += '<small style="color:#ccc;">[Not yet answered]</small><br>';
					}
					else {

						if(isNaN(percent)) {

							str += '<small style="color:#ccc;">[Not yet answered]</small><br>';
						} 
						else {

							var arrow = '';
							if(percent > 50) {
								
								arrow = 'icon-arrow-up';
							}
							else {

								arrow = 'icon-arrow-down';
							}

							str += '<small class=""><i class="'+arrow+' green"></i> '+percent+'% takers got correct</small><br>';
						}
					}*/
					if(obj[i].percent!=null) {

						var arrow = '';
						if(parseInt(obj[i].percent) > 50) {
							
							arrow = 'icon-arrow-up green';
						}
						else {

							arrow = 'icon-arrow-down red';
						}

						str += '<small class=""><i class="'+arrow+'"></i> '+obj[i].percent+'% of '+no_of_takers+' trainees got correct</small><br>';
						
					}
					else {

						str += '<small style="color:#ccc;">[Not yet answered]</small><br>';
					}
					<?php if($this->session->userdata("editable") == '1') {?>

						str += '<button id="'+obj[i].question_id+'" class="close" onclick="delete_item('+obj[i].question_id+')"><i class="icon-remove"></i></button> ';
						str += '<button id="'+obj[i].question_id+'" class="btn-edit close" onclick="scrolltop()"><i class="icon-pencil"></i></button> ';
					
					<?php } else {?>

						str += '';

					<?php }?>
					

					str += '</div>';
					str += '<p id="q'+obj[i].question_id+'">'+obj[i].question+'</p>';

					if(obj[i].question_type==1) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer;

						for (var j = 0; j < a.length - 1; j++) {
							
							if((j+1)==e) {

								c = "checked";
							}
							str += '<label><input '+c+' disabled name="radio_'+obj[i].question_id+'" type="radio">'+a[j]+'</label><br>';
							c="";
						};
					}
					else if(obj[i].question_type==2) {

						var e = obj[i].key_answer, a="", c="";
						if(e=="true") {

							a = "checked";
						}
						else {

							c = "checked";
						}
						str += '<label><input disabled '+a+' name="tf_'+obj[i].question_id+'" type="radio"> True</label><br>';
						str += '<label><input disabled '+c+' name="tf_'+obj[i].question_id+'" type="radio"> False</label><br>';
					}
					else if(obj[i].question_type==3) {

						var e = obj[i].key_answer;
						str += '<textarea id="'+obj[i].question_id+'" disabled style="width:90%;">'+e+'</textarea>';
						
					}
					else if(obj[i].question_type==4) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer.split(separator);

						for (var j = 0; j < a.length - 1; j++) {
							
							for (var k = 0; k < e.length; k++) {

								if(e[k]==j+1) {

									c = "checked";
								}
							};
							
							str += '<label><input '+c+' disabled name="check_'+obj[i].question_id+'" type="checkbox">'+a[j]+'</label><br>';
							c = "";
						};
					}
					else {

						var e = obj[i].key_answer.split(separator);
						str += '<ul class="item-list ui-sortable" style="width:90%;">';

						for (var j = 0; j < a.length - 1; j++) {
							
							str += '<li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">'+e[j]+'</span></li>';
						};
						str += '</ul>';
					}

					$('#item_table').dataTable().fnAddData([(i+1), str]);
					
					str = "";
				};

				$(".loader").hide();

				/******************** ADD ITEM TO EXAM ***********************/

				var strip_item = function () {

					items = "";

					question = $.trim($("#question").val());
					question_type = $(".item_type").val();
					no_of_choices =  $(".no_of_choices").val();
					answers = "";
					key_answer = "";

					save_adding_state();

					//if multiple choice
					if($(".item_type").val() == 1 || $(".item_type").val() == 4 || $(".item_type").val() == 5) {

						//get textbox values to an array
						var text_array = $('textarea[name="multiple_answers[]"]').map(function() {

						  return $(this).val()

						}).get();

						for (var i = 0; i < text_array.length; i++) {

							//multiple choices
							if($.trim(text_array[i])=="") {
								//gritter
								alert("Please fill the answers!");
								return false;
							}

							answers += $.trim(text_array[i]) + separator;
						};

						var k = 0;

						//select multiple
						if($(".item_type").val() == 4) {

							items += "\n";

							var l = "";
							//var values = new Array();
							$.each($("#choices:checked"), function() {
								
								l = $.trim($(this).val());
								//values.push($(this).val());
								key_answer += $(this).val() + separator;
							});

							if(l=="") {

								alert("Please specify the correct answer!");
							    return false;
							}
						}
						//arrange
						else if($(".item_type").val() == 5) {

							items += "\n";

							var m = "";

							for (var i = 0; i < text_array.length; i++) {

								m += $.trim(text_array[i]);

								key_answer += text_array[i] + separator;
							};

							if(m=="") {

								alert("Please specify the correct answer!");
							    return false;
							}
						}
						//multiple choice
						else {

							key_answer += $("#choices:checked").val();

							if (!$("#choices:checked").val()) {

							    alert("Please specify the correct answer!");
							    return false;
							}
						}

					}
					//true or false
					else if($(".item_type").val() == 2) {

						no_of_choices = 2;
						answers = "true" + separator + "false";
						key_answer = $("input[name='tf']:checked").val();
					}
					//identification
					else if($(".item_type").val() == 3) {

						no_of_choices = 0;
						//will not set answers value for identification
						key_answer = $("#id_text").val();

						if($.trim(key_answer)=="") {

							alert("Please enter the correct answer!");
							return false;
						}

					}

					items += "Question: " + question;
					items += "\nType: " + question_type;
					items += "\nNo. of Choices: " + no_of_choices;
					items += "\nAnswer(s): " + answers;
					items += "\nKey Answer(s): " + key_answer;

					//gritter this alerts here
					if($(".item_type").val()==0) {
										
						alert("Please select the type of question!");	
						return false;	
					}
					if($.trim(question)=="") {

						alert("Please enter a question!");
						return false;
					}

					return true;
				}


				$(".add_item").click(function(){

					//strip_item();
					//send data
					

					
					if(!strip_item()) return false;

					var request = $.ajax({
			        	url: "<?php echo base_url();?>examination/add_item",
			        	type: 'POST',
			        	data: { 
			        		ajax: '1',
			        		question: question,
							answers: answers,
							key_answer: key_answer,
							question_type: question_type,
							no_of_choices: no_of_choices
			        	}
			        });

			        request.done(function (response, textStatus, jqXHR) {

			        	//console.log(items);
						reset_field();	

						
				    });

				    setTimeout(function() {
					    location.reload();
					}, 800);
					
				});

				/************************* EDIT ITEM ********************************/
				var q = "";
				var qi = "";

				$(".btn-edit").click(function(){

					var id = $(this).attr("id");
					qi=id;
					q = $("#q"+id).text();
					//alert(q);
					//$('#q'+id).replaceWith("<p><textarea style='width:85%;'>"+q+"</textarea></p>");
					$("#question").val(q);
					$(".add-mode").hide();
					$(".edit-mode").show();
					$(".btn-edit").hide();
					$(".close").hide();
					$(".item_control").text("Edit Item");
					$(".item_type").val(0).trigger("change");

					

				});

				/************************* SAVE ITEM ********************************/

				$(".edit_item").click(function() {
					
					//send data

					if(!strip_item()) return false;
					
					var request = $.ajax({
			        	url: "<?php echo base_url();?>examination/edit_item",
			        	type: 'POST',
			        	data: { 
			        		ajax: '1',
			        		id: qi,
			        		question: question,
							answers: answers,
							key_answer: key_answer,
							question_type: question_type,
							no_of_choices: no_of_choices
			        	}
			        });

			        request.done(function (response, textStatus, jqXHR) {

			        	//console.log(items);
			        	console.log(response);
						reset_field(1);	


				    });

				    setTimeout(function() {
					    location.reload();
					}, 800);
				});


			}

			/************************* DELETE ITEM ******************************/

			var delete_item = function(id) {
				//alert(id);
				bootbox.dialog("<h3>Delete Item?</h3>", [{
					"label" : "<i class=\'icon-trash\'></i> Delete",
					"class" : "btn-small btn-danger",
					"callback": function() {
						//Example.show("great success");
						$.ajax({
							url: "<?php echo base_url();?>examination/delete_item",
							type: "post",
							data: {
								id: id
							},
							success: function(e) {
								//console.log(e);
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

		</script>
	</body>
</html>
