<nav class="navbar navbar-default" role="navigation">
	<a id="setCollapse"href="javascript:;" class="navbar-toggle collapsed"><i class="fa fa-list-ul"></i> </a>
	<!-- Brand and toggle get grouped for better mobile display -->

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="navbar-collapse collapse" id="">
		<a class="navbar-brand">
			Project Monitor
		</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a class="" href="#">Home</a>
			</li>
			<li >
				<a class="" href="#">Schedule</a>
			</li>

		</ul>

		<ul class="nav navbar-nav navbar-right">
			<div class="navbar-form navbar-left">
				Today: &nbsp; <?php echo date('D, M Y')?>&nbsp;&nbsp;
				<button id="addEvent" class="btn btn-primary">
					<i class="fa fa-plus"></i>Add Event
				</button>
			</div>
			
		</ul>
	</div>

</nav>