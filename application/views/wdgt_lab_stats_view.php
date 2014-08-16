<div class="widget-box transparent">
    <div class="widget-header widget-header-flat">
        <h4 class="widget-title lighter">
            <i class="ace-icon fa fa-star orange"></i>
            Lab Statistics for <?php echo Date("F-Y");?>
        </h4>

        <div class="widget-toolbar">
            <a href="#" data-action="collapse">
                <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-body-inner my-widget-md" style="">
            <div class="widget-main no-padding">
                <table class="table table-bordered table-striped">


                    <tbody>
                        <tr>
                            <td class="hidden-480">
                                <span class="label label-info ">Cummulative Tests</span>
                            </td>
                            <td>
                                <b id = "st_cumm_test" class="green">0</b>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <span class="label label-info arrowed-right">Received Samples</span>
                            </td>

                            <td>
                                <b id = "st_rec_samp"  class="green">0</b>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="label  arrowed arrowed-in-right"><s>Rejected Samples</s></span>
                            </td>

                            <td>
                                <b id = "st_rej_samp" class="red">0</b>
                            </td>
                        </tr>

                        <tr>
                            <td><span class="label label-danger">Failed Tests</span></td>

                            <td>
                                <b id = "st_failed_tst" class="red">0</b>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="label label-success arrowed arrowed-right">Tested Samples</span>
                            </td>

                            <td>

                                <b id = "st_tested_samp"  class="green">0</b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success arrowed arrowed-right">positive</span>
                            </td>

                            <td>

                                <b id = "st_pos" class="green">0</b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="label label-warning arrowed arrowed-right">Negative</span>
                            </td>

                            <td>

                                <b id = "st_neg"  class="green">0</b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success ">Total Tests done (including repeats)</span>
                            </td>

                            <td>

                                <b  id = "st_tot" class="green">0</b>
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
    $.getJSON("<?php echo base_url('dashboard/stat/lab').'/'.$program;?>", function(data) {
        $("#st_cumm_test").html(data.st_cumm_test);
        $("#st_rec_samp").html(data.st_rec_samp);
        $("#st_rej_samp").html(data.st_rej_samp);
        $("#st_failed_tst").html(data.st_failed_tst);
        $("#st_tested_samp").html(data.st_tested_samp);
        $("#st_pos").html(data.st_pos);
        $("#st_neg").html(data.st_neg);
        $("#st_tot").html(data.st_tot);
    });
});
</script>