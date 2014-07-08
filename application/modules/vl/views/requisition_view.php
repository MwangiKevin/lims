<div class="row" style="">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<h4 class="lighter">
			<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
			<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
		</h4>

		<div class="hr hr-18 hr-double dotted"></div>
		<?php echo form_open('eid/requisition/submit_requisition');?>
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<h4 class="widget-title lighter">Lab Requisition</h4>				
			</div>

			<div class="widget-body">
				<div class="widget-main">
					
					<!-- <div class="row my-infobox" style="">
						<div class="col-xs-6 nb" style="padding-right:0.8% !important">
							<div class="input-group my-input-group  ">
								<span class="input-group-addon my-input-group-caption">
									Date Samples <br/> Were Collected
								</span>
								<input name="collection_date" id="collection_date"  class="form-control datepicker" style="" type="text" />
								<span class="input-group-addon my-input-group-icon" >
									<i class="ace-icon fa fa-calendar"></i>
								</span>
							</div>
						</div>
						<div class="col-xs-3 nb" style="padding-right:0.8% !important">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Date Samples <br/> Were Received
								</span>
								<input name="receipt_date" id="receipt_date" class="form-control datepicker" style="" type="text" />
								<span class="input-group-addon my-input-group-icon">
									<i class="ace-icon fa fa-calendar"></i>
								</span>
							</div>
						</div>
						<div class="col-xs-6 my-no-margin-padding" >
							<div class="my-infobox" style="">
								<center>									
									G4S Courier A/C C00339
								</center>
							</div>
						</div>
					</div> -->

					<div class="row my-infobox">
						<div class="col-xs-9 nb">
							<div class="input-group my-input-group " style="width:33%;z-index:20;">
								<span class="input-group-addon my-input-group-caption">
									Facility Name
								</span>

								<input required name="facility_id" id="facility" class="form-control facility-select" style="" type="text" />							

							</div>
						</div>
						<div class="col-xs-3 nb">
							<div class="input-group my-input-group nb" style="padding-right:5%">
								<span class="input-group-addon my-input-group-caption">
									Date Received
								</span>
								<input required name="date_received" id="" class="form-control datepicker" value="<?php echo Date("d-m-Y");?>" type="text">
								<span class="input-group-addon my-input-group-icon" >
									<i class="ace-icon fa fa-calendar"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="row my-infobox">

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Facility Code
								</span>
								<input readonly name="facility_code" id="facility_code" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									District
								</span>
								<input readonly name="district" id="district" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Region
								</span>
								<input readonly name="region" id="region" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Telephone 1
								</span>
								<input readonly name="telephone1" id="telephone1" class="form-control" style="" type="text" />
							</div>
						</div>


						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Telephone 2
								</span>
								<input readonly name="telephone2" id="telephone2" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Address
								</span>
								<input readonly name="address" id="address" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Email <br/>(if available)
								</span>
								<input readonly name="email" id="email" class="form-control" style="" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Contact Person <br/> Phone Number
								</span>
								<input readonly name="contact_phone" id="contact_phone" class="form-control" style="" type="text" />
							</div>
						</div>
					</div>

					<div class="row my-infobox">

						<div class="col-xs-6 my-no-margin-padding" >
							<div class=" nb">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption" style="height: 50px;">
										Comments
									</span>
									<textarea name="comments" id="comments" class="form-control" style="height: 50px;width:30em;" type="text" /></textarea>
								</div>
							</div>
						</div>
						<div class="col-xs-6 my-no-margin-padding pink" >
							Samples will be rejected if address is incomplete. 
							<br/>
							Indicate the receiving address in case they are rejected. 
							<br/>
							(Nearest courier collection office to facility).
						</div>

					</div>					
					<!-- <h4 class="green smaller lighter">Sample collection material Requisition</h4> -->

				<!-- 	<div class="row my-infobox" >
						<div class="col-xs-3 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Lab Requisition Forms </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > DBS Filter Papers </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>	
						</div>						
						<div class="col-xs-3 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Glycerine Envelops </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Ziploc Bags </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>
						<div class="col-xs-3 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Desiccants </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
							<div class="my-form-info my-form-info-striped"  style="height:56px" >
								<div class="my-form-info-name" > Drying Racks </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>
						<div class="col-xs-3 my-no-margin-padding" >
							<div class="my-form-info my-form-info-striped"   >
								<div class="my-form-info-name" > Lancets </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
							<div class="my-form-info my-form-info-striped" style="height:56px"  >
								<div class="my-form-info-name" > Others (specify) </div>
								<div class="my-form-info-value">
									<span class="editable editable-click" id="username"></span>
								</div>
							</div>
						</div>		
					</div> -->		

					<h4 class="green smaller lighter">Tests Requisition</h4>
					<div class="row my-infobox" style="padding:8px">
						<div class="table-header">
							Samples info
						</div>
						<table id="tests_table" class="table table-bordered table-responsive striped">
							<thead>
								<tr class="active">
									<th style ="width: 25%;">Sample</th>
									<th style ="width: 35%;">Infant Info</th>
									<th style ="width: 25%;">Mother Info</th>
									<th style ="width: 20%">Test Requisition Reasons</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="" id = "1" class ="">
									<td>						
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Date <br/>collected
											</span>
											<input name = "date_coll[]"  id="date_coll" class="form-control datepicker" type="text" style="width:100%; 	" required data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon my-input-group-icon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
										</div>	


										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Date<br/>dispatched
											</span>
											<input name="date_sent[]" id="date_sent" class="form-control datepicker" type="text" style="width:100%; 	" required data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon my-input-group-icon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
										</div>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption" >
												No of <br/> DBS spots
											</span>
											<select name="spots[]" id="spots" style="width:100%;" required>
												<option value="">*</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
										</div>						
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Name of <br/>clinician
											</span>
											<input name="clinician[]" id="clinician" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
										</div>
									</td>
									<td>
										<div class = "row">
											<div class = "col-xs-6 ">

												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														patient Id
													</span>
													<input name="patient_code[]" id="patient_code" class="form-control date-picker" type="text" style="width:100%;	" required data-date-format="dd-mm-yyyy" />
												</div>

												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														DOB
													</span>
													<input name="infant_dob[]" id="infant_dob" class="form-control datepicker"  type="text">
													<span class="input-group-addon my-input-group-icon">
														<i class="ace-icon fa fa-calendar"></i>
													</span>
												</div>
												<!-- <div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">
														age </br> (months)
													</span>
													<input name="infant_age[]" id="infant_age" class="form-control"  type="text">
												</div> -->
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Gender
													</span>
													<Select name="infant_gender[]" id="infant_gender[]" style="width:100%"  required >
														<option value="">*</option>
														<option value="M">M</option>
														<option value="F">F</option>
													</Select> 
												</div>

												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														HIV<br/>Status
													</span>
													<Select name="infant_hiv_status[]" id="infant_hiv_status" style="width:100%"   required >
														<option value=""> * </option>
														<option value="1"> P - Positive</option>
														<option value="2"> N - Negative</option>
														<option value="3"> U - Unknown</option>
													</Select> 
												</div>
											</div>											
											<div class = "col-xs-6 " style="padding-left:0px;">												
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Infant <br/>Feeding
													</span>
													<select name="infant_feeding[]" id="infant_feeding[]" style="width:100%" required="">
													<!-- 	<option value="">*</option>
														<option value="1">BF -Exclusive Breast Feeding </option>
														<option value="2">RF -Exclusive Replacement Feeding </option>
														<option value="3">MF -Mixed Feeding</option> -->

														<option value=""> * </option>
														<?php 
														foreach ($infant_feeding as $key => $value) {
															?>
															<option value="<?php echo $value["id"]?>"><?php echo $value["name"]."-".$value["desc"];?></option>
															<?php 
														}
														?>
														<option value="-1"> Unknown</option>
														<option value="-2"> Other</option>
													</select> 
												</div>
												<div class="input-group my-input-group nb" style="width:100%">
													<span class="input-group-addon my-input-group-caption">
														Prophilaxis
													</span>
													<Select name="infant_prophilaxis[]" id="infant_prophilaxis" style="width:100%"  required >
														<option value=""> * </option>
														<?php 
														foreach ($prophilaxes as $key => $value) {
															if( (int) $value["infantProphilaxis"] == 1){
																?>
																<option value="<?php echo $value["id"]?>"><?php echo $value["name"];?></option>
																<?php 
															}
														}
														?>
														<option value="-1"> No Data</option>
														<option value="-2"> Other</option>
													</Select> 
													<div class="input-group my-input-group nb" style="width:100%">
														<span class="input-group-addon my-input-group-caption">
															Duration <br/>(Weeks)
														</span>													
														<input name="prophilaxis_weeks[]" id="prophilaxis_weeks" class="form-control"  type="text">
													</div>
												</div>

												<div class="input-group my-input-group nb">
													<span class="input-group-addon my-input-group-caption">														
														Caregiver<br>Phone No
													</span>
													<input name="caregiver_phone[]" id="caregiver_phone[]" class="form-control" style="width: 100%;" type="text">
												</div>
											</div>
										</div>
									</td>
									<td>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												HIV Status
											</span>
											<Select name="mother_hiv_status[]" id="mother_hiv_status" style="width:100%"   required >
												<option value=""> * </option>
												<option value="1"> P - Positive</option>
												<option value="2"> N - Negative</option>
												<option value="3"> U - Unknown</option>
											</Select> 
										</div>

										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												PMTC at<br/>Pregnancy
											</span>
											<Select name="pregnancy_pmtc[]" id="pregnancy_pmtc" style="width:100%"   required >
												<option value=""> * </option>
												<?php 
												foreach ($prophilaxes as $key => $value) {
													if( (int) $value["pmtcPregnancy"] == 1){
														?>
														<option value="<?php echo $value["id"]?>"><?php echo $value["name"]?></option>
														<?php 
													}
												}
												?>
												<option value="-1"> No Data</option>
												<option value="-2"> Other</option>
											</Select> 

											<div class="input-group my-input-group nb" style="width:100%">
												<span class="input-group-addon my-input-group-caption">
													Duration <br/>(Weeks)
												</span>													
												<input name="preg_pmtc_duration[]" id="preg_pmtc_duration" class="form-control"  type="text">
											</div>
										</div>

										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												PMTC at<br/>Delivery
											</span>
											<Select name="delivery_pmtc[]" id="delivery_pmtc" style="width:100%"   required >
												<option value=""> * </option>
												<?php 
												foreach ($prophilaxes as $key => $value) {
													if( (int) $value["pmtcDelivery"] == 1){
														?>
														<option value="<?php echo $value["id"]?>"><?php echo $value["name"]?></option>
														<?php 
													}
												}
												?>
												<option value="-1"> No Data</option>
												<option value="-2"> Other</option>
											</Select> 
										</div>
