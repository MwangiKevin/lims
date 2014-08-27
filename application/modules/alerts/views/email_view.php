<h4 class="lighter">
    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
    <a href="#" data-toggle="modal" class="pink">Email Section </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<div class="row my-infobox" id="email">	
<a href="javascript:void(null);" onclick="write_mail()"> to be removed</a>
	<div style="border-radius: 10px; padding: 7px; float: right">

		<a href="javascript:void(null);" onclick="write_mail()">
			<button name="write_mail" class="btn btn-primary btn-minii"><span class="menu-text" style="color:#FFF;"><i class="menu-icon fa fa-pencil-square-o"></i>Compose Mail</span></button>
		</a>	
	</div><!--End of write_mail-->

	<div class="tabbable span12" style="margin-top:5px;" id="tabs">
		<ul class="nav nav-tabs">
			<li id ="tabInbox" class="active"><a href="#tabs1-Inbox" data-toggle="tab">Inbox</a></li>
			<li id ="tabSent"><a href="#tabs1-Sent" data-toggle="tab">Sent Mail</a></li>
			
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="tabs1-Inbox" >
				<div class="row my-infobox">
					<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th colspan="7">
								<div class="widget-header widget-header-blue widget-header-flat">
									<center>
									<h4 class="widget-title lighter">Indox</h4>				
									</center>
								</div>
								</th>
							</tr>
							<div class="widget-body">
								<div class="widget-main">
									<tr>
										<th>Sender</th>
										<th>Subject</th>
										<th>Message</th>
										<th>Date</th>
									</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php //echo $totalmsg;?></td>
											<td><?php //echo $quotal ?></td>
											<td>******</td>
											<td>******</td>
										</tr>
									</tbody>
								</div>
							</div>						
					</table>
				</div>
			</div><!--End of inbox-->

			<div class="tab-pane" id="tabs1-Sent" >
				<div class="row my-infoox">
					<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th colspan="7">
								<div class="widget-header widget-header-blue widget-header-flat">
									<center>
									<h4 class="widget-title lighter">Out Box</h4>				
									</center>
								</div>
								</th>
							</tr>
							<div class="widget-body">
								<div class="widget-main">
										<tr>
											<th rowspan="2">#</th>
											<th rowspan="2">Recipient</th>
											<th colspan="2" rowspan="2">Subject</th>
											<th rowspan="2">Date</th>
											<th colspan="2"><center>Actoins</center></th>
										</tr>
										<tr>
											<th><center>Read</center></th>
											<th><center>Delete</center></th>
										</tr>
									</thead>
									<tbody>
								
									<?php if ($sent_emails != NULL) 
										{
											$i=1;
											foreach ($sent_emails as $sent) {
									?>
										<tr id="tr_<?php echo $sent["id"]; ?>">
												<td><?php echo $i;?></td>
												<td><?php echo $sent["recipients"];?></td>
												<td colspan="2"><?php echo $sent["subject"];?></td>
												<td><?php echo $sent["sent_date"];?></td>
												<td><center><a href="javascript:void(null);" onclick="show_email('<?php echo $sent["id"]?>', '<?php echo $sent["subject"]?>', '<?php echo $sent["message"]?>', '<?php echo $sent["recipients"]?>', '<?php echo $sent["sent_date"]?>')"><i class="menu-icon fa fa-pencil-square-o"></i></a></center></td>
												<td><center><a class="red" title ="Delete this email" style="border-radius:1px;" href="<?php echo base_url('alerts/email/remove_email/'.$sent["id"]);?>"><i class="ace-icon fa fa-trash-o bigger-130"></i></a></center></td>
										</tr>		
									<?php	
										$i++; }
										}else 
										{
									?>	
										<tr>
											<td colspan="5"><center>You have not sent any email.</center></td>
										</tr>	
									<?php }
									?>
										
									</tbody>
								
							</div>
						</div>
					</table>
				</div>
			</div><!--End of sent-->

		</div><!--End of tab-content-->

	</div><!--End of tabs-->

</div><!--email-->

<div class="modal fade" id="writemail">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<div class="widget-header widget-header-blue widget-header-flat">
						<h4 class="widget-title lighter">Send Email</h4>				
					</div>
				</h4>
			</div><!--End of modal-header-->
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open('alerts/email/send_email');?>
				<div class="widget-box">
					<h4 class="lighter">
					    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer green"></i>
					    <a href="#" data-toggle="modal" class="green"> Write email </a>
					</h4>
				    
					<div class="hr hr-18 hr-single dotted"></div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="row my-infobox">
								<div class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 40%;">To:</span>
									<!--<input name="test_reason[]" id="test_reason" class="form-control test_reason"  type="text">-->
									<input required id="email_to" name="recepients" class="form-control email_to"  />
								</div>	

								<div class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 40%;">Subject:</span>
									<input required id="subject" name="subject" class="textfield form-control" />	
								</div>	
									            					
								<div id="messagediv" class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 20%;">Message:</span>
									<textarea required id="message" name="message" cols="50" rows="5" class="textfield form-control"></textarea>
									<!--<input required id="message" name = "message" class="textfield form-control"  readonly />-->
								</div>	          
																		
								<div class="modal-footer" style="height:11px;padding-top:11px;">	
									<div class="wizard-actions" style="float:right;">
										<button type="submit" class="btn btn-success btn-next btn-sm" name="save" >
											Send Email
											<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
										</button>
										<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-xs btn-danger bigger-120">
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
											Discard
										</button>
									</div>							
									
								</div> 
							</div><!--End of my-infobox-->	
						</div><!--End of widget-main-->	
					</div><!--End of widget-body-->		
				</div><!--End of widget-box-->
				</form>

				<div class="modal-footer" style="height:4px;padding-top:11px;">
					<?php echo $this->config->item("copyrights");?>
				</div> 
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="readingDiv">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<div class="widget-header widget-header-blue widget-header-flat">
						<h4 class="widget-title lighter">View Sent Email</h4>				
					</div>
				</h4>
			</div><!--End of modal-header-->
			<div class="modal-body" style="padding-bottom:0px;">	
												    
					<div class="hr hr-18 hr-single dotted"></div>

					<div class="row my-infobox">
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Recipients:</span>
							<input required id="showrecipients" name="recepients" class="textfield form-control" readonly/>	
						</div>	

						<div id="equipmentdiv" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 20%;">Subject:</span>
							<input required id="showsubject" name = "subject" class="textfield form-control"  readonly />
							<span class="input-group-addon" style="width: 20%;">Date:</span>
							<input required id="showdate" name = "date" class="textfield form-control"  readonly />
			            </div>	 
							            					
						<div id="messagediv" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 20%;">Message:</span>
							<textarea required id="showmessage" name="message" cols="50" rows="5" class="textfield form-control" readonly></textarea>
							<!--<input required id="message" name = "message" class="textfield form-control"  readonly />-->
						</div>
					</div>	          
															
					<div class="modal-footer" style="height:11px;padding-top:11px;">								
						<div class="" style="padding:7px;">
							<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-default btn-minii"><i class="ace-icon fa fa-trash-o bigger-120"></i>Discard</button>
						</div>
					</div> 
				

				<div class="modal-footer" style="height:4px;padding-top:11px;">
					<?php echo $this->config->item("copyrights");?>
				</div> 
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("email_view_footer.php"); ?>