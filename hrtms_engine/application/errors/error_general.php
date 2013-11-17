<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>HRIS - AMI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/training/ace.min.css" media="PRINT,SCREEN"/>
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/training/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->
	</head>

	<body>
		
		<div class="main-container container-fluid">
			<div class="error-container">
				<div class="">
					<h1 class="grey lighter smaller">
						<span class="red bigger-125">
							<i class="icon-bug"></i>
							Oh!
						</span>
						<?php echo $heading; ?>.
					</h1>
					<hr>
					<h4>
						There is something wrong <i class="icon-wrench icon-animated-wrench"></i> with the system. 
					</h4>
					<hr>
					<h5>Details:</h5>
	                <div class="well">
	                   <?php echo $message; ?>
	                </div>
	                <div class="space"></div>
	                <a class="btn btn-primary">
	                   <i class="icon-phone"></i>
	                   Contact Us, We'll fix it for you
	                </a>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>hrtms_resources/js/excanvas.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			function goBack(){
			  window.history.back()
			}
		</script>
	</body>
</html>
