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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />
		<!--<script src="<?php echo base_url();?>hrtms_resources/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-barcode.js"></script>
		/*Barcode
		-->
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css" media="screen">
	      .ui-autocomplete {
	            padding: 0;
	            list-style: none;
	            background-color: #fff;
	            width: 218px;
	            border: 1px solid #B0BECA;
	            max-height: 350px;
	            overflow-y: scroll;
	          }
	      .ui-autocomplete .ui-menu-item a {
	            border-top: 1px solid #B0BECA;
	            display: block;
	            padding: 4px 6px;
	            color: #353D44;
	            cursor: pointer;
	          }
	      .ui-autocomplete .ui-menu-item:first-child a {
	            border-top: none;
	          }
	      .ui-autocomplete .ui-menu-item a.ui-state-hover {
	            background-color: #D5E5F4;
	            color: #161A1C;
	          }
	        a{
	          cursor:pointer;
	        }
	      #sheepItForm_controls div, #sheepItForm_controls div input {
	          float:left;    
	          margin-right: 10px;
	      }
	      img:hover{ cursor: pointer;

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
								Personal Accounts
							</small>
						</h1>
					</div><!--/.page-header-->

				
					<div class="row-fluid">
						  <!-- Tab 1 -->
				<form class="form-horizontal" id="personal_acc_form">
                
                <?php if(isset($records)) : foreach($records as $row) : ?>
                	<h4 class="lighter block green">&nbsp;&nbsp;&nbsp;&nbsp;Accounts</h4>
                	<div class="control-group">
                		<label class="control-label" for="sss_no">SSS No.</label>
                		<div class="controls">
                			<input type="text" class="input-medium"  id="sss_no" name = "sss_no"  value="<?php echo $row->sss_no;?>">
                		</div>
                	</div>
                	<div class="control-group">
                		<label class="control-label" for="tin_no">TIN No.</label>
                		<div class="controls">
                			<input type="text" class="input-medium"  id="tin_no" name = "tin_no"  value="<?php echo $row->tin_no;?>">
                		</div>
                	</div>
                	<div class="control-group">
                		<label class="control-label" for="philhealth_no">Philhealth No.</label>
                		<div class="controls">
                			<input type="text" class="input-medium"  id="philhealth_no" name = "philhealth_no"  value="<?php echo $row->philhealth_no;?>">
                		</div>
                	</div>
                	<div class="control-group">
                		<label class="control-label" for="pagibig_no">PAG-IBIG No.</label>
                		<div class="controls">
                			<input type="text" class="input-medium"  id="pagibig_no" name = "pagibig_no"  value="<?php echo $row->pagibig_no;?>"> 
                		</div>
                	</div>
               		<div class="hr hr-dotted"></div>
               		<div class="control-group">
               			<label class="control-label" for="">Tax Status</label>
               			<div class="controls">
	               			<select name = "tax_status" id="" >
	                          <option disabled = "disabled" selected = "selected" value="">Select Status...</option>
	                          <option value = "Single" <?php if($row->tax_status=='Single') echo 'selected';?>>Single</option>
	                          <option value = "Married" <?php if($row->tax_status=='Married') echo 'selected';?>>Married</option>
	                          <option value = "Head_of_Family" <?php if($row->tax_status=='Head_of_Family') echo 'selected';?>>Head of Family</option>
	                        </select>             				
               			</div> 
               		</div>

               		<div class="control-group">
               			<label class="control-label">Other License Type</label>
               			<div class="controls">
               				<input type="text" class="input-medium" name ="license_type"  value="<?php echo $row->license_type;?>">
               			</div>
               		</div>
               		<div class="control-group">
               			<label class="control-label">Place Issued</label>
               			<div class="controls">
               				 <input type="text" class="input-medium" name ="license_issue_place"  value="<?php echo $row->license_issue_place;?>">
               			</div>
               		</div>
               		<div class="control-group">
               			<label class="control-label">Date Issue</label>
               			<div class="controls">
               				<input type="text"  class="input-medium datepicker" name = "license_issue_date"  value="<?php echo $row->license_issue_date;?>">
               			</div>
               		</div>

               	 	<div class="form-actions">
	                    <button type="submit" class="btn btn-success btn-small">Submit</button>
	                    <button type="reset" class="btn btn-danger btn-small">Reset</button>
	                </div>

                <?php endforeach;?>
				<?php endif; ?>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>
		<!-- Autocomplete Countries -->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>


	

		<!--inline scripts related to this page-->
		<script type="text/javascript">
		$( document ).ready(function() {
			var data = $('#personal_acc_form').serialize();
			console.log(data);

			

			$.extend($.gritter.options, { 
		        position: 'bottom-left', // defaults to 'top-right' but can be 'bottom-left', 'bottom-right', 'top-left', 'top-right' (added in 1.7.1)
				fade_in_speed: 'medium', // how fast notifications fade in (string or int)
				fade_out_speed: 2000, // how fast the notices fade out
				time: 1000 // hang on the screen for...
			});
			jQuery.validator.addMethod("nameValidation", function(value, element) {
	          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
	        }, "Name must not contain special characters except comma, dash and period.");

			jQuery.validator.addMethod("mobile", function (value, element) {
	          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
	        }, "Enter a valid mobile number.");
			jQuery.validator.addMethod("telephone", function (value, element) {
		          return this.optional(element) || /^\d{3}\-\d{2}\-\d{2}( x\d{1,6})?$/.test(value);
		        }, "Enter a valid telephone number.");
			jQuery.validator.setDefaults({
	          debug: true,
	          //success: "valid"
	        });
  
	        $('#personal_acc_form').validate({
	          ignore:"",
	          errorElement: 'span',
	          errorClass: 'help-inline',
	          focusInvalid: false,
	          rules: {
	            sss_no: {
	              

	            }, 
	            philhealth_no: { 
	             

	            },	
	            pagibig_no: {
	             

	            },
	            license_type: {
	             
	             
	            },
	            license_issue_place: {
	             

	            },
	          
	        	

	          },
	           
	       
	          messages: {
	          	
	          	sss_no: {
	              

	            }, 
	            philhealth_no: { 
	             

	            },	
	            pagibig_no: {
	             

	            },
	            license_type: {
	             
	             
	            },
	            license_issue_place: {
	             

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
	          	//var controls = element.closest('.controls');
	          	
 
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
	            console.log('SUBMIT PERSONAL INFORMATION FORM');
	            submit_form();
	            //$('input').closest('.control-group').removeClass('success');
	          },
	          invalidHandler: function (form) {
	          	$("html, body").animate({ scrollTop: 0 }, "slow");
	            
	          }, 

	        });
        });
         
        var submit_form = function(){
        	
		  var sData = $('#personal_acc_form').serialize();
		  console.log(sData);
		  var clicked = this;
		   $.ajax({
               url:"<?php echo base_url();?>hris/updatePersonalAcc",
                type:'POST',
                data:sData,
               // dataType:"json",
                success:function(result){

                $.gritter.add({
					title: 'Human Resource Information Update',
					text: '<i class="icon-spinner icon-spin green icon-2x"></i> Personal accounts has been updated.',
					class_name: 'gritter-success gritter-center gritter-light'
				});
				
	            //$('#personal_info').load('<?php echo base_url();?>Hris/personal_info');
	            //$("#personal_info")[0].reset();
                $("html, body").animate({ scrollTop: 0 }, "slow");

                }

            });
        }
		</script>
		
	</body>
</html>
