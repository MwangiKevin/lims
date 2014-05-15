<html lang="en"><!-- Mirrored from responsiweb.com/themes/preview/ace/1.3/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 22 Apr 2014 11:50:12 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<title><?php echo $title;?></title>

	<meta name="description" content="User login page">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- bootstrap & fontawesome -->
	<link rel='stylesheet' href='<?php echo base_url();?>assets/sass_assets/sass/theme/font-awesome/4.0.3/css/font-awesome.min.css' type='text/css'></link>
	<!-- <link rel='stylesheet' href='<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css' type='text/css'></link> -->
	<link rel='stylesheet' href='<?php echo base_url();?>assets/sass_assets/stylesheets/styles.css' type='text/css'></link>

	<?php      	
	$this->load->view('utils/dynamicLoads');
	?>

	<!-- text fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
</head>

<body class="login-layout light-login">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container"  style = "float:left; margin-top:5%;">
						<h1 >
							<i class="ace-icon fa fa-leaf green"></i>
							<span class="blue" style="font-size:50px;">EID</span>
							<span style="font-size:50px;">/</span>
							<span class="red"  style="font-size:50px;">VL</span>
							<span class="grey" id="id-text2" style="font-size:50px;">LIMS</span>
						</h1>
						Logo/crest goes here
					</div>
					<div class="login-container"  style = "float:right; margin-top:5%;">						

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee green"></i>
											Please Enter Your Information
										</h4>

										<div class="space-6"></div>

										<?php echo form_open('login/process_credentials');?>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" placeholder="Username">
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" placeholder="Password">
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													<label class="inline">
														<input type="checkbox" class="ace">
														<span class="lbl"> Remember Me</span>
													</label>

													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												I forgot my password
											</a>
										</div>

										<div>
											<a href="#" data-target="#signup-box" class="user-signup-link">
												I want to register
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->

							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Retrieve Password
										</h4>

										<div class="space-6"></div>
										<p>
											Enter your email and to receive instructions
										</p>

										
										<?php echo form_open('login/request_pwd_reset');?>

											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" placeholder="Email">
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<div class="clearfix">
													<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Send Me!</span>
													</button>
												</div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Back to login
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->

							<div id="signup-box" class="signup-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="ace-icon fa fa-users blue"></i>
											New User Registration
										</h4>

										<div class="space-6"></div>
										<p> Enter your details to begin: </p>

										<form>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" placeholder="Email">
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" placeholder="Username">
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" placeholder="Password">
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" placeholder="Repeat password">
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>

												<label class="block">
													<input type="checkbox" class="ace">
													<span class="lbl">
														I accept the
														<a href="#">User Agreement</a>
													</span>
												</label>

												<div class="space-24"></div>

												<div class="clearfix">
													<button type="reset" class="width-30 pull-left btn btn-sm">
														<i class="ace-icon fa fa-refresh"></i>
														<span class="bigger-110">Reset</span>
													</button>

													<button type="button" class="width-65 pull-right btn btn-sm btn-success">
														<span class="bigger-110">Register</span>

														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											Back to login
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.signup-box -->
						</div><!-- /.position-relative -->

					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<div class="footer">
		<div class="footer-inner" style="position :fixed;background:#fff;">
			<div class="footer-content" style = "height: 35px;">
				<span class="bigger-120" >
					<span class="blue"><?php echo $this->config->item("copyrights");?></span>
				</span>
			</div>
		</div>
	</div>


	<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
	</script>


	<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>

	<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});
	});

	</script>

</body>
</html>