   <script type="text/javascript">
   function write_mail(){

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
function hide_edit(){
	$("#editdetailsdiv").modal("hide");
	$("#editdistrict").modal("hide");
}
</script>