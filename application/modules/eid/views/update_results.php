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
		</form>
	</div>

	<script>

			Dropzone.options.dz = {
  			paramName: "file", 
  			maxFilesize: 10, 
  			accept: function(file, done) {
  			 	if ((file.name.substring((file.name.length-4),file.name.length) != ".txt")&&(file.name.substring((file.name.length-4),file.name.length) != ".csv")&&(file.name.substring((file.name.length-4),file.name.length) != ".TXT")&&(file.name.substring((file.name.length-4),file.name.length) != ".CSV")) {
  			 		done("Wrong File Type");
  			 	}
  			 	else { done(); }
  			}
			};

	</script>