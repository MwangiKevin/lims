<?php
	$selected_class = 	"hsub";
	$display 		=	"display: none;";
?>
<div id="sidebar" class="sidebar   responsive sidebar-fixed sidebar-scroll">
	<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>

	<?php      	
		$this->load->view('sidebar_shortcuts_view');
	?>

	<ul class="nav nav-list" style="top: 0px;">

		<?php
			if(isset($menu_select[0]) && $menu_select[0]==0){
				$selected_class = "active ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>
		<li class="<?php echo $selected_class;?>">
			<a href="<?php echo base_url()?>reports/">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Reports </span>
			</a>

			<b class="arrow"></b>
		</li>

		<?php
			if(isset($menu_select[0]) && $menu_select[0]==1){
				$selected_class = "active open ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>

		<li class="<?php echo $selected_class;?>">
			<a href="<?php echo base_url()?>reports/eid_report">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> EID </span>
			</a>

			<b class="arrow"></b>
		</li>

		<?php
			if(isset($menu_select[0]) && $menu_select[0]==2){
				$selected_class = "active open ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>

		<li class="<?php echo $selected_class;?>">
			<a href="<?php echo base_url()?>reports/vl_report">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> VL </span>
			</a>

			<b class="arrow"></b>
		</li>
		
		<?php
			if(isset($menu_select[0]) && $menu_select[0]==3){
				$selected_class = "active open ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>

	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>

	<script type="text/javascript">
		//$("#ss").toggle("dropdown");
	</script>
</div>