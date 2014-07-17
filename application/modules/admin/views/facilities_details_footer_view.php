<script type="text/javascript">


    function edit_facility(id,name,district,region,email,phone){

	var str = "#tr_"+id;

	var row = $(str).html();

	$("#edit_table_row").html(row);

	$("#editfacilityid").val(id);
	$("#editfacname").val(name);
	$("#editdis").val(district);
	$("#editreg").val(region);
	$("#editemail").val(email);
	$("#editphone").val(phone);

	$("#editdetailsdiv").modal("show");

}

function hide_edit(){
	$("#editdetailsdiv").modal("hide");
}

$( document ).ready(function() {

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
});


</script>