<!-- 
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Entry Point
											</span>
											<select name="ent_point[]" id="ent_point" style="width:100%"  required >
												<option value=""> * </option><option value="1"> OPD</option>
												<option value="2"> Paediatric  Ward</option>
												<option value="3"> MCH/PMTCT</option>
												<option value="4"> CCC/PSC</option>
												<option value="5"> Materrnity</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select>
										</div> -->
										
									</td>
									<td id="test_reason_td">
									<!-- 	<div class="control-group">

											<div class="checkbox">
												<label>
													<input name="hiv_inv[]" id = "hiv_inv" type="checkbox" class="ace">
													<span class="lbl small"> HIV Status Investigation</span>
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input name="conf_9_months[]" id="conf_9_months" type="checkbox" class="ace">
													<span class="lbl small"> Confirmatory PCR @ 9 months </span>
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input name="conf_test[]" id="conf_test" type="checkbox" class="ace">
													<span class="lbl small"> Repeat PCR Test</span>
												</label>
											</div>

											<div class="checkbox">
												<label>
													<input name="ill_infant[]" id="ill_infant" value="1" type="checkbox" class="ace">
													<span class="lbl small"> Ill Infant</span>
												</label>
											</div>

										</div> -->
										<input name="test_reason[]" id="test_reason" class="form-control test_reason"  type="text">
									</td>
									<td style="vertical-align:middle;">
										<div class="hidden-sm hidden-xs btn-group">

											<button id="remove" class="btn btn-xs btn-danger hide" onclick="remove_row(1)" >
												<i class="ace-icon fa fa-trash-o bigger-120"></i>
												Remove
											</button>

										</div>
									</td>
								</tr>

							</tbody>
						</table>
					</div>	
					<!-- <div  class="row my-infobox" style="padding:8px"> -->
					<!-- </div> -->
					<div class="row my-infobox " style="padding:8px">		
						<div class="col-xs-12 my-no-margin-padding" >
							<div class=" ">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption" style="height: 50px;">
										Lab Comments
									</span>
									<textarea name="lab_comments" id="lab_comments" class="form-control" style="height: 50px;width: 490%;" type="text"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="wizard-actions">
					<button class="btn btn-sm btn-primary add"  >
						<i class="ace-icon fa fa-plus"></i>
						Add Sample
					</button>
					<button type="submit" class="btn btn-success btn-next btn-sm" >
						Submit
						<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
					</button>
				</div>
				<hr>
			</div><!-- /.widget-main -->
		</div><!-- /.widget-body -->
		<?php echo form_close();?>
	</div>
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
								Date of Sample Collection
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Infant Id
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
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Entry Point
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Prophylaxis
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>						
					</div>
					<div class="col-xs-6 my-no-margin-padding" >
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Feeding
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Caregiver Mobile Number
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								HIV Status
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								PMTCT Regimen
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name">
								Repeat for Rejection
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
						</div>	
						<div class="my-form-info my-form-info-striped input-group">
							<span class="input-group-addon my-form-info-name" style="height:72px">
								Confirmatory PCR <br/> @ 9 months
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
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