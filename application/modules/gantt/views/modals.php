<!-- Data modal -->
<div class="modal fade" id="data" >
	<div class="modal-dialog">
		<div class="modal-content">
			<?php echo form_open('upload'); ?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Event Viewer</h4>
			</div>
			<div class="modal-body">

				<label>Event Name</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
					<input id="eventName" type="text" class="form-control" >

				</div>

				<div class="input-group myGroup">
					<label>Start Date</label>
					<input type="date" class="form-control">

				</div>

				<div class="input-group myGroup">
					<label>End Date</label>
					<input type="date" class="form-control" >

				</div>

				<label>Responsible</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" >

				</div>

			</div>
			<div class="modal-footer" style="height:45px">
				<button id="addEvent" type="submit" class="btn btn-primary">
					<i class="fa fa-adjust"></i>Update Event
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<i class="fa fa-times"></i> Close
				</button>
			</div>
			<?php   echo form_close(); ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Add Event modal -->
<div class="modal fade" id="addEventModal" >
	<div class="modal-dialog">

		<div class="modal-content">
			<?php echo form_open(); ?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">New Event</h4>
			</div>
			<div class="modal-body">

				<label>Event Name</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
					<input type="text" class="form-control" placeholder="Please Enter Event Name..." >

				</div>

				<div class="input-group myGroup">
					<label>Start Date</label>
					<input type="date" class="form-control">

				</div>

				<div class="input-group myGroup">
					<label>End Date</label>
					<input type="date" class="form-control" >

				</div>

				<label>Responsible</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" class="form-control" placeholder="Please Enter Person Responsible..." >

				</div>

			</div>
			<div class="modal-footer" style="height:45px">
				<button id="addEvent" type="submit" class="btn btn-primary">
					<i class="fa fa-plus"></i>Add Event
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<i class="fa fa-times"></i> Close
				</button>
			</div>
			<?php   echo form_close(); ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
