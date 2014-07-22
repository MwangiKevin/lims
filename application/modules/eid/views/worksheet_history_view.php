<script>
	// $(function(){
			// $("#btn-show-modal").click(function(e){
				// e.preventDefault();
				// $("#dialog-example").modal("show");
			// });
		// });
</script>
	
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
					<th rowspan="2">Sample ID</th>
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
						
						$result = $res['result'];
						
						$date_run = $res['date_run'];
						$date_update = $res['date_updated'];
						$date_reviewed = $res['date_reviewed'];
						?>
						<script>
							var clickedrow;
							function rowclicked(id){
								clickedrow = id;
							}	
						</script>
						<tr onclick="rowclicked(<?php echo $i  ?>)">
							<td id="id<?php echo $i  ?>"><?php echo $i ?></td>
							<td id="date_created<?php echo $i?>"><?php echo $date_created ?></td>
							<td id="created_by<?php echo $i?>"><?php echo $created_by ?></td>
							<td id="flag<?php echo $i?>"><?php echo $flag ?></td>
							<td id="status<?php echo $i?>"><?php echo $status?></td>
							<?php
								if($result == 0){
									//positive
							?>
								<td id="positive_result">positive</td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
							<?php
								}else if($result == 1){
									//negative
							?>
								<td id="negative_result">negative</td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
								<td> - </td>
							<?php
								}else if($result == 2){
									//failed
							?>
								<td id="Failed_result">Failed</td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
							<?php
								}else if($result == 3){
									//redraw
							?>
								<td id="redraw_result">redraw</td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
							<?php
								}else{
									//no result
							?>
								<td id="redraw_result">No result</td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
							<?php	
								}
							 ?>
							<td id="date_run<?php echo $i?>"><?php echo $date_run?></td>
							<td id="date_updated<?php echo $i?>">2014-07-01<?php echo $date_update?></td>
							<td id="date_reviewed<?php echo $i?>"><?php echo $date_reviewed?></td>	
							<td>
								<div class="action-buttons">
									<a class="blue" href="#" data-toggle:"modal">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>
		
									<a class="green" href="#">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
		
									<a class="red" href="#">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
		
									<a class="green" href="#" id="print_sample">
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

<div class="modal fade" id="blue_dialog"  >	
	<div class="modal-content">
		<div class="modal-header">
				<center><h1 style="color:#000;">Sample View</h1></center>
		</div>
		
		<div class="modal-body">
			
		<center>
			<div id="column1"> 
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Sample ID:
					</span>
					<input name="sample_prep_no[]" id="sample_ID_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Created:
					</span>
					<input name="sample_prep_no[]" id="date_created_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Created By:
					</span>
					<input name="sample_prep_no[]" id="created_by_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Machine:
					</span>
					<input name="sample_prep_no[]" id="machine_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
			</div> 
			
			 <div id="column1">
			 	<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Satus:
					</span>
					<input name="sample_prep_no[]" id="status_zoom" class="form-control date-picker" type="text" style="width:100%;" />
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Run:
					</span>
					<input name="sample_prep_no[]" id="date_run_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Updated:
					</span>
					<input name="sample_prep_no[]" id="date_updated_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Reviewed:
					</span>
					<input name="sample_prep_no[]" id="date_reviewed_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
			</div>
			</center>
		</div>
		<div class="modal-footer" style="clear:both;">
			<center>
				<button class="btn btn-white btn-default btn-round" id="close_dialogv">
					<i class="ace-icon fa fa-times red2"></i>
					Cancel
				</button>
			</center>
		</div>
	</div>
</div>


<!-- edit dialog-->

