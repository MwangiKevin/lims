
	
   
        <h4 class="lighter">
           <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
           <a href="#" data-toggle="modal" class="pink">View Facility Details </a>
        </h4>
	    
    <div class="hr hr-18 hr-double dotted"></div>
    
    <div class="row my-infobox" id="facilityDetails">	
    <div class="table-header">
			Facility Details
		</div>
		<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
                    <th rowspan="2">#</th>
					<th rowspan="2">Facilty Name</th>
					<th rowspan="2">District</th>
                    <th rowspan="2">Region</th>
                   
                    <th rowspan="2">Facility Email</th>
                    <th rowspan="2">Facility Telephone</th>
					<th colspan="2">Actions</th>
				</tr>
				<tr>
					<th>Edit</th>
					<th>RollOut</th>
				</tr>
			</thead>
			<tbody>
				<?php
                    //print_r($result); die();
					$i=1;
					foreach ($result as $facility) {
				?>
				<tr id="tr_<?php echo $facility["facility_id"]; ?>">
					<td><?php echo $i;?></td>
					<td><?php echo $facility['facility_name'];?></td>
                    <td><?php echo $facility['district_name'];?></td>
                    <td><?php echo $facility['region_name'];?></td>
                    
					<td><?php echo $facility['facility_email'];?></td>	
					<td><?php echo $facility['facility_telephone'];?></td>						
					<td><center><a class="blue" href="#editdetailsdiv"><i class="ace-icon fa fa-pencil bigger-130"></i></a></center></td>
                    <td><span class="glyphicon glyphicon-ok-sign"></span></td>
                </tr>

					<?php/* 
						$color = "";
						$class = "";

						if($facility['facility_rollout_id']==4){								
							$color = "#2d6ca2";
							$class = "glyphicon glyphicon-minus-sign";								
						}elseif($facility['facility_rollout_id']==1){							
							$color = "#3e8f3e";
							$class = "glyphicon glyphicon-ok-sign";								
						}elseif($facility['facility_rollout_id']==3){									
							$color = "#c12e2a";
							$class = "glyphicon glyphicon-remove-sign";							
						}else{							
							$color = "#eb9316";
							$class = "glyphicon glyphicon-question-sign";														
						}*/
					?>



				
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>

    </div>
    
    <div class="modal fade" id="editdetailsdiv">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h5 class="modal-title">Edit Facility Details</h5>
	  		</div>
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open('admin/facilities/edit_fac');?>

					<input required id="editfacilityid" type="hidden" name="editfacilityid" class="textfield form-control" readonly />

					<div class="input-group" style="width: 100%;padding:4px;">
						<table id="data-table-edit">
							<thead>
								<tr>
									<th rowspan = "2">#</th>
									<th rowspan = "2">Facility Name</th>
									<th rowspan = "2">District</th>
									<th rowspan = "2">Region</th>
									<th rowspan = "2">Partner</th>
									<th rowspan = "2"># equipment</th>
									<th rowspan = "2"># Users</th>
									<th colspan="2"><center>Actions</center></th>
								</tr>
								<tr>
									<th>Rollout</th>
									<th>Edit Details</th>
								</tr>
							</thead>
							<tbody>
								<tr id="edit_table_row"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
							</tbody>
						</table>
		            </div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Facility name:</span>
						<input required id="editfacname" name="facname" class="textfield form-control" />	
		            </div>					
					<div id="equipmentdiv" class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 20%;">District:</span>
						<input required id="editdis" name = "dis" class="textfield form-control"  readonly />
						<span class="input-group-addon" style="width: 20%;">Region:</span>
						<input required id="editreg" name = "reg" class="textfield form-control"  readonly />
		            </div>	          
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Partner:</span>
						<select  required id="editpar" name="par" class="textfield form-control" >
		                   	<option value="">*Select a Partner*</option> 
		                   	<?php
		                   		foreach($partners as $par){
		                   	?>   
		                   	<option value= "<?php echo $par["id"] ?>" ><?php echo $par["name"] ?></option>
		                   	<?php
		                   		}
		                   	?>                					
		                </select>
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> email:</span>
						<input id="editemail" name="email" class="textfield form-control" />	
		            </div>
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">phone:</span>
						<input id="editphone" name="phone" class="textfield form-control" />	
		            </div>
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> Rollout Status :</span>
						<span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="1">  Rolledout  <span style="font-size: 1.4em;color: #3e8f3e;" class="glyphicon glyphicon-ok-sign"></span></input></span>
						<span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="2">  Not Rolledout  <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-question-sign"></span></input></span>
	                </div>				
				
					</div>
					<div class="modal-footer" style="height:11px;padding-top:11px;">								
						<div class="" style="padding:7px;">
							<button name="save" type="submit" class="btn btn-primary btn-mini"><i class="glyphicon glyphicon-save"></i>Save</button>
							<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
						</div>
		      		</div> 
		      	</form>

			<div class="modal-footer" style="height:11px;padding-top:11px;">
      			<?php echo $this->config->item("copyrights");?>
      		</div> 
		</div>
	</div>
</div>
 

<?php $this->load->view("facilities_details_footer_view.php"); ?>