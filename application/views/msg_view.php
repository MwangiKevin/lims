
<?php 
	foreach ($messages as $key => $value) {
?>
	<li>
		<a href="message/<?php echo $value["id"];?>">
			<img src="assets/avatars/avatar2.png" class="msg-photo" alt="Avatar">
			<span class="msg-body">
				<span class="msg-title">
					<span class="blue"><?php echo $value["sender"];?>:</span>
					<?php echo $value["message"];?>
				</span>

				<span class="msg-time time">
					<i class="ace-icon fa fa-clock-o"></i>
					<span> <?php echo $value["days"];?> days ago</span>
				</span>
			</span>
		</a>
	</li>

<?php 
	}
?>