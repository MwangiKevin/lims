<center>
	<div id = "title" style="background-image:'http://127.0.0.1/lims/img/tz.png' ">
		<img src="<?php echo base_url("img/tz.png");?>" height="140" width="70%" alt="NACP">
		<hr/>
		<h1> Worksheet History </h1>
		<hr/>
	</div>
	
	<table id="tests_table" class="table table-bordered table-responsive" border="1px">
		<thead>
			<tr class="active">
				<th rowspan="2"></th>
				<th rowspan="2">Worksheet ID</th>
				<th rowspan="2">Date Created</th>
				<th rowspan="2">Created By</th>
				<th rowspan="2">Machine</th>
				<th rowspan="2">Status</th>
				<th rowspan="1" colspan = "6" ><center>Samples Aggregates</center></th>				
				<th rowspan="2">Date Run</th>
				<th rowspan="2">Date Updated</th>
				<th rowspan="2">Date Reviewed</th>
			</tr>
			<tr class="active">
				<th rowspan="1">POS</th>
				<th rowspan="1">NEG</th>
				<th rowspan="1">Failed</th>
				<th rowspan="1">Redraw</th>
				<th rowspan="1">No Result</th>
				<th rowspan="1">Total</th>
			</tr>
		</thead>
		
		<tbody>
			
		
	<?php
	echo "workss";
		foreach ($history as $key => $value) {
			$worksheet_id = $value['id'];
			$date_created = $value['date_created'];
			$created_by = $value['created_by'];
			$machine = $value['flag'];
			$status = $value['status'];
			$result = $value['result'];
			$date_run = $value['date_run'];
			$date_updated = $value['date_updated'];
			$date_reviewed = $value['date_reviewed'];
			
			
			if($machine == 0){//cobas
				$machine = "Cobas";
			}else if($machine == 1){//abbot
				$machine = "Abbott";
			}else{}
	?>
	<tr>
				<td></td>
				<td><?php echo $worksheet_id ?></td>
				<td><?php echo $date_created ?></td>
				<td><?php echo $created_by ?></td>
				<td><?php echo $machine ?></td>
				<td><?php echo $status ?></td>
				<td> POSITIVE </td>
				<td> NEGATIVE </td>
				<td> FAILED </td>
				<td> REDRAW </td>
				<td> NO RESULT </td>
				<td> TOTAL </td>
				<td><?php echo $date_run ?></td>
				<td><?php echo $date_updated ?> </td>
				<td><?php echo $date_reviewed ?></td>
			</tr>
	<?php
		}
	 
	?>
	</tbody>
	</table>
	
	
	
	
</center>