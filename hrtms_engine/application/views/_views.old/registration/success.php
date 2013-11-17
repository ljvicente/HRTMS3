<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Registration - AMI</title>

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
    
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
    <style type="text/css">
	  
	  .mandatory_star{
	  	color:red;

	  }
	</style>

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
    <![endif]-->

    <!--inline styles if any-->
  </head>
  
<body onload="countdown()">
 <!-- topbar starts -->
	 <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="#" class="brand">
            <small>
              <img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
              AMI - Registration
            </small>
          </a><!--/.brand-->

          
        </div><!--/.container-fluid-->
      </div><!--/.navbar-inner-->
    </div>
	<!-- topbar ends -->

	<div class="container">	
		<div class="clearfix"></div>
		<br><br><br>

		<div class="center">
		<h4>Account has successfully created</h4>
		<h4>Redirecting to <a href="<?php echo base_url();?>login/training">Login</a> in <span id="countdown">5</span> secs ...</h4>
		<i class="icon-spinner icon-spin icon-3x"></i>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
      <div class="container"><br>
      <center>
      <img src="<?php echo base_url();?>hrtms_resources/images/ami-logo2.png"><br>
      Copyright &copy; 2013</p><br></center>
      </div>
      </div>
    <p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> <?php echo date('Y') ?></p>
    <p class="pull-right">Powered by: <a href="">TDC</a></p>
  </footer>
<script type="text/javascript">
var ss = 5;
function countdown() {
ss = ss-1;
if (ss<0) {
window.location="<?php echo base_url();?>login/training";
}
else {
document.getElementById("countdown").innerHTML=ss;
window.setTimeout("countdown()", 1000);
}
}
</script>
</body>
</html>