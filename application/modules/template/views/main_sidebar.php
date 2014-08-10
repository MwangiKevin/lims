
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
			<a href="<?php echo base_url('dashboard');?>">
				<i class="menu-icon fa fa-dashboard fa-tint"></i>
				<span class="menu-text"> Main Dashboard </span>
			</a>
		</li>


		<li class="hsub" id="side_eid">
			<a href="<?php echo base_url("eid")?>" class="">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> EID </span>
</b>
			</a>

			<b class="arrow"></b>			
		</li>

		<li class="hsub" id="side_eid">
			<a href="<?php echo base_url("vl")?>" class="">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> VL </span>
</b>
			</a>

			<b class="arrow"></b>			
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