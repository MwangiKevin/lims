<h4 class="lighter">
	<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
	<a class="pink" data-toggle="modal" href="#"> Area Report </a>
</h4>
<div class="hr hr-18 hr-double dotted"></div>

<div class="widget-header widget-header-flat" style="margin-bottom: 20px;">
	<div class="widget-title smaller">
		<strong>
			<h2 style="display: inline-block;"><?php echo $area_name ?></h2>
			<h5>Date Range: <?php echo "Start Date:  " .$start_date .".    "."End Date:  ". $end_date."."; ?> </h5>
		</strong>
		<!--Enable on-click dislay modal to select pdf or excel -->		
		<div id="report_download" style="position: absolute; right: 5%; top: 50%; cursor: pointer;">
			<a href="<?php echo base_url().'reports/reports/download_report/'.$format.'/'.$start_date.'/'.$end_date.'/'.$area_name.'/'.$area ?>">
				<i class="ace-icon fa fa-cloud-download"></i>
				Download Report
			</a>
			&nbsp;
			<?php echo $email_download_path ?>
		</div>
	</div>
</div>


<div class="row my-infobox">
	<div class="table-header">
		Worksheet info
	</div>
	<table style="font-size:65%" id="tests_table" class="table table-bordered table-responsive">
		<thead>
			<tr class="active">
				<th rowspan="2"></th>
				<th rowspan="2">Sample ID</th>
				<th rowspan="2">Testing Lab</th>
				<th rowspan="2">Region</th>
				<th rowspan="2">District</th>
				<th rowspan="2">Facility</th>
				<th rowspan="2">Sex </th>				
				<th rowspan="2">DOB</th>
				<th rowspan="2">Age</th>
				<th rowspan="2">Infant Propholaxyis</th>
				<th rowspan="2">Date Collected</th>
				<th rowspan="2">Spots</th>
				<th rowspan="2">Received Status</th>
				<th rowspan="2">Rejected Reason <br />/Repeat Reason</th>
				<th rowspan="2">HIV Status of Mother</th>
				<th rowspan="2">PMTCT Intervention</th>
				<th rowspan="2">Breast Feeding</th>
				<th rowspan="2">Entry Point</th>
				<th rowspan="2">Date of Receving</th>
				<th rowspan="2">Date of Testing</th>
				<th rowspan="2">Date of Dispatch</th>
				<th rowspan="2">Test Result</th>				
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 0;
				foreach($sample as $key => $value){
					$i++;
					$age = date('Y') - $value["dob"];
					$sample_id = $value["sample_id"];
					$region=  $value["region_name"]; ; 
					$district = $value["district_name"] ;
					$facility = $value["facility_name"];
					$sex = $value["gender"];
					$dob = $value["dob"];
					$age_yrs = $age;
					$propholaxis = $value["propholaxis"];
					$date_collected = $value["date_collected"];
					$spots = $value["dbs_spots"];
					$date_tested = $value["date_tested"];
					$dispatch = $value["dispatch"];
					$result = $value["test_result"];
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $sample_id ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo $region ?></td>
				<td><?php echo $district ?></td>
				<td><?php echo $facility ?></td>
				<td><?php echo $sex ?></td>
				<td><?php echo $dob ?></td>
				<td><?php echo $age_yrs ?></td>
				<td><?php echo $propholaxis ?></td>
				<td><?php echo $date_collected ?></td>
				<td><?php echo $spots ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo 44 ?></td>
				<td><?php echo $date_tested ?></td>
				<td><?php echo $dispatch ?></td>
				<td><?php echo $result ?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>


<div class="modal fade" id="writemail">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<div class="widget-header widget-header-blue widget-header-flat">
						<h4 class="widget-title lighter">Send Email</h4>				
					</div>
				</h4>
			</div><!--End of modal-header-->
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php //echo form_open('alerts/email/email_with_attachment');?>
				
				<form action="<?php echo base_url()?>reports/email/email_with_attachment" method="post">
				<div class="widget-box">
					<h4 class="lighter">
					    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer green"></i>
					    <a href="#" data-toggle="modal" class="green"> Write email </a>
					</h4>
				    
					<div class="hr hr-18 hr-single dotted"></div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="row my-infobox">
								<div class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 40%;">To:</span>
									<input required id="recepients" name="recepients" class="textfield form-control" />	
								</div>	


								<div class="input-group" style="width: 100%;padding:4px;">
									<div class="row my-infobox">
										<form action="<?php echo base_url("reports/email/upload_file");?>" class="dropzone" id="dz" method="post" name="dz">
											<div class="fallback">
												<input name="file" type="file" multiple="">
											</div>
										</form>
									</div>
								
									<script>
								
											Dropzone.options.dz = {
									  			paramName: "file", 
									  			maxFilesize: 10, 
									  			accept: function(file, done) {
									  			 	if ((file.name.substring((file.name.length-4),file.name.length) != ".txt")&&(file.name.substring((file.name.length-4),file.name.length) != ".csv")&&(file.name.substring((file.name.length-4),file.name.length) != ".TXT")&&(file.name.substring((file.name.length-4),file.name.length) != ".CSV")) {
									  			 		done("Wrong File Type");
									  			 	}
									  			 	else { done(); }
									  			}
											};
								
									</script>
								</div>
		



								<div class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 40%;">Subject:</span>
									<input required id="subject" name="subject" class="textfield form-control" />	
								</div>	
									            					
								<div id="messagediv" class="input-group" style="width: 100%;padding:4px;">
									<span class="input-group-addon" style="width: 20%;">Message:</span>
									<textarea required id="message" name="message" cols="50" rows="5" class="textfield form-control"></textarea>
									<!--<input required id="message" name = "message" class="textfield form-control"  readonly />-->
								</div>	          
																		
								<div class="modal-footer" style="height:11px;padding-top:11px;">	
									<div class="wizard-actions" style="float:right;">
										<button type="submit" class="btn btn-success btn-next btn-sm" name="send_email_bttn" >
											Send Email
											<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
										</button>
										<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-xs btn-danger bigger-120">
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
											Discard
										</button>
									</div>							
									
								</div> 
							</form>
							</div><!--End of my-infobox-->	
						</div><!--End of widget-main-->	
					</div><!--End of widget-body-->		
				</div><!--End of widget-box-->

				<div class="modal-footer" style="height:4px;padding-top:11px;">
					<?php echo $this->config->item("copyrights");?>
				</div> 
			</div>
		</div>
	</div>
</div>

