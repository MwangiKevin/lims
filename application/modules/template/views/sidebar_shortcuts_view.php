<div class="sidebar-shortcuts" id="sidebar-shortcuts">
	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

		<button class="btn btn-info" title="EID" >
			<a href="<?php echo base_url("eid");?>"><i class="ace-icon fa fa-flask"></i></a>
		</button>			

		<button class="btn btn-danger" title="VL" >
			<a href="<?php echo base_url("vl");?>"><i class="ace-icon fa fa-flask"></i></a>
		</button>

		<button class="btn btn-warning" title="ADMIN" >
			<a href="<?php echo base_url("admin");?>"><i class="ace-icon fa fa-cog"></i></a>
		</button>

		<button class="btn btn-success" title="Main Dashboard" >
			<a href="<?php echo base_url("home");?>" ><i class="ace-icon fa fa-desktop"></i></a>
		</button>
	</div>

	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

		<span class="btn btn-info" title="EID"></span>
		<span class="btn btn-danger" title="VL"></span>
		<span class="btn btn-success" title="ADMIN"></span>
		<span class="btn btn-warning" title="Main Dashboard"></span>
	</div>
	<script>

	$(function() {
		//$( document ).tooltip();
	});
	</script>
</div><!-- /.sidebar-shortcuts -->