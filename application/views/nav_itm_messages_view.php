<a data-toggle="dropdown" class="dropdown-toggle" href="#" title="Messages">
	<i class="ace-icon fa fa-envelope <?php  if(((int)sizeof($messages))>0){echo "icon-animated-vertical";}?>"></i>
	<span class="badge badge-info"><?php echo sizeof($messages);?></span>
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