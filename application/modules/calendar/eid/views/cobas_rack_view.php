<script type="text/javascript" src= "http://127.0.0.1/lims/assets/js/barcode_js/connectcode-javascript-code39.js"></script>
<center style="margin-top: 5%;">
<h1> COBAS Rack EID</h1>
<h3>Date: <?php echo( date("d/m/y",time())) ?></h3>
</center>
<hr/>
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
