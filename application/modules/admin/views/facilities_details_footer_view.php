
<script type="text/javascript">

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

$( document ).ready(function() {

	$('#tests_table_region').dataTable({
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

    function edit_facility(id,name,code,district,region,email,phone){

	var str = "#tr_"+id;

	var row = $(str).html();

	$("#edit_table_row").html(row);

	$("#editfacilityid").val(id);
	$("#editfacname").val(name);
	$("#editcode").val(code);
	$("#editdis").val(district);
	$("#editreg").val(region);
	$("#editemail").val(email);
	$("#editphone").val(phone);

	$("#editdetailsdiv").modal("show");

}

function edit_district(id,district,region) {
	var str = "#tr_"+id;

	var row = $(str).html();

	$("#edit_table_row").html(row);

	$("#editdistrictid").val(id);
	$("#districtname").val(district);
	$("#region").val(region);

}


function hide_edit(){
	$("#editdetailsdiv").modal("hide");
	$("#editdistrict").modal("hide");
}




</script>