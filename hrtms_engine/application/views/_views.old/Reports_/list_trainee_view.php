<html>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" media="screen,print"/>

		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" media="screen,print" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/admin/custom.css" media="screen,print" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" media="screen,print" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" media="screen,print" />
 
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any--> 


		<!-- Print Print Print  -->
		<style type="text/css" media ="screen">
		.foot{display: none;}
	
	
		</style>

		<style type="text/css" media ="print">
			body,td,tr,a{ margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:20px;color:#333;background-color:#fff}
			form{ display: none;}
			h1{ color: red !important; }
			a{ color:#005580 !important;}
    		a[href]:after {content: none !important;}
		</style> 

		<!-- /Print Print Print  -->

	</head> 
<body> 
	<div class="center"><a class="brand" href="#"><img width="120px" src="<?php echo base_url();?>hrtms_resources/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>	
</div>
<!--form>
<fieldset>
	 <div class="btn-group">
			<button data-toggle="dropdown" class="btn dropdown-toggle">
				Filter 
				<span class="caret"></span>
			</button>

			<ul class="dropdown-menu dropdown-default">
				<li>
					<a href="#">Action</a>
				</li>

				<li>
					<a href="#">Another action</a>
				</li>

				<li>
					<a href="#">Something else here</a>
				</li>

				<li class="divider"></li>

				<li>
					<a href="#">Separated link</a>
				</li>
			</ul>
	</div><!--/btn-group-->

</fieldset>
</form>
<H1>Student Profile : </H1>
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		
		<th>
			Training ID
		</th>
		<th>
			 Name
		</th>
		<th class="">
			Birthdate
		</th>
		<th class="">													
			Address 
		</th>
		<th class="">
			City
		</th>
		<th class="">
			Province
		</th>
		<th class="">
			Gender
		</th>
		<th class="">
			Phone
		</th>
		<th class="">
			Email
		</th>
		<th class="">
			Username
		</th> 
	</tr>
	</thead>
	<tbody>
		<?php if(isset($records)) : foreach($records as $row) : ?>
				<tr >
					<td width="150px" height="10px"><?php echo $row->trainee_id;?></td>
					<td width="200px" height="10px"><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name;?></td>
					<td width="100px" height="10px"><?php echo $row->birthdate;?></td>
					<td><?php echo $row->present_address;?></td>
					<td><?php echo $row->present_city;?></td>		
					<td><?php echo $row->present_state;?></td>												
					<td width="50px" height="1px"><?php echo $row->gender;?></td>
					<td><?php echo $row->mobile_no;?></td>
					<td><?php echo $row->email;?></td>
					<td><?php echo $row->username;?></td>
				 
		

				</tr>
				<?php endforeach;?>

			<?php endif; ?>
	</tbody>
   
</table>
  <p class="foot">
  	Printed by : <u> <?php echo $this->session->userdata("first_name") . " " . $this->session->userdata("last_name");?></u> <br>
  	Date : <u><?php echo date('Y-m-d');?></u><br>
  	Time : <u><?php echo date('h:i'); if(date('H')<"12"){echo " AM";}else{echo " PM";}?></u><br>
  	Signed : <u>__________________</u>
  </p>
<footer>
			<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
			<p class="pull-right">Powered by: <a href="">TDC</a></p>
</footer>


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

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
			
				$('.dialogs,.comments').slimScroll({
			        height: '300px'
			    });
				
				$('#tasks').sortable();
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			});
		</script>
</body>		 
</html>