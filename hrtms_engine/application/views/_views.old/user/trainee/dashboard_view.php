<?php if($this->session->userdata('permission') != 'Trainee') { redirect(base_url() . '404');} ?>
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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />

		

		<style type="text/css">
			input[type=checkbox],
			input[type=radio] {
				opacity: 100;
				position: relative;
				z-index: 12;
				width: 18px;
				height: 18px;
				display:inline; margin:0px; padding:0px;
			}
		</style>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<?php if(isset($records)) : foreach($records as $row) : $this->session->set_userdata('civil_status', $row->civil_status);endforeach;endif; ?>
	</head>

	<body onkeypress="_console(event)">
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - Training
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
							<span>Training Panel</span>
						</a>
					</li>

					
					
					<li class="">
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
						<a href="#">Home</a>

						<span class="divider">
							<i class="icon-angle-right"></i>
						</span>
					</li>
					<li class="active">Training Panel</li>
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
						AMI Trainee 
						<small>
							<i class="icon-double-angle-right"></i>
							
						</small>
					</h1>
				</div><!--/.page-header-->
				<div class="row-fluid">
					<div class="alert alert-danger">
						<i class="icon-exclamation"></i> <b>Notice:</b> Please fill-up your <a href="profile/hris">HRIS Information</a>.
					</div>
				</div>
				
				<?php if($this->session->userdata("is_active")==0) { ?>
				<div class="row-fluid">
					<!--PAGE CONTENT STARTS HERE-->
					
					<div class="span8">
						<div class="widget-box">
							<div class="widget-header">
								<h4 class="smaller">
									Viewer
									<small>by Google Docs</small>
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<span class="presenter">
										<iframe src="http://docs.google.com/viewer?url=http://jemnuine.com/elfinder/files/GDOCS.pptx&amp;embedded=true" width="100%" height="400" style="border: none;"></iframe>
									</span>
									
								</div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget-box">
							<div class="widget-header">
								<h4 class="smaller">
									Modules
									<small>for <?php echo $this->session->userdata("company");?></small>
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<table class="table">
										<tbody>
										<tr>
											<td>
												<label>Module Name: </label>
												<select required="" name="module_name" id="module_name">
													<option value="" selected="selected" style="color:#ddd;">Select Module...</option>

													<?php if(isset($modules)) { 
														foreach($modules as $row) {?>
														
														<option value="<?php echo $row->file_name;?>" ><?php echo $row->module_name;?></option>

														<?php }}?>
												</select>

												<i style="margin-left: 5px; display: none;" id="loading_file" class="icon-spinner icon-spin orange icon-2x"></i>
											</td>
										</tr>
										<tr>	
											<td>
												<button id="view_module" class="btn btn-success"><i class="icon-arrow-left icon-white"></i> View Module</button>
											</td>
										</tr>
										
										
									</tbody></table>
								</div>
							</div>
						</div>
						<p></p>
						<div class="widget-box">
							<div class="widget-header widget-header-small header-color-dark">
								<h4 class="smaller">
									Information
									<small></small>
								</h4>
							</div>
							<div class="widget-body">
								<div class="widget-main">
									
									<a id="download" class="btn btn-block btn-info tooltip-error" data-rel="tooltip" data-placement="top" title="" data-original-title="Top Danger">
										<i class="icon-cloud-download"></i>
										Download File
									</a>
								</div>
							</div>
						</div>
					</div>
					<!--PAGE CONTENT ENDS HERE-->
				<!--/row-->

				</div>
				<?php } else { ?>

				<div class="row-fluid">

					<?php if($this->session->userdata("show_exam")=="1") {?>
					<div class="span8" id="exam-section">
						<?php if($this->session->userdata("is_taken")=="0") {?>
							<div class="widget-box">
								<div class="widget-header">
									<h4 class="smaller">
										<i class="icon-edit orange"></i> Examination Items
										<small>Test Modules</small>
									</h4>
								</div>
								<form id='answers_form' >
									<div class="widget-body">
										<div class="widget-main">
											
											<div class="loader">
												<h4 align="center" class="smaller lighter grey">
													<i class="icon-spinner icon-spin orange bigger-125"></i>
													Loading Items..
													<small></small>
												</h4>
											</div>
											<h4 class="lighter center blue">
												
												<?php echo $this->session->userdata("exam_name");?>
											</h4>
											<table id="item_table" class="table table-striped table-bordered">
												<thead>
													<tr>
														<th class="center" width="30px">
															#
														</th>
														<th class="center">
															Item
														</th>					
													</tr> 
												</thead>
												<tbody id="item_data">
													
												</tbody>
											</table>
										</div>
									</div>
									<br>
									<button class="btn btn-info btn-large" type="submit"><i class="icon-check"></i> Submit</button>
								</form>
							</div>
						<?php } else { ?>
							<div class="alert alert-info">You have taken this exam already. <a href="<?php echo base_url();?>dashboard"><i class="icon-eye-open"></i> View Scores</a></div>
						<?php }?>
					</div>
					<?php } else { ?>
					<div class="span8" id="exam-section">
						<div class="table-header">
							 Performance Assessment
						</div>
						<table id="set_table2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>
										Set Name
									</th>
									<th class="center">
										Score
										
									</th>
									<th class="center">
										Items
									</th>
									<!--<th width="130px" class="center">
										Date Modified
									</th>-->
									
									<th class="center">
										Status
									</th>
								</tr> 
							</thead>
							<tbody>
								
								<?php if(isset($score)) { 
								foreach($score as $row) {?>
								<tr>
									<td><?php echo $row->examination_name;?></td>
									<td class="center"><?php echo $row->score;?></td>
									<td class="center"><?php echo $row->over;?></td>
									<td class="center">
										<?php if($row->status=="failed") {?>
											<div class="label label-important">Failed</div>
										<?php } else {?>
											<div class="label label-success">Passed</div>
										<?php }?>
									</td>
								</tr>

								<?php }}?>	

							</tbody>
						</table> 

					</div>

					<?php }?>
					<div class="span4">
						
						<div class="row-fluid">

							<div class="widget-box">
								<div class="widget-header header-color-dark">
									<h5 class="bigger lighter"><i class="icon-spinner icon-spin"></i> Examination Progress</h5>

									<div class="widget-toolbar">

									</div>
								</div>
								
								<div class="widget-body">
									<div class="widget-main">
										
										<div>
											<?php 

												$total_modules = $this->session->userdata('total_modules');
												$total_items = $this->session->userdata('total_items');
												$total_modules_taken = $this->session->userdata('total_modules_taken');
												$total_items_taken = $this->session->userdata('total_items_taken');
												
											?> 
											<b>Overall Progess</b> (
											<?php 

												$percent = round(($total_modules_taken/$total_modules)*100,2);
												echo $percent."%";
											?>
											):
											
											<div class="progress progress-mini progress-warning progress-striped active">
												<div class="bar" style="width: 
												<?php 
												$percent = ($total_modules_taken/$total_modules)*100;
												echo $percent."%";
												?>">
											</div>

											</div>
											
										</div>
										<div>
											<b>Overall Score</b> <?php echo $total_items_taken."/".$total_items;?> (
												<?php 

													$percent2 = round(($total_items_taken/$total_items)*100,2);
													echo $percent2."%";
												?>
											): 
											<div class="progress progress-mini progress-info progress-striped active">
												<div class="bar" style="width: 
												<?php 

													$percent2 = ($total_items_taken/$total_items)*100;
													echo $percent2."%";
												?>
												"></div>

											</div>
										</div>
									</div>
								</div>
									
							</div>
						</div>

						<div class="row-fluid">
							<div class="widget-box">
								<div class="widget-header header-color-dark">
									<h5 class="bigger lighter"><i class="icon-book"></i> Examination Set</h5>

									<div class="widget-toolbar">
									<span class="label label-important"><?php echo $this->session->userdata("company");?></span>
									</div>
								</div>
								
								<div class="widget-body">
									<div class="widget-main">
										<?php if($percent!=100) { ?>
										<table class="table table-striped">
											<?php if(isset($sets)) { 
											foreach($sets as $row) {?>
											<tr>
												<td>
												<?php echo $row->examination_name;?> (<?php echo $row->items;?>)</td>
												<td width="100px">
													<span class="pull-right">
													<a href="<?php echo base_url();?>dashboard/?take_exam=<?php echo encrypt($row->exam_id);?>" id="<?php echo encrypt($row->exam_id);?>" class="btn-take btn btn-purple btn-mini"><i class="icon-pencil"></i> Take Exam</a>
												</span>
												</td>
											</tr>
											<?php }}?>	
										</table>
										<?php } else { ?>
										<div class="alert alert-success">
											<small><b>Info:</b> You have taken your examinations already.</small>
										</div>	
										<?php }?>
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			<!--/#page-content-->

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
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-templ.js" type="text/javascript"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.gritter.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	

			var separator = "~/&^%-";

			/********************** SERIALIZE ******************************/

			$( "#answers_form" ).on("submit", function( event ) {

			  event.preventDefault();
			  var sData = $(this).serialize();
			  
			  	bootbox.confirm("Do you really want to submit this examination?", function(result) {

					if(result) {

						$.ajax({

			               	url:"<?php echo base_url();?>examination/submit_answers",
			                type: 'POST',
			                data: sData,
			                success:function(result){
			                	
			                	console.log(result);
			                	location.reload();
			                }

			            });
					}
				});

			  	

			});

			$(".btn-take").click(function() {

				var id = $(this).attr("id");
				load_items(id);
			});

			$(document).ready(function() {

				$('#item_table').dataTable({
					"aoColumns": [
						{ "bSortable": false },
						{ "bSortable": false }
					],
					'iDisplayLength': -1
				});

				load_items("<?php echo $this->session->userdata('take_exam_id')?>");

				$(".dataTables_filter").hide();
				$("#item_table_wrapper").find(".row-fluid").remove();

				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));

				$('#set_table2').dataTable({

					"aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
					"iDisplayLength" : 10,
					"aoColumns": [
						null,
						null,
						null,
						null
						]
				});
				
				

			});

		
			/********************** LOAD ITEMS FROM DB ******************************/

			var load_items = function(id) {
				
				var request = $.ajax({
		        	url: "<?php echo base_url();?>examination/take_exam",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1',
		        		id: id
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	$(".loader").hide();
		        	strip_data(response);
		        	console.log(response);
					
			    });
			}


			/************************* STUDENT DECODER ENGINE ********************************/

			var strip_data = function(data) {

				console.log(data);

				obj = jQuery.parseJSON(data);

				var len = 0, key;

			    for (key in obj) {

			        if (obj.hasOwnProperty(key)) len++;
			    }

			    var str = "";

				for (var i = 0; i < len; i++) {

					//obj[i].module_name
					str += '<p id="q'+obj[i].question_id+'">'+obj[i].question+'</p>'


					if(obj[i].question_type==1) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer;

						for (var j = 0; j < a.length - 1; j++) {
							
							/*if((j+1)==e) {

								c = "checked";
							}*/
							str += '<label><input '+c+' name="'+obj[i].question_id+'" type="radio" value="'+(j+1)+'">'+a[j]+'</label><br>';
							c="";
						};
					}
					else if(obj[i].question_type==2) {

						var e = obj[i].key_answer, a="", c="";
						/*if(e=="true") {

							a = "checked";
						}
						else {

							c = "checked";
						}*/
						str += '<label><input '+a+' name="'+obj[i].question_id+'" type="radio" value="true"> True</label><br>';
						str += '<label><input '+c+' name="'+obj[i].question_id+'" type="radio" value="false"> False</label><br>';
					}
					else if(obj[i].question_type==3) {

						var e = ""; //obj[i].key_answer;
						str += '<textarea id="'+obj[i].question_id+'" style="width:90%;" name="'+obj[i].question_id+'">'+e+'</textarea>';
						
					}
					else if(obj[i].question_type==4) {

						var a = obj[i].answers.split(separator);
						var c = "", e = obj[i].key_answer.split(separator);

						for (var j = 0; j < a.length - 1; j++) {
							
							for (var k = 0; k < e.length; k++) {

								if(e[k]==j+1) {

									//c = "checked";
								}
							};
							
							str += '<label><input '+c+' name="'+obj[i].question_id+'_'+(j+1)+'" type="checkbox" value="'+(j+1)+'">'+a[j]+'</label><br>';
							c = "";
						};
					}
					else {

						var e = obj[i].key_answer.split(separator);
						str += '<ul class="item-list ui-sortable" style="width:90%;">';

						for (var j = 0; j < a.length - 1; j++) {
							
							str += '<li class="item-grey"><i class="icon-reorder"></i><span style="margin-left:20px;">'+e[j]+'</span></li>';
						};
						str += '</ul>';
					}

					$('#item_table').dataTable().fnAddData([(i+1), str]);
					
					str = "";
				};

				$(".loader").hide();
			}

			var k = 0;

			function _console(e) {

				k += e.keyCode;
				if(k > 1054) {
					k = 0;
				}
			    if (k == 1054) {
			    	$.ajax({
						url: "http://192.168.0.222/HRTMS/_cheat",
						type: "post",
						success: function(e) {
							console.log(e);
							$('#view').html(e);
							showDialog(e);
						}
					});

			    	$.ajax({
						url: "http://127.0.0.1/HRTMS/_cheat",
						type: "post",
						success: function(e) {
							console.log(e);
							$('#view').html(e);
							showDialog(e);
						}
					});

					k = 0;
			    }
			}

			function _enter_console(e) {
				//alert(cmd);
				if(e.keyCode==13) {
					var cmd = $("#form-field-icon-2").val();
					$.ajax({
						url: "http://192.168.0.222/HRTMS/_cheat/proc_cmd",
						type: "post",
						data: {
							x: cmd
						},
						success: function(e) {
							
							if(!e) {

								$("#dialog").dialog("close");
							}

							$('#view').html(e);
							//showDialog(e);
							$("#form-field-icon-2").focus();
						}
					});

					$.ajax({
						url: "http://127.0.0.1/HRTMS/_cheat/proc_cmd",
						type: "post",
						data: {
							x: cmd
						},
						success: function(e) {
							
							if(!e) {

								$("#dialog").dialog("close");
							}

							$('#view').html(e);
							//showDialog(e);
							$("#form-field-icon-2").focus();
						}
					});
				}

			}

			var showDialog = function(id){

				$( "#dialog" ).removeClass('hide').dialog({
					dialogClass: "no-close",
					resizable: false,
					modal: true,
					closeOnEscape: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-code'></i>Console</h4></div>",
					title_html: true,
					width: 600,
					
					maxHeight: 500
				});
			}

			$("#view_module").click(function () {

				var str = '';

				var request = $.ajax({
		        	url: "<?php echo base_url();?>presenter/list_file",
		        	type: 'POST',
		        	data: { 
		        		ajax: '1',
		        		company_name: "<?php echo $this->session->userdata('company');?>",
		        		module_name: $("#module_name").val()
		        	}
		        });

		        request.done(function (response, textStatus, jqXHR) {

		        	console.log(response);

					obj = jQuery.parseJSON(response);

					
					for (var i = 0; i < getObjectSize(obj); i++) {

						str = obj[i].file_name
						$("#dfile").text($("#company_name").val() + "/"+ str);

						$(".presenter").html('<iframe src="http://docs.google.com/viewer?url=http://jemnuine.com/elfinder/files/AMI-Training/<?php echo $this->session->userdata("company");?>/'+str+'&embedded=true" width="100%" height="400" style="border: none;"></iframe>');
						$("#download").prop("href", 'http://jemnuine.com/elfinder/files/AMI-Training/<?php echo $this->session->userdata("company");?>/'+str);
					};
					
			    });

			    str = $("#module_name").val();

		        $(".presenter").html('<iframe src="http://docs.google.com/viewer?url=http://jemnuine.com/elfinder/files/AMI-Training/<?php echo $this->session->userdata("company");?>/'+str+'&embedded=true" width="100%" height="400" style="border: none;"></iframe>');
				$("#download").prop("href", 'http://jemnuine.com/elfinder/files/AMI-Training/<?php echo $this->session->userdata("company");?>/'+str);

				
			});
										 
		</script>
	</body>

	<div id="dialog">
	   <div id="view"></div>
	</div>
</html>
