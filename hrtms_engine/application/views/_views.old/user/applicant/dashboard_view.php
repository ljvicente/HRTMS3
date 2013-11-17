<?php if($this->session->userdata('permission') != 'Applicant') { redirect(base_url() . '404');} ?>
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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />


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
							AMI - Applicant
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

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="active">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					
					<li>
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
								Dashboard
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
						<?php if(isset($records)) : foreach($records as $row) : 

							$incDOcs = $row->requirements;
							$incDOcs = preg_replace('/\.$/', '', $incDOcs); //Remove dot at end if exists
							$array = explode(',', $incDOcs,-1); //split string into array seperated by ', '
							$incDOcs ="<ul>";

							foreach($array as $value) //loop over values
							{
							  $incDOcs .= "<li>". $value ."</li>"; //print value
							}
							$incDOcs .= "</ul>";
						?>
							<div class="alert alert-danger">
								You failed to submit the ff. :
								<?php echo $incDOcs;?>
							</div>
						<?php endforeach;?>
						<?php endif; ?>
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										Introduction
										
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<h2 class="blue center">Welcome to AMI - Alliance Mansol Inc.</h2>
										<p align="center">
											You are now registered as an applicant. Take note that this is just one of the steps in the application process.<br>
											Please look below for the information about the screening.
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="span6" >
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> AMI Info</h5>

									<div class="widget-toolbar">	
								
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>

										<a href="#" data-action="close">
											<i class="icon-remove"></i>
										</a>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										
							                    
					                    <center><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=santa+rosa+laguna+technopark+ems&amp;aq=&amp;sll=14.272868,121.082382&amp;sspn=0.100982,0.158443&amp;ie=UTF8&amp;hq=technopark+ems&amp;hnear=Santa+Rosa+City,+Laguna,+Calabarzon,+Philippines&amp;ll=14.272868,121.082382&amp;spn=0.062077,0.040192&amp;t=m&amp;output=embed"></iframe><br><br>
					                    </center>  
					                    <address>
			                            <strong>Alliance Mansols Inc</strong>

			                            <br>
			                            117 Technology Ave. Laguna Technopark Inc
			                            <br>
			                            Binan City, Laguna
			                            <br>
			                            Philippines
			                            <br>
			                            <abbr title="Phone">P:</abbr>
			                            (123) 456-7890
			                          </address>
									</div>
								</div>
							</div>
						</div>
						<div class="span6" >
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> Requirements</h5>

									<div class="widget-toolbar">
								
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>

										<a href="#" data-action="close">
											<i class="icon-remove"></i>
										</a>
									</div>
								</div>
								<div class="widget-body">
									<div class="widget-main">
					                    <p>You must bring the following documents for your actual screening.</p>
					                    <ul>
					                    <li>Registration slip (Colored) - <a href="<?php echo base_url();?>profile">Click here.</a></li>
					                    <li>Resume</li>
					                    <li>Diploma</li>
					                    <li>Form - 137 for Undergraduate</li>
					                    <li>Transcript of Record for Graduate</li>
					                    <li>Additional documents from the available vacancy. <a href="<?php echo base_url();?>registration/vacancy">Click here.</a></li>
					                    </ul>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>


		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	


			$("#student").submit(function(){
			         var dataString = $("#student").serialize();
			         $.ajax({ 
			           url: "<?php echo base_url(); ?>ajax/user",
			     	   async: false,
			           type: "POST",			          
			           data: dataString, 
			           dataType: 'json',
			 
			           success: function(output_string){
			               //alert(dataString);
			                $('#result_table').html(output_string);
			           }
			 
			         });
			 
			         return false;  //stop the actual form post !important!
			});
 
										 
		</script>
	</body>
</html>
