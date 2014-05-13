<script src="<?php echo base_url().'assets/scripts/jquery-1.10.2.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/bootstrap/bootstrap.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/datatables/paging.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/modernizr.js'?>"></script>
<script src="<?php echo base_url().'assets/scripts/datatables/jquery.dataTables.min.js'?>"></script>
<script>
	$(document).ready(function() {
posted = <?php echo($posted); ?>
	;
	if (posted != 0) {
		$('#data').modal('show');

		$('#data').delay(4000, function(nxt) {

			nxt();
		});
	}
	$('#upload_button').change(function() {

		$("#upload_form").submit();

	});
	$('.dataTable').dataTable({
		 "sDom": "<'row'<'span8'l><'span8'f>r>t<'row'<'span8'i><'span8'p>>"
	});
	
	/*$().();
	$().(function(){
	
	});*/
$('.dataTables_filter label input').addClass('form-control');
$('.dataTables_filter').addClass('form-inline');
$('.dataTables_length').addClass('form-inline');
$('.dataTables_length select').addClass('form-control');
	/*$(".upload").click(function(){
	 alert("sdhvgikl")
	 });*/

	});
</script>