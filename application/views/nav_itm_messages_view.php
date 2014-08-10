<a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<i class="ace-icon fa fa-tasks"></i>
	<span class="badge badge-grey"><?php echo sizeof($messages);?></span>
</a>

<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
	<li class="dropdown-header">
		<i class="ace-icon fa fa-envelope-o"></i>
		<?php echo sizeof($messages);?> Messages
	</li>

	<?php $this->load->view("msg_view");?>


	<li class="dropdown-footer">
		<a href="messages">
			See all messages
			<i class="ace-icon fa fa-arrow-right"></i>
		</a>
	</li>
</ul>