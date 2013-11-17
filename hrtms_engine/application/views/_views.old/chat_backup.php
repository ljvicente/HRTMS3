<!--/.page-header-->
			<div class="row-fluid">
				<!--PAGE CONTENT STARTS HERE-->
				<div class="span8">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small header-color-blue">
							<h4 class="smaller">
							<i class="icon-comment blue"></i>
							Conversation <span id="thewho"></span> <small>AMI Messenger</small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								
								<!-- LOAD MESSAGES HERE -->
								<div class="slimScrollDiv">
									<div id="chat_div" class="dialogs">
										<!--<?php if(isset($records)) : foreach($records as $row) : ?>
								
										
										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="" src="hrtms_resources/avatars/user.jpg">
											</div>
											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="orange"><?php echo $row->time_sent?></span>
												</div>
												<div class="name">
													<a href="#"><?php echo $row->full_name?></a>
													<span class="label label-info arrowed arrowed-in-right">
														<?php echo $row->permission?>
													</span>
												</div>
												<div class="text">
													<?php echo $row->message?>
												</div>
												
											</div>
										</div>
										<?php endforeach;?>
										<?php endif; ?>-->
									</div>

									<div class="slimScrollBar ui-draggable">
									</div>
									<div class="slimScrollRail">
									</div>
									
								</div>

								<!-- MESSAGES ENDS HERE -->
								
									<div class="form-actions input-append">
										<input placeholder="Type your message here..." type="text" style="width:85%" name="message" id="message">

										<button class="btn btn-small btn-info no-radius" id="send_button">
										<i class="icon-share-alt"></i>
										<span class="hidden-phone">Send</span>
										</button>
									</div>
								
							</div>
							<!--/widget-main-->
						</div>
						<!--/widget-body-->
					</div>
				</div>
				<div class="span4">
					<div class="widget-box" style="height: 520px">
						<div class="widget-header widget-header-small">
							<h4 class="smaller">
							AMI Staffs <small></small>
							</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main">
								<div class="slimScrollDiv">
									<!--<table class="table">-->

										<?php if(isset($user_records)) : foreach($user_records as $row) : ?>
										<?php if ($row->id == $this->session->userdata('id')) continue;?>
										<!--<tr class="chat_user">
											<td>-->
												<a style="cursor: pointer;" class="userchat" id="<?php echo $row->id?>">
													<img class="nav-user-photo" src="hrtms_resources/avatars/user.jpg" style="width: 30px; margin-right: 10px;"><?php echo $row->first_name?> <?php echo $row->last_name?>
													<i class="icon-circle pull-right" style="color:#387038;"></i>
												</a><br>
											<!--</td>
										</tr>-->
										<?php endforeach;?>
										<?php endif;?>
										
									</table>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!--PAGE CONTENT ENDS HERE-->
			</div>
			<!--/row-->
