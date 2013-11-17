
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
						<span class="blue bigger-125">
							<i class="icon-search"></i>
							404
						</span>
						Sorry, we searched everywhere but we couldn't find it! :(
					</h1>
					<hr>
               <p>
                  The page you are looking seems to be missing.
               </p>
               <div class="space"></div>
               <a onclick="goBack()" class="btn btn-grey">
                  <i class="icon-arrow-left"></i>
                  Go Back
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
