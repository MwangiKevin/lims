<?php echo doctype('html4-trans');?>

<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo $title;?></title>
	<link rel="SHORTCUT ICON" href="<?php echo base_url();?>assets/img/favicon.ico">

	<link rel='stylesheet' href='<?php echo base_url();?>assets/sass_assets/sass/theme/font-awesome/4.0.3/css/font-awesome.min.css' type='text/css'></link>
	<!-- <link rel='stylesheet' href='<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css' type='text/css'></link> -->
	<link rel='stylesheet' href='<?php echo base_url();?>assets/sass_assets/stylesheets/styles.css' type='text/css'></link>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />


	<script src='<?php echo base_url();?>assets/sass_assets/sass/theme/js/ace-extra.min.js' type='text/javascript'></script>

	
	<?php      	
		$this->load->view('utils/dynamicLoads');
	?>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



	<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/ace-extra.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class= <?php echo $b_color ?> >
		
		<?php      	
		$this->load->view('navbar');
		?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<?php      	
			$this->load->view($sidebar);
			?>

			<div class="main-content">

				<?php      	
				$this->load->view('breadcrumbs');
				?>

				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-150"></i>
						</div>
						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->
					<?php 
						$this->load->view($content_view);
					?>
				</div><!-- /.page-content-container -->
			</div><!-- /.main-content -->



			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		<?php 
		$this->load->view('footer');
		?>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/jquery.sparkline.min.js"></script>
		<!--<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/flot/jquery.flot.resize.min.js"></script>-->

		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/sass_assets/sass/theme/js/ace.min.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function() {

				$("#sidebar").addClass("sidebar-fixed sidebar-scroll");
				$("#navbar").addClass("navbar-default navbar-fixed-top");
				$("#breadcrumbs").addClass("breadcrumbs-fixed");
				
			});
		</script>
	</body>

	</html>
