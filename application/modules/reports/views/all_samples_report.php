<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a class="pink" data-toggle="modal" href="#"> All Tested Samples </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<div class="widget-header widget-header-flat" style="margin-bottom: 20px;">
	<div class="widget-title smaller">
		<strong>
			<h2>Area : All Regions</h2>
			<h5 >Date Range: Start Date <?php echo $start_date.".". "     End Date  ". $end_date."."; ?> </h5>
		</strong>
		<!--Enable on-click dislay modal to select pdf or excel -->		
		<div id="report_download" style="position: absolute; right: 5%; top: 50%; cursor: pointer;">
			<a href="<?php echo base_url().'reports/reports/download_report/'.$format.'/'. $start_date.'/'. $end_date.'/Tanzania/National'?>">
				<i class="ace-icon fa fa-cloud-download"></i>
				Download Report
			</a>
			&nbsp;
			<?php echo $email_download_path ?>
		</div>
	</div>
</div>

<div class="row my-infobox">
	<div class="table-header">
		Worksheet info
	</div>
	<table style="font-size:65%" id="tests_table" class="table table-bordered table-responsive">
		<thead>
			<tr class="active">
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
				<th rowspan="2">Received Status</th>
				<th rowspan="2">Rejected Reason <br />/Repeat Reason</th>
				<th rowspan="2">HIV Status of Mother</th>
				<th rowspan="2">PMTCT Intervention</th>
				<th rowspan="2">Breast Feeding</th>
				<th rowspan="2">Entry Point</th>
				<th rowspan="2">Date of Receving</th>
				<th rowspan="2">Date of Testing</th>
				<th rowspan="2">Date of Dispatch</th>
				<th rowspan="2">Test Result</th>				
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 0;
				foreach($all_samples as $key => $value){
					$i++;
					$sample_id = $value['sample_id'];
					$region_name = $value['region_name'];
					$district_name = $value['district_name'];
					$facility_name = $value['facility_name'];
					$gender = $value['gender'];
					$dob = $value['dob'];
					$propholaxis = $value['propholaxis'];
					$date_collected = $value['date_collected'];
					$dbs_spots = $value['dbs_spots'];
					$acceptance_status = $value['acceptance_status'];
					$age = date("Y") - $dob; 
					$dispatch = $value['dispatch'];
					$date_tested = $value['date_tested'];
					$results = $value['test_result'];
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $sample_id ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo $region_name ?></td>
				<td><?php echo $district_name ?></td>
				<td><?php echo $facility_name ?></td>
				<td><?php echo $gender ?></td>
				<td><?php echo $dob ?></td>
				<td><?php echo  $age ?></td>
				<td><?php echo $propholaxis ?></td>
				<td><?php echo $date_collected ?></td>
				<td><?php echo $dbs_spots ?></td>
				<td><?php echo $acceptance_status ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo $date_tested ?></td>
				<td><?php echo $dispatch ?></td>
				<td><?php echo $results ?></td>
			<?php
				}
			?>
			</tr>
		</tbody>
	</table>
</div>
