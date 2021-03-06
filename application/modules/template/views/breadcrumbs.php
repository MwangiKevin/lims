<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<script type="text/javascript">
	try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>

	<ul class="breadcrumb">
<!-- 		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
		<li class="active">Dashboard</li> -->

		<?php
			foreach ($breadcrumbs as $key => $value) {
		?>
			<li class="<?php echo $value["class"];?>">
				<?php
				 	if($key==0){
				?>
				<i class="ace-icon fa fa-home home-icon"></i>
				<?php
					}
				?>
				<a href="<?php echo $value["link"]?>"><?php echo $value["title"]?></a>
			</li>
		<?php
			}
		?>
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
