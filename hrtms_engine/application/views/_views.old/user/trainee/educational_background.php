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
		<!--<script src="<?php echo base_url();?>hrtms_resources/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-barcode.js"></script>
		/*Barcode
		-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
		.tags{display:inline-block;padding:4px 6px;color:#777;vertical-align:middle;background-color:#FFF;border:1px solid #d5d5d5;width:60%;height: 100px}
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
								Education Information and Employment History
							</small>
						</h1>
					</div><!--/.page-header-->

				
			<div class="row-fluid">
						  <!-- Tab 1 -->
				
                
                <?php if(isset($records)) : foreach($records as $row) : ?>
                	
               <div class="" id="profile4">
               		<form id="education_form" class="form">
                        <h4></h4>            
                        <label>
                          <i>Please Specify your highest educational attainment</i> 
                        </label>
                      	<div class="control-group">
                      		<label class="control-label" for="level_educ">Level of Education</label>
                      		<div class="controls">
                      			<select  id="level_educ" name ="highest_educ">
                      				<option value="" selected=""></option>
                      				<option value="High School" <?php if($row->educational_level=='High School') echo 'selected';?>>High School</option>
                      				<option value="Vocational" <?php if($row->educational_level=='Vocational') echo 'selected';?>>Vocational</option>
                      				<option value="College" <?php if($row->educational_level=='College') echo 'selected';?>>College</option>
                      				<option value="Masteral" <?php if($row->educational_level=='Masteral') echo 'selected';?>>Masteral</option>
                      				<option value="Doctorate" <?php if($row->educational_level=='Doctorate') echo 'selected';?>>Doctorate</option>
                      			</select>
                      		</div>
                      	</div>
                      	<div class="control-group">
                      		<label class="control-label" for="school">Name of School</label>
                      		<div class="controls">
                      			<input type="text" class="span8" id="school"  name ="school" value="<?php echo $row->school_name;?>">
                      		</div>
                      	</div>
                      	<div class="control-group">
                      		<label class="control-label" for="school_s">From</label>
                      		<div class="controls">
                      			<input type="text" id="school_s" name ="school_s" value="<?php echo $row->education_from;?>">
                      		</div> 
                      	</div>
                      	<div class="control-group">
                      		<label class="control-label" for="school_e">To</label>
                      		<div class="controls">
                      			 <input type="text" id="school_e" name ="school_e" value="<?php echo $row->education_to;?>">
                      		</div>
                      	</div>
                      	<div class="control-group">
                      		<label class="control-label" for="course">Course Taken</label>
                      		<div class="controls">
                      			<input type="text" class="input-xxlarge"  id="course" name = "course" value="<?php echo $row->education_course;?>" />
                      		</div>
                      	</div>
                      	<div class="control-group">
                      		<label class="control-label" for="honors">Honors</label>
                      		<div class="controls">
                      			<input id="honors" name="school_honor" value="<?php echo $row->honors;?>" placeholder="Enter for input">
                      		</div>
                      	</div>
                      	<div class="control-group">
                      		<label>How did you learn the position vacancy? Please specify</label>
                      		<div class="controls">
                      			<textarea name = "vacancy" ><?php echo $row->vacancy;?></textarea>
                      		</div>
                      	</div>
						<!-- 
                        <label for="level_educ">Level of Education</label>
                          <input type="text" class="input-medium"  id="level_educ"name ="highest_educ" value="<?php echo $row->educational_level;?>">
                        <label for="school" >Name of School</label>
                          <input type="text" class="span8" id="school"  name ="school" value="<?php echo $row->school_name;?>">
                        <label>From &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; To</label>
                          <input type="number"  min="1990" max="2025" name ="school_s" value="<?php echo $row->education_from;?>">
                          <input type="number"  min="1990" max="2025" name ="school_e" value="<?php echo $row->education_to;?>">
                           <label class="control-label" for="course" >Course Taken
                          <br><input type="text" class="input-xxlarge"  id="course" name = "course" value="<?php echo $row->education_course;?>" />
                      	</label>
                          <label class="control-label" for="honors">Honors <small class="muted">(Enter for another input)</small></label>
							<div class="controls">
							<input id="honors" name="school_honor" value="<?php echo $row->honors;?>">
							</div> 
							<br> 
						 
                        <label>How did you learn the position vacancy? Please specify</label>
                          <textarea name = "vacancy" ><?php echo $row->vacancy;?></textarea>
                        -->
                    	<div class="form-actions">
                            <button type="submit" class="btn btn-info btn-small">Save changes</button>
                        </div>
                    </form> 
                    <?php endforeach;?> 
				<?php endif; ?>
                    <div class="table-header">
								<h3>Employment History</h3> 
					</div>
					<table id="table_employment_history" class="table table-striped table-bordered table-hover">
	           			<thead>
	           				<tr>
	           					<th></th>
	           					<th>Company</th>
	           					<th>Location</th>
	           					<th>Position</th>
	           					<th>From</th>
	           					<th>To</th>
	           					<th>Reason for Leaving</th>
	           					<th></th>
	           				</tr>
	           			</thead>
	           			<tbody>
		              	<?php if(isset($records2)) : foreach($records2 as $row) : ?>
		              			
	                			<tr>
	                				<td><?php echo $row->id;?></td>
	                				<td><?php echo $row->employment_company_name;?></td>
	                				<td><?php echo $row->employment_location;?></td>
	                				<td><?php echo $row->employment_position;?></td>
	                				<td><?php echo $row->employment_from;?></td>
	                				<td><?php echo $row->employment_to;?></td>
	                				<td><?php echo $row->employment_reason_leave;?></td>
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
					<div id="employmentDiv" style="display:none">
						<h2>Employment Information</h2>
                    <form id="employment_form" class="form-horizontal">
	               			<div class="control-group">
								<label class="control-label" for="comp_name">Company Name</label>

								<div class="controls">
									<input type="text" id="comp_name" name="EH_company_name">
								</div>
							</div>

	               			<div class="control-group">
								<label class="control-label" for="comp_loc">Location</label>

								<div class="controls">
									<input type="text" id="comp_loc" name="EH_company_location">
								</div>
							</div>

	               			<div class="control-group">
								<label class="control-label" for="position_title">Position Title</label>

								<div class="controls">
									<input type="text" id="position_title" name="EH_company_position">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="from">From</label>

								<div class="controls">
									<input type="text" class="span2" id="from" name = "EH_company_date_s">
								</div>  
							</div>
							<div class="control-group">
								<label class="control-label" for="to">To</label>

								<div class="controls">
									<input type="text" class="span2" id="to"  name = "EH_company_date_e">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="reason">Reason for Leaving</label>

								<div class="controls">
									 <textarea  id="reason" name="reason"></textarea>
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
			   	         		<div class="btn-group" id="addDiv" >
		                       		<a href="#" id="add" class="btn btn-info copy1" rel=".child">Add <i class="icon-plus"></i></a>
		                      		<span class="help-inline">Click Add+ to add more Employment's Information.</span>
		                       	</div>
		                       	<div class="btn-group" id="cancelDiv" style="display:none">
		                       		<a href="#" id="cancel" class="btn btn-info copy1" rel=".child">Cancel</a>
		                       	</div>
							</div>   
							<br>
							<br>  
							<br>  
							<br>
                        
                </div>
                
				</form> 
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-tag.min.js"></script>

		

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>	
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>


		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>
		<!--inline scripts related to this page-->

		<script type="text/javascript">

	   
	    $(function(){
	    	$( "#add" ).click(function() {
	      	  
			  $("#employmentDiv").slideDown();
			  $("#addDiv").slideUp();
			  $('#cancelDiv').slideDown();

			});

			$( "#cancel" ).click(function() {
	      		$('#cancelDiv').hide();
			 	$('#employmentDiv').slideUp();
				$("#addDiv").slideDown();

			});

	
	      	var tag_input = $('#honors');	
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

			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 1000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
		
          /*	$("#education").on( "submit", function( event ) {
			  event.preventDefault();
			  var sData = $(this).serialize();
			  console.log(sData);
			   $.ajax({
	                url:"<?php echo base_url();?>hris/updateEducation",
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
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Background Education has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					console.log(result);
		            //$('#personal_info').load('<?php echo base_url();?>Hris/personal_info');
		            //$("#personal_info")[0].reset();
	                $("html, body").animate({ scrollTop: 0 }, "slow");

	                }

	            });

			});*/
			//datatable initializatino
			var oTable1 = $('#table_employment_history').dataTable( {
			"aoColumns": [
			  { "bVisible" : true}, 
		    	 null,
			  }
			  { "bSortable": false },
			  { "bSortable": false },
			  { "bSortable": false },
			  { "bSortable": false },
			  { "bSortable": false },
			  { "bSortable": false }],
			  "aLengthMenu": [[5, 10, 15, 25, 50, 100], [5, 10, 15, 25, 50, 100]],
			"iDisplayLength" : 5,
			 } );
			
				
			/* */
			jQuery.validator.addMethod("nameValidation", function(value, element) {
	          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
	        }, "Name must not contain special characters except comma, dash and period.");

			jQuery.validator.addMethod("phone", function (value, element) {
	          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
	        }, "Enter a valid phone number.");

			$.validator.addMethod('minStrict', function (value, el, param) {
				//alert( $('#from').val());
  
			    return $('#to').val() >=  $('#from').val() ;
 
			}); 
			$.validator.addMethod('minStrict2', function (value, el, param) {
				//alert( $('#from').val());
  
			    return $('#school_e').val() >=  $('#school_s').val() ;
 
			}); 	 
  
			jQuery.validator.setDefaults({
	          debug: true,
	          //success: "valid"
	        }); 
			var d = new Date();

			var yearNow = d.getFullYear();
			var yearValid = yearNow - 55;

			$('#education_form').validate({
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false, 
	          rules: {
	            highest_educ: {
	              required: true,
	           
	            },
	            school: {
	              required: true,
	              minlength:2,
	            },
	            school_s: {
	              required: true,
	              min:2,
	              max:yearNow
	            }, 
	            school_e: {
	              required: true,
	              min:2,
	              minStrict2: true,
	              max:yearNow
	            },
	          	vacancy: {
	          		required:true
	          	}
	          

	          },
	      
	          messages: {
	          	highest_educ: {
	          		
	          	},
	          	school: {
	          		min: jQuery.format("At least {0} characters required."),
	          	}, 
	          	school_s: {
	          		min: jQuery.format("At least {0} characters required."),
	       
	          	}, 
	          	school_e: {
	          		min: jQuery.format("At least {0} characters required."),
	          		minStrict2: "Must be more than or equal the starting year.",
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
	            console.log('SUBMIT EDUCATION FORM');
	           	submit_form();
	            //$('input, textarea, select').closest('.control-group').removeClass('success');

	          },
	          invalidHandler: function (form) {
	            
	          },

	        });
	        $('#employment_form').validate({
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false, 
	          rules: {
	            EH_company_name: {
	              required: true,
	              minlength:2,
             	  //nameValidation:true,
	            },
	            EH_company_location: {
	              required: true,
	              minlength:2,
	            },
	            EH_company_position: {
	              required: true,
	              minlength:2,
	            },
	            EH_company_date_s: {
	              required: true, 
	              digits:true,
	              range:[yearValid,yearNow],
	            },
	            EH_company_date_e: {
	              required: true,
	              digits:true,
	              minStrict: true,
	              //range: ['#from',2025]
	              max : yearNow
	            },
	            reason: {
	              required: true,   
	              minlength:2,
	            },
	          

	          },
	      
	          messages: {
	          	EH_company_name: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	},
	          	EH_company_location: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	}, 
	          	EH_company_position: {
	          		minlength: jQuery.format("At least {0} characters required."),
	          	}, 
	          	EH_company_date_s: { 
	          		digits: "Please enter a valid year.",
	          		range : "Please enter a valid year",
	          	
	          	},
	          	EH_company_date_e: {
	          		digits: "Please a valid year.",
	          		minStrict: "Must be more than or equal the starting year.",
	          		range : "Please enter a valid year",
	          	},

	          	reason: {
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
	            console.log('SUBMIT EMPLOYMENT HISTORY FORM');
	            employment_submit();
	            $('input').closest('.control-group').removeClass('success');

	          },
	          invalidHandler: function (form) {
	            
	          },

	        });
			
		


		});//function End
	
		var submit_form = function(){
			  var sData = $('#education_form').serialize();
			  console.log(sData);
			   $.ajax({
	                url:"<?php echo base_url();?>hris/updateEducation",
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
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Background Education has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					console.log(result);
		            //$('#personal_info').load('<?php echo base_url();?>Hris/personal_info');
		            //$("#personal_info")[0].reset();
	                $("html, body").animate({ scrollTop: 0 }, "slow");

	                }

	            });
		}
		var employment_submit = function(){
			  this.disabled = 'true';
			  var sData = $('#employment_form').serialize();
			  console.log(sData);
			   $.ajax({
	                url:"<?php echo base_url();?>hris/insertEmploymentHistory",
	                type:'POST',
	                data:sData,	               
	                success:function(result){
	         
	                $.gritter.add({
						title: 'Human Resource Information Update',
						text: '<i class="icon-spinner icon-spin green icon-2x"></i> Employment History has been updated.',
						class_name: 'gritter-success gritter-center gritter-light'
					});
					
	                //$("html, body").animate({ scrollTop: 0 }, "slow");

	                $( '#employment' ).each(function(){
					    this.reset();
					});
					$('#employmentDiv').slideUp();
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
										
						   $('#table_employment_history').dataTable().fnAddData([
								this['employment_company_name'],
								this['employment_location'],
								this['employment_position'],
								this['employment_from'],
								this['employment_to'],
							   	this['employment_reason_leave'],
							 	str ]
							 	);
		                });//parseJson End
		            }//Ajax Success End

	            });//Ajax Request End
		
		}


	    </script>
		

	</body>
</html>
	