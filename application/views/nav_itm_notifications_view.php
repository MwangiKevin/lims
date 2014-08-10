<a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<i class="ace-icon fa fa-tasks"></i>
	<span class="badge badge-grey"><?php echo sizeof($batches);?></span>
</a>

<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
	<?php $this->load->view("batches_view");?>
</ul>