<div class="modal fade" id="green_dialog"  >	
	<div class="modal-content">
		<div class="modal-header">
				<center><h1 style="color:#000;">Edit Sample</h1></center>
		</div>
		
		<div class="modal-body">
			<center>
		<div id="column1">
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Sample ID:
				</span>
				<input name="sample_prep_no[]" id="sample_ID_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Created:
				</span>
				<input name="sample_prep_no[]" id="date_created_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Created By:
				</span>
				<input name="sample_prep_no[]" id="created_by_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Machine:
				</span>
				<input name="sample_prep_no[]" id="machine_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
		</div> 
		
		<div id="column1">
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Satus:
				</span>
				<input name="sample_prep_no[]" id="status_zoome" class="form-control date-picker" type="text" style="width:100%;" />
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Run:
				</span>
				<input name="sample_prep_no[]" id="date_run_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Updated:
				</span>
				<input name="sample_prep_no[]" id="date_updated_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Reviewed:
				</span>
				<input name="sample_prep_no[]" id="date_reviewed_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
		</div>
		</center>
		</div>
		<div class="modal-footer" style="clear:both;">
			<center>
				<button class="btn btn-white btn-default btn-round" id="close_dialoge">
				<i class="ace-icon fa fa-times red2"></i>
				Cancel
		</button>
		<button class="btn btn-white btn-info btn-bold">
			<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
			Edit
		</button>
			</center>
		</div>
	</div>
</div>
<!-- edit dialog -->

<!-- delete dialog-->
<div class="modal fade" id="red_dialog"  >	
	<div class="modal-content">
		<div class="modal-header">
				<center><h1 style="color:#000;">Delete Sample</h1></center>
		</div>
		
		<div class="modal-body">
			<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
					<th rowspan="2">Sample ID</th>
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
				<tr>
					<td id="sample_id_zoomd"></td>
					<td id="date_created_zoomd"></td>
					<td id="created_by_zoomd"></td>
					<td id="machine_zoomd"></td>
					<td id="status_zoomd"></td>
					
					<td id="pos_zoomd"></td>
					<td id="neg_zoomd"></td>
					<td id="failed_zoomd"></td>
					<td id="redraw_zoomd"></td>
					<td id="no_result_zoomd"></td>
					<td id="total_zoomd"></td>
					
					<td id="date_run_zoomd"></td>
					<td id="date_updated_zoomd"></td>
					<td id="date_reviewed_zoomd"></td>
				</tr>
				
			</tbody>
		</table>
		</div>
		
		<div class="modal-footer">
			<center>
				<button class="btn btn-white btn-warning btn-bold">
					<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
					Delete
				</button>
				<button class="btn btn-white btn-default btn-round" id="close_dialogd">
					<i class="ace-icon fa fa-times red2"></i>
					Cancel
				</button>
			</center>
		</div>
	</div>
</div>
<!-- delete dialog-->

<!--print dialog-->
<div class="modal fade" id="print_dialog"  >	
	<div class="modal-content">
		<div class="modal-header">
				<center><h1 style="color:#000;">Print Sample</h1></center>
		</div>
		
		<div class="modal-body">
			<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
					<th rowspan="2">Sample ID</th>
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
				<tr>
					<td id="sample_id_zoomp"></td>
					<td id="date_created_zoomp"></td>
					<td id="created_by_zoomp"></td>
					<td id="machine_zoomp"></td>
					<td id="status_zoomp"></td>
					
					<td id="pos_zoomp"></td>
					<td id="neg_zoomp"></td>
					<td id="failed_zoomp"></td>
					<td id="redraw_zoomp"></td>
					<td id="no_result_zoomp"></td>
					<td id="total_zoomp"></td>
					
					<td id="date_run_zoomp"></td>
					<td id="date_updated_zoomp"></td>
					<td id="date_reviewed_zoomp"></td>
				</tr>
				
			</tbody>
		</table>
		</div>
		
		<div class="modal-footer">
			<center>
				<button class="btn btn-white btn-warning btn-bold">
					<li>
						<i class="ace-icon glyphicon glyphicon-print"></i>
						Print
					</li>
				</button>
				<button class="btn btn-white btn-default btn-round" id="close_dialogp">
					<i class="ace-icon fa fa-times red2"></i>
					Cancel
				</button>
			</center>
		</div>
	</div>
</div>
<!--Print dialog -->

<style>
#modal_head{
	color: #fff;
}
#column1{
	float:left;
	width:50%;
}	

</style>


<?php $this->load->view("worksheet_history_footer_view");?>		
