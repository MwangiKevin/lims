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

        <div class="col-sm-4">            
            <?php $this->load->view("wdgt_tasks_view");?>
        </div>

        <div class="col-sm-4">            
            <?php $this->load->view("wdgt_fac_info_view");?>
        </div>
    </div>
</div>