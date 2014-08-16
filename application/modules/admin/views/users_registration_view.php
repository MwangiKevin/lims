<div>
    <div class="hr hr-18 hr-double dotted"></div>

    <h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a href="#tabs1-add" data-toggle="modal" class="pink"> Add New Users </a>
	</h4>
	<div class="hr hr-18 hr-sinlge dotted"></div>
    
    
	<div class="" style="margin-top:5px;">
		
		

			<!-- Add new -->
			<div class="row my-infobox" id="add-new">	
				<?php echo form_open('admin/users/save_user');?>
					<table>
						<tr>
							<td style="width:50%">
								<div class="mycontainer" id="full">
									<div class="input-group" style="width: 100%;padding:4px;">
										<span class="input-group-addon" style="width: 40%;">Name :</span>
										<input required name="name" id="name" class="textfield form-control" type="text" />
									</div>         
									<div class="input-group" style="width: 100%;padding:4px;">
										<span class="input-group-addon" style="width: 40%;">Username :</span>
										<input required name="username" id="username" class="textfield form-control" type="text" />
									</div>
									<div class="input-group" style="width: 100%;padding:4px;">
										<span class="input-group-addon" style="width: 40%;">Email :</span>
										<input required name="email" id="email" class="textfield form-control" type="text" />
									</div>
									<div class="input-group" style="width: 100%;padding:4px;">
										<span class="input-group-addon" style="width: 40%;">Phone :</span>
										<input required name="phone" id="phone" class="textfield form-control" type="text" />
									</div>
				                </div>
					        </td>
					        <td>
								<div class="mycontainer" id="full">	
									<div class="input-group" style="width: 100%;padding:4px;">
										<span class="input-group-addon" style="width: 40%;">User Type:</span>
										<select required name="user_group" id="user_group" class="textfield form-control" >
						                   	<option value="">*Select a user Group*</option>  
						                   	<?php
						                   		foreach ($user_groups as $group) {
						                   			//if($group["id"]!=1 && $group["id"]!=4 && $group["id"]!=5 && $group["id"]!=7){
						                  	?>     
											<option value="<?php echo $group["id"];?>"><?php echo $group["name"];?></option>
											<?php
													//}
						                   		}
						                  	?>
						                </select>
					                </div>		               
					                <div class="input-group" style="width: 100%;padding:4px;" id="par_div">
										<span class="input-group-addon" style="width: 40%;">Partner :</span>
										<select name="par" id="par" class="textfield form-control" >
						                   	<option value="">*Select a user partner*</option>
						                   	<?php
						                   		foreach ($partners as $par) {
						                  	?>     
											<option value="<?php echo $par["id"];?>"><?php echo $par["name"];?></option>
											<?php
						                   		}
						                  	?>                   					
						                </select>
					                </div>
					                <div class="input-group" style="width: 100%;padding:4px;" id="reg_div">
										<span class="input-group-addon" style="width: 40%;">Region :</span>
										<select name="reg" id="reg" class="textfield form-control" >
						                   	<option value="">*Select a user region*</option>  
						                   	<?php
						                   		foreach ($regions as $reg) {
						                  	?>     
											<option value="<?php echo $reg["region_id"];?>"><?php echo $reg["region_name"];?></option>
											<?php
						                   		}
						                  	?>                  					
						                </select>
					                </div>
					                <div class="input-group" style="width: 100%;padding:4px;" id="dis_div">
										<span class="input-group-addon" style="width: 40%;">District :</span>
										<select name="dis" id="dis" class="textfield form-control" >
						                   	<option value="">*Select a user district*</option>    
						                   	<?php
						                   		foreach ($districts as $dis) {
						                  	?>     
											<option value="<?php echo $dis["district_id"];?>"><?php echo $dis["district_name"];?></option>
											<?php
						                   		}
						                  	?>                					
						                </select>
					                </div>
					                <div class="input-group" style="width: 100%;padding:4px;" id="fac_div">
										<span class="input-group-addon" style="width: 40%;">Facility :</span>
										<select name="fac" id="fac" class="textfield form-control" >
						                   	<option value="">*Select a user facility*</option>    
						                   	<?php
						                   		foreach ($facilities as $fac) {
						                  	?>     
											<option value="<?php echo $fac["facility_id"];?>"><?php echo $fac["facility_name"];?></option>
											<?php
						                   		}
						                  	?>                					
						                </select>
					                </div>						
									<div class="right" style="padding:7px;">
										<button name="viewData" type="submit" onclick="viewData()" class="btn btn-primary btn-minii"><i class="ace-icon fa fa-thumbs"></i>Save</button>
										<button name="reset" type="reset"  class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
									</div>						
								</div>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<!-- type -->

    <div class="hr hr-18 hr-double dotted"></div>

    <h4 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a href="#tabs1-add" data-toggle="modal" class="pink"> Add User Types </a>
	</h4>
	<div class="hr hr-18 hr-sinlge dotted"></div>
        
    
        <!--User Types-->
        <div class="row my-infobox" id="user-types">	
            <div class="mycontainer" style="float:left;">		
					<?php echo form_open('admin/users/save_user_group');?>	          
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Description :</span>
							<input required name="usr_grp2" class="textfield form-control" type="text" />
						</div>									
						<div class="right" style="padding:7px;">
							<button name="viewData" type="submit" onclick="viewData()" class="btn btn-primary btn-minii"><i class="glyphicon glyphicon-save"></i>Save</button>
							<button name="reset" type="reset"  class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i> Discard</button>
						</div>						
					</form>
				</div>
    
    
				<div class="mycontainer row my-infobox" style="float:right;">
					      <div class="table-header">
                                Users Details
                          </div>
                    
                          <table id="tests_table" class="table table-bordered table-responsive">
                              <thead>
                                  <tr class="active">
                                      <th rowspan="2">#</th>
                                      <th rowspan="2">Description</th>
                              </thead>
                              <tbody>
                                    <?php
                                        //print_r($result); die();
                                        $i=1;
                                        foreach ($user_groups as $groups) {
                                    ?>
                                    <tr id="tr_<?php echo $groups["id"]; ?>">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $groups['name'];?></td>

                                    </tr>

                                    <?php
                                        $i++;
                                        }
                                    ?>
                              </tbody>
                          </table>

				</div>
			</div>
	</div>
</div>
<?php $this->load->view('user_footer_view');?>