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
			<li id ="tabSent"><a href="#tabs1-Sent" data-toggle="tab">Sent</a></li>
			<li id ="tabDraft"><a href="#tabs1-Drafts" data-toggle="tab">Draft</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="tabs1-Inbox" >
				<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Indox</th>
							<th>******</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>******</td>
							<td>******</td>
						</tr>
					</tbody>
				</table>
			</div><!--End of inbox-->

			<div class="tab-pane" id="tabs1-Sent" >
				<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Out box</th>
							<th>******</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>******</td>
							<td>******</td>
						</tr>
					</tbody>
				</table>
			</div><!--End of sent-->

			<div class="tab-pane" id="tabs1-Drafts">
				<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Draft Box</th>
							<th>******</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>******</td>
							<td>******</td>
						</tr>
					</tbody>
				</table>
			</div><!--End of draft-->

		</div><!--End of tab-content-->

	</div><!--End of tabs-->

</div><!--email-->

<div class="modal fade" id="writemail">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
				    <a href="#" data-toggle="modal" class="pink">Send Email </a>
				</h4>
			</div><!--End of modal-header-->
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open('alerts/email/send_email');?>
					<h4 class="lighter">
					    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer green"></i>
					    <a href="#" data-toggle="modal" class="green"> Write email </a>
					</h4>
				    
					<div class="hr hr-18 hr-single dotted"></div>

					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">To:</span>
						<input required id="recepients" name="recepients" class="textfield form-control" />	
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
						<div class="" style="padding:7px;">
							<button name="save" type="submit" class="btn btn-primary btn-mini"><i class="glyphicon glyphicon-save"></i>Send</button>
							<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
						</div>
					</div> 
				</form>

				<div class="modal-footer" style="height:4px;padding-top:11px;">
					<?php echo $this->config->item("copyrights");?>
				</div> 
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("email_view_footer.php"); ?>