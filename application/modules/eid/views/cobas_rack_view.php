<script type="text/javascript" src= "http://127.0.0.1/lims/assets/js/barcode_js/connectcode-javascript-code39.js"></script>
<center style="margin-top: 5%;">
<h1> COBAS Rack EID</h1>
<h3>Date: <?php echo( date("d/m/y",time())) ?></h3>
</center>
<hr/>
<?php
	foreach ($result as $res) {
		$test_No = $res["test_run_no"];
		$id = $res["sample_id"];
		echo('
		<center>
		<div class="dropdown dropdown-preview" style="padding-left:5%; height:auto">
			<ul class="dropdown-menu" style="list-style: none; float:left;">					
				<li>
					<h6>Sample Code: '.$id.'</h6>
				</li>
				<li>
					Lab-Code (DBS No.: '.$test_No.')
				</li>
				<li class="divider"></li>
				<li id = barcode>
					<h6>Location of the bar-code</h6>
				</li>
			</ul>
		</div>
		</center>');
	}
?>
			<!-- <script type="text/javascript"> 
				document.getElementById("barcode").innerHTML = DrawHTMLBarcode_Code39("<?php $id ?>",1,"yes","in", 0,3,1,3,"bottom","center", "","black","white");
			</script> -->
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
<h5 style="clear:both; float:right;">End of Rack</h5>			
<hr/ style="clear:both;">
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
