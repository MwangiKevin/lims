<div id="sidebar" class="sidebar   responsive sidebar-fixed sidebar-scroll">

	<ul class="nav nav-list" style="top: 0px;">
        <!--projects-->
		<li id="side_project" class="hsub">
			<a href="<?php echo base_url('project');?>">
				<i class="menu-icon fa fa-folder fa-tint"></i>
				<span class="menu-text"> Projects </span>
			</a>
		</li>
		<!--plots-->
		<li id="side_plot" class="hsub">
			<a href="<?php echo base_url('plot');?>">
				<i class="menu-icon fa fa-folder-open-o fa-tint"></i>
				<span class="menu-text"> Plots </span>
			</a>
		</li>
		<!--clients-->
		<li id="side_client" class="hsub">
			<a href="<?php echo base_url('client');?>">
				<i class="menu-icon fa fa-users fa-tint"></i>
				<span class="menu-text"> Clients </span>
			</a>
		</li>
		<!--accounts-->
		<li id="side_account" class="hsub">
			<a href="<?php echo base_url('account');?>">
				<i class="menu-icon fa fa-credit-card"></i>
				<span class="menu-text"> Accounts </span>
			</a>
		</li>
		<!--reports-->
		<!--
		<li id="side_report" class="hsub">
			<a href="#">
				<i class="menu-icon fa fa-briefcase"></i>
				<span class="menu-text"> Reports </span>
			</a>
		</li>
		-->
		<!--users-->
		<li id="side_user" class="hsub">
			<a href="<?php echo base_url('user');?>">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text"> Users </span>
			</a>
		</li>
	</ul>

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

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
</div>