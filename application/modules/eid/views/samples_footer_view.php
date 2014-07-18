<script type="text/javascript">

$( document ).ready(function() {

	$('#tests_table').dataTable({
		 // 	"sPaginationType": "bootstrap",
   //          "bProcessing": true,
   //          "bServerSide": true,
   //          "sAjaxSource": "<?php echo base_url();?>utils/ajax/get_requisition_details_json" ,
		 // 	// "bJQueryUI":true,
			// "bSerchable":true,
			// "bSort":true,
		 //  	"bPaginate":true,
		 //  	"iDisplayLength":10,
		 "bJQueryUI":true, 
		 "sAjaxSource": "<?php echo base_url();?>utils/ajax/get_requisition_details_json" ,
		 "aoColumnDefs": [
		 { "bSortable": false, "aTargets": [ 0 ] }
		 ],
		 "aaSorting": [[1, 'asc']]

		 
		});	
});


</script>