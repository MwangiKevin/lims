<a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<i class="ace-icon fa fa-tasks"></i>
	<span class="badge badge-success"><?php echo sizeof($batches);?></span>
</a>

<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
	<li class="dropdown-header">
		<i class="ace-icon fa fa-check"></i>
		<?php echo sizeof($batches);?> Batch/es to complete
	</li>
	<?php $this->load->view("batches_view");?>
	
	<li class="dropdown-footer">
		<a href="<?php echo base_url('eid/requisition/samples');?>">
			See tasks with details
			<i class="ace-icon fa fa-arrow-right"></i>
		</a>
	</li>

</ul>