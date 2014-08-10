<li class="dropdown-header">
	<i class="ace-icon fa fa-exclamation-triangle"></i>
	<?php echo sizeof($notifications);?> Notifications
</li>

<?php 
foreach ($notifications as $key => $value) {
	?>

	<li>
		<a href="#">
			<div class="clearfix">
				<span class="pull-left">
					<i class="btn btn-xs no-hover btn-<?php echo $value["btn"];?> fa fa-comment"></i>
					<?php echo $value["message"];?>
				</span>
				<span class="pull-right badge badge-<?php echo $value["type"];?>">+<?php echo $value["value"];?></span>
			</div>
		</a>
	</li>


	<?php 
}
?>

<li class="dropdown-footer">
	<a href="messages">
		See all messages
		<i class="ace-icon fa fa-arrow-right"></i>
	</a>
</li>