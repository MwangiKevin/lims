
<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a href="#" data-toggle="modal" class="pink"> View Samples Entered </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>
<div class="row my-infobox">
	<div class="table-header">
		Samples info
	</div>
	<table id="tests_table" class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>Requisition No</th>
				<th>Facility Name</th>
				<th>Date Received</th>
				<th>Date Entered</th>
				<th>TAT (Dys)<br><small>[ Received - Entered ]</small></th>
				<th>No. of Samples</th>
				<th>No. of Rejected Samples</th>
				<th>Samples With Results</th>
				<th>Samples With No Results</th>
				<th>Batch Status</th>
				<th>Entered By</th>
				<th>Actions</th></tr>
		</thead>
		<tbody>
			<tr></tr>
		</tbody>
	</table>
</div>


<?php $this->load->view("samples_footer_view");?>