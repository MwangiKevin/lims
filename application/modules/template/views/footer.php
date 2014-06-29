<div class="footer">
	<div class="footer-inner" style="position :fixed;background:#fff; width: 30%;z-index:50;margin-left:56%">
		<div class="footer-content" style = "height: 35px;background-color: #fff;">
			<span class="bigger-120" style="float:left">
				<span class="blue"><?php echo $this->config->item("copyrights");?></span>
			</span>
			<span class="action-buttons" style="float:right">
				<a href="#">
					<!-- <i class="ace-icon fa fa-rss-square orange bigger-200"></i> -->
				</a>
			</span>
		</div>
	</div>
</div>

<script>


$( document ).ready(function() {

    var facilities;

    $.getJSON("<?php echo base_url('assets/json/facilities.json');?>", function(data) {
        facilities = data;
        $(".facility-select").select2({ data: facilities });
    });  


});


$('.datepicker').datepicker({
  	format: 'dd-mm-yyyy',
  	autoclose: true,
  	showOn: "button",
    buttonImage: "AppData/Images/calendar.gif",
    buttonImageOnly: true,
    showWeek: true,
    firstDay: 1,
    maxDate: '+0',
    regional: 'uk'
});

</script>