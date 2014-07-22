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


<center style="margin-top: 5%;">
	<div id = "title" style="background-image:'http://127.0.0.1/lims/img/tz.png' ">
		<!-- <img src="<?php echo base_url("img/tz.png");?>" height="140" width="100%" alt="NACP">	 -->
		<h1> ABBOTT Rack EID</h1>
	</div>
	<!-- <?php 
		foreach($worksheet_details AS $wd){
			$worksheet_no;
			$calibrator;
			$calibrator_lot_no;
			$calibrator_expiry_date;
			$amplification_kit_lot_no;
			$amplification_expiry_date;
			
		}	
	?> -->
<div id="column1">
	<label>Date Printed:</label>
	<input type="text" id="worksheet_no" value="<?php echo( date("d - m - Y",time())) ?>"/>
	<label>Worksheet Number:</label>
	<input type="text" id="worksheet_no"/>
	<label>Calibrator</label>
	<input type="text" id="calibrator"/>
	<label>Calibrator Lot No</label>
	<input type="text" id="calibrator"/>
	<label>Calibrator Expiry Date</label>
	<input type="text" id="calibrator_lot_no"/>
</div>
<div id="column1">
	<label>Amplification Kit Lot No</label>
	<input type="text" id="amplification_kit_lot_no"/>
	<label>Amplification Expiry Date</label>
	<input type="text" id="amplification_expiry_date"/>
	<label>Control</label>
	<input type="text" id="control"/>
	<label>Control Lot No.</label>
	<input type="text" id="control_lot_no"/>
</div>

<div id="column1">
	<label>Control Expiry Date</label>
	<input type="text" id="control_expiry_date"/>
	<label>Bulk Lysis Lot No.</label>
	<input type="text" id="bulk_lysis_lot_no"/>
	<label>Bulk Lysis Expiry Date</label>
	<input type="text" id="bulk_lysis_expiry_date"/>
	<label>Sample Prep Lot No</label>
	<input type="text" id="sample_prep_lot_no"/>
	<label>Sample Prep Expiry Date</label>
	<input type="text" id="sample_prep_expiry-date"/>
</div>
</center>
<hr/ style="clear:both;">
<?php
$i = 0;
	foreach ($result as $res) {
		$i++;
		if($i <= 46){
			$runs = $res["runs"];
			$id = $res["id"];
	?>
	
	<div class='dropdown dropdown-preview' style='padding-left:5%; height:auto' >
		<ul class='dropdown-menu' style='list-style: none; float:left;'>
			<li>
				<h6>Sample Code <?php echo $id ?> </h6>
			</li> 
			<li>
				Lab-Code (Number of runs <?php echo $runs ?>)
			</li>
			<li class='divider'></li>
			<li id = barcode<?php echo $id ?>>
				<h6>Location of the bar-code</h6>
			</li>
		</ul>
	</div>
	
	<script type="text/javascript"> 
		document.getElementById("barcode<?php echo $id ?>").innerHTML = DrawHTMLBarcode_Code39("<?php echo $id ?>",1, "yes" , "in", 0,2,.5,2,"bottom","center", "","black","white");
	</script>
<?php
		}else{
?>
		<h5 style="clear:both; float:right;">End of Rack</h5>			
		<hr/ style="clear:both;">			
		<hr/ style="clear:both;">
		
		<h5 style="clear:both; float:left;">Start of Rack</h5>
		<hr/ style="clear:both;">
		
		<div class='dropdown dropdown-preview' style='padding-left:5%; height:auto' >
		<ul class='dropdown-menu' style='list-style: none; float:left;'>
			<li>
				<h6>Sample Code <?php echo $id ?> </h6>
			</li> 
			<li>
				Lab-Code (Number of runs <?php echo $runs ?>)
			</li>
			<li class='divider'></li>
			<li id = barcode<?php echo $id ?>>
				<h6>Location of the bar-code</h6>
			</li>
		</ul>
	</div>
	
	<script type="text/javascript"> 
		document.getElementById("barcode<?php echo $id ?>").innerHTML = DrawHTMLBarcode_Code39("<?php echo $id ?>",1, "yes" , "in", 0,2,.5,2,"bottom","center", "","black","white");
	</script>
<?php
			echo("Ready to run test");
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
			

<ul style="list-style:  none; clear:both;">
	<li>
		<center><label style="width: auto; display: inline-block;">Positive Control interpretation:</label></center>					
		<textarea name="positive_interpretation" id="positive_interpretation" class="form-control" style="height: 50px;width: 100%;" type="text"></textarea>
	</li>
	<li>
		<center><label style="width: auto; display: inline-block;">Negative Control interpretation:</label></center>					
		<textarea name="positive_interpretation" id="positive_interpretation" class="form-control" style="height: 50px;width: 100%;" type="text"></textarea>
	</li>
</ul>

