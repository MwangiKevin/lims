<div class="center-content">
	<div>
		<ul class="breadcrumb">
			<li>
				<a href="<?php echo base_url().'home' ?>"id='home'><i class="icon-home"></i><strong style="color:#FFF">Home</strong></a>
				<span class="divider"></span>
			</li>
			<li class="active" id="actual_page"><?php echo $actual_page; ?></li>
		</ul>
	</div>
	<?php
	echo $tables;
	?>
</div>


<!--View User-->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">View User</h4>
      </div>
      <div class="modal-body">
       User
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>