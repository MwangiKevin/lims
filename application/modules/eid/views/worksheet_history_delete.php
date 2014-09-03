<div >
	<h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a href="#" data-toggle="modal" class="pink"> Delete Samples in a selected worksheet </a>
	</h4>
	<div class="hr hr-18 hr-double dotted"></div>

	<div class="row my-infobox">
		<div class="table-header">
			Sample Info &nbsp; &nbsp; Worksheet No.: <?php echo $worksheet_id ?>
		</div>
		<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
					<th rowspan="2"></th>
					<th rowspan="2">Sample ID</th>
					<th rowspan="2">DBS Created by</th>
					<th rowspan="2">Worksheet Created By</th>
					<th rowspan="2">Machine</th>
					<th rowspan="2">DBS Number</th>
					<th rowspan="2">Date of Sample Collection</th>
					<th rowspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i=0;
					foreach ($sample_details as $key => $value) {
						$i++;
						$created_by = $value['created_by'];
						$dbs = $value['no_of_dbs_spots'];
						$sample_id = $value['id'];
						$date_collected = $value['date_collected'];
						$machine = $value['flag'];
						$clinician_name = $value['clinician_name'];
						$deleted = $value['delete'];
						
						if($machine == 0){//represents cobas
							$machine = "Cobas";
						}else if($machine == 1){//represents abbott
							$machine = "Abbott";	
						}else{}
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $sample_id ?></td>
					<td><?php echo $clinician_name ?></td>
					<td><?php echo $created_by ?></td>
					<td><?php echo $machine ?></td>
					<td><?php echo $dbs ?></td>
					<td><?php echo $date_collected ?></td>
					<td>
				<?php
					if($deleted == 0){
				?>
						<a class="red" href="<?php echo base_url()."eid/worksheet/delete_worksheet/".$sample_id."/".$worksheet_id ?>">
							<i class="ace-icon fa fa-trash-o bigger-130"></i>
						</a>
				<?php
					}else if($deleted == 1){
				?>
						<a href="<?php echo base_url()."eid/worksheet/restore_worksheet/".$sample_id."/".$worksheet_id ?>" class="btn btn-danger btn-sm">
							<i class="ace-icon fa fa-reply icon-only"></i>
						</a>
				<?php
					} 
				?>
					</td>
				</tr>
				<?php
					} 
				?>
				
			</tbody>
		</table>
	</div>
</div>
