<script src="<?php echo base_url().'assets/scripts/jquery-1.10.2.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/bootstrap/bootstrap.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/modernizr.js'?>"></script>
<script>
	$(document).ready(function() {

		$("#addEvent").click(function() {
			$('#addEventModal').modal('show');
		});
		$("li.gantt-label").hover(function() {
			$('li.gantt-label').popover('toggle');
		});
		$(".gantt-block-label").hover(function() {
			$('.gantt-block-label').popover('toggle');
		});

		$("strong.gantt-block-label").click(function() {
			$('#data').modal('show');
			blockID = $(this).attr("id");
			$('#data').delay(2000).queue(function(nxt) {
				$("#eventName").val(blockID);
				nxt();
			});

		});

	}); 
</script>