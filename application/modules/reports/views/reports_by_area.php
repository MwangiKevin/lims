<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a class="pink" data-toggle="modal" href="#"> <?php echo "Area" ?> Report </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<div class="widget-header widget-header-flat" style="margin-bottom: 20px;">
	<div class="widget-title smaller">
		<strong>
			<h2 style="display: inline-block;"><?php echo $area_name ?></h2>
			<h5>Date Range: <?php echo "Start Date:  " .$start_date .".    "."End Date:  ". $end_date."."; ?> </h5>
		</strong>
		<!--Enable on-click dislay modal to select pdf or excel -->		
		<div id="report_download" style="position: absolute; right: 5%; top: 50%; cursor: pointer;">
			<a href="<?php echo base_url().'reports/reports/download_report/'.$format.'/'.$start_date.'/'.$end_date.'/'.$area_name.'/'.$area ?>">
				<i class="ace-icon fa fa-cloud-download"></i>
				Download Report
			</a>
			&nbsp;
			<a href="<?php echo base_url().'reports/email/compose_mail/'?>">
				<i class="ace-icon fa fa-envelope"></i>
				Send Email
			</a>
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
				foreach($sample as $key => $value){
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
				<td><?php echo 44 ?></td>
				<td><?php echo $region ?></td>
				<td><?php echo $district ?></td>
				<td><?php echo $facility ?></td>
				<td><?php echo $sex ?></td>
				<td><?php echo $dob ?></td>
				<td><?php echo $age_yrs ?></td>
				<td><?php echo $propholaxis ?></td>
				<td><?php echo $date_collected ?></td>
				<td><?php echo $spots ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo $date_tested ?></td>
				<td><?php echo $dispatch ?></td>
				<td><?php echo $result ?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
