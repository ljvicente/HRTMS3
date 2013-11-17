<?php if($this->session->userdata('permission') != 'Client') { redirect(base_url() . 'index.php/login');} ?>
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
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/dropzone.css" />
		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/daterangepicker.css" />
		


		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		<style type="text/css">
		.tags{display:inline-block;padding:4px 6px;color:#777;vertical-align:middle;background-color:#FFF;border:1px solid #d5d5d5;width:70%}
		</style>
	</head>

	<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - HRTMS Client Portal
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						

						<li class="green">
							<a href="<?php echo base_url(); ?>messenger">
								<i class="icon-envelope-alt icon-only"></i> Inbox
								<span class="badge badge-success"></span>
							</a>
						</li>

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

				#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="active">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Manpower</span>
						</a>
					</li>
					<li class="">
						<a href="<?php echo base_url();?>Profile">
							<i class="icon-user"></i>
							<span>Profile</span>
						</a>
					</li>
					<!--<li>
						<a href="#">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="#">
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
				

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Manpower <small>( <?php echo $this->session->userdata('user_id');?> )</small>
							<small>
								<i class="icon-double-angle-right"></i>
								Dashboard
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
						<div class="span12 widget-container-span ui-sortable">
							
							<?php if(isset($record)) : foreach($record as $row) : ?>
									
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>
									<p>
										<strong>
											<i class="icon-ok"></i>
											Thank You!
										</strong>
										Your Request (<?php echo $row->request_id;//echo "AMI-REQ-".substr(date("Y"),-2)."".sprintf("%04d", $row->request_id);?>) has been successfully confirmed!
									</p>
									<p>
										<button id="<?php echo $row->request_id;?>" class="btn-k btn btn-small btn-success">OK, never show this again</button>
										<button class="btn btn-warning btn-small">Hide</button>
									</p>
								</div>
				          			
							<?php endforeach;?>
							<?php endif; ?>
							
							<div class="widget-box">
								<div class="widget-header">
									<h5 class="smaller"> </h5>

									<div class="widget-toolbar no-border">
										<ul class="nav nav-tabs" id="myTab">
											
											<li class="active">
												<a data-toggle="tab" href="#profile"><i class="icon-phone"></i> Request Manpower</a>
											</li>
											<li>
												<a data-toggle="tab" href="#profile3"><i class="icon-upload-alt"></i> Upload Modules</a>
											</li>
											<li>
												<a data-toggle="tab" href="#profile2"><i class="icon-phone"></i> Deployment Records</a>
											</li>
											
										</ul>
									</div>
								</div>

								<div class="widget-body">
									<div class="widget-main padding-6">
										<div class="tab-content">
											

											<div id="profile" class="tab-pane in active">

												<div class="row-fluid">
													<div class="span12"> 
														<div id="infoMessage" align=""><?php
												              $message = $this->session->flashdata('request_sent');
												              if ($message == null){}
												              else{echo $message;}
												              ?>         
												              <br>
										 				</div>
														<div class="alert alert-info">
															(<span class="required">*</span>) Required Field
														</div>
														<div id="summary" class="center"></div><br>
														<form action="<?php echo base_url();?>client/send_request" method="POST" id="request_form">
																<label class="control-label" for=""><h3>Manpower Information</h3> </label>
															<!-- Quoted Number of Manpower -->
															<div class="control-group"> 
																<label class="control-label" for="no_of_manpower">Quoted Number of Manpower (<span class="required">*</span>):</label>

																<div class="controls">
																	<input  type="text" class="input-mini spinner-input" id="no_of_manpower" name="no_of_manpower" placeholder="#">
																</div>  
															<!-- Quoted Number of Manpower -->
															</div>
															<!-- Date Range -->
															<div class="control-group">
																<label class="control-label" for="date_range">Date Requested (<span class="required">*</span>):</label>
																<div class="controls">					
																	<div class="row-fluid input-prepend">
																		<span class="add-on">
																			<i class="icon-calendar"></i> 
																		</span>

																		<input class="span3 input-date-range" type="text" name="date_range_picker" id="date_range" readonly="" />
																	</div>
																</div>
															</div>

															<!-- Date Range -->										
														 		 
															<!-- Employment Type -->
															<div class="control-group">
																<label class="control-label" for="emp_type">Type of Employemt (<span class="required">*</span>):</label>
																	
																<div class="controls">
																	<select name="emp_type" id="emp_type">
																		<option selected disabled value="">Select Type</option>
																		<option value="1">Contractual</option>
																		<option value="2">Regular</option>
																		<option value="3">Probation</option>
																	</select>
																</div>
															</div> 
															<!-- Employment Type -->

															<!-- Designated Department -->
															<div class="control-group">
																<label class="control-label" for="emp_department">Designate Department:</label>
																	
																<div class="controls">
																	<input name="emp_department" type="text" id="emp_department">
																</div>
															</div>

															<!-- Designated Department -->
																<label class="control-label" for=""><h3>Applicant Requirements</h3></label>
															<!-- Employee Gender -->
															<div class="control-group">
																<label class="control-label" for="emp_gender">Employee Gender (<span class="required">*</span>):</label>
																	
																<div class="controls">
																	<div class="radio">
																		<label>
																			<input name="emp_gender" type="radio" class="ace" value="1">
																			<span class="lbl"> Male</span>
																		</label>
																	</div>
																	<div class="radio">
																		<label>
																			<input name="emp_gender" type="radio" class="ace" value="2">
																			<span class="lbl"> Female</span>
																		</label>
																	</div>
																	<div class="radio">
																		<label>
																			<input name="emp_gender" type="radio" class="ace" value="3">
																			<span class="lbl"> Both</span>
																		</label>
																	</div>
																</div>
															</div>
															<!-- Employee Gender -->
														
															<!-- Remarks -->
															<div class="control-group">
																<label class="control-label" for="remarks">Remarks: <small class="muted"></small></label>

																<div class="controls">
																	<input  name="remarks" placeholder="Press Enter for next input" id="remarks">
																</div>
															</div>
															<!-- Remarks -->
																<br>
															<!-- Requirements -->
															<div class="control-group">
																<label class="control-label" for="documents_req">Additional Documents: 
																<small class="muted"></small>
																<span class="help-button ace-popover" data-trigger="hover" data-placement="right" data-content="Registraton slip, Resume, Diploma, Medical Result, Form - 137 OR 
																Transcript of Record" title="" data-original-title="AMI requirements by default">?</span>
																</label>

																<div class="controls">
																	<input name="documents_req" placeholder="Press Enter for next input" id="documents_req">
																</div>
															</div>
															<!-- Requirements -->	
															<div class="control-group">
																<div class="controls">
																	<label>
																		<input name="agree" name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
																		<span class="lbl"> We have agreed upon the <a href="#TAC">Terms and Condition</a> upon requesting.(<span class="required">*</span>)</span>
																		
																	</label>
																</div>
															</div>
																<p></p>
														<!-- 		<div class="controls">
																	
																	<input id="submit" type="submit" value="Send Request" class="btn btn-success btn-small">
																</div> -->
															<div class="form-actions">
										                        <button type="submit" class="btn btn-success btn-small">Submit</button>
										                        <button type="reset" class="btn btn-danger btn-small">Reset</button>
										                    </div>
															
														</form>
													</div>

												</div>
												
											</div>

											<div id="profile3" class="tab-pane">

												<iframe id="browser" width="100%" height="425px" frameborder="0"></iframe>

											</div>

											<div id="profile2" class="tab-pane">

												<div class="row-fluid">
													
													<table class="table table-striped table-bordered table-hover">

											          	<thead>
											          		<tr>
											          			<th>Report ID</th>
											          			<th>Name of Report</th>
											          			<th>Date Accomplished</th>
											          			<th>&nbsp;</th>
											          		</tr>
											          	</thead>
											          	<tbody>
											          		<tr>
											          			<td>AMI-REQ13-0001</td>
											          			<td>Candidate Information</td>
											          			<td>2013-02-03</td>
											          			<td><button class="btn btn-info btn-mini"><i class="icon-eye-open"></i> View Report</button></td>
											          		</tr>
											          		<tr>
											          			<td>AMI-REQ13-0002</td>
											          			<td>Gradesheet of Candidates</td>
											          			<td>2013-01-14</td>
											          			<td><button class="btn btn-info btn-mini"><i class="icon-eye-open"></i> View Report</button></td>
											          		</tr>
											          	</tbody>
											          </table>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<p></p>
						<div class="row-fluid">
							<div class="span12">
								
								
								<div class="widget-box">
									<div class="widget-header">
										<h4 id="TAC" class="smaller">Terms And Conditions</h4>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="content-text">
												<dl>
												<dt>1) DEFINITIONS</dt>
												<dd>“Goods” means any goods and/or services provided by the Company as ordered by the Client</dd>
												<dd>“ Company” means Sample Answers Ltd. incorporating Prime Prospects.</dd>
												<dd>“ Client” means the person, firm or company placing an order with the Company.</dd>
												<dt>2) APPLICATION</dt>
												<dd>These terms and conditions apply to any provision of services or materials by the Company to the Client.</dd>
												<dt>3) FORMATION OF CONTRACT</dt>
												<dd>All Goods sold by the Company are sold subject to the Company’s standard terms and conditions (as detailed below) which form part of the Client’s contract with the Company.  Terms and conditions on the Client’s order form or other similar document shall not be binding on the Company. </dd>
												<dt>4) QUOTATIONS</dt>
												<dd>The prices, quantities and delivery time stated in any quotation are not binding on the Company.  They are commercial estimates only which the Company will make reasonable efforts to achieve. </dd>
												<dt>5) ORDERS</dt>
												<dd>5.1 Orders will be deemed to have been placed when an email confirmation has been received from a responsible executive of the client company.<p></p>
												</dd><dd>5.2 For email invitations, online fulfilment projects and direct marketing files (as provided by Prime Prospects) it is a requirement of the Company, that the email piece, online form or mail piece shall be approved by the company before an order can be confirmed and any data despatched. </dd>
												<dt>6)  RIGHT TO SUB CONTRACT</dt>
												<dd>Unless otherwise agreed the Company shall be entitled to sub-contract all or any part of the work. </dd>
												<dt>7) TIMETABLE</dt>
												<dd>The Company will use its best endeavours to supply the services or materials within the quoted time (normally within a maximum of seven days from order or otherwise as agreed) but time will not be of the essence within the contract. </dd>
												<dt>8 ) COPYRIGHT</dt>
												<dd>The Client acknowledges that the rights to the Goods are owned by the Company and that the Goods are protected by United Kingdom copyright laws, international treaty provisions and all other applicable national laws. </dd>
												<dt>9) RISK OF LOSS</dt>
												<dd>The risk of loss or damage to the Goods shall pass to the Client upon delivery of the Goods. </dd>
												<dt>10) PAYMENTS</dt>
												<dd>10.1 New clients or other clients out of terms may be expected to pay in advance for their services.<p></p>
												</dd><dd>10.2 All other invoices issued by the Company shall be paid by the Client within thirty (30) days of the date of invoice unless otherwise agreed in writing by the Company.  In the event of late payment, the Company may charge interest on the amount outstanding before and after judgement at the rate of five (5) percent above the Base Rate of Barclays Bank plc in force from the due date until the date of payment.  In addition, invoices unpaid for more than 60 days after the invoice date will incur a surcharge of either £30 or 5% of the outstanding amount, whichever sum is greater. </dd>
												<dd>10.3 If any amount of an invoice is disputed then the Client shall inform the Company of the grounds for such dispute within seven days of delivery of the goods and shall pay to the Company the value of the invoice less the disputed amount in accordance with these payment terms.   Once settlement of the dispute has been agreed, any sum then outstanding shall also be payable in accordance with these payment terms.  </dd>
												<dd>10.4 The Company reserves the right to increase a quoted fee in the event that the client requests a variation to the work agreed. </dd>
												<dt>11) CANCELLATION</dt>
												<p>In view of the nature of the service, any order – once confirmed by the Company – is not cancellable.  Cancellation of the Order by the Client will only be accepted on condition that any costs, charges and expenses already incurred, including any charges that will be levied by a sub-contractor on account of their expenses, work or cancellation conditions will be reimbursed to the Company forthwith. 
												</p><dt>12) DELIVERY</dt>
												<dd>12.1 The majority of services as supplied by the company are despatched electronically by email and shall be deemed as having been delivered when the email has been opened by the client. </dd>
												<dd>12.2 The Company reserves the right to substitute conventional delivery methods without notice or penalty should electronic despatch prove inconvenient; in which case delivery by the Company will be deemed to have taken place when the materials are handed to the custody of the Client at his premises or to a deputed messenger or courier when posted.  The Company will be entitled to charge the Client for any expenses of delivery other than normal postage charges.</dd>
												<dt>13) NOTICE</dt>
												<dd>All written notices to be served on or given to the client shall be sent or delivered to the client’s principle place of business and shall be treated as having been given upon receipt. </dd>
												<dt>14) LOSS OR DAMAGE TO SUPPLIES</dt>
												<dd>The Company will take all reasonable steps to ensure the protection from loss, damage or destruction of the services or materials it supplies to the Client (or which may be received from the Client). </dd>
												<dt>15) USAGE OF THE SERVICES OR MATERIALS  </dt>
												<dd>Unless otherwise agreed in writing by the Company, the Client (and their clients) shall be entitled to use the services and materials provided as follows: .</dd>
												<dd>15.1 All files of Consumer and Business data records are for single use and for use within a period of not more than 6 months from date of delivery. </dd>
												<dd>15.2 Files of Samples of Consumer or Businesses data records are provided solely for the purpose of conducting market research to be carried out in conformity with the recognised ESOMAR/MRS Code of Conduct of the market research industry.  The Client shall not otherwise be entitled to store, or to pass on (whether to his/her client or other person) or make any other use of these services and materials. </dd>
												<dd>15.3 The Client shall bear responsibility for ensuring that all usage of information contained within any service as provided by Sample Answers and Prime Prospects is in accordance with, and does not contravene, any Data Protection or other laws, regulations or other trade customs and practices.  The Company bears no liability for any omissions or faults in these respects. </dd>
												<dt>16) CONFIDENTIALITY </dt>
												<dd>Both parties shall maintain strict confidence and shall not disclose to any third party any information or material relating to the other or the other’s business which comes into that party’s possession and shall not use such information and material without written permission by the other party. This provision shall not, however, apply to information or material which is, or becomes, public knowledge by means other than by breach by a party to this clause. <p></p>
												</dd><dt>17) EMPLOYMENT OF PERSONNEL</dt>
												<dd>Subject to the prior written consent of the Company the Client shall not induce to employ, whether as an employee, agent, partner or consultant, any employee of the Company directly associated with delivery of the Goods. </dd>
												<dt>18) WARRANTY</dt>
												<dd>18.1 The Company warrants that it has the right to provide the Goods but otherwise the Goods are provided on an “as-is” basis without warranty of any kind, express or implied, oral or written including, without limitation, the implied conditions of merchantable quality, fitness for purpose and description, all of which are specifically and unreservedly excluded.  In particular, but without limitation, no warranty is given that the Goods are suitable for the purposes intended by the Client. </dd>
												<dd>18.2 The Company warrants that the Goods will be supplied using reasonable care and skill.  The Company does not warrant that the Goods supplied are error-free, accurate or complete. </dd>
												<dd>18.3 Both parties warrant that they are registered under the Data Protection Act in respect of the collection, processing and use of the Goods.  Each party will comply with the Act including but not limited to its obligations in respect of any personal data which it may supply to or receive from the other party. </dd>
												<dd>18.4 The Client acknowledges that the Company is required to uphold at all times, in letter and in spirit, the British Codes of Advertising and Sales Promotion. </dd>
												<dt>19) LIMITATION OF LIABILITY</dt>
												<dd>19.1 The Company shall not be liable for any claim arising out of the performance, non-performance, delay in delivery of or defect in the Goods nor for any special, indirect, economic or consequential loss or damage howsoever arising or howsoever caused (including loss of profit or loss of revenue) whether from negligence or otherwise in connection with the supply, functioning or use of the Goods.  Any liability of the Company shall in any event be limited to the licence fees paid by the Client in the year in which the event of default arises. </dd>
												<dd>19.2 Nothing herein shall limit either party’s liability for death or personal injury arising from the proven negligence by itself or its employees or agents. </dd>
												<dd>19.3 The Client shall fully indemnify the Company against any liability to third parties arising out of the Client’s use of the Goods. </dd>
												<dt>20)  FORCE MAJEURE</dt>
												<dd>The Company will not be liable to the Client for any loss or damage suffered by the Client as a direct result of the Company, its sub-contractors or the list-owner from whom the sample or other service or material is derived being unable to perform the Contract in the way agreed by reason of cause beyond its control including Act of God, accident, war, riot, lockout, strike, flood, fire, power failure, breakdown of plant or machinery, delay in transit, postal delay, or any other unexpected or exceptional cause or circumstance. </dd>
												<dt>21) GOVERNING LAW</dt>
												<dd>These Terms of Trading shall be subject to and construed in accordance with the laws of England and the parties hereby submit to the exclusive jurisdiction of the English courts.</dd>
												</dl>
														    	
														    
														    			    		
												<div class="clear"></div>
																			
															
														</div>
										</div>
									</div>
								</div>
													
							</div>
						</div>
						<!--/row-->
						


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
		<script src="<?php echo base_url();?>hrtms_resources/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.autosize-min.js"></script>	
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap-tag.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/date-time/bootstrap-datepicker.min.js"></script>
		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/dropzone.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>



		<!--inline scripts related to this page-->

		<script type="text/javascript">	

			$(document).ready(function() {
				
				var request = $.ajax({
		        	url: "<?php echo base_url();?>hrtms/module_init",
		        	type: 'POST',
		        	data: { ajax: '1' }
		        });

		        request.done(function (response, textStatus, jqXHR) {

					$("#browser").attr("src", response);

			    });

			    $.mask.definitions['~']='[+-]';
				
				$('.input-date-range').mask('99/99/9999 - 99/99/9999');

				$('.ace-tooltip').tooltip();
				$('.ace-popover').popover();

				/*$('#no_of_manpower').ace_spinner({value:0,min:0,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					alert(this.value)
				});*/

		        var tag_input = $('#remarks');	
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#skill').autosize({append: "\n"});
				}


		        var tag_input2 = $('#documents_req');	
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input2.tag(
					  {
						placeholder:tag_input2.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input2.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#skill').autosize({append: "\n"});
				}

			/*	$('#date_range').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});*/ 

				var nowTemp = new Date();
				var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

				$('input[name="date_range_picker"]').daterangepicker({ 
				    //format: 'YYYY-MM-DD',
				    //startDate: '2013-01-01',
				    //endDate: '2013-12-31'
				    minDate: now,
				    showDropdowns:true 
				  },
				  function(start, end) {
				   //alert('A date range was chosen: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				  }
				);
			
				$('.date-picker').datepicker().next().on(ace.click_event, function() {
					$(this).prev().focus();
				});

				$('.date-picker').datepicker({
				    onSelect: function(dateText, inst) {
				      $("#date_requested").val(dateText);
					}
				});

				$('.btn-k').click(function() {

					$.ajax({
						url: "client/hide_confirmed",
						type: "post",
						data: {
							id: $(this).attr("id")
						},
						success: function(e) {

							console.log(e);
							location.reload();
						}
					});
				});	
				var selectedTab = localStorage['selectedTab'];
				if (selectedTab) $('#myTab a[href="'+selectedTab+'"]').tab('show');

				$('a[data-toggle="tab"]').on('shown', function (e) {
				   localStorage['selectedTab']=$(e.target).attr('href');
				});		

				jQuery.validator.addMethod("phone", function (value, element) {
		          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
		        }, "Enter a valid phone number.");
		       	
		       	$.validator.addMethod("checkTags", function(value) {
				        return ($("#tagsx_tagsinput").find(".tag").length > 0);
				    });
				jQuery.validator.setDefaults({
		          debug: true,
		          //success: "valid"
		        });

		        $('#request_form').validate({
		          ignore: [],
		          errorElement: 'span',
		          errorClass: 'help-inline',
		          focusInvalid: false,
		          rules: {
		            no_of_manpower: {
		              required: true,
		              digits: true,
		              min:1,
		              max: 500
		            },
		            emp_type: 'required',
		            date_range_picker:'required',
		            emp_department: {
		               required:true,	
		               minlength:2,   
		            },
		            remarks: {
		            	required: true,
		            }, 
		            emp_gender: 'required',
		            agree: 'required'
		          },
		        
		          messages: {
		            no_of_manpower: {
		              //numeric : jQuery.format("Invalid "),
		            },
		            emp_department: {
		              minlength: jQuery.format("At least {0} characters required."),
		            },
		            emp_type: "Please choose Type of Employment",
		            emp_gender: "Please choose Employee Gender",
		            agree: "Please accept our Terms and Conditions"
		          },
		      
		          invalidHandler: function (event, validator) { //display error alert on form submit   
		            $('.alert-error', $('.login-form')).show();
		          },
		      
		          highlight: function (e) {
		            $(e).closest('.control-group').removeClass('success').addClass('error');
		          },
		      
		          success: function (e) {
		            $(e).closest('.control-group').removeClass('error').addClass('success');
		            $(e).remove();
		          },
		      
		          errorPlacement: function (error, element) {

		            if(element.is(':checkbox') || element.is(':radio')) {
		              var controls = element.closest('.controls');
		              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
		              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
		            }
		            else if(element.is('.select2')) {
		              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
		            }
		            else if(element.is('.chzn-select')) {
		              error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
		            }
		            else error.insertAfter(element);
		          },
		          showErrors: function(errorMap, errorList) {
		            $("#summary").html("<div class=\"alert alert-error\">Your form contains "
		              + this.numberOfInvalids()
		              + " errors, see details below.</div>");
		              this.defaultShowErrors();
		          },
		          submitHandler: function (form) {
		            //alert('SUBMIT FORM');
		            //alert($('input[name="date_range_picker"]').val());
		            form.submit();

		          },
		          invalidHandler: function (form) {
		            
		          },

		        });
						

			}); 
	 
		</script>
	</body>
</html>
