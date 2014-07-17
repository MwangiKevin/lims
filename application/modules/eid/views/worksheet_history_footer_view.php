<script type="text/javascript">

$( document ).ready(function() {	
	// if (window.jQuery) {    
    // alert("workss");
	// } else {
	// alert("doesnt exist");
	// }
 		
	
	
	$(".widget-box").hide();
	
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
	
	$("tr").click(function(){
		//alert("Clicked = "+ clickedrow);
		var id = document.getElementById("id"+clickedrow).innerHTML;
		var date_created = document.getElementById("date_created"+clickedrow).innerHTML;
		var created_by = document.getElementById("created_by"+clickedrow).innerHTML;
		var machine = document.getElementById("flag"+clickedrow).innerHTML;
		var status = document.getElementById("status"+clickedrow).innerHTML;
		var date_run = document.getElementById("date_run"+clickedrow).innerHTML;
		var date_updated = document.getElementById("date_updated"+clickedrow).innerHTML;
		var date_reviewed =  document.getElementById("date_reviewed"+clickedrow).innerHTML;
		
		document.getElementById("date_created_zoom").value = date_created ;
		document.getElementById("created_by_zoom").value = created_by;
		document.getElementById("machine_zoom").value = machine;
		document.getElementById("status_zoom").value = status;
		document.getElementById("date_run_zoom").value = date_run;
		document.getElementById("date_updated_zoom").value = date_updated;
		document.getElementById("date_reviewed_zoom").value = date_reviewed;
		
	
		
		$(".green").click(function(){	
			$("#green_dialog").modal("show");		
		});
		
		$(".blue").click(function(){
			$("#blue_dialog").modal("show");
		});
		
		$(".red").click(function(){
			$("#red_dialog").modal("show");		
		});	
	});
	
	$("#close_dialogd").click(function(){
		$("#red_dialog").modal("hide");			
	});
	
	$("#close_dialoge").click(function(){
		$("#green_dialog").modal("hide");
	});
	
	$("#close_dialogv").click(function(){
		$("#blue_dialog").modal("hide");
	});

});


</script>

