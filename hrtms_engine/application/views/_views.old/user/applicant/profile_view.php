<?php if($this->session->userdata('permission') != 'Applicant') { redirect(base_url() . '404');} ?>
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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/applicant/ace.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-responsive.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css"  media="screen,print"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css" media="screen,print">
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/bootstrap-editable.css" media="screen,print">

		<script src="<?php echo base_url();?>hrtms_resources/js/style-extra.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-latest.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-barcode.js"></script>

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->
		<style type="text/css">
			#print{display: none;}
		</style>
		<!--inline styles if any-->
		<style type="text/css" media ="print">
			body,td,tr,a{ margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:20px;color:#333;background-color:#fff}
			form{ display: none;}
			h1{ color: red !important; }
			a{ color:#005580 !important;}
    		a[href]:after {content: none !important;}
    		.navbar, #sidebar, .nav,#no-print,#breadcrumbs,#space,.page-header,#main-content ,#btn-scroll-up{display:none;}
    		#print{	display: block;
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
				<!--<div id="sidebar-shortcuts">
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
						<li class="active">Control Panel </li>
					</ul><!--.breadcrumb-->

				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Profile <?php echo $this->session->userdata('user_id');?>
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="alert alert-info" data-step="1" data-intro="Let's take a quick guide with the basics!">
							Print this Registration Slip			
								
						</div>
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<div id="user-profile-2" class="user-profile row-fluid">
									<div class="tabbable">
										<ul class="nav nav-tabs padding-18">
											<li class="active">
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#home">
													<i class="green icon-user bigger-120"></i>
													Profile
												</a>
											</li>
											<!--
											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#feed">
													<i class="orange icon-rss bigger-120"></i>
													Activity Feed
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#friends">
													<i class="blue icon-group bigger-120"></i>
													Friends
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/profile.html#pictures">
													<i class="pink icon-picture bigger-120"></i>
													Pictures
												</a>
											</li>
	
											-->							
										</ul>

										<div class="tab-content no-border padding-24">
											<div id="home" class="tab-pane in active ">
												<div class="row-fluid" id="no-print" >
													<div class="span3 center">
														<span class="profile-picture">
															<img class="editable" alt="Avatar" style="height:226px;width:226px;" id="avatar2" src="<?php 
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
																	<span class="white middle bigger-120"><?php 

																	$mid = $row->middle_name;
																	if($mid != null)	{$m = $row->middle_name[0].'.';} else { $m = $mid;}
																		

																		echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
																</a>
															</div>
														</div>
														<div class="space space-4"></div>
														
															<div class="bcTarget"></div>
																<?php
																	
																	echo '<script type="text/javascript">$(".bcTarget").barcode("';
																	echo $row->register_id;
																	echo '", "code39");</script>';

																?> 
														

													</div><!--/span-->

													<div class="span9">

														<div class="profile-user-info">
															<div class="profile-info-row">
																<div class="profile-info-name"> Username </div>

																<div class="profile-info-value">
																	<span><?php echo $row->username;?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Location </div>

																<div class="profile-info-value">
																	<i class="icon-map-marker light-orange bigger-110"></i>
																	<span><?php echo $row->address.' '.$row->city;?></span>
																	<span><?php echo $row->province;?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Age </div>

																<div class="profile-info-value">
																	<span><?php
																	$birthdate = $row->birth_date;												
																    list($y,$m,$d) = explode('-', $birthdate);
    
																    if (($m = (date('m') - $m)) < 0) {
																        $y++;
																    } elseif ($m == 0 && date('d') - $d < 0) {
																        $y++;
																    }
																  
															  
																    echo date('Y') - $y;
																    ?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Birthday </div>

																<div class="profile-info-value">
																	<span><?php echo $row->birth_date?></span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Height </div>

																<div class="profile-info-value">
																	<span><?php echo $row->height?> cm</span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Civil Status </div>

																<div class="profile-info-value">
																	<span><?php echo $row->civil_status?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Email </div>

																<div class="profile-info-value">
																	<span><?php echo $row->email;?></span>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Phone </div>

																<div class="profile-info-value">
																	<span><?php echo $row->phone;?></span>
																</div>
															</div>
														</div>

														<div class="hr hr-8 dotted"></div>

														<div class="profile-user-info">

															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-edit bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="<?php echo base_url();?>profile/edit_profile">Edit Profile</a>
																</div>

															</div>
															<div class="profile-info-row">
																<div class="profile-info-name">
																	<i class="middle icon-print bigger-150 light-blue"></i>
																</div>

																<div class="profile-info-value">
																	<a href="#" onclick="window.print()">Print</a>
																</div>
																
															</div>
														</div>
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20" id="space"></div>
												

											</div><!--#home-->
										

										
										</div>
									</div>
						</div>
						<?php endforeach;?>
						<?php endif; ?>
					
						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->

				</div><!--/#page-content-->

			</div><!--/#main-content-->
			<div id="print">
				<div class="row-fluid" >
					<div class="span6 center">
						<a><img width="200px" src="<?php echo base_url();?>hrtms_resources/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>	
					</div>
				</div>
				<div class="row-fluid" >
					
					<div class="" style="margin-top:0px;margin-bottom:0px">
				
						<span class="pull-right">
							<div class="bcTarget position relative" style="padding: 0px; overflow: auto; width: 253px;"></div>
								<?php
									
									echo '<script type="text/javascript">$(".bcTarget").barcode("';
									echo $row->register_id;
									echo '", "code39");</script>';

								?> 
							<div class="profile-picture "><img class="editable" alt="Avatar" style="height:226px;width:226px;" id="avatar2" src="<?php 
														if($this->session->userdata('image_file')=='') {
															echo base_url().'hrtms_resources/avatars/user.jpg';
														}
														else
														{
															echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');
														}
													?>">
							</div>
							
						</span>	<address class="pull-left" style="margin-left:50px">
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

					
					</div><!--/span-->

					
					<div class="space-20"></div><div class="space-20"></div><div class="space-20"></div><div class="space-20"></div><div class="space-20"></div>
					
					<div class="span">

						<div class="profile-user-info" style="width:50%">
							<div class="profile-info-row">
								<div class="profile-info-name"> Name </div>

								<div class="profile-info-value">
									<span><?php 
									$mid = $row->middle_name;
									if($mid != null)	{$m = $row->middle_name.'.';} else { $m = $mid;}
										echo $row->first_name.' '.$m.' '.$row->last_name;?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Location </div>

								<div class="profile-info-value">
									<i class="icon-map-marker light-orange bigger-110"></i>
									<span><?php echo $row->address.' '.$row->city;?></span>
									<span><?php echo $row->province;?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Age </div>

								<div class="profile-info-value">
									<span><?php
									$birthdate = $row->birth_date;												
								    list($y,$m,$d) = explode('-', $birthdate);

								    if (($m = (date('m') - $m)) < 0) {
								        $y++;
								    } elseif ($m == 0 && date('d') - $d < 0) {
								        $y++;
								    }
								    
								    echo date('Y') - $y;
								    ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Birthday </div>

								<div class="profile-info-value">
									<span><?php echo $row->birth_date?></span>
								</div>
							</div>
							<div class="profile-info-row">
							<div class="profile-info-name"> Height </div>

								<div class="profile-info-value">
									<span><?php echo $row->height?> cm</span>
								</div>
							</div>
							<div class="profile-info-row">
								<div class="profile-info-name"> Civil Status </div>

								<div class="profile-info-value">
									<span><?php echo $row->civil_status?></span>
								</div>
							</div>
							<div class="profile-info-row">
								<div class="profile-info-name"> Email </div>

								<div class="profile-info-value">
									<span><?php echo $row->email;?></span>
								</div>
							</div>
							<div class="profile-info-row">
								<div class="profile-info-name"> Phone </div>

								<div class="profile-info-value">
									<span><?php echo $row->phone;?></span>
								</div>
							</div>
						</div>
						<div class="space-20"></div>
						
						<footer>
							<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
							<p class="pull-right">Powered by: <a href="">TDC</a></p>
						</footer>

					</div><!--/span-->
				
				</div><!--/row-fluid-->

						
			</div><!-- PRiNT -->
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
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-editable.min.js"></script>
	

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
    
    	function generateBarcode(){
        var value = $("#barcodeValue").val();
        var btype = $("input[name=btype]:checked").val();
        var renderer = $("input[name=renderer]:checked").val();
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
          barWidth: $("#barWidth").val(),
          barHeight: $("#barHeight").val(),
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  				

    </script>
	</body>
</html>
