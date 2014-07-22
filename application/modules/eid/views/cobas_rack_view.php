<script type="text/javascript" src= "http://127.0.0.1/lims/assets/js/barcode_js/connectcode-javascript-code39.js"></script>

<style>
#column1{
	float: left;
	width:33%;
	height:auto;
	margin-bottom:2%;
}
#column1 label{
	display:inline-block;
	width:40%;
}	
	
</style>

<center style="margin-top: 2%;">
<h1> COBAS Rack EID</h1>
<!-- <?php 
	foreach($worksheet_details AS $wd){
		$worksheet_no = $wd['cdc_worksheet_no'];
		$date_created = $wd['date_created'];
		$created_by = $wd['created_by'];
		$spek_kit_no =$wd['Spek_kit_no'];
		$lot_no = $wd['lot_no'];
		$hiqcap_no = $wd['HIQCAPNo'];
		$rack_no = $wd['rack_no'];
		$kit_exp = $wd['kit_expiry_date'];
		$date_cut = $wd['date_cut'];
		$date_run = $wd['date_run'];
		$reviewed_by = $wd['reviewed_by'];
		$date_reviewed = $wd['date_reviewed'];
?> -->
	<div id="column1">
		<label>Worksheet Number:</label>
		<input type="text" id="worksheet_no" value="<?php print_r ($template_no) ?>">
		<label>Rack No</label>
		<input type="text" id="rack_no" value="<?php print_r ($rack_no) ?>"/>
		<label> Sample Prep No. </label>
		<input type="text" id="sample_prep_no" value= "<?php print_r ($sample_prep_no) ?>" >
		<label>Sample Prep Expiry Date</label>
		<input type="text" id="sample_prep_expiry_date" value= "<?php print_r ($sample_prep_expiry_date) ?>" >
		<label> Date Printed:</label>
		<input type="text" value="<?php echo( date("d/m/y",time())) ?>"/>
		<label>Date Run</label>
		<input type="text" id="date_run" value="<?php print_r ($date_run) ?>"/>
	</div>
	
	<div id="column1">
		<label>Created By</label>
		<input type="text" id="created_by" value= "<?php print_r ($created_by) ?>" >
		<label>Date Created</label>
		<input type="text" id="date_created" value= "<?php print_r ($date_created) ?>" >
		<label>Updated By</label>
		<input type="text" id="updated_by" value= "<?php print_r ($updated_by) ?>" >
		
		<label>Lot No:</label>
		<input type="text" id="lot_no" value="<?php print_r ($lot_no) ?>"/>
		<label>HIQCAP Kit No.:</label>
		<input type="text" id="HIQCAP_no" value="<?php  print_r ($hiqcap) ?>"/>
		<label> Spek Kit No.</label>
		<input type="text" id="spek_kit_no" value="<?php print_r ($spek_kit_no) ?>"/>
		<label>Kit Expiry</label>
		<input type="text" id="kit_expiry" value="<?php print_r ($kit_expiry) ?>"/>
	</div>
	
	<div id="column1">
		<label>Approved By</label>
		<input type="text" id="approved_by" value= "<?php print_r ($approved_by) ?>" >
		<label>Reviewed By</label>
		<input type="text" id="reviewed_by" value= "<?php print_r ($reviewed_by) ?>" >
		
		<label>Date Cut</label>
		<input type="text" id="date_cut" value= "<?php print_r ($date_cut) ?>" > 
		<label>Date Received</label>
		<input type="text" id="date_received" value="<?php print_r ($date_received) ?>"/>
		<label>Reviewed By:</label>
		<input type="text" id="reviewed_by" value="<?php print_r ($reviewed_by)?>"/>
		<label>Date Reviewed:</label>
		<input type="text" id="date_reviewed" value="<?php print_r ($date_reviewed) ?>"/>
	</div>
<?php
}
?>
</center>
<hr/ style="clear:both;">
<?php
	$i = 0;
	foreach ($result as $res) {
		$i++;
		if($i <= 22){
		$test_No = $res["runs"];
		$id = $res["id"];
		?>
		<center>
		<div class="dropdown dropdown-preview" style="padding-left:5%; height:auto">
			<ul class="dropdown-menu" style="list-style: none; float:left;">					
				<li>
					<h6>Sample Code: <?php echo $id ?></h6>
				</li>
				<li>
					Lab-Code (DBS No.: <?php echo $test_No ?>)
				</li>
				<li class="divider"></li>
				<li id = barcode<?php echo $id ?>>
					<h6>Location of the bar-code</h6>
				</li>
			</ul>
		</div>
		</center>
		
		<script type="text/javascript"> 
				document.getElementById("barcode<?php echo $id ?>").innerHTML = DrawHTMLBarcode_Code39("<?php echo $id ?>",1,"yes","in", 0,2,.5,2,"bottom","center", "","black","white");
			</script>		
		<?php
		}else{
		?>
		<h5 style="clear:both; float:right;">End of Rack</h5>			
		<?php
		}
	}
?>
			<div class="dropdown dropdown-preview" style="padding-left:5%; height:auto">
					<ul class="dropdown-menu" style="list-style: none; float:left;">					
						<li>
							<h6 style="color: 	#FC1501" >Negative Control</h6>
						</li>
						<li>
							Result Goes Here
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
				<div class="dropdown dropdown-preview" style="padding-left:5%; height:auto">
					<ul class="dropdown-menu" style="list-style: none; float:left;">					
						<li>
							<h6 style="color: #78AB46" >Positive Control</h6>
						</li>
						<li>
							Result Goes Here
						</li>
						<li class="divider"></li>
						<li>
							<h6>Location of the bar-code</h6>
						</li>
					</ul>
				</div>
			<hr/ style="clear:both;">
			<ul style="list-style:  none; clear:both; margin-top: 5%;">
				<li>
					<center><label style="width: auto; display: inline-block;">Positive Control interpretation:</label></center>					
					<textarea name="positive_interpretation" id="positive_interpretation" class="form-control" style="height: 50px;width: 100%;" type="text"></textarea>
				</li>
				<li>
					<center><label style="width: auto; display: inline-block;">Negative Control interpretation:</label></center>					
					<textarea name="positive_interpretation" id="positive_interpretation" class="form-control" style="height: 50px;width: 100%;" type="text"></textarea>
				</li>
			</ul>
