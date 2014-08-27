<script type="text/javascript">

$( document ).ready(function() {	
	// if (window.jQuery) {    
    // alert("workss");
	// } else {
	// alert("doesnt exist");
	// }
 		
	
	
	$(".widget-box").hide();
	$created_by = null;
	$('#tests_table').dataTable({
		"bProcessing": true,
		"iDisplayLength": 10,
	 	"bJQueryUI":true,
		"bSort":true,
		 "sPaginationType": "bootstrap",
	  	//"bPaginate":false,
	 	//"sScrollY": "200px",
	  	//"bFilter": false
	});	
	
	function getvalues(){
		$worksheet_id = $("#worksheet_id"+clickedrow).html();		
		$date_created = $("#date_created1").html();
		$created_by = $("#created_by"+clickedrow).html();
		$machine = $("#flag"+clickedrow).html();
		$status = $("#status"+clickedrow).html();
		$date_run = $("#date_run"+clickedrow).html();
		$date_updated = $("#date_updated"+clickedrow).html();
		$date_reviewed = $("#date_reviewed"+clickedrow).html();
		
	}
	
	// $("tr").click(function(){
		// //alert("Clicked = "+ clickedrow);
		// var id = document.getElementById("id"+clickedrow).innerHTML;
// 		
		// $(".blue").click(function(){
			// $("#blue_dialog").modal("show");
			// getvalues();
// 			
			// $("#worksheet_id_zoom").val($worksheet_id);
			// $("#date_created_zoom").val($date_created);
			// $("#created_by_zoom").val($created_by);
			// $("#machine_zoom").val($machine);
			// $("#status_zoom").val($status);
			// $("#date_run_zoom").val($date_run);
			// $("#date_updated_zoom").val($date_updated);
			// $("#date_reviewed_zoom").val($date_reviewed);
			// //console.log("works");
		// });
// 		
		// $(".green").click(function(){	
			// $("#green_dialog").modal("show");	
			// getvalues();
// 			
			// $("#worksheet_id_zoome").val($worksheet_id);
			// $("#date_created_zoome").val($date_created);		
			// $("#created_by_zoome").val($created_by);
			// $("#machine_zoome").val($machine);
			// $("#status_zoome").val($status);
			// $("#date_run_zoome").val($date_run);
			// $("#date_updated_zoome").val($date_updated);
			// $("#date_reviewed_zoome").val($date_reviewed);				
		// });
// 		
		// $(".red").click(function(){
			// $("#red_dialog").modal("show");		
			// getvalues();
// 			
			// $("#worksheet_id_zoomd").html($worksheet_id);
			// $("#date_created_zoomd").html($date_created);		
			// $("#created_by_zoomd").html($created_by);
			// $("#machine_zoomd").html($machine);
			// $("#status_zoomd").html($status);
			// $("#date_run_zoomd").html($date_run);
			// $("#date_updated_zoomd").html($date_updated);
			// $("#date_reviewed_zoomd").html($date_reviewed);
		// });	
// 		
		// //print sample
		// $("#print_sample").click(function(){
			// $("#print_dialog").modal("show");
			// getvalues();
// 			
			// $("#worksheet_id_zoomp").html($worksheet_id);
			// $("#date_created_zoomp").html($date_created);		
			// $("#created_by_zoomp").html($created_by);
			// $("#machine_zoomp").html($machine);
			// $("#status_zoomp").html($status);
			// $("#date_run_zoomp").html($date_run);
			// $("#date_updated_zoomp").html($date_updated);
			// $("#date_reviewed_zoomp").html($date_reviewed);
// 			
		// });
// 
	// });
	
	$("#close_dialogd").click(function(){
		$("#red_dialog").modal("hide");			
	});
	
	$("#close_dialoge").click(function(){
		$("#green_dialog").modal("hide");
	});
	
	$("#close_dialogv").click(function(){
		$("#blue_dialog").modal("hide");
	});
	
	$("#close_dialogp").click(function(){
		$("#green_dialog").modal("hide");
		$("#print_dialog").modal("hide");
	});

});


</script>

