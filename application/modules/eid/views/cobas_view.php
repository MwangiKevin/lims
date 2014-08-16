<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<body class="login-layout light-login">
	<div class="main-container">
		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h2>Create Worksheet (COBAS) EID</h2></strong>
			</div>
		</div><!--widget-header widget-header-flat-->
		
		<div class="row" style="height:50%; margin-bottom: 0px;"><!-- first row-->
			
			<div id="col-sm-7 infobox-container" style="margin-top: 1%;">
				<div class="profile-user-info profile-user-info-striped">
				<div id="profile-info-row">
					<table id="tests_table" class="table table-bordered table-responsive striped">
							<thead>
								<tr class="active">
									<th style ="width: 25%;">Sample</th>
									<th style ="width: 35%;">WorkSheet Info</th>
									<th style ="width: 25%;">Kit Details</th>
								</tr>
							</thead>
							<tbody>
								<form method="POST" action="<?php echo base_url().'eid/worksheet/cobas_print_worksheet'  ?>" >
								<tr class="" id = "1" class ="">
									<td>						
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Date <br/>Cut
											</span>
											<!-- Why an array?-->
											<input name = "date_cut"  id="date_cut" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon my-input-group-icon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
										</div>	

										<!-- <div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Date<br/>Received:
											</span>
											<input name="date_received[]" id="date_received" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon my-input-group-icon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
										</div> -->
										
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption" >
												Sample <br/> Prep Lot No.:
											</span>
											<input name="sample_prep_no" id="sample_prep_no" class="form-control date-picker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										</div>	
															
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Sample Prep <br/> Expiry Date
											</span>
											<input name="sample_prep_expiry_date" id="sample_prep_expiry_date" class="form-control datepicker" type="text" style="width:100%; 	" required data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon my-input-group-icon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
										</div>
									</td>
									<td>
										<div class = "row">
											<div class = "col-xs-6 ">
												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														Worksheet <br/>No.:
													</span>
													<input name="worksheet_no" id="worksheet_no" type="text" style="width:100%;" value="<?php echo $worksheet_id[0]['id'] + 1; ?>" />
												</div>
												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														CDC <br/> Worksheet <br/>No.:
													</span>
													<input name="template_no" id="template_no" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
												</div>
												
												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														Created By.:
													</span>
													<input name="created_by" id="created_by" class="form-control date-picker" type="text" style="width:100%;"  type="text"/>
												</div>

												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														Date Created:
													</span>
													<input name="date_created" id="date_created" class="form-control datepicker" required data-date-format="Y-M-d" >
													<span class="input-group-addon my-input-group-icon">
														<i class="ace-icon fa fa-calendar"></i>
													</span>
												</div>
												
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Updated By:
													</span>
													<input name="updated_by" id="updated_by" class="form-control date-picker" type="text" style="width:100%;" /> 
												</div>

												<!-- <div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Approved <br/> By:
													</span>
													 <input name="approved_by[]" id="approved_by" class="form-control date-picker" type="text" style="width:100%;"  />
												</div> -->
											</div>	
																					
											<div class = "col-xs-6 " style="padding-left:0px;">												
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Reviewed <br/> By
													</span>
													<input name="reviewed_by" id="reviewed_by" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
												</div>
												
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Date <br /> Reviewed
													</span>
													<input name="date_reviewed" id="date_reviewed" class="form-control datepicker"  type="text">
													<span class="input-group-addon my-input-group-icon">
														<i class="ace-icon fa fa-calendar"></i>
													</span> 
												</div>
												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														Date Run:
													</span>
													<input name="date_run" id="date_run" class="form-control datepicker"  required data-date-format="dd-mm-yyyy">
													<span class="input-group-addon my-input-group-icon">
														<i class="ace-icon fa fa-calendar"></i>
													</span>
												</div>
												
											</div>
										</div>
									</td>
									
									<td>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Lot No.:
											</span>
											<input name="lot_no" id="lot_no" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
										</div>

										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												HIQCAP No.:
											</span>
											<input name="hiqcap" id="hiqcap" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
										</div>

										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Rack No.:
											</span>
											<input name="rack_no" id="rack_no" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
										</div>
										
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Spek Kit No.:
											</span>
											<input name="spek_kit_no" id="spek_kit_no" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
										</div>
										
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Kit <br /> Expiry <br/>  Date:
											</span>
											<input name="kit_expiry" id="kit_expiry" class="form-control datepicker"  type="text">
													<span class="input-group-addon my-input-group-icon">
														<i class="ace-icon fa fa-calendar"></i>
													</span> 
										</div>									
									</td>
								
									</td> 
								</tr>
							</tbody>
						</table>
						
				</div>
				</div><!--profile-user-info profile-user-info-striped-->
			</div><!--col-sm-7 infobox-container-->
		</div><!-- first row-->
		
		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h4>COBAS EID Worksheet for <?php echo( date("d/m/y",time())) ?> (24)</h4></strong>
			</div>
		</div><!--widget-header widget-header-flat-->
		
		<div class="row" style="padding-left: 10%; padding-right: 10%">
			<center>
				<?php
				$i = 0;
				foreach ($result as $res) {
					$i++;//count samples
					if($i <= 22){
						$test_No = $res["runs"];
						$id = $res["id"];
						echo('<div class="dropdown dropdown-preview">
							<ul class="dropdown-menu">					
								<li>
									<h6>Sample Code: '.$id.'</h6>
								</li>
								<li>
									Tests-Done: '.$test_No.'
								</li>
								<li class="divider"></li>
								<li>
									<h6>Location of the bar-code</h6>
								</li>
							</ul>
						</div>');
					}
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
			<a href="" />
			<?php 
			if($i <= 22){
			?>
			<input type="submit" value="Save & Print"/>
				<!-- <input type="submit" value="Save & Print" disabled="disabled"/> -->
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

<?php $this->load->view("worksheet_footer");?>

</body>