<!-- modal -->
<div class="modal fade" id="data" >
	<div class="modal-dialog" style="width:90%">
		<div class="modal-content">
			<?php echo form_open('upload/upload_commit'); ?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">File contents:</h4>
			</div>
			<div class="modal-body" id="dataBody">

				<table class="table table-bordered dataTable">
					<?php
					echo $uploaded;
					?>
				</table>

			</div>
			<div class="modal-footer" style="height:45px">
				<button type="submit" class="btn btn-primary upload">
					<i class="fa fa-arrow-up"></i> Upload Data
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<i class="fa fa-times"></i> Close
				</button>
			</div>
			<?php   echo form_close(); ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
