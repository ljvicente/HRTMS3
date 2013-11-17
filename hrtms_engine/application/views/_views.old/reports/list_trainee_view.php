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
			<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" media="screen,print" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" media="screen,print" />
		
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" media="screen,print" />
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
<form class="form-inline" method="POST" action="">
<fieldset>
	<div id="byBatch">
		<label for="byBatch">&nbsp;by Batch :</label>
		<select class="chzn-select"  name="batch" id="batch">
				<option selected value=""></option>
			<?php if(isset($records2)) : foreach($records2 as $row) : ?>
				<option value="<?php echo $row->batch_control_no;?>"><?php echo $row->batch_control_no;?></option>
			<?php endforeach;?>
			<?php endif; ?>
 
		</select> 

	</div>
</fieldset>
</form>

<!--<H1>List of Trainee:</H1>
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		
		<th class="center">
			Training ID
		</th>
		<th class="center">
			 Name
		</th>
		<th class="center">
			Birthdate
		</th>
		<th class="center">													
			Address 
		</th>
		<th class="center">
			City
		</th>
		<th class="center">
			Province
		</th>
		<th class="center">
			Gender
		</th>
		<th class="center">
			Phone
		</th>
		<th class="center">
			Email
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
					<td><?php echo $row->present_province;?></td>												
					<td width="50px" height="1px"><?php echo $row->gender;?></td>
					<td><?php echo $row->mobile_no;?></td>
					<td><?php echo $row->email;?></td>	

				</tr>
				<?php endforeach;?>

			<?php endif; ?>
	</tbody>
   
</table>
-->
<div id="result_table"></div>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function print(batch)
			{
			 document.location.href='<?php echo base_url();?>reports/template2/' + batch;
			}
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




				$(".chzn-select").chosen(); 
				$(".chzn-select-deselect").chosen({allow_single_deselect:true}); 

				$('.chzn-select').change(function () {
                    var batch =  $(this).find("option:selected").attr('value');
                    console.log(batch);
                     $.ajax({    
                        url: "<?php echo base_url();?>reports/traineeByBatch", //The url where the server req would we made.
                        async: false, 
                        type: "POST", //The type which you want to use: GET/POST
                        data: {batch : batch}, //The variables which are going.
                        dataType: 'json', //Return data type (what we expect).
                         
                        //This is the function which will be called if ajax call is successful.
                        success: function(output_string) {
                            //data is the html of the page where the request is made.
                            //alert(selState); 
                            $('#result_table').html(output_string);
                            //console.log(output_string);
                        } 
                    })
                });
											 
	
			});
		</script>
</body>		 
</html>