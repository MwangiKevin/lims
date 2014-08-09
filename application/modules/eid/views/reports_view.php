<div class="row">
	<h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a class="pink" data-toggle="modal" href="#"> Select a date range to generate a report. </a>
	</h4>
	<div class="hr hr-18 hr-double dotted"></div>
	
	<div class="widget-header widget-header-flat" style="margin-bottom: 20px;">
		<div class="widget-title smaller">
			<strong>
				<h2>Reports</h2>
			</strong>
		</div>
	</div>
	
	
	<!--All samples report-->
	<div class="col-sm-6">
		<div class="widget-header widget-header-flat" >
			<h4 class="widget-title smaller">
				<i class="ace-icon fa fa-quote-left smaller-80"></i>
				All Samples
			</h4>
		</div>
		<form method="post" action="<?php echo base_url().'eid/reports/all_samples' ?>">
			<div class="input-group my-input-group nb">
				<span class="input-group-addon my-input-group-caption">
					Start<br/>Date:
				</span>
				<input name="all_start_date" id="all_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
				<span class="input-group-addon my-input-group-icon">
					<i class="ace-icon fa fa-calendar"></i>
				</span>
			</div>
			<div class="input-group my-input-group nb">
				<span class="input-group-addon my-input-group-caption">
					End<br/>Date:
				</span>
				<input name="all_end_date" id="all_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
				<span class="input-group-addon my-input-group-icon">
					<i class="ace-icon fa fa-calendar"></i>
				</span>
			</div>
			<!-- Submit Button -->
			<div style="position:absolute; right:20%; top:100%;">
				<input type="submit" class="btn btn-primary" value="Generate Report">
			</div>
		</form>
	</div>
	<!--All samples report-->
	
	<!--Reports according to geographic area-->
	<div class="col-sm-6">
		<div class="widget-header widget-header-flat" >
			<h4 class="widget-title smaller">
				<i class="ace-icon fa fa-quote-left smaller-80"></i>
				Report according to geographic area
			</h4>
		</div>
		<div class="tabbable tabs-left">
			<ul id="myTab3" class="nav nav-tabs">
				<li class="active">
					<a href="#home3" data-toggle="tab">
							<i class="ace-icon fa fa-desktop"></i>
							Region
					</a>
				</li>
				<li class="">
					<a href="#profile3" data-toggle="tab">
						<i class="ace-icon fa fa-circle"></i>
						District
					</a>
				</li>
				<li>
					<a href="#dropdown13" data-toggle="tab">
						<i class="ace-icon fa fa-circle-o"></i>
						Facility
					</a>
				</li>
			</ul>
			<div class="tab-content">
			<!--Region-->
				<div id="home3" class="tab-pane active">
					<form action="<?php echo base_url().'eid/reports/reports_by_area/0' ?>" method="POST">
						<!-- Select a Region-->
						<div class="input-group my-input-group nb" style="width:100%">
							<span class="input-group-addon my-input-group-caption">
								Region
							</span>
							<Select name="region" id="region" style="width:76%" >
								<option value=""> Select a Region </option>
								<?php 
								foreach ($regions as $key => $value) {
									if( empty($value["id"])){
								?>
									<option value="-1"> No Data</option>
								<?php	
									}else{
								?>
									<option value="<?php echo $value["id"].".".$value["name"]?>"><?php echo $value["name"]?></option>
								<?php 
									}
								}
								?>								
							</Select> 
						</div>
						<!-- Select a Region-->
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								Start<br/>Date:
							</span>
							<input name="region_start_date" id="region_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								End<br/>Date:
							</span>
							<input name="region_end_date" id="region_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<i class="ace-icon fa fa-desktop" style="position: absolute; right: 10px; top:20px;"></i>
						<div style="margin-left:70%;">
							<input type="submit" name = "region_generate_report" id="region_generate_report" class="btn btn-primary"  value="Generate Report" />
						</div>
					</form>
				</div>
				<!--Region-->
				
				<!--District-->
				<div id="profile3" class="tab-pane">
					<form action="<?php echo base_url().'eid/reports/reports_by_area/1' ?>" method="POST" >
						<!--Select a District-->
						<div class="input-group my-input-group nb" style="width:100%">
							<span class="input-group-addon my-input-group-caption">
								District
							</span>
							<Select name="district" id="district" style="width:76%"   required >
								<option value=""> Select a District </option>
								<?php 
								foreach ($districts as $key => $value) {
									?>
									<option value="<?php echo $value["id"].".".$value["name"]?>"><?php echo $value["name"]?></option>
									<?php 
								}
								?>
								<option value="-1"> No Data</option>
							</Select> 
						</div>
						<!--Select a District-->
						
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								Start<br/>Date:
							</span>
							<input name="district_start_date" id="district_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								End<br/>Date:
							</span>
							<input name="district_end_date" id="district_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<i class="ace-icon fa fa-circle" style="position: absolute; right: 10px; top:20px;"></i>
						<div style="margin-left:70%;">
							<input type="submit" id="district_generate_report" name="district_generate_report" value="Generate Report" class="btn btn-primary" />
						</div>
					</form>
				</div>
				<!--District-->
				<!--Facility-->
				<div id="dropdown13" class="tab-pane">
					<form action="<?php echo base_url().'eid/reports/reports_by_area/2' ?>" method="POST" >
						
						<!-- Select Facility -->
						<div class="input-group my-input-group nb" style="width:100%">
							<span class="input-group-addon my-input-group-caption">
								Facility
							</span>
							<Select name="facility" id="facility" style="width:76%"   required >
								<option value=""> Select a Facility </option>
								<?php 
								foreach ($facility as $key => $value) {
									?>
									<option value="<?php echo $value["id"].".".$value["name"]?>"><?php echo $value["name"]?></option>
									<?php 
								}
								?>
								<option value="-1"> No Data</option>
							</Select> 
						</div>
						<!-- Select Facility-->
						
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								Start<br/>Date:
							</span>
							<input name="facility_start_date" id="facility_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<div class="input-group my-input-group nb">
							<span class="input-group-addon my-input-group-caption">
								End<br/>Date:
							</span>
							<input name="facility_end_date" id="facility_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
							<span class="input-group-addon my-input-group-icon">
								<i class="ace-icon fa fa-calendar"></i>
							</span>
						</div>
						<i class="ace-icon fa fa-circle-o" style="position: absolute; right: 10px; top:20px;"></i>
						<div style="margin-left:70%;">
							<input type="submit" id="facility_generate_report" name="facility_generate_report" class="btn btn-primary" value="Generate Report" />
						</div>
					</form>
				</div>
				<!--Facility-->
			</div>
	</div>
	<!--Reports according to geographic area-->
	
</div>
<div class="hr hr-18 hr-double dotted"></div>