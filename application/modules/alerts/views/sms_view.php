<h4 class="lighter">
    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
    <a href="#" data-toggle="modal" class="pink">Messaging Section </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<div class="row my-infobox" id="sms">
	<div class="widget-box">
		<div class="widget-header widget-header-blue widget-header-flat">
				<h4 class="widget-title lighter">Send Message</h4>				
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="row my-infobox">
				<?php echo form_open('alerts/sms/send_message');?>
					<div class="input-group my-input-group " style="width:33%;z-index:20;">
						<span class="input-group-addon my-input-group-caption">
							Telephone
						</span>
						<input required name="telephone" id="telephone" class="form-control " style="" type="text" />	<!--facility-select-->						
					</div>
					<br />
					<div class="input-group my-input-group " style="width:66%;z-index:20;">
						<span class="input-group-addon my-input-group-caption">
							Message
						</span>
						<textarea name="message" id="message" class="form-control" style="height: 50px;width: 150%;" type="text" ></textarea>
					</div>
					<br />
					<div class="wizard-actions" style="float:left;">
						<button type="submit" class="btn btn-success btn-next btn-sm" >
							Send Message
							<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
						</button>
					</div>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>	
</div>