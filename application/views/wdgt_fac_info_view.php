<div class="widget-box transparent">
    <div class="widget-header widget-header-flat">
        <h4 class="widget-title lighter">
            <i class="ace-icon fa fa-star orange"></i>
            Facilities Info 
        </h4>

        <div class="widget-toolbar">
            <a href="#" data-action="collapse">
                <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-body-inner my-widget-sm" style="">
            <div class="widget-main no-padding">
                <table class="table table-bordered table-striped">

                    <tbody>
                        <tr>
                            <td class="hidden-480">
                                <span class="label label-info ">Facilities served by this lab</span>
                            </td>
                            <td>
                                <b id="fac_served" class="green">0</b>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <span class="label arrowed arrowed-in-right">Facilities without emails</span>
                            </td>

                            <td>
                                <b id="fac_without_emails" class="green">0</b>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="label  arrowed arrowed-in-right"><s>Facilities without G4S details</s></span>
                            </td>

                            <td>
                                <b id="fac_without_g4s" class="red">0</b>
                            </td>
                        </tr>

                     <!--    <tr>
                            <td><span class="label label-success">Facilities with|without|total SMS Printers</span></td>

                            <td>
                                <b class="red">0</b>
                            </td>
                        </tr> -->
                       
                        <tr>
                            <td>
                                <span class="label label-success ">No of SMS printers served by lab</span>
                            </td>

                            <td>

                                <b id="fac_sms_printers" class="green">0</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.widget-main -->
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.widget-box -->


<script>
$(function () {
    $.getJSON("<?php echo base_url('dashboard/stat/facility').'/'.$program;?>", function(data) {
        $("#fac_served").html(data.fac_served);
        $("#fac_without_emails").html(data.fac_without_emails);
        $("#fac_without_g4s").html(data.fac_without_g4s);
        $("#fac_sms_printers").html(data.fac_sms_printers);
    });
});
</script>