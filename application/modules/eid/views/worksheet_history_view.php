<div >
	<h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a href="#" data-toggle="modal" class="pink"> View Worksheets Created </a>
	</h4>
	<div class="hr hr-18 hr-double dotted"></div>
	
	<div class="row my-infobox">
		<div class="table-header">
			Worksheet info
		</div>
		<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
					<th rowspan="2">#</th>
					<th rowspan="2">Date Created</th>
					<th rowspan="2">Created By</th>
					<th rowspan="2">Machine</th>
					<th rowspan="2">Status</th>
					<th rowspan="1" colspan = "6" ><center>Samples Aggregates</center></th>				
					<th rowspan="2">Date Run</th>
					<th rowspan="2">Date Updated</th>
					<th rowspan="2">Date Reviewed</th>
					<th rowspan="2">Tasks</th>
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
					$i = 0;
					foreach($history AS $res){
						$i++;
						$date_created = $res['date_created'];
						$created_by = $res['created_by'];
						$flag = $res['flag'];
						$status = $res['status'];
						$date_run = $res['date_run'];
						$date_update = $res['date_updated'];
						$date_reviewed = $res['date_reviewed'];
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $date_created ?></td>
							<td><?php echo $created_by ?></td>
							<td><?php echo $flag ?></td>
							<td><?php echo $status?></td>
							<td>44</td>
							<td>44</td>
							<td>44</td>
							<td>44</td>
							<td>44</td>
							<td>44</td>
							<td><?php echo $date_run?></td>
							<td><?php echo $date_update?></td>
							<td><?php echo $date_reviewed?></td>	
							<td class="">
								<div class="action-buttons">
									<a class="blue" href="#">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>
		
									<a class="green" href="#">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
		
									<a class="red" href="#">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
		
									<a class="green" href="#">
										<i class="ace-icon fa fa-print bigger-130"></i>
									</a>
								</div>
							</td>					
						</tr>
						
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>


<?php $this->load->view("worksheet_history_footer_view");?>