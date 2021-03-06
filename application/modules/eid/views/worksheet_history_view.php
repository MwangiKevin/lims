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
					$positive = 0;
					$negative = 0;
					$failed = 0;
					$redo = 0;
					$no_result = 0;
					
					foreach($history AS $res){
						$i++;
						$date_created = $res['date_created'];
						$created_by = $res['created_by'];
						$flag = $res['flag'];
						$status = $res['status'];
						$worksheet_id= $res['id'];
						//$result = $res['result'];
						
						$date_run = $res['date_run'];
						$date_update = $res['date_updated'];
						$date_reviewed = $res['date_reviewed'];
						$total = $res['Total'];
						?>
						<script>
							var clickedrow;
							function rowclicked(id){
								clickedrow = id;
							}	
						</script>
						<tr onclick="rowclicked(<?php echo $i  ?>)">
							<td id="id<?php echo $i  ?>"><?php echo $i ?></td>
							<td id="worksheet_id<?php echo $i?>"><?php echo $worksheet_id  ?></td>
							<td id="date_created<?php echo $i?>"><?php echo $date_created ?></td>
							<td id="created_by<?php echo $i?>"><?php echo $created_by ?></td>
							<td id="flag<?php echo $i?>"><?php echo $flag ?></td>
							<td id="status<?php echo $i?>"><?php echo $status?></td>
							
							<?php
								// if($result == 0){
									// //positive
									// $positive++;
								// }else if($result == 1){
									// //negative
									// $negative++;
								// }else if($result == 2){
									// //failed
									// $failed++;
								// }else if($result == 3){
									// //redraw
									// $redo++;
								// }else{
									// //no result
									// $no_result;
								// }
							 ?>
							<td id="positive_result"><?php echo $positive ?></td>
							<td id="negative_result"> <?php echo $negative ?> </td>
							<td id="failed_result"> <?php echo $failed ?> </td>
							<td id="redo_result"> - </td>
							<td id="failed_result"> - </td>
							<td id="total_samples"> <?php echo $total ?> </td>
							
							<td id="date_run<?php echo $i?>"> <?php echo $date_run?></td>
							<td id="date_updated<?php echo $i?>"> <?php echo $date_update?></td>
							<td id="date_reviewed<?php echo $i?>"> <?php echo $date_reviewed?></td>	
							<td>
								<div class="action-buttons">
									<a class="blue" href="<?php echo base_url()."eid/worksheet/view_zoom/".$worksheet_id ?>" data-toggle:"modal">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>
		
									<a class="green" href="<?php echo base_url()."eid/worksheet/edit_zoom/".$worksheet_id ?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
		
									<a class="red" href="<?php echo base_url()."eid/worksheet/delete_zoom/".$worksheet_id ?>">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
		
									<a class="green" href="<?php echo base_url()."eid/worksheet/print_worksheet_history/".$worksheet_id ?>" id="print_sample">
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
						Worksheet ID:
					</span>
					<input name="worksheet_id_zoom" id="worksheet_id_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Created:
					</span>
					<input name="date_created_zoom" id="date_created_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Created By:
					</span>
					<input name="created_by_zoom" id="created_by_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Machine:
					</span>
					<input name="machine_zoom" id="machine_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
			</div> 
			
			 <div id="column1">
			 	<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Satus:
					</span>
					<input name="status_zoom" id="status_zoom" class="form-control date-picker" type="text" style="width:100%;" />
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Run:
					</span>
					<input name="date_run_zoom" id="date_run_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Updated:
					</span>
					<input name="date_updated_zoom" id="date_updated_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
				</div>
				<div class="input-group my-input-group nb" style="width:50%">
					<span class="input-group-addon my-input-group-caption" >
						Date Reviewed:
					</span>
					<input name="date_reviewed_zoom" id="date_reviewed_zoom" class="form-control date-picker" type="text" style="width:100%;"/>
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
				<form method="POST" action="<?php echo base_url()?>eid/worksheet/edit_worksheet">
					
		<div id="column1">
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Worksheet ID:
				</span>
				<input name="worksheet_id_zoome" id="worksheet_id_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Created:
				</span>
				<input name="date_created_zoome" id="date_created_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Created By:
				</span>
				<input name="created_by_zoome" id="created_by_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Machine:
				</span>
				<input name="machine_zoome" id="machine_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
		</div> 
		
		<div id="column1">
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Satus:
				</span>
				<input name="status_zoome" id="status_zoome" class="form-control date-picker" type="text" style="width:100%;" />
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Run:
				</span>
				<input name="date_run_zoome" id="date_run_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Updated:
				</span>
				<input name="date_updated_zoome" id="date_updated_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
			</div>
			<div class="input-group my-input-group nb" style="width:50%">
				<span class="input-group-addon my-input-group-caption" >
					Date Reviewed:
				</span>
				<input name="date_reviewed_zoome" id="date_reviewed_zoome" class="form-control date-picker" type="text" style="width:100%;"/>
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
				<span>
					<input type="submit" class="btn btn-white btn-info btn-bold" value="Edit" />
				</span>
			</center>
			</form>
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
				<form method="post" action="<?php echo base_url()?>eid/worksheet/delete_worksheet">
					<tr class="active">
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
					<tr>
						<td id="worksheet_id_zoomd" name="worksheet_id_zoomd"></td>
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
					<!-- <i class="ace-icon fa fa-trash-o bigger-120 orange"></i> -->
					<input type="submit" class="btn btn-white btn-warning btn-bold" value="Delete"/>
					<button class="btn btn-white btn-default btn-round" id="close_dialogd">
						<i class="ace-icon fa fa-times red2"></i>
						Cancel
					</button>
				</center>
			</div>
		</form>
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
				<tr>
					<td id="worksheet_id_zoomp"></td>
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
						<!-- <i class="ace-icon glyphicon glyphicon-print"></i> -->
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
