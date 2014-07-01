<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<h4 class="lighter">
			<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
			<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
		</h4><!--lighter-->

		<div class="hr hr-18 hr-double dotted"></div>

		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<h4 class="widget-title lighter">Lab Requisition</h4>
				
				<a href="#modal-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					Details
					<div class="row my-infobox">
						<h4 class="green smaller lighter">Sample</h4>
							<div class="profile-info-value" style="width: auto; ">
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Facility Name: </div>
								<div class="my-form-info-value">
									<select id="form-field-select-1" class="form-control">
										<option> Facility 1</option>
										<option> Facility 2</option>
										<option> Facility 3</option>
									</select>
								</div>
							</div>
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Date Samples Were Collected </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"><?php echo date("Y-F-d");?></span>
								</div>
							</div>
						</div>
						
						<div class="profile-info-value" style="width: auto; ">
							
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Date Samples Were Dispatched </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"><?php echo date("Y-F-d");?></span>
								</div>
							</div>
							
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Date Samples Were Recieved </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"><?php echo date("Y-F-d");?></span>
								</div>
							</div>
						</div>
							
						<div class="profile-info-value" style="width: auto; ">
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Type of Sample</div>
								<div class="my-form-info-value">
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
								</div>
							</div>
							
							<div class="my-form-info my-form-info-striped"  >								
								<div class="my-form-info-name" style="margin-top: 5%;"> Status Received</div>
								<div class="my-form-info-value">
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
								</div>
							</div>
						</div>
						
					</div><!--row my-infobox under Details -->

					<div class="row my-infobox">
							<div class="profile-info-value" style="width: auto; ">
								<h4 class="green smaller lighter">Patient</h4>
								<div class="my-form-info my-form-info-striped" style="margin-top: 3%;"  >
									<div class="my-form-info-name" > Patient CCC Number: </div>
									<div class="my-form-info-value">
									<input class="form-control input-mask-phone" type="text" id="form-field-mask-2"></div>
								</div>
								
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" > Gender: </div>
									<div class="my-form-info-value">
										<label style="display: inline-block">
								<input class="ace" type="radio" name="form-field-radio">
								<span class="lbl"> Female</span>
							</label>
							&nbsp;
							<label style="display: inline-block">
								<input class="ace" type="radio" name="form-field-radio">
								<span class="lbl"> Male</span>
							</label>
									</div>
								</div>
								
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" > DOB: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" style="margin-left:10%; width:80%; height: 25px;">
									</div>
									
									<div class="my-form" style="background-color:#edf3f4; color: #336199; 0px; padding: 10%; border: dotted .5px" > Age: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" style="width:80%; height: 25px;">
									</div>
								</div>
							
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" > ART Initation Date: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
									</div>
								</div>
								
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" > Patient/Caregiver Phone No: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
									</div>
								</div>
							</div>
							
							<div class="profile-info-value" style="width: auto; ">
								<h4 class="green smaller lighter">History</h4>
								
								<div class="my-form-info my-form-info-striped"  style="margin-top: 4%;" >
									<div class="my-form-info-name" > Current Regime: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
									</div>
								</div>
								
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" > 1st or 2nd Line Regimen: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
									</div>
								</div>
								
								<div class="my-form-info my-form-info-striped"   >
									<div class="my-form-info-name" >  Justification: </div>
									<div class="my-form-info-value">
										<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
									</div>
								</div>
							</div>
					</div>
					
					<div class="row my-infobox">
						<h4 class="green smaller lighter">Others</h4>
						

						<div class="col-xs-6 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"  style="width:98.5%;height:88px" >
								<div class="my-form-info-name" style="width:21%"> <br/>&nbsp;Issues/Requests/Comments<br/>&nbsp;</div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>

						<div class="col-xs-6 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"  style="width:98.5%;height:88px" >
								<div class="my-form-info-name" style="width:21%"> <br/>&nbsp;Lab Comments<br/>&nbsp;</div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>
					</div>	
									
					
							

					<h4 class="green smaller lighter">Tests Requisition</h4>
					<div class="row my-infobox" style="padding:8px">
						<div class="table-header">
							Samples info
						</div>
						<table id="tests_table" class="table table-bordered table-responsive">
							<thead>
								<tr class="active">
									<th>#</th>
									<th>Date of Sample Collection</th>
									<th>Infant Id</th>
									<th>Date of Birth</th>
									<th>Age</th>
									<th>Gender</th>
									<th>Entry Point</th>
									<th>Prophylaxis</th>
									<th>Feeding</th>
									<th>Caregiver Mobile Number</th>
									<th>HIV Status</th>
									<th>PMTCT Regimen</th>
									<th>Repeat for Rejection</th>
									<th>Confirmatory PCR @ 9 months</th>
								</tr>
							</thead>
							<tbody>
								<tr class="">
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
								</tr>
								<tr class="">
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
									<td>44</td>
								</tr>
								<tr class="">
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
									<td>44sa</td>
								</tr>
							</tbody>
						</table>
					</div>	
					<div  class="row my-infobox" style="padding:8px">
						<button class="btn btn-sm btn-primary" style="float:right" onclick="show_sample_modal()">
							<i class="ace-icon fa fa-plus"></i>
							Add Sample
						</button>
					</div>
					<div class="row my-infobox " style="padding:8px">		
						<div class="col-xs-12 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Lab Comments</div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="wizard-actions">
					<button type="submit" class="btn btn-success btn-next" data-last="Finish">
						Submit
						<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
					</button>
				</div><!-- wizard-actions-->
				<hr>
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!--col-xs-12-->
</div><!-- /.col -->



<div id="modal-form" class="modal" tabindex="-1" aria-hidden="true" style="display: none;">
	<div class="modal-dialog" style="width:65%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="blue bigger">Fill in Sample details</h4>
			</div>

			<div class="modal-body">
				<div class="row my-infobox">

					<div class="col-xs-6 my-no-margin-padding" >
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Facility
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Collection Date
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Dispatch Date
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Receieved Date
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>
						
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Patient CCC No
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Date of Birth
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Age
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>
							
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Gender
							</span>
							<label style="display: inline-block">
								<input class="ace" type="radio" name="form-field-radio">
								<span class="lbl"> Female</span>
							</label>
							&nbsp;
							<label style="display: inline-block">
								<input class="ace" type="radio" name="form-field-radio">
								<span class="lbl"> Male</span>
							</label>
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Caregiver Mobile Number
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Type of Sample
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Status Received 
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>						
					</div>
					<div class="col-xs-6 my-no-margin-padding" >
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								ART Initation Date:
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Current Regime
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Justification
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								1st or 2nd Line Regimen:
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name" style="height:72px">
								Issuse/Comments/<br/>Requests
							</span>
							<textarea id="form-field-8" class="form-control" placeholder="Default Text" style="width: 100%; height: 100%;"></textarea>
						</div>		
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name" style="height:72px">
								Lab Comments
							</span>
							<textarea id="form-field-8" class="form-control" placeholder="Default Text" style="width: 100%; height: 100%;"></textarea>
						</div>						
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-sm" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>
					Cancel
				</button>

				<button class="btn btn-sm btn-primary">
					<i class="ace-icon fa fa-plus"></i>
					Add Sample
				</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("vl_requisition_footer_view");?>