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

    function edit_user(id,username,usertype,name,email,phone,editstatus){

	var str = "#tr_"+id;

	var row = $(str).html();

	$("#edit_table_row").html(row);

	$("#edituserid").val(id);
	$("#editusername").val(username);
	$("#editusertype").val(usertype);
	$("#editname").val(name);
	$("#editemail").val(email);
	$("#editphone").val(phone);

	$('input[name=editstatus][value=1]').prop('checked', false);
	$('input[name=editstatus][value=2]').prop('checked', false);
	$('input[name=editstatus][value=3]').prop('checked', false);
	$('input[name=editstatus][value=4]').prop('checked', false);
	$('input[name=editstatus][value=5]').prop('checked', false);

	if(editstatus==4 || editstatus==5){

		$('input[name=editstatus][value=1]').prop('disabled', true);
		$('input[name=editstatus][value=2]').prop('disabled', true);
		$('input[name=editstatus][value=5]').prop('disabled', true);

	}else{

		$('input[name=editstatus][value=1]').prop('disabled', false);
		$('input[name=editstatus][value=2]').prop('disabled', false);
		$('input[name=editstatus][value=5]').prop('disabled', false);

	}

	$('input[name=editstatus][value='+editstatus+']').prop('checked', true);

	
	$("#editdetailsdiv").modal("show");

}

function hide_edit(){
	$("#editdetailsdiv").modal("hide");
}


</script>