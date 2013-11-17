<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Messages - AMI</title>
<meta name="description" content="overview &amp; stats"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
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
	.ui-dialog .ui-dialog-content {
position: relative;
border: 0;
padding: .5em 1em;
background: 0;
overflow: visible;
}

</style>
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
			AMI - Training Center Administration </small>
			</a>
			<!--/.brand-->
			<ul class="nav ace-nav pull-right">
			
			
				<li class="green">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="icon-envelope-alt icon-only icon-animated-vertical"></i> Inbox
				<span class="badge badge-success unread"></span>
				</a>
				<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
					<li class="nav-header">
					<i class="icon-envelope"></i>
					<span class="unread"></span> Messages </li>
					<!--<li>
					<a href="#">
					<img src="<?php echo base_url();?>hrtms_resources/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /> <span class="msg-body">
					<span class="msg-title">
					<span class="blue">Alex:</span>
					Ciao sociis natoque penatibus et auctor ... </span>
					<span class="msg-time">
					<i class="icon-time"></i>
					<span>a moment ago</span>
					</span>
					</span>
					</a>
					</li>-->
					
					<li>
					<a href="<?php echo base_url(); ?>messenger">
					See all messages <i class="icon-arrow-right"></i>
					</a>
					</li>
				</ul>
				</li>
				<li class="light-blue user-profile">
				<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="<?php if($this->session->userdata('image_file')=='') { echo base_url().'hrtms_resources/avatars/user.jpg'; } else { echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');}?>" alt="User's Photo" /> <span id="user_info">
				<small>Welcome,</small>
				<?php echo $this->session->userdata('username');?></span>
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
			</ul>
			<!--/.ace-nav-->
		</div>
		<!--/.container-fluid-->
	</div>
	<!--/.navbar-inner-->
