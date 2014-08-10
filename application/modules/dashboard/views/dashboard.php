<div class="page-header">
    <h1>
        Dashboard
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            overview &amp; stats
        </small>
    </h1>
</div>

<div class = "row" >

    <div class="col-sm-6">        
            <?php $this->load->view("wdgt_testing_trend_view");?>
    </div>
    <div class="col-sm-6">        
            <?php $this->load->view("wdgt_tat_view");?>
    </div>

</div>

<div class="hr  hr-dotted"></div>

<div class ="my-infobox">
    <div class ="row">

        <div class="col-sm-4">  
            <?php $this->load->view("wdgt_month_summ_view");?>      
        </div>
        <div class="col-sm-4">            
            <?php $this->load->view("wdgt_lab_stats_view");?>
        </div>
        <div class="col-sm-4">    
            <?php $this->load->view("wdgt_todays_summ_view");?>
        </div>
    </div>
</div>



<div class ="my-infobox">
    <div class ="row">
        <div class="col-sm-6">
            <div class="widget-box transparent" id="recent-box">
                <div class="widget-header">
                    <h4 class="widget-title lighter smaller">
                        <i class="ace-icon fa fa-rss orange"></i>RECENT
                    </h4>
                    <div class="widget-toolbar no-border">
                        <ul class="nav nav-tabs" id="recent-tab">
                            <li class="active">
                                
                                <a data-toggle="tab" href="#batches-tab"><i class="grey ace-icon fa fa-tasks bigger-110"></i>Batches</a>
                            </li>

                            <li>
                                
                                <a data-toggle="tab" href="#notifications-tab"><i class="green ace-icon fa fa-bell bigger-110"></i>Notifications</a>
                            </li>

                            <li>
                                
                                <a data-toggle="tab" href="#messages-tab"><i class="blue ace-icon fa fa-envelope bigger-110"></i>Messages</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-body my-widget-sm">
                    <div class="widget-main padding-6">
                        <div class="tab-content padding-8">
                            <div id="batches-tab" class="tab-pane active">
                            </div>

                            <div id="notifications-tab" class="tab-pane">

                            </div><!-- /.#member-tab -->

                            <div id="messages-tab" class="tab-pane">
                                
                            </div>
                        </div>

                        <div class="hr hr8"></div>
                    </div>
                </div>
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
        <div class="col-sm-6">            
            <?php $this->load->view("wdgt_fac_info_view");?>
        </div>

    </div>
</div>


<script>
$(function () {    

    $("#batches-tab").load("<?php echo base_url('dashboard/stat/batches').'/'.$program;?>");
    $("#notifications-tab").load("<?php echo base_url('dashboard/stat/notifications').'/'.$program;?>");
    $("#messages-tab").load("<?php echo base_url('dashboard/stat/messages').'/'.$program;?>");

});
</script>
