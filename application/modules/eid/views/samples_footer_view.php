<script type="text/javascript">

$( document ).ready(function() {

	$('#tests_table').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo base_url();?>utils/ajax/get_requisition_details_json"
	});	
});


</script>