<div class="row">
	<h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a class="pink" data-toggle="modal" href="#"> Select a date range to generate a report. </a>
	</h4>
	<div class="hr hr-18 hr-double dotted"></div>

	<div class="widget-box">

		<div class="widget-header widget-header-flat widget-header-small">
			<h5 class="widget-title">
				<i class="ace-icon fa fa-list-alt"></i>
				Reports
			</h5>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-bars smaller-90"></i>
					National Reports
				</h3>

				<div id ="" class ="reports_spaced" style="">
					<table class="my-infobox infobox">
						<form method="post" action="<?php echo base_url().'eid/reports/all_samples' ?>">
							<tr style = "">
								<td style="vertical-align:middle;">
									<div style="float:left;padding-right:15%;" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width: 223px;">National</button>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Start<br/>Date:
										</span>
										<input name="all_start_date" id="all_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											End<br/>Date:
										</span>
										<input name="all_end_date" id="all_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="all_type" id="all_type" style="width: 100px;" >
											<option value="1">Detailed</option>
											<option value="2">Summary</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>
						<tr style="height:20px;">
							<td colspan="5"><div class="hr hr8 hr-double"></div><td>
						</tr>
						<form method="post" action="<?php echo base_url().'eid/reports/reports_by_area/0';?>">
							<tr style="">
								<td>									
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
								</td>
								<td>
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Start<br/>Date:
										</span>
										<input name="region_start_date" id="region_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>	
								</td>
								<td>									
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											End<br/>Date:
										</span>
										<input name="region_end_date" id="region_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>																	
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="region_type" id="region_type" style="width: 100px;" >
											<option value="1">Detailed</option>
											<option value="2">Summary</option>
										</select>
									</div>
								</td>
								<td>
									<div >
										<input type="submit" name = "region_generate_report" id="region_generate_report" class="btn btn-primary btn-sm"  value="Generate Report" />
									</div>
								</td>
							</tr>
						</form>

						<form method="post" action="<?php echo base_url().'eid/reports/reports_by_area/1';?>">
							<tr>
								<td>									
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
								</td>
								<td>
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Start<br/>Date:
										</span>
										<input name="district_start_date" id="district_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>	
								</td>
								<td>									
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											End<br/>Date:
										</span>
										<input name="district_end_date" id="district_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>																	
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="district_type" id="district_type" style="width: 100px;" >
											<option value="1">Detailed</option>
											<option value="2">Summary</option>
										</select>
									</div>
								</td>
								<td>
									<div >
										<input type="submit" name = "district_generate_report" id="district_generate_report" class="btn btn-primary btn-sm"  value="Generate Report" />
									</div>
								</td>
							</tr>
						</form>

						<form method="post" action="<?php echo base_url().'eid/reports/reports_by_area/2';?>">
							<tr>
								<td>									
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
								</td>
								<td>
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Start<br/>Date:
										</span>
										<input name="facility_start_date" id="facility_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>	
								</td>
								<td>									
									<div class="input-group my-input-group  reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											End<br/>Date:
										</span>
										<input name="facility_end_date" id="facility_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>																	
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="facility_type" id="facility_type" style="width: 100px;" >
											<option value="1">Detailed</option>
											<option value="2">Summary</option>
										</select>
									</div>
								</td>
								<td>
									<div >
										<input type="submit" name = "district_generate_report" id="district_generate_report" class="btn btn-primary btn-sm"  value="Generate Report" />
									</div>
								</td>
							</tr>
						</form>
					</table>
				</div>
				<div class="hr hr8 hr-double"></div>

				<h3 class="header blue lighter smaller">
					<i class="ace-icon fa fa-bars smaller-90"></i>
					Lab Reports
				</h3>
				
				<div id ="" class ="reports_spaced" style="">
					<table class="my-infobox infobox">
						<form method="post" action="<?php echo base_url().'eid/reports/lab_reports/0' ?>">
							<tr style = "">
								<td style="height:37px;">
									<div style="vertical-align:middle;float:right;padding-right:15%" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width:223px;">Date Range</button>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption">
											Start<br/>Date:
										</span>
										<input name="range_start_date" id="range_start_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											End<br/>Date:
										</span>
										<input name="range_end_date" id="range_end_date" class="form-control datepicker" type="text" style="width:100%;" required data-date-format="dd-mm-yyyy" />
										<span class="input-group-addon my-input-group-icon">
											<i class="ace-icon fa fa-calendar"></i>
										</span>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="all_type" id="all_type" style="width: 100px;" >
											<option value="1">Samples Summaries</option>
											<option value="2">Kit Usage</option>
											<option value="3">TAT</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>

						<tr style="height:20px;">
							<td colspan="5"><div class="hr hr8 hr-double"></div><td>
						</tr>
						<form method="post" action="<?php echo base_url().'eid/reports/lab_reports/1' ?>">
							<tr style = "">
								<td style="height:37px;">
									<div style="vertical-align:middle;float:right;padding-right:15%" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width:223px;">Monthly</button>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											MONTH
										</span>
										<select class="textfield form-control" style="" name="monthly_month" id="monthly_month" required="">
											<option value="">*Select Month*</option>
											<option value="00">January</option>
											<option value="01">February</option>
											<option value="02">March</option>
											<option value="03">April</option>
											<option value="04">May</option>
											<option value="05">June</option>
											<option value="06">July</option>
											<option value="07">August</option>
											<option value="08">September</option>
											<option value="09">October</option>
											<option value="10">November</option>
											<option value="11">December</option>                 					
										</select>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											YEAR
										</span>
										<select class="textfield form-control" style="" name="monthly_year" id="monthly_year" required="">
											<option value="">*Select Year*</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>

										</select>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="monthly_month" id="monthly_month" style="width: 100px;" >
											<option value="1">Samples Summaries</option>
											<option value="2">Kit Usage</option>
											<option value="3">TAT</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>
						<form method="post" action="<?php echo base_url().'eid/reports/lab_reports/2' ?>">
							<tr style = "">
								<td style="height:37px;">
									<div style="vertical-align:middle;float:right;padding-right:15%" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width:223px;">Quarterly</button>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											QUARTER
										</span>
										<select class="textfield form-control" style="" name="quarterly_quarter" id="quarterly_quarter" required="">
											<option value="">*Select a Quarter*</option>
											<option value="1">January - March</option>
											<option value="2">April - June</option>
											<option value="3">July - September</option>
											<option value="4">October - December</option>                 					
										</select>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											YEAR
										</span>
										<select class="textfield form-control" style="" name="quarterly_year" id="quarterly_year" required="">
											<option value="">*Select Year*</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>

										</select>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="all_type" id="all_type" style="width: 100px;" >
											<option value="1">Samples Summaries</option>
											<option value="2">Kit Usage</option>
											<option value="3">TAT</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>
						<form method="post" action="<?php echo base_url().'eid/reports/lab_reports/3' ?>">
							<tr style = "">
								<td style="height:37px;">
									<div style="vertical-align:middle;float:right;padding-right:15%" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width:223px;">Bi-Annually</button>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											Bi-Annually
										</span>
										<select class="textfield form-control" style="" name="biannually_bian" id="biannually_bian" required="">
											<option value="">*Select a bi-annual*</option>
											<option value="1">January - June</option>
											<option value="2">July - December</option>                  					
										</select>
									</div>
								</td>
								<td>
									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											YEAR
										</span>
										<select class="textfield form-control" style="" name="biannually_year" id="biannually_year" required="">
											<option value="">*Select Year*</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>

										</select>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="all_type" id="all_type" style="width: 100px;" >
											<option value="1">Samples Summaries</option>
											<option value="2">Kit Usage</option>
											<option value="3">TAT</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>
						
						<tr style="height:20px;">
							<td colspan="5"><div class="hr hr8 hr-double"></div><td>
						</tr>
						<form method="post" action="<?php echo base_url().'eid/reports/lab_reports/4' ?>">
							<tr style = "">
								<td style="height:37px;">
									<div style="vertical-align:middle;float:right;padding-right:15%" >
										<button type="button" class="btn btn-white btn-sm btn-primary" style="width:223px;">Annually</button>
									</div>
								</td>
								<td>
								</td>
								<td>

									<div class="input-group my-input-group reports_spaced" style="width: 98.5%;">
										<span class="input-group-addon my-input-group-caption" style="">
											YEAR
										</span>
										<select class="textfield form-control" style="" name="yearly_year" id="yearly_year" required="">
											<option value="">*Select Year*</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>

										</select>
									</div>
								</td>
								<td>									
									<div class="input-group my-input-group reports_spaced">
										<span class="input-group-addon my-input-group-caption">
											Report Type
										</span>
										<select name="all_type" id="all_type" style="width: 100px;" >
											<option value="1">Samples Summaries</option>
											<option value="2">Kit Usage</option>
											<option value="3">TAT</option>
										</select>
									</div>
								</td>
								<td>									
									<div style="">
										<input type="submit" class="btn btn-primary btn-sm" value="Generate Report">
									</div>
								</td>
							</tr>
						</form>
					</table>
				</div>

				<div class="hr hr8 hr-double"></div>
			</div><!-- /.widget-main -->


		</div><!-- /.widget-body -->
	</div>
</div>

