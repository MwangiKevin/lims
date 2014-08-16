<div class="row">
	<h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a class="pink" data-toggle="modal" href="#"> Download or Email Report </a>
	</h4>
	<div class="hr hr-18 hr-double dotted"></div>
	<form method="POST" action="<?php echo base_url()?>reports/reports/download_national_report">
	<div class="widget-box">

		<div class="widget-header widget-header-flat widget-header-small">
			<h5 class="widget-title">
				<i class="ace-icon fa fa-list-alt"></i>
				All Samples Report
			</h5>
			
		<!-- <div id="report_download" style="float:right; cursor: pointer;">
			<a href="<?php echo base_url().'reports/reports/download_report/0/0/0/0/All Regions/National'?>">
				<i class="ace-icon fa fa-cloud-download"></i>
				Download Report
			</a>
			
			<a href="<?php echo base_url().'reports/email/admin_mail/'?>" style="margin-left: 2%; display: inline-block;">
				<i class="ace-icon fa fa-envelope"></i>
				Send Email
			</a>
		</div> -->
		<select name="all_type" id="all_type" style="width: 100px; float: right; margin-right: 2%; margin-top: .5%;" >
			<option value="1">Detailed</option>
			<option value="2">Summary</option>
		</select>
		</div>
		
		
		<div class="widget-body">
			<table style="font-size:65%;"  id="tests_table" class="table table-bordered table-responsive">
				<thead>
					<tr class="active" >
						<th rowspan="2"></th>
						<th rowspan="2">Sample ID</th>
						<th rowspan="2">Testing Lab</th>
						<th rowspan="2">Region</th>
						<th rowspan="2">District</th>
						<th rowspan="2">Facility</th>
						<th rowspan="2">Sex </th>				
						<th rowspan="2">DOB</th>
						<th rowspan="2">Age</th>
						<th rowspan="2">Infant Propholaxyis</th>
						<th rowspan="2">Date Collected</th>
						<th rowspan="2">Spots</th>
						<th rowspan="2">Date of Testing</th>
						<th rowspan="2">Date of Dispatch</th>
						<th rowspan="2">Test Result</th>				
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 0;
						foreach ($all_samples as $key => $value) {
							$i++;
							$age = date('Y') - $value["dob"];
							$sample_id = $value["sample_id"];
							$region=  $value["region_name"]; ; 
							$district = $value["district_name"] ;
							$facility = $value["facility_name"];
							$sex = $value["gender"];
							$dob = $value["dob"];
							$age_yrs = $age;
							$propholaxis = $value["propholaxis"];
							$date_collected = $value["date_collected"];
							$spots = $value["dbs_spots"];
							$date_tested = $value["date_tested"];
							$dispatch = $value["dispatch"];
							$result = $value["test_result"];
							
					?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $sample_id ?></td>
							<td></td>
							<td><?php echo $region ?> </td>
							<td><?php echo $district ?></td>
							<td><?php echo $facility ?></td>
							<td><?php echo $sex ?></td>
							<td><?php echo $dob ?></td>
							<td><?php echo $age_yrs ?></td>
							<td><?php echo $propholaxis ?></td>
							<td><?php echo $date_collected ?></td>
							<td><?php echo $spots ?></td>
							<td><?php echo $date_tested ?></td>
							<td><?php echo $dispatch ?></td>
							<td><?php echo $result ?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<input type="submit" class="btn btn-primary" name="download_report" id="download_report" value="Download Report" >
			<!-- <input type="submit" class="btn" name="send_as_email" value="Send As Email"> -->
		</div>
	</div>
	</form>
</div>