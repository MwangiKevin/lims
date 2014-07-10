<?php
	$selected_class = 	"hsub";
	$display 		=	"display: none;";
?>
<div id="sidebar" class="sidebar   responsive sidebar-fixed sidebar-scroll">
	<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
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
			<a href="<?php echo base_url()?>vl/">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
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

			<a href="#"  class="dropdown-toggle">
				<i class="menu-icon fa fa-share-square fa-tint"></i>
				<span class="menu-text"> Tests Requisition </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="<?php echo $display;?>">

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==1 && isset($menu_select[1]) && $menu_select[1]==0){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>
				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/vl_requisition/fill" >
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-table"></i>
						&nbsp;Fill Requisition form
					</a>

					<b class="arrow"></b>	

				</li>


				<?php
					if(isset($menu_select[0]) && $menu_select[0]==1 && isset($menu_select[1]) && $menu_select[1]==1){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>
				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/vl_requisition/samples">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-tint"></i>
						&nbsp;Samples Entered
					</a>

					<b class="arrow"></b>
				</li>


				<?php
					if(isset($menu_select[0]) && $menu_select[0]==1 && isset($menu_select[1]) && $menu_select[1]==2){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>
				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/vl_vl_requisition">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-calendar"></i>
						&nbsp;Facility Consumption 
					</a>

					<b class="arrow"></b>
				</li>				
			</ul>
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

			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa  fa-table"></i>
				<span class="menu-text"> Worksheets </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>


			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="<?php echo $display;?>">

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==2 && isset($menu_select[1]) && $menu_select[1]==0){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/worksheet/cobas" >
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-barcode"></i>
						&nbsp;Cobas
					</a>

					<b class="arrow"></b>	

				</li>


				<?php
					if(isset($menu_select[0]) && $menu_select[0]==2 && isset($menu_select[1]) && $menu_select[1]==1){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/worksheet/abbott">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-barcode"></i>
						&nbsp;Abbott
					</a>

					<b class="arrow"></b>
				</li>

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==2 && isset($menu_select[1]) && $menu_select[1]==2){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/worksheet/history">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-clock-o"></i>
						&nbsp;Worksheet History
					</a>

					<b class="arrow"></b>
				</li>				
			</ul>
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

		<li class="<?php echo $selected_class;?>">

			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa  fa-share-square-o"></i>
				<span class="menu-text"> Results </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>


			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="<?php echo $display;?>">

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==3 && isset($menu_select[1]) && $menu_select[1]==0){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/results/update">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-pencil-square"></i>
						&nbsp;Update Results						
					</a>

					<b class="arrow"></b>	

				</li>

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==3 && isset($menu_select[1]) && $menu_select[1]==1){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/results/dispatch">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-truck"></i>
						&nbsp;Dispatch Results
					</a>

					<b class="arrow"></b>
				</li>

				<?php
					if(isset($menu_select[0]) && $menu_select[0]==3 && isset($menu_select[1]) && $menu_select[1]==2){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>

				<li class="<?php echo $selected_class;?>">
					<a href="<?php echo base_url()?>vl/results/view">
						<i class="menu-icon fa fa-caret-right"></i>
						<i class="fa fa-eye"></i>
						&nbsp;View Results
					</a>

					<b class="arrow"></b>
				</li>				
			</ul>
		</li>

		<?php
			if(isset($menu_select[0]) && $menu_select[0]==4){
				$selected_class = "active open ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>

		<?php
			if(isset($menu_select[0]) && $menu_select[0]==5){
				$selected_class = "active open ";
				$display 		=	"";
			}else{
				$selected_class = "hsub";
				$display 		=	"display: none;";
			}
		?>

	
				<?php
					if(isset($menu_select[0]) && $menu_select[0]==5 && isset($menu_select[1]) && $menu_select[1]==3){
						$selected_class = "active";

					}else{
						$selected_class = "hsub";
					}
				?>
			</ul>
		</li>


		<?php
			if(isset($menu_select[0]) && $menu_select[0]==7){
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