
<div id="sidebar" class="sidebar   responsive sidebar-fixed sidebar-scroll">
	<script type="text/javascript">
	//try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list" style="top: 0px;">

		<li class="active">
		<!--projects-->
                <a href="<?php echo base_url('admin/admin/dashboard');?>">
				<i class="menu-icon fa fa-folder fa-tint"></i>
				<span class="menu-text"> Dashboard </span>
			</a>
		</li>


		<li class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> Facilities </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="display: none;">
				<li class="hsub">
                    <a href="<?php echo base_url('admin/facilities/facilities_details') ?>" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Details
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url().'admin/facilities/facilities_registration' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Registration
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

		<li class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Users </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="<?php echo base_url().'admin/users/users_details' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Users Details
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url().'admin/users/users_registration' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Users Registration
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="hsub">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Reports </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

		</li>
                
        <!--plots-->
		<li id="side_facilities" class="hsub">
			<a href="#" class="dropdown_toggle">
				<i class="menu-icon fa fa-folder-open-o fa-tint"></i>
				<span class="menu-text"> Facilities </span>
                <b class="arrow fa fa-angle-down"></b>
			</a>
            			<ul class="submenu nav-hide" style="display: none;">
				<li class="hsub">
                    <a href="<?php echo base_url('admin/facilities/dashboard') ?>" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Details
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url().'admin/facilities/facilities_registration' ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Facility Registration
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="elements.html">
						<i class="menu-icon fa fa-caret-right"></i>
						Elements
					</a>

					<b class="arrow"></b>
				</li>
				
			</ul>
		</li>
		<!--clients-->
		<li id="side_users" class="hsub">
			<a href="<?php echo base_url('admin/users');?>">
				<i class="menu-icon fa fa-users fa-tint"></i>
				<span class="menu-text"> Users </span>
			</a>
		</li>
		<!--accounts-->
		<li id="side_reports" class="hsub">
			<a href="<?php echo base_url('admin/reports');?>">
				<i class="menu-icon fa fa-credit-card"></i>
				<span class="menu-text"> Reports </span>
			</a>
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
            $("#"+menu_select).addClass("open");
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