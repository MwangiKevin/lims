<script type="text/javascript">


$('#facility').change(function() {

    var facility_id =$('#facility').val();
    var facility_details;

    $.getJSON("<?php echo base_url('utils/ajax/get_facility_details');?>/"+facility_id, function(data) {
        facility_details = data;

        $('#facility_code').val(facility_details.facility_code);
        $('#district').val(facility_details.district_name);
        $('#region').val(facility_details.region_name);
        $('#telephone1').val(facility_details.facility_telephone);
        $('#telephone2').val(facility_details.facility_telephone2);
        $('#address').val(facility_details.facility_mail_address);
        $('#email').val(facility_details.facility_email);
        $('#contact_phone').val(facility_details.facility_contact_person_phone);

    });  

});

$( document ).ready(function() {

    var test_reason;

    $.getJSON("<?php echo base_url('assets/json/test_reasons_eid.json');?>", function(data) {
        test_reason = data;
        $(".test_reason").select2({ data: test_reason ,multiple: true});
    });


});


$(".add").click(function() {

     $('.datepicker').datepicker('remove');
     $table = $('#tests_table');
     var cloned_object = $table.find('tr:last').clone(true);

     var id = cloned_object.attr("id");
     var next_id = parseInt(id) + 1;


    cloned_object.attr("id", next_id);
    cloned_object.find("input").val("");
    cloned_object.find("#remove").removeClass( "hide" )

    cloned_object.find("#test_reason_td").html('<input name="test_reason[]" id="test_reason" value="" class="form-control test_reason"  type="text">');

    cloned_object.find("#remove").attr("onclick","remove_row("+next_id+")");


     cloned_object.insertAfter('#tests_table tr:last');

     $('.remove').show();
     $('.datepicker').datepicker('remove');

     $('.datepicker').datepicker({
          format: 'dd-m-yyyy',
          autoclose: true
    });

    var test_reason;

    $.getJSON("<?php echo base_url('assets/json/test_reasons_eid.json');?>", function(data) {
        test_reason = data;
        $(".test_reason").select2({ data: test_reason ,multiple: true});
    });

     return false;
});

function  remove_row(id){
      $("#"+id).remove();
}


</script>