<style>
/* some elements used in demo only */
.spinner-preview {
	width: 100px;
	height: 100px;
	text-align: center;
	margin-top: 60px;
}

.dropdown-preview {
	margin: 0 5px;
	display: inline-block;
}
.dropdown-preview  > .dropdown-menu {
	display: block;
	position: static;
	margin-bottom: 5px;
}
</style>
<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>
<body class="login-layout light-login">
	<div class="main-container">
		
		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong>
					<h2>
						Create Worksheet (Abbort) Viral Load
						<label style="display: inline-block">
							<input class="ace" type="radio" name="form-field-radio">
							<span class="lbl"> DBS</span>
						</label>
						&nbsp;
						<label style="display: inline-block">
							<input class="ace" type="radio" name="form-field-radio">
							<span class="lbl"> Plasma/EDTA</span>
						</label>
					</h2>
				</strong>
			</div>
		</div><!--widget-header widget-header-flat-->
		<div class="row" style="height:50%; margin-bottom: 0px;"><!-- first row-->

			<div id="col-sm-7 infobox-container" style="margin-top: 1%;">
				<div class="profile-user-info profile-user-info-striped">
					<div class="profile-info-row">

						<div class="profile-info-value"> 
							<ul style="list-style-type: none;">
								<li>
									<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
										<div class="widget-title smaller">
											<strong><center><h5> Worksheet Info </h5></center></strong>
										</div>
									</div> 
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Worksheet No.:</label>					
									<!-- <label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br> -->
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Date Created:</label>					
									<!-- <label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br> -->
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Created By:</label>					
									<!-- <label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br> -->
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
								</li>
							</ul> 
						</div>

						<div class="profile-info-value"> 
							<ul style="list-style-type: none;">
								<li>
									<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
										<div class="widget-title smaller">
											<strong><center><h5> Extraction Reagents </h5></center></strong>
										</div>
									</div> 
								</li>
								<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
								<thead>
									<tr class="active">
										<th></th>
										<th rowspan="2">Sample Prep</th>
										<th rowspan="2">Bulk Lysis Buffer</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Lot No.</td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
									</tr>
									<tr>
										<td>Expiry Dates</td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
									</tr>
								</tbody>
								</table>
								<!-- <li>
									<label style="width: 60%; display: inline-block;">Template No:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Date Created:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Created By:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li> -->
								
							</ul> 
						</div>
						<div class="profile-info-value"> 
							<ul style="list-style-type: none;">
								<li>
									<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
										<div class="widget-title smaller">
											<strong><center><h5> Amplification Reagents </h5></center></strong>
										</div>
									</div> 
								</li>
								<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
								<thead>
									<tr class="active">
										<th rowspan="2">Date Created</th>
										<th rowspan="2">Created By</th>
										<th rowspan="2">Machine</th>
									</tr>
								</thead>
								<tbody
									<tr>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
									</tr>
									<tr>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
										<td><input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></td>
									</tr>
								</tbody>
								</table>
								<!-- <li>
									<label style="width: 60%; display: inline-block;">Control:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Calibrator:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li>
								<li>
									<label style="width: 60%; display: inline-block;">Amplification Kit:</label>					
									<label style="position: absolute;" ><input type="text" style="margin-left:10%; width:40%; height: 25px;"/></label></br>
								</li> -->
							</ul>  
						</div>
					</div><!--profile-info-row-->
				</div><!--profile-user-info profile-user-info-striped-->
			</div><!--col-sm-7 infobox-container-->
		</div><!-- first row-->

		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h4>Abbort Viral Load Worksheet for DATE</h4></strong>
			</div>
		</div><!--widget-header widget-header-flat-->

		<div class="row"><!--second row-->
			<center>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6>Sample Code</h6>
						</li>
						<li>
							Lab-Code
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
			</center>
		</div><!--second row-->
			<!-- <div class="row" >
				<div class="col-md-1">column 1</div>
				<div class="col-md-1">column 2</div>
				<div class="col-md-1">column 3</div>
				<div class="col-md-1">column 4</div>
				<div class="col-md-1">column 5</div>
				<div class="col-md-1">column 6</div>
			</div> -->
			
			<div class="row" style="text-align: center;">
				<input type="button" value="Save & Print"/>
				
			</div>


		</div><!-- /.main-container -->

		<div class="footer">
			<div class="footer-inner" style="position :fixed;background:#fff;">
				<div class="footer-content" style = "height: 35px;">
				<!-- <span class="bigger-120" >
					<span class="blue"><?php echo $this->config->item("copyrights");?></span>
				</span> -->
			</div>
		</div>
	</div>


	
<?php $this->load->view("abbot_worksheet_footer"); ?>
</body>