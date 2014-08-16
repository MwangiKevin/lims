
<div id="sidebar" class="sidebar   responsive sidebar-fixed sidebar-scroll">
	<script type="text/javascript">
	//try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>


	<?php      	
		$this->load->view('sidebar_shortcuts_view');
	?>

	<ul class="nav nav-list" style="top: 0px;">

		<li class="hsub " id="side_dashboard">
			<!--projects-->
			<a href="<?php echo base_url('admin/admin/dashboard');?>">
				<i class="menu-icon fa fa-dashboard fa-tint"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
		</li>


		<li class="hsub" id="side_facilities">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> Facilities </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="">
				<li class="hsub" id="side_fac_details">
					<a href="<?php echo base_url('admin/facilities/facilities_details') ?>" >
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Details
					</a>

					<b class="arrow"></b>
				</li>

				<li class="hsub" id="side_fac_registration">
					<a href="<?php echo base_url().'admin/facilities/facilities_registration' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Registration
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

		<li id="side_users" class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users "></i>
				<span class="menu-text"> Users </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="hsub" id="side_user_details">
					<a href="<?php echo base_url().'admin/users/users_details' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Users Details
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="side_user_registration">
					<a href="<?php echo base_url().'admin/users/users_registration' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Users Registration
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li id="side_reports" class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Reports </span>

            </a>

			<b class="arrow"></b>

		</li>

		<li id="side_mail" class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users "></i>
				<span class="menu-text"> Mail </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="hsub" id="side_email_details">
					<a href="<?php echo base_url().'alerts/email/admin_mail' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Email
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="side_sms">
					<a href="<?php echo base_url().'alerts/sms/load_sms' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						SMS
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>




	</ul><!-- /.nav-list -->

	<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}

	try{ace.settings.check('sidebar' , 'fixed')}catch(e){}

	$(function(){
		var menu_select='<?php echo  $menu_select; ?>';
		var submenu_select='<?php echo  $submenu_select; ?>';
		  //select menu
		  if(menu_select !=''){
		  	$("#"+menu_select).removeClass("hsub");
		  	$("#"+menu_select).addClass("active");
		  	if(submenu_select !=''){
		  		$("#"+menu_select).addClass("open");		  	}
		  }

          //select submenu
          if(submenu_select !=''){
          	$("#"+submenu_select).removeClass("hsub");
          	$("#"+submenu_select).addClass("active");      

          }

      });
	</script>


	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>