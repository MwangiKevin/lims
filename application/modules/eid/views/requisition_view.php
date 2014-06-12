<div class="row" style="width:1305px">
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
					<div class="row my-infobox" style="padding:8px">
						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Date Samples <br/> Were Collected
								</span>
								<input name="collection_date" id="collection_date"  class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>
						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Date Samples <br/> Were Received
								</span>
								<input name="receipt_date" id="receipt_date" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>
						<div class="col-xs-6 my-no-margin-padding" >
							<div class="my-infobox" style="height: 42px;">
								<center>									
									G4S Courier A/C C00339
								</center>
							</div>
						</div>
					</div>

					<div class="row my-infobox">
						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Facility Name
								</span>
								<input name="facility_name" id="facility_name" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Facility Code
								</span>
								<input name="facility_code" id="facility_code" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									District
								</span>
								<input name="district" id="district" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Region
								</span>
								<input name="region" id="region" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>

						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Telephone 1
								</span>
								<input name="telephone1" id="telephone1" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>


						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Telephone 2
								</span>
								<input name="telephone2" id="telephone2" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>


						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Contact Person
								</span>
								<input name="contact_person" id="contact_person" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>
						<div class="col-xs-3 nb">
							<div class="input-group my-input-group   ">
								<span class="input-group-addon my-input-group-caption">
									Contact Person <br/> Phone Number
								</span>
								<input name="contact_phone" id="contact_phone" class="form-control" style="height: 42px;" type="text" />
							</div>
						</div>
					</div>


					<div class="row my-infobox">
						<div class="col-xs-3 my-no-margin-padding" >
							
							<div class=" nb">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption">
										Address
									</span>
									<input name="address" id="address" class="form-control" style="height: 42px;" type="text" />
								</div>
							</div>
							<div class=" nb">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption">
										Email <br/>(if available)
									</span>
									<input name="email" id="email" class="form-control" style="height: 42px;" type="text" />
								</div>
							</div>
						</div>
						<div class="col-xs-3 my-no-margin-padding pink" >
							Samples will be rejected if address is incomplete. 
							<br/>
							Indicate the receiving address in case they are rejected. 
							<br/>
							(Nearest courier collection office to facility).
						</div>

						<div class="col-xs-6 my-no-margin-padding" >
							<div class=" nb">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption" style="height: 87px;">
										Comments
									</span>
									<textarea name="comments" id="comments" class="form-control" style="height: 87px;width: 217%;" type="text" /></textarea>
								</div>
							</div>
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
						<table id="tests_table" class="table table-bordered table-responsive">
							<thead>
								<tr class="active">
									<th>#</th>
									<th>Date of Sample Collection</th>
									<th>Infant Info</th>
									<th>Mother Info</th>
									<th>PMTCT Intervention</th>
									<th>Infant Feeding</th>
									<th>Caregiver Mobile Number</th>
									<th>HIV Status</th>
									<th>PMTCT Regimen</th>
									<th>Repeat for Rejection</th>
									<th>Confirmatory PCR @ 9 months</th>
								</tr>
							</thead>
							<tbody>
								<tr class="">
									<td><input type="hidden" style="width:40px;	" required /></td>
									<td><input type="text" style="width:90px;	" required /></td>
									<td>
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												Infant <br/>patient Id
											</span>
											<input name="infant_id[1]" id="infant_id[1]" class="form-control"  type="text">
										</div>
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												DOB
											</span>
											<input name="infant_dob[1]" id="infant_dob[1]" class="form-control"  type="text">
										</div>
										<div class="input-group my-input-group nb">
											<span class="input-group-addon my-input-group-caption">
												age
											</span>
											<input name="infant_age[1]" id="infant_age[1]" class="form-control"  type="text">
										</div>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												Gender
											</span>
											<Select name="infant_gender[1]" id="infant_gender[1]" style=""  required >
												<option value="">*</option>
												<option value="1">M</option>
												<option value="2">F</option>
											</Select> 
										</div>
									</td>
									<td>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												PMTCT <br/>Intervention
											</span>
											<select name="infant_gender[1]" id="infant_gender[1]" style="" required="">
												<option value=""> * </option><option value="1"> SdNVP Only</option>
												<option value="2"> Interrupted HAART (HAART until end of BF)</option>
												<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
												<option value="4"> HAART</option>
												<option value="5"> None</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select> 
										</div>
										<div class="input-group my-input-group nb" style="width:100%">
											<span class="input-group-addon my-input-group-caption">
												HIV <br/>Status
											</span>
											<select name="infant_gender[1]" id="infant_gender[1]" style="" required="">
												<option value=""> * </option><option value="1"> SdNVP Only</option>
												<option value="2"> Interrupted HAART (HAART until end of BF)</option>
												<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
												<option value="4"> HAART</option>
												<option value="5"> None</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select> 
										</div>
										<!-- 
										<div class="input-group my-input-group nb" >
											<span class="input-group-addon my-input-group-caption">
												 HIV <br/>Status
											</span>
											<select name="mdrug[1]" id="mdrug[1]"  class="error">
												<option value=""> * </option><option value="1"> SdNVP Only</option>
												<option value="2"> Interrupted HAART (HAART until end of BF)</option>
												<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
												<option value="4"> HAART</option>
												<option value="5"> None</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select>
										</div>
										<div class="input-group my-input-group nb" >
											<span class="input-group-addon my-input-group-caption">
												 Regimen During <br/>Pregnancy
											</span>
											<select name="mdrug[1]" id="mdrug[1]"  class="error">
												<option value=""> * </option><option value="1"> SdNVP Only</option>
												<option value="2"> Interrupted HAART (HAART until end of BF)</option>
												<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
												<option value="4"> HAART</option>
												<option value="5"> None</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select>
										</div>
										<div class="input-group my-input-group nb" >
											<span class="input-group-addon my-input-group-caption">
												 Regimen at <br/>Delivery
											</span>
											<select name="mdrug[1]" id="mdrug[1]"  class="error">
												<option value=""> * </option><option value="1"> SdNVP Only</option>
												<option value="2"> Interrupted HAART (HAART until end of BF)</option>
												<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
												<option value="4"> HAART</option>
												<option value="5"> None</option>
												<option value="6"> Other</option>
												<option value="7"> No Data</option>
											</select>
										</div> -->
									</td>
									<td>
										<button class="btn btn-sm btn-primary" style="width:100%" onclick="show_sample_modal()">
											<i class="ace-icon fa fa-plus"></i>											
										</button>
									</td>
									<td>
										<Select style="width:65px;	" required >
											<option value="">*</option>
											<option value="1">BF -Exclusive Breast Feeding </option>
											<option value="2">RF -Exclusive Replacement Feeding </option>
											<option value="3">MF -Mixed Feeding</option>
										</Select> 
									</td>
									<td><input type="text" style="width:65px;" required /></td>
									<td>
										<Select style="width:50px;	" required >
											<option value="">*</option>
											<option value="1">P -Positive</option>
											<option value="2">N -Negative</option>
										</Select> 
									</td>

									<td>
										<select name="mdrug" id="mdrug" style="width:92px"  class="error">
											<option value=""> * </option><option value="1"> SdNVP Only</option>
											<option value="2"> Interrupted HAART (HAART until end of BF)</option>
											<option value="3"> AZT (From 14wks or later) + sdNVP + 3TC + AZT+3TC for 7 days</option>
											<option value="4"> HAART</option>
											<option value="5"> None</option>
											<option value="6"> Other</option>
											<option value="7"> No Data</option>
										</select>
									</td>
									<td><input type="text" style="width:35px;" required /></td>
									<td><input type="text" style="width:35px;" required /></td>
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
							<div class=" ">
								<div class="input-group my-input-group   ">
									<span class="input-group-addon my-input-group-caption" style="height: 87px;">
										Lab Comments
									</span>
									<textarea name="lab_comments" id="lab_comments" class="form-control" style="height: 87px;width: 520%;" type="text"></textarea>
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

<?php $this->load->view("requisition_footer_view");?>