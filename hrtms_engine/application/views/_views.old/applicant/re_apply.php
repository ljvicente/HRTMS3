<?php if($this->session->userdata('permission') != 'Administrator' && $this->session->userdata('permission') != 'HR') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>AMI - Registration</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
			.no-close .ui-dialog-titlebar-close {display: none }
		</style>
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
				</div><!--#sidebar-shortcuts-->

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
							<li  class="">
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li class="active">
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
					<?php if($this->session->userdata("permission") == "Administrator") {?>

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
						<li class="active">About the Developers</li>
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
							Registration
							<small>
								<i class="icon-double-angle-right"></i>
								Accepting Applicant
							</small>
						</h1> 
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span12">

							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Applicant
										<small>accept Applicant with complete documents</small>
									</h4>
								</div>

								<div class="widget-body">
								<div class="widget-main">
									
					
									<form class="form-inline" id="applicant">
										<input autofocus placeholder="Type the Registration ID of an Applicant to accept. Eg.: AMI0000-REG-0000" type="text" class="span11 input-id" name="id" id="id" />
										<button id="getinfo" class="btn btn-purple btn-small">
											Get Data
										</button>												
									</form>
									<br>
									<div id='result_table'></div>
									<br>
									<br>
									<div id="success" class=""></div>	
									<div class="center" id="first_load" style="display:none">
									<br>
									<br><div id="load"><i class="icon-spinner icon-spin blue icon-3x"></i></div><br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-templ.js" type="text/javascript"></script>
		<!--inline scripts related to this page-->
		

	
		<script type="text/javascript">	
		$(function() {

			$('.input-id').mask('aaa9999-aaa-9999');
			//$('#form_accept').closest('fieldset').find(':checkbox').prop('checked', this.checked);

		   //set the css3 blur to an element
        	
       		$.extend($.gritter.options, { 
		        position: 'bottom-right', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});

			$("#getinfo").click(function(){
				$('#first_load').show();
				blurElement("#first_load", 2);
				blurElement("#result_table", 0);
				$('#result_table').hide();
		        setTimeout(submitFormAjax, 200);
		   		return false;
			});
        
		
		});	
		function blurElement(element, size){
            var filterVal = 'blur//('+size+'px)';
            $(element)
              .css('filter',filterVal)
              .css('webkitFilter',filterVal)
              .css('mozFilter',filterVal)
              .css('oFilter',filterVal)
              .css('msFilter',filterVal);
   		 }
		function submitFormAjax() {
			var dataString = $("#id").val();
			 $.ajax({ 
	           url: "<?php echo base_url();?>applicant/searchApplicant",
	     	   async: false,
	           type: "POST",			          
	           data: "id="+dataString, 
	           dataType: 'json',

	           success: function(response){
	        
	              if ( response.length == 0 ) {
	              		no_search();
	             	}
	              else{	
	              	 	console.log(response);
	          			$('#first_load').hide();
	          			$('#scnd_load').hide();
	                	output_string = $('#user').render(response);     	
	                	$('#success').hide();
	                	$('#result_table').show();
	              		$('#result_table').html(output_string);
	              		
	              		getBatch();
	              		selectBatch();
	        		}//end else
	            	
	           }//end success
	  
	         });//end ajax
	  
	        return false;  //stop the actual form post !important!
		}
		var no_search = function(){
				$('#first_load').hide();
              	$('#scnd_load').hide();
              	$('#success').hide();
              	$('#result_table').show();
              	output_string = '"There is no applicant or the applicant has been accepted."';
              	$('#result_table').html('<br><br><br><br><div class="center"><b>'+output_string +'</b></div><br><br><br><br><br><br>');
		}
		var getBatch = function(){
			$.ajax({ 
		           url: "<?php echo base_url();?>applicant/getBatch",
		     	   async: false,
		           //dataType: 'json',

		           success: function(response){
		            	//console.log(response);
		            	var obj = $.parseJSON(response);
		            	console.log(obj);
                        if (isEmpty(obj) ) {
		              		//no_search()
		              			$('#result_table').hide();
								var	str = "No batch active. Create a batch.";

								bootbox.dialog(str, [{
										"label" : "<i class=\'icon-edit\'></i> Ok",
										"class" : "btn-small btn-info",
										"callback": function() {
											//Example.show("great success");
												document.location.href='<?php echo base_url();?>applicant/batch_control';
											
										}
										}]
									);
														

		             		}
		              	else{
		              				//$output_string = $('#batchTable').render(response);
				            	var obj = $.parseJSON(response);
				            	var list = $("#batch_no");
				            	$.each(obj, function(index,item){
				            		output_string = "<option value=\""+ this['batch_control_no'] +"\" >"+ this['batch_control_no']+"</option>";
				            		item =  this['batch_control_no'];
				            		console.log(item);
				            		list.append(new Option(item, item));
				
				            	});

				         		$(".chzn-select").chosen(); 
								$(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
		                       
                   			
                   		}
		            	
						
		         		
		           }//end success
		  
		    });//end ajax
		}
		function isEmpty(obj) {
		    for(var prop in obj) {
		        if(obj.hasOwnProperty(prop))
		            return false;
		    }

		    return true;
		}

		var selectBatch = function(){
			$('#batch_no').change(function () {
             	$('#batch_result').slideToggle('fast');
                var batch = $(this).find("option:selected").attr('value')
                console.log(batch);
                $.ajax({    
                    url: "<?php echo base_url();?>applicant/getBatchInfo", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: "batch_no="+batch, //The variables which are going.        
                    //This is the function which will be called if ajax call is successful.
                    success: function(e) {
                        	//data is the html of the page where the request is made.
	                        showBatchResult(e);
	                		$('#form_accept input:checkbox').attr('checked', 'checked');
	              			checkall();
	              			$('#form_accept').submit(function() {
				    		a = $("#batch_control_no").val();
				    		if ( a == null)
				    		{
				    			//bootbox.alert('Select a batch for this Applicant');
				    			$.gritter.add({
								//title: 'Applicant Accepted!',
								text:  'Select a batch for this Applicant',
								class_name: 'gritter-error gritter'
								});
				    		}

				    		else{

						        if ($('input:checkbox', this).length == $('input:checked', this).length ) {
						            bootbox.confirm("Accept this Trainee?", function(result) {
										if(result) {
											$('#scnd_load').show();
	 										blurElement("#result_table", 2);
	 										//e.preventDefault();
									        setTimeout(accept, 200);
									   		//return false;  
										}  
									});
									return false;
						        } else {
						        	var sList = "";
									$('input[name=documents]:not(:checked)').each(function () {
									    sList += $(this).val() + ",";
									}); 
								    id = $("#register_id").val();
									console.log (sList); 
									 
						            //bootbox.alert('Accept applicant with complete requirements.');
						            bootbox.dialog("This applicant has incomplete requirements.\nPrompt the applicant for incomplete requirements", [{
										"label" : "Yes",
										"class" : "btn-mini btn-danger",
										"callback": function() {
											console.log(register_id);
											$.ajax({
												url: "<?php echo base_url();?>applicant/incompleteDocuments",
												type: "post",
												data: {
													id: id,
											 		reqList: sList
												},
												success: function(e) {
													//console.log(e);
													//location.reload();
													$("#result_table").hide();
													$.gritter.add({
														title: e,
														text: 'The prompt has been sent to the applicant.',
														class_name: 'gritter-info gritter-center'
													});
 
												}
											});
										}  
										}, {
										"label" : "Cancel", 
										"class" : "btn-mini"
										}]
									);
						            
						        } 
					    	}
					    	return false;
					    });
                   		} 
                })
          
            });
		}
		var showBatchResult = function(e){
	     	console.log(e);
            var obj = $.parseJSON(e);
            //var val ="";
    		$.each(obj, function(){
    			batch_no = this['batch_control_no']
    			client = this['client'];
    			schedule = this['date_start'];
    			training_days = this['training_days'];
    			limit_no = this['limit_no'];
    			current = this['current'];
    			emp_department = this['emp_department'];
    			
    			// Department
    			if(this['emp_type']== 1){
					emp_type  = "Contractual";
				}
				if(this['emp_type']== 2){

					emp_type  = "Regular";
				}
				if(this['emp_type']== 3){

					emp_type  = "Probation";
				}
				// Gender
    			if(this['emp_gender']== 1){
					emp_gender = "Male Only";
				}
				if(this['emp_gender']== 2){
					emp_gender = "Female Only";
				}
				if(this['emp_gender']== 3){
					emp_gender = "Male / Female";
				}
				// Documents
				var str = this['emp_reqdocuments'];
		        var str_array = str.split(',');
		        emp_documents = "<ul>";
		        req_documents = "";
				for(var i = 0; i < str_array.length; i++)
				{
				   	str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");					  
				 	emp_documents += "<li>" +str_array[i] +  "</li>";
				 	req_documents += "<label><input name=\"documents\" type=\"checkbox\" class=\"ace\" value=\""+str_array[i]+"\" /><span class=\"lbl\"> "+str_array[i]+"</span></label>"; 
				}
				emp_documents += "</ul>";

				// Remarks 
				var str = this['remarks'];
		        var str_array = str.split(',');
		        emp_remarks = "<ul>"; 
				for(var i = 0; i < str_array.length; i++)
				{
				   	str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
				   
				 	emp_remarks += "<li>" +str_array[i] +  "</li>";
				 
				}
				emp_remarks += "</ul>";


			/**************** OUTPUT *****************************/
			output_string = "<table class=\"table table-striped\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
			output_string += "<colgroup>";
			output_string += "<col span=\"1\" style=\"width: 30%;\">";
			output_string += "<col span=\"1\" style=\"width: 70%;\">";
			output_string += "</colgroup>";

			output_string += "<tr>";
				output_string += "<td>Client</td>";	
				output_string += "<td>"+client+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Type</td>";	
				output_string += "<td>"+emp_type+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Department</td>";	
				output_string += "<td>"+emp_department+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Schedule</td>";	
				output_string += "<td>"+schedule+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Training Days</td>";	
				output_string += "<td>"+training_days+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Current Trainee</td>";	
				output_string += "<td>"+current+" / "+limit_no+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td><b>Requirements</b></td>";	
				output_string += "<td>&nbsp;</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Gender</td>";	
				output_string += "<td>"+emp_gender+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Documents</td>";	
				output_string += "<td>"+emp_documents+"</td>";
			output_string += "</tr>";
			output_string += "<tr>";
				output_string += "<td>Remarks</td>";	
				output_string += "<td>"+emp_remarks+"</td>";
			output_string += "</tr>";

			output_string += "</table>";

 
	       	/* Documents */
	       	output_string += "<h3 class=\"header smaller lighter blue\">Documents<small>Check the documents before accepting.</small></h3>";
	       	output_string += "<form id=\"form_accept\">";
	       	output_string += "<fieldset>";
	       	output_string += "<div class=\"control-group\">";
	       	output_string += "<div class=\"controls\">";
	       	output_string += "<label><input name=\"\" type=\"checkbox\" class=\"ace ace-switch\" id=\"checkall\" /><span class=\"lbl\">&nbsp;Check all</span></label>";
	       	output_string += "<div id=\"req\">";
	       	output_string += "<label><input name=\"documents\" type=\"checkbox\" class=\"ace\" value=\"Resume\"/><span class=\"lbl\" > Resume</span></label>";
	       	output_string += "<label><input name=\"documents\" type=\"checkbox\" class=\"ace\" value=\"Diploma\"/><span class=\"lbl\"> Diploma</span></label>";
	       	output_string += "<label><input name=\"documents\" type=\"checkbox\" class=\"ace\" value=\"Medical Result\"/><span class=\"lbl\" > Medical Result</span></label>";
	       	output_string += "<label><input name=\"documents\" type=\"checkbox\" class=\"ace\" value=\"Form - 137 for Undergrad / Transcript of Record for Graduate\"/><span class=\"lbl\" > Form - 137 for Undergrad / Transcript of Record for Graduate</span></label>";
	       	output_string += req_documents;
	       	output_string += "</div>";
	       	output_string += "</div>"; 
	       	output_string += "</div>";
	       	output_string += "</fieldset>"; 
	       	output_string += "<button class=\"btn btn-success btn-block\" type=\"\" id=\"bootbox-confirm\">Accept Applicant</button>";
	       	output_string += "</form>";
			/**************** OUTPUT *****************************/

			/**************** HIDDEN INPUT *****************************/

			output_string +="<input type=\"hidden\" name=\"batch_control_no\" id=\"batch_control_no\" value=\""+ batch_no +"\">";
			output_string +="<input type=\"hidden\" name=\"client\" id=\"client\" value=\""+ client +"\">";
			output_string +="<input type=\"hidden\" name=\"training_days\" id=\"training_days\" value=\""+ training_days +"\">";
			output_string +="<input type=\"hidden\" name=\"current\" id=\"current\" value=\""+ current +"\">";
			output_string +="";

			/**************** HIDDEN INPUT *****************************/

    			
    		});
    		$('#batch_result').html(output_string);
       		$('#batch_result').slideToggle('fast');

		}

		var checkall = function(){

      		$('#checkall').on('click', function () {
		        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
		    });
		   

		}

		var accept = function(){

	            first_name = $("#first_name").val();
	            middle_name = $("#middle_name").val();
	            last_name = $("#last_name").val();
	            address = $("#address").val();
	            birth_date = $("#birth_date").val();
	            city = $("#city").val();
	            province = $("#province").val();
	            gender = $("#gender").val();
	            phone = $("#phone").val();
	            username = $("#username").val();
              	password = $("#password").val();
                email = $("#email").val();
                register_id = $("#register_id").val();
                height = $("#height").val();
                civil_status = $("#civil_status").val();
                batch_control_no = $('#batch_control_no').val();
                client = $('#client').val();
                training_days = $('#training_days').val();
                current = $('#current').val();

	          
	            var datastr = 'first_name='+first_name + '&middle_name='+middle_name + '&last_name='+last_name + '&address='+address + '&birth_date='+birth_date + '&city='+city + '&province='+province + '&gender='+gender + '&phone='+phone + '&username='+username + '&password='+password + '&email='+email + '&register_id='+register_id + '&height='+height+ '&civil_status='+civil_status+ '&batch_control_no='+batch_control_no+ '&client='+client+ '&training_days='+training_days+ '&current='+current;    
	           	//var datastr = 'first_name='+first_name + '&middle_name='+middle_name + '&last_name='+last_name + '&address='+address + '&birth_date='+birth_date + '&city='+city + '&province='+province + '&gender='+gender + '&phone='+phone + '&username='+username + '&password='+password + '&email='+email + '&register_id='+register_id + '&height='+height+ '&civil_status='+civil_status;  
	           	console.log(datastr);
	            $.ajax({
	                url:"<?php echo base_url();?>applicant/acceptApp",
	                type:'POST',
	                data:datastr,
	                dataType:"json",
	                success:function(result){
	                $("#success").show();
	                //$("#success").attr('class', 'alert alert-success');
	                var output_string = "<div class=\"alert alert-block alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button><p><strong><i class=\"icon-ok\"></i>Well done!</strong> You successfully added an applicant.</p><p><a class=\"btn btn-small btn-success\" href=\"<?php echo base_url();?>training\">Trainee List</a><button class=\"btn btn-small\">Or This One</button></p></div>";
	                $("#success").html(output_string);
	                $("#result_table").hide();
	                $.gritter.add({
						title: 'Applicant Accepted!',
						text: result + ' has been added in AMI trainee.',
						class_name: 'gritter-info gritter-center'
					});
						

	                }

	            });

		}



		 
		</script>
 
		<script type="text/template" id="user">
		<div class="row-fluid">
			<div class="span6">
			
		    <table class="table table-striped" style="width: 100%; word-wrap:break-word; table-layout: fixed;">
		    	<colgroup>
			       <col span="1" style="width: 35%;">
			       <col span="1" style="width: 65%;">
			    </colgroup>
		    	<tr> 
	                <td><h3>Personal Details</h3></td>

	                <td>&nbsp;</td>
	            </tr>
	            <tr>
	                <td>Registration ID :</td>
	                <td>${register_id}</td>
	            </tr>
	         	<tr>
	                <td>Name: </td>
	                <td>${last_name}, ${first_name} ${middle_name}</td>
	            </tr>
	             <tr>
	                <td>Gender: </td>
	                <td>${gender}</td>
	            </tr>
	            <tr>
	                <td>Birthday: </td>
	                <td>${birth_date}</td>
	            </tr>
	             <tr>
	                <td>Height: </td>
	                <td>${height} <span class="muted">cm</span></td>
	            </tr>
	             <tr>
	                <td>Civil Status: </td>
	                <td>${civil_status}</td>
	            </tr>
	            <tr>
	                <td>Address: </td>
	                <td>${address}</td>
	            </tr>
	            <tr>
	                <td>City: </td>
	                <td>${city}</td>
	            </tr>  
	            <tr>
	                <td>Province: </td> 
	                <td>${province}</td>
	            </tr>                              
	            <tr>
	                <td>Phone: </td>
	                <td>${phone}</td>
	            </tr>
	            <tr> 
	            	<td><h3>Account Details</h3></td>
	            	<td>&nbsp;</td>
	            </tr>
	            <td>Username: </td>
	                <td>${username}</td>
	            </tr>
	            <tr>
	                <td>Email Address: </td>
	                <td>${email}</td>
	            </tr>
	            <tr>
	                <td></td>
	                <td>&nbsp;</td>
	            </tr>
	         
	        </table>
	        
	  
	        </div>
	        <div class="span6">
	        	<table class="table table-striped" id="">
					<tr>
		            	<td width="165px"><h3>Assign to Batch: </h3></td>
		            	<td class="center">&nbsp;<br><select class="chzn-select" id="batch_no"  name="batch_no"><option value="" selected disabled></option></select></td>
		            </tr>
		 
		 		</table> 
		 		<div id="batch_result"></div>
		 		
				<div class="center" id="scnd_load" style="display:none">
					<div id="load"><i class="icon-spinner icon-spin blue icon-3x"></i></div><br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>
	        </div>
	        <form>
	       		<input type="hidden" name="register_id" id="register_id" value="${register_id}">
				<input type="hidden" name="first_name" id="first_name" value="${first_name}">
				<input type="hidden" name="last_name" id="last_name" value="${last_name}"> 	
				<input type="hidden" name="middle_name" id="middle_name"  value="${middle_name}">
				<input type="hidden" name="birth_date" id="birth_date" value="${birth_date}"> 	
				<input type="hidden" name="address" id="address" value="${address}"> 	
				<input type="hidden" name="city" id="city"  value="${city}"> 	
				<input type="hidden" name="province" id="province" value="${province}"> 	
				<input type="hidden" name="gender" id="gender" value="${gender}"> 	
				<input type="hidden" name="phone" id="phone" value="${phone}"> 	
				<input type="hidden" name="username" id="username" value="${username}">
				<input type="hidden" name="password" id="password" value="${password}">
				<input type="hidden" name="email" id="email" value="${email}">
				<input type="hidden" name="height" id="height" value="${height}">
				<input type="hidden" name="civil_status" id="civil_status" value="${civil_status}">
			</form>
        </div>
		
		</script>

		
		

	</body>
</html>
