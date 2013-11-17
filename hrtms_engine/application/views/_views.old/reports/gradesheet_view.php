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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />


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
<div class="center">
	<a class="brand" href="#">
	<img width="120px" src="<?php echo base_url();?>hrtms_resources/images/logo.jpg" alt=""> AMI - Human Resource Training and Management System</a>	
</div>
<form class="form" method="POST" action="">
<fieldset>
	
	<div class="control-group">
		<label class="control-label" for="byBatch">&nbsp;by Batch :</label>
		<div class="controls">
			<select class="chzn-select" id="batch" name="batch">
				<option selected></option>
			<?php if(isset($records2)) : foreach($records2 as $row) : ?>
				<option value="<?php echo $row->batch_id;?>"><?php echo $row->batch_id;?></option>
			<?php endforeach;?>
			<?php endif; ?>
			</select> 
			
		</div>
	</div>
		
	<div id="exam_set"></div>
</fieldset>
</form>
<!--
<h1>Gradesheet :</h1>
		<input type="submit" value="submit" class="btn btn-info btn-small">
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		<th class="center">
			Training ID
		</th>
		<th class="center"> Name
		</th>
		<th class="center">
			Scores
		</th>
		<th  class="center">
			Status
		</th>
	</tr> 
	</thead>
	<tbody>
		<?php if(isset($records)) : foreach($records as $row) : ?>
				<tr> 
					<td width="200px" height="10px"><?php echo $row->trainee_id;?></td>
					<td width="500px" height=""><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name;?></td>
					<td width="20px" class="center"><?php echo $row->scores."/".$row->over;?></td>
					<td width="30px" class="center"><?php echo $row->status?></td>
				</tr>
				<?php endforeach;?> 

			<?php endif; ?>
	</tbody> 
-->
<div id="result_table"></div>
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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>


		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">

			$(".chzn-select").chosen(); 
			$(".chzn-select-deselect").chosen({allow_single_deselect:true});
			function print(batch)
			{
			 document.location.href='<?php echo base_url();?>reports/template/' + batch;
			}

       

			$('#batch').change(function () {
                var batch =  $(this).find("option:selected").attr('value');
                console.log(batch);
           		$.ajax({    
                    url: "<?php echo base_url();?>reports/exam_id", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: "batch="+batch, //The variables which are going.
                    dataType: 'json', //Return data type (what we expect).
                     
                    //This is the function which will be called if ajax call is successful.
                    success: function(output_string) {
                        //data is the html of the page where the request is made.
                        //alert(selState); 

                        $('#exam_set').html(output_string);
                        $(".chzn-select").chosen(); 
                        exam_id();
                    } 
                })
            });

        var exam_id = function(){
        	 $('#exam').change(function () {
                var exam_id =  $(this).find("option:selected").attr('value');
                var batch =  $('#batch').find("option:selected").attr('value');
                var name =  $(this).find("option:selected").attr('exam_name');
                console.log(exam_id+" : "+ name);
                //console.log(batch);
           		$.ajax({    
                    url: "<?php echo base_url();?>reports/gradesheetByExamId", //The url where the server req would we made.
                    async: false, 
                    type: "POST", //The type which you want to use: GET/POST
                    data: {id : exam_id, batch : batch, name : name}, //The variables which are going.
                    dataType: 'json', //Return data type (what we expect).
                     
                    //This is the function which will be called if ajax call is successful.
                    success: function(output_string) {
                        //data is the html of the page where the request is made.
                        //alert(selState); 
                        console.log(output_string);
                        $('#result_table').html(output_string);
                        $(".chzn-select").chosen(); 
                    } 
                })
            });

        }  
										 
		</script>
</body>		 
</html> 