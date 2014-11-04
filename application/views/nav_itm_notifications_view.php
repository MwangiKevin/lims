<a data-toggle="dropdown" class="dropdown-toggle" href="#" title="Notifications">
	<i class="ace-icon fa fa-bell <?php  if(((int)sizeof($notifications))>0){echo "icon-animated-bell";}?>"></i>
	<span class="badge badge-important"><?php echo sizeof($notifications);?></span>
</a>

<ul class="dropdown-menu-right dropdown-navbar navbar-green dropdown-menu dropdown-caret dropdown-close">
	
	<li class="dropdown-header">
		<i class="ace-icon fa fa-exclamation-triangle"></i>
		<?php echo sizeof($notifications);?> Notifications
	</li>

	<?php $this->load->view("notf_view");?>


	<li class="dropdown-footer">
		<a href="notifications">
			See all notifications
			<i class="ace-icon fa fa-arrow-right"></i>
		</a>
	</li>

</ul>