</div>
<div class="container-fluid" id="main-container">
	<a id="menu-toggler" href="#">
	<span></span>
	</a>
	<div id="sidebar">
		<div id="sidebar-shortcuts">
			<div id="sidebar-shortcuts-large">
				<button class="btn btn-small btn-success">
				<i class="icon-ok"></i>
				</button>
				<button class="btn btn-small btn-info">
				<i class="icon-puzzle-piece"></i>
				</button>
				<button class="btn btn-small btn-danger">
				<i class="icon-star"></i>
				</button>
				<button class="btn btn-small btn-warning">
				<i class="icon-print"></i>
				</button>
			</div>
			<div id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>
				<span class="btn btn-info"></span>
				<span class="btn btn-danger"></span>
				<span class="btn btn-warning"></span>
			</div>
		</div>
		<!--#sidebar-shortcuts-->
		<ul class="nav nav-list">
			<li>
			<a href="dashboard">
			<i class="icon-bar-chart"></i>
			<span>Control Panel</span>
			</a>
			</li>
			
		</ul>
		<!--/.nav-list-->
		<div id="sidebar-collapse">
			<i class="icon-double-angle-left"></i>
		</div>
	</div>
	<div id="main-content" class="clearfix">
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
				<i class="icon-home"></i>
				<a href="dashboard">Home</a>
				<span class="divider">
				<i class="icon-angle-right"></i>
				</span>
				</li>
				<li class="active">Messages</li>
			</ul>
			<!--.breadcrumb-->
			<div id="nav-search">
				<form class="form-search">
					<span class="input-icon">
					<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off"/>
					<i class="icon-search" id="nav-search-icon"></i>
					</span>
				</form>
			</div>
			<!--#nav-search-->
		</div>
		<div id="page-content" class="clearfix">
			
			
			<div class="row-fluid">
				<div class="span12">
					<h3 class="header smaller lighter blue">AMI Mailer </h3>
					<div class="btn-toolbar pull-right">
						<div class="btn-group">
							<button class="btn btn-small btn-purple" id="btn-compose"><i class="icon-edit"></i> Compose</button> 
						</div>
						<div class="btn-group">
							<button class="btn btn-small btn-primary"><i class="icon-refresh"></i> Refresh</button>
						</div>
						
					</div>


					<br>
					<div class="tabbable">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active">
								<a data-toggle="tab" href="#inbox">
									<i class="blue icon-envelope"></i>
									Inbox
									<span class="badge badge-important">4</span>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#sent">
									<i class="green icon-ok"></i>
									Sent
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#draft">
									<i class="purple icon-pencil"></i>
									Draft
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#trash">
									<i class="red icon-trash"></i>
									Trash
								</a>
							</li>


						</ul>

						<div class="tab-content">
							<div id="inbox" class="tab-pane in active">

								
								<!--<div class="center table-header">Inbox (# Unread Messages)</div>-->
								<div class="table-header">
									<div class="btn-group">
										<button class="btn btn-small btn-purple"><i class="icon-reply"></i> Reply</button>
									</div>
									<div class="btn-group">
										<button class="btn btn-small btn-success"><i class="icon-mail-forward"></i> Forward</button>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-info btn-small dropdown-toggle">
											Actions
											<span class="caret"></span>
										</button>

										<ul class="dropdown-menu dropdown-info pull-right">
											<li>
												<a href="#"><i class="icon-eye-open green"></i> Mark As Read</a>
											</li>

											<li>
												<a href="#"><i class="icon-eye-close blue"></i> Mark As Unread</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#"><i class="icon-flag red"></i> Flag</a>
											</li>
									
										</ul>
									</div>
									<div class="btn-group">
										<button class="btn btn-small btn-danger"><i class="icon-trash"></i> Delete</button>
									</div>
								</div>
								<table class="inbox-table table">
									<thead>
										<tr role="row">
											<th style="width: 50px;" class="center sorting_disabled" role="columnheader" colspan="1" rowspan="1"><input type="checkbox"></th>
											<th style="width: 200px;">From</th>
											<th>Messages</th>
											<th style="width: 200px;" >Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="center sorting_1" colspan="1" rowspan="1"><input type="checkbox"></td>
											<td><a><b>asdf</b></a></td>
											<td><i class="icon-flag red"></i> <a><b>asdf</b></a></td>
											<td><a><b>asdf</b></a></td>
										</tr>
										<tr>
											<td class="center sorting_1" colspan="1" rowspan="1"><input type="checkbox"></td>
											<td>asdf</td>
											<td>asdf</td>
											<td>asdf</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div id="sent" class="tab-pane">
								<p>[sent]</p>
							</div>

							<div id="draft" class="tab-pane">
								<p>[draft]</p>
							</div>

							<div id="trash" class="tab-pane">
								<p>[trash]</p>
							</div>
						</div>
					</div>
				</div>
			</div>
						
		</div>
		<!--/#page-content-->
	</div>
	<!--/#main-content-->
</div>
<!--/.fluid-container#main-container-->
<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<!--basic scripts-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>hrtms_resources/js/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
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
<script src="<?php echo base_url();?>hrtms_resources/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url();?>hrtms_resources/js/jquery.sparkline.min.js"></script>
<!--ace scripts-->

<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>

<script src="<?php echo base_url();?>hrtms_resources/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-wysiwyg.min.js"></script>

<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>


<!--inline scripts related to this page-->
<script type="text/javascript">
	
	var thewho="";

	var getObjectSize = function(obj) {
   		var len = 0, key;
	    for (key in obj) {
	        if (obj.hasOwnProperty(key)) len++;
	    }
	    return len;
	};

	


	$('.inbox-table th input:checkbox').on('click' , function(){
			var that = this;
			$(this).closest('.inbox-table').find('tr > td:first-child input:checkbox')
			.each(function(){
				this.checked = that.checked;
				$(this).closest('tr').toggleClass('selected');
			});
				
		});

	/* Load notification */
	var notify = function() {

		var form_data = {
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/notify",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			var obj = jQuery.parseJSON(response);

			console.log(obj.unread);
			
			$(".unread").text(obj.unread);
			
	    });
	};

	/* Load specific inbox messages */
	var load_messages = function() {

		var form_data = {
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/load_messages",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			$(".dialogs").html("");

			var obj = jQuery.parseJSON(response);

			var str = "";

			for (var i = 0; i < getObjectSize(obj); i++) {
				
				str += '<div class="itemdiv dialogdiv"><div class="user"><img alt="" src="hrtms_resources/avatars/user.jpg"></div>';
				str += '<div class="body"><div class="time"><i class="icon-time"></i><span class="orange"> '+obj[i].time_sent+'</span></div>';
				str += '<div class="name"><a class="userchat" id="'+obj[i].id+'" href="#">'+obj[i].full_name+'</a> <span class="label label-info arrowed arrowed-in-right">'+obj[i].permission+'</span></div>';
				str += '<div class="text">'+obj[i].message+'</div></div></div>';
				$("#thewho").text("("+thewho+")");

			};

			

			//var str = str.replace(':)','<img src="<?php echo base_url();?>hrtms_resources/images/emoticon/smile.jpg">');
        	console.log(str);

			$(".dialogs").html(str);

			$('#chat_div').slimScroll({ scrollBy: $(".dialogs").height()});

	    });
	};
	
	/* Chat Send */
	var send_message = function() {

		if($.trim($("#message").val()) == "") {

			return;
		}

		var form_data = {
        	sender_id: id,
        	receiver_id: '<?php echo $this->session->userdata("id");?>',
        	message: $("#message").val(),
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/send_message",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			$("#message").val("");	
			$(".dialogs").html("");

			$('#chat_div').slimScroll({ scrollTo: $(".dialogs").height()});

	    });
	};

	/* Trigger Send */
	$("#send_button").click(function() {

		send_message();
	});

	$('#message').keyup(function(e) {

		if(e.keyCode == 13) {

		  send_message();
		}
	});

	$(".userchat").click(function() {

		//$(".userchat").css("Font-Weight","Normal");
		$(this).css("Font-Weight","Bold");

		//alert($(this).attr('id'));

		id = $(this).attr('id');
		thewho = $(this).text();

		var form_data = {
        	sender_id: id,
        	ajax: '1'
        };

        var request = $.ajax({
        	url: "<?php echo base_url();?>messenger/switch_chat",
        	type: 'POST',
        	data: form_data
        });

        request.done(function (response, textStatus, jqXHR) {

			//alert(response);

	    });
	});


	$("#btn-compose").click(function(){

		showDialog("asd");
	});

	var showDialog = function(id){
		$( "#dialog" ).removeClass('hide').dialog({
			dialogClass: "no-close",
			resizable: false,
			modal: true,
			closeOnEscape: true,
			title: "<div class='widget-header header-color-blue'><h4 class='smaller'><i class='icon-edit'></i>New Message</h4></div>",
			title_html: true,
			width: 800,
			maxHeight: 500
		});

	}



	$(document).ready(function() {

		var id = 0;

		/* Initialize Scroll */
	    $('.slimScrollDiv').slimScroll({
	        height: '400px',
	        size: '10px',
	        alwaysVisible: true,
	        start: 'top'
	    });

	    /* Update Per Second 
	    var interval = setInterval(function() { 

	    	load_messages();

		}, 500);*/

	    notify();

	    $(".inbox-table").dataTable({

	    	"aoColumns": [
				{ "bSortable": false },
				{ "bSortable": false },
				{ "bSortable": false },
				{ "bSortable": false }
			]
	    });

	    $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
			_title: function(title) {
				var $title = this.options.title || '&nbsp;'
				if( ("title_html" in this.options) && this.options.title_html == true )
					title.html($title);
				else title.text($title);
			}
		}));

	    $("#dialog").hide();

		//$('#editor1').ace_wysiwyg();
		

	});

	


</script>
</body>
<div id="dialog">
   <div id="view">
   		
   </div>
</div>
</html>