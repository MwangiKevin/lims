
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
