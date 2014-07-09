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
			</tbody>
		</table>

	</div>
	<div class="row my-infobox">
		<form action="<?php echo base_url("eid/results/upload_file");?>" class="dropzone" id="dz" method="post">
			<div class="fallback">
				<input name="file" type="file" multiple="">
			</div>
				<!-- <input name="submit" type="submit" > -->
		</form>
	</div>

	<script>
			//new Dropzone(".dz", { /* options */ });
	</script>