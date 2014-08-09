<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>
<body class="login-layout light-login">
	<div class="main-container">
		
		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h2>Create Worksheet (Abbort) EID</h2></strong>
			</div>
		</div><!--widget-header widget-header-flat-->
		<div class="row" style="height:50%; margin-bottom: 0px;"><!-- first row-->
			<div id="col-sm-7 infobox-container" style="margin-top: 1%;">
				<div class="profile-user-info profile-user-info-striped">			
					<div class="row" style="height:50%; margin-bottom: 0px;">
						<div id="col-sm-7 infobox-container" style="margin-top: 1%;">
							<div class="profile-user-info profile-user-info-striped">
								<div id="profile-info-row">
									<table id="tests_table" class="table table-bordered table-responsive striped">
										<thead>
											<tr class="active">
												<th style ="width: 25%;">Worksheet Info</th>
												<th style ="width: 35%;">Exraction Reagents</th>
												<th style ="width: 25%;">Amplification Reagents </th>
											</tr>
										</thead>
										<tbody>
											<form method="POST" action="<?php echo base_url().'eid/worksheet/abbott_print_worksheet'  ?>" >
											<tr class="" id = "1" class ="">
												<td>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Worksheet No.:
														</span>
														<input name="worksheet_no" id="worksheet_no" type="text" value="<?php echo $worksheet_id[0]['id'] + 1; ?>" style="width:100%;"/>
													</div>	
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															CDC Worksheet No.:
														</span>
														<input name="cdc_worksheet_no" id="cdc_worksheet_no" type="text" style="width:100%;"/>
													</div>
														
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Date<br/>Cut:
														</span>
														<input name="date_cut" id="date_cut" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>	
													
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Date<br/>Created:
														</span>
														<input name="date_created" id="date_created" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
													
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Created by:
														</span>
														<input name="created_by" id="created_by" type="text" style="width:100%;" />
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Reviewed by:
														</span>
														<input name="reviewed_by" id="reviewed_by" type="text" style="width:100%;" required data-date-format="Y-m-d" />
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Date<br/>Reviewed:
														</span>
														<input name="date_reviewed" id="date_reviewed" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Date<br/>Run:
														</span>
														<input name="date_run" id="date_run" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
												</td>
												
												<td>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Control:
														</span>
														<input name="control" id="control" type="text" style="width:100%;" />
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Control Lot No.:
														</span>
														<input name="control_lot_no" id="control_lot_no" type="text" style="width:100%;" />
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Control Expiry <br/> Date:
														</span>
														<input name="control_expiry_date" id="control_expiry_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Calibrator:
														</span>
														<input name="calibrator" id="calibrator" type="text" style="width:100%;" />
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Calibrator Lot No.:
														</span>
														<input name="calibrator_lot_no" id="calibrator_lot_no"  type="text" style="width:100%;"/>
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Calibrator Expiry <br/> Date:
														</span>
														<input name="calibrator_expiry_date" id="calibrator_expiry_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>												
												</td>
												
												<td>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Amplification Kit No.:
														</span>
														<input name="amplification_kit_no" id="amplification_kit_no" type="text" style="width:100%;"/>
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Amplification Expiry <br/> Date:
														</span>
														<input name="amplification_expiry_date" id="amplification_expiry_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Bulk Lysis Lot No.:
														</span>
														<input name="bulk_lysis_lot_no" id="bulk_lysis_lot_no" type="text" style="width:100%;" />
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Bulk Lysis Expiry <br/> Date:
														</span>
														<input name="bulk_lysis_expiry" id="bulk_lysis_expiry" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption" >
															Sample Prep Lot No.:
														</span>
														<input name="sample_prep_lot_no" id="sample_prep_lot_no" type="text" style="width:100%;"/>
													</div>
													<div class="input-group my-input-group nb">
														<span class="input-group-addon my-input-group-caption">
															Sample Prep Expiry <br/> Date:
														</span>
														<input name="sample_prep_expiry" id="sample_prep_expiry" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="Y-m-d" />
														<span class="input-group-addon my-input-group-icon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
				</div><!--profile-user-info profile-user-info-striped-->
			</div><!--col-sm-7 infobox-container-->
		</div><!-- first row-->

		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h4>Abbort EID Worksheet for <?php echo( date("d/m/y",time())) ?> (96)</h4></strong>
			</div>
		</div><!--widget-header widget-header-flat-->

		<div class="row"><!--second row-->
			<center>
				<?php
					$i = 0;
					foreach ($result as $res) {
						$i++;	
						$tests_No = $res["runs"];
						$id = $res["id"];
						//echo("ID ->" .$id. " "." No ->".$DBS_No."   ");
						echo("<div class='dropdown dropdown-preview'>
								<ul class='dropdown-menu'>
									<li>
										<h6>Sample Code ".$id." </h6>
									</li> 
									<li>
										Tests Done: ".$tests_No."
									</li>
									<li class='divider'></li>
									<li>
										<h6>Location of the bar-code</h6>
									</li>
								</ul>
							</div>");
					}
				?>
				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">					
						<li>
							<h6 style="color: 	#FC1501" >Negative Control</h6>
						</li>
						<li>
							Result Goes Here
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
							<h6 style="color: #78AB46" >Positive Control</h6>
						</li>
						<li>
							Result Goes Here
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
			</center>
		</div>
		<div class="row" style="text-align: center;">
			<a href="">
				<?php 
					if($i < 46){
				?>
					<!-- <input type="button" value="Save & Print" disabled="disabled/> -->
					<input type="submit" value="Save & Print"/>
				<?php
					}else{
				?>
					<input type="submit" value="Save & Print"/>
				<?php
					}
				?>
			</a>
		</div>
	</div><!-- /.main-container -->
	</form>

		<div class="footer">
			<div class="footer-inner" style="position :fixed;background:#fff;">
				<div class="footer-content" style = "height: 35px;">
				<!-- <span class="bigger-120" >
					<span class="blue"><?php echo $this->config->item("copyrights");?></span>
				</span> -->
			</div>
		</div>
	</div>


<?php $this->load->view("worksheet_footer")?>

</body>