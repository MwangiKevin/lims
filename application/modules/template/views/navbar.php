<div id="navbar" class="navbar navbar-default navbar-fixed-top">
	<script type="text/javascript">
	try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>
	
	<div class="navbar-container" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="<?php echo base_url();?>" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					<?php echo $topleft_title; ?> LIMS (DEMO)
				</small>
			</a>
		</div>
		<div class="navbar-buttons navbar-header pull-right" role="navigation">

			<ul  class="nav ace-nav">
				<li id="nav_itm_batches" class="grey" >					
				</li>
				<li id="nav_itm_notifications" class="green">
				</li>
				<li id="nav_itm_messages" class="purple">
				</li>

				<li class="" title="Todays Date">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<span class="user-info">
							<small><?php echo "<b>" . date("F d Y,") . "</b>"; ?></small>
							<?php echo "<b>" . date("l") . "</b>"; ?>
						</span>
					</a>
				</li>
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?php echo base_url();?>assets/sass_assets/sass/theme/avatars/avatar2.png" alt="user Photo" />
						<span class="user-info">
							<small>Welcome,</small>
							<?php echo $this->session->userdata("name");?>
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						
						<!-- <li>
							<a href="user/settings">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li> -->

						<li>
							<a href="<?php echo base_url("user/profile");?>">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo base_url("login/logout");?>">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->

	
<script>
$(function () {
        $("#nav_itm_batches").load("<?php echo base_url('template/navbar_item/batches').'/'.$program;?>");
        $("#nav_itm_notifications").load("<?php echo base_url('template/navbar_item/notifications').'/'.$program;?>");
        $("#nav_itm_messages").load("<?php echo base_url('template/navbar_item/messages').'/'.$program;?>");
});
</script>
</div>

