<li class="dropdown-header">
    <i class="ace-icon fa fa-check"></i>
   <?php echo sizeof($batches);?> Batch/es to complete
</li>
<?php 
    
    foreach ($batches as $key => $value) {
?>
<li>
    <a href="#">
        <div class="clearfix">
            <span class="pull-left"><?php echo $value['Desc'];?> <br/>Test Requisition </span>
            <span class="pull-right">(Testing) <?php echo $value['perc'];?>%</span>
        </div>

        <div class="progress progress-mini">
            <div style="width:<?php echo $value['perc'];?>%" class="progress-bar"></div>
        </div>
    </a>

</li>

<?php 

    }
?>

<li class="dropdown-footer">
    <a href="<?php echo base_url('eid/requisition/samples');?>">
        See tasks with details
        <i class="ace-icon fa fa-arrow-right"></i>
    </a>
</li>
