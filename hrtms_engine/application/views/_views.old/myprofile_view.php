<?php //if($this->session->userdata('permission') != 'Applicant') { redirect(base_url() . '404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Profile - AMI</title>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/bootstrap-editable.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-barcode.js"></script>

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
			.mandatory_star{
	  	color:red;

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
							AMI - Profile Settings
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
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
			<!--
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
			-->
				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-reply"></i>
          <span>Back to Home</span>
						</a>
					</li>

					<li class="active">
						<a href="<?php echo base_url();?>Profile">
							<i class="icon-user"></i>
							<span>Profile</span>
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
						<li class="active">Control Panel</li>
					</ul><!--.breadcrumb-->

					
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Edit Profile
									                          
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">

						<!--PAGE CONTENT STARTS HERE-->
						<?php echo $this->session->flashdata('message');?>
						
						<div id="user-profile-2" class="user-profile row-fluid">
							<div class="tabbable">
								<div class="tab-content no-border padding-24">
									<div id="home" class="tab-pane in active">
										<div class="row-fluid">
											<div class="span3 center">
												<span class="profile-picture">
													<img class="editable" alt="" id="avatar" style="height:226px;width:226px;" 
													src="<?php 
																/*$link = $row->image_url;
																$filename = './hrtms_resources/avatars/$link';
																$path2 = base_url()."hrtms_resources/images/profile-pic.jpg";
																$path = base_url()."hrtms_resources/avatars/$link";
														if ($link != "") {
															echo $path;
														}
														else{
															echo $path2;
														}*/
														if($this->session->userdata('image_file')=='') {
															echo base_url().'hrtms_resources/avatars/user.jpg';
														}
														else
														{
															echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');
														}
													 ?>">
												</span>	
											
												<div class="label label-info label-large arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="icon-circle light-green middle"></i>
															&nbsp;
															<span class="white middle bigger-120">
																<?php echo $this->session->userdata('last_name')?>,
																<?php echo $this->session->userdata('first_name')?>
																
															</span>
														</a>
													</div>
												</div>

												<div class="space space-4"></div>
												
												<?php  
												echo form_open_multipart(base_url().'profile/change_avatar');?>
													<input type="file" id="id-input-file-2" name="userfile" size="20" id="file"/>
													<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
													<input type="submit" class="btn btn-purple btn-small btn-block" value="Upload Image" />
													
												</form>

											</div><!--/span-->
											
											<div class="span9">
											<form id="profile-form2" class="form-horizontal" method="POST" action="<?php echo base_url();?>profile/change_email">
												<div class="profile-user-info">
											
													<div class="profile-info-row">
														<div class="profile-info-name">Email </div>
														
														<div class="profile-info-value">
															
															<div class="control-group">
																<label class="control-label" for="email" >Email (<span class="required">*</span>)</label>

																<div class="controls">
																	<input type="email" id="email" name="email" value="<?php echo $this->session->userdata('email');?>">
																</div>
															</div>

															<div class="control-group">
																<label class="control-label" for="password" >Authenticate (<span class="required">*</span>)</label>

																<div class="controls">
																	<input placeholder="Password" type="password" id="password" name="password">
																</div>
															</div>
															
															<div class="control-group">
																

																<div class="controls">
																	<button class="btn btn-success btn-small" type="submit">
																		<i class="icon-save bigger-110"></i>
																		Change Your Email
																	</button>
																</div>
															</div>
														</div>

													</div>

													
													
											</form>
											<div class="hr hr-8 dotted"></div>
											<form id="profile-form" class="form-horizontal" method="POST" action="<?php echo base_url();?>profile/change_pass">


											
													<div class="profile-info-row">
														<div class="profile-info-name">Change Password </div>
														
														<div class="profile-info-value">
															
															<div class="control-group">
																<label class="control-label" for="first_name" >Old Password (<span class="required">*</span>)</label>

																<div class="controls">
																	<input type="password" id="old_password" name="old_password" value="" placeholder="">
																</div>
															</div>

															<div class="control-group">
																<label class="control-label" for="re_password" >New Password (<span class="required">*</span>)</label>

																<div class="controls">
																	<input type="password" id="re_password" name="password">
																</div>
															</div>

															<div class="control-group">
																<label class="control-label" for="password2" >Retype (<span class="required">*</span>)</label>

																<div class="controls">
																	<input type="password" id="password2" name="password2">
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
										
											
											</div><!--/span-->
										</div><!--/row-fluid-->

										<div class="space-20"></div>

									</div><!--#home-->

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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style-editable.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.js"></script>


		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
    		$(function() {

				$.mask.definitions['~']='[+-]';
  				$('.input-mask-phone').mask('(999) 999-9999');

  				/*$('.date-picker').datepicker().next().on(ace.click_event, function() {
		          $(this).prev().focus();
		        });*/
				var nowTemp = new Date();
				var newDate = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 				//now.setDate(now.getFullYear() - 55);
		        newDate.setDate(newDate.getMonth() - 7);
		      	var nd = new Date(newDate);
		      	//alert(nd);
		        var date = $('.date-picker').datepicker({
				  onRender: function(date) {
				    return date.valueOf() < nd.valueOf() ? 'disabled' : '';
				  }
				});

		        jQuery.validator.addMethod("phone", function (value, element) {
		          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
		        }, "Enter a valid phone number.");
		        

		        jQuery.validator.addMethod("nameValidation", function(value, element) {
		          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
		        }, "Name must not contain special characters except comma, dash and period.");

		        jQuery.validator.setDefaults({
		          debug: true,
		          //success: "valid"
		        });
		        $('#profile-form').validate({
		          errorElement: 'span',
		          errorClass: 'help-inline',
		          focusInvalid: false,
		          rules: {
		          	old_password:{
		          		required:true
		          	},
		            password: {
					  required: true,
					  minlength: 6,
					  maxlength: 20,
					},
		            password2: {
					  required: true,
					  minlength: 6,
					  maxlength: 20,
					  equalTo: '#re_password'
					}
		          
		          },
		          messages: {
		       
		            email: {
		              required: "Please provide a valid email.",
		              email: "Please provide a valid email.",
		              remote: "This email is not available.",
		            },
		            old_password:{
		              required : "Type your old password",
		            },
		            username: {
		              maxlength: jQuery.format("Must not contain more than {0} characters."),
		              remote: "This username is not available.",
		              
		            },
		            password: {
		              required: "Please specify a password.",
		              minlength: jQuery.format("Please specify a secure password. At least {0} characters required."),
		              maxlength: jQuery.format("Must not contain more than {0} characters."),

		            },
		            password2: {
		              minlength: jQuery.format("At least {0} characters required.")
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
		            //alert('SUBMIT FORM');
		            form.submit();

		          },
		          invalidHandler: function (form) {
		           
		          },

		        });
		      
		    	
      			//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    
			
				// *** editable avatar *** //
				try {//ie8 throws some harmless exception, so let's catch it
			
					//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
					//so let's have a fake appendChild for it!
					if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							/**
							//this will override the default before_change that only accepts image files
							before_change: function(files, dropped) {
								return true;
							},
							*/
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							max_size: 5242880,//~100Kb
							on_error : function(code) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(code == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(code == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 5mb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					/****************************  UPLOAD PICTURE  ****************************************/
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload
							
							var deferred = new $.Deferred
			
							//if value is empty, means no valid files were selected
							//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
							//so we return just here to prevent problems
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
		    	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false, //| true | large
					//whitelist:'gif|png|jpg|jpeg',
					//blacklist:'exe|php'
					//onchange:''
					//
				});

			});

    
		
	

    </script>
	</body>
</html>
