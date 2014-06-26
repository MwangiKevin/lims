   <div>
        	<div class="tabbable span12" style="margin-top:5px;">
		<ul class="nav nav-tabs">
			<li id ="tabAdd" class="active"><a href="#tabs1-add" data-toggle="tab">Add Facility</a></li>
			<li id ="tabDistrict"><a href="#tabs1-District" data-toggle="tab">Districts</a></li>
			<li id ="tabRegion"><a href="#tabs1-Region" data-toggle="tab">Regions</a></li>
			
		</ul>
		<div class="tab-content">

			<!-- Add new -->
			<div class="tab-pane active" id="tabs1-add" >
				<div class="mycontainer">
					<?php echo form_open('admin/facilities');?>
		                <div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Region:</span>
							<select name="reg" id="reg" required class="textfield form-control" >
			                   	<option value="">*Select a Region*</option>  
		                   		<?php
			                   		foreach ($regions as $reg) {
			                  	?>     
								<option value="<?php echo $reg["region_id"];?>"><?php echo $reg["region_name"];?></option>
								<?php
			                   		}
			                  	?>                 					
			                </select>
		                </div>
		                <div id="dis_div" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">District:</span>
							<select name="dis" id="dis" required class="textfield form-control" >
			                                     					
			                </select>
		                </div>
		               
						<div id="fac_name_div" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Facility Name:</span>
							<input name="fac_name" id="fac_name" required class="textfield form-control" type="text" />
						</div>	
						<div id="fac_email_div" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">email:</span>
							<input name="fac_email" id="fac_email" required class="textfield form-control" type="text" />
						</div>																
						<div id="fac_phone_div" class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Phone no:</span>
							<input name="fac_phone" id="fac_phone" required class="textfield form-control" type="text" />
						</div>															
						<div class="right" style="padding:7px;">
							<button name="viewData" type="submit" onclick="viewData()" class="btn btn-primary btn-minii"><i class="glyphicon glyphicon-save"></i>Save</button>
							<button name="reset" type="reset"  class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
						</div>						
					</form>
				</div>
			</div>
			<!-- District -->
			<div class="tab-pane" id="tabs1-District" style="width: 60%;padding:4px;" >		
				<table id="data-table-dis">
					<thead>
						<tr>
							<th>#</th>
							<th>District Name</th>					
							<th>Region</th>
							<th>Partner</th>						
					</thead>
					<tbody>
						<?php
							$i=1;
							foreach ($districts as $dis) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $dis['district_name'];?></td>
							<td><?php echo $dis['region_name'];?></td>
							<td><?php echo $dis['partner_name'];?></td>
						</tr>
						<?php
							$i++;
							}
						?>
					</tbody>
				</table>		
			</div>
			<!-- Region -->
			<div class="tab-pane" id="tabs1-Region" style="width: 60%;padding:4px;" >	
				<table id="data-table-reg">
					<thead>
						<tr>
							<th>#</th>				
							<th>Region Name</th>
							<th>Partner</th>						
					</thead>
					<tbody>
						<?php
							$i=1;
							foreach ($regions as $reg) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $reg['region_name'];?></td>
							<td><?php echo $reg['partner_name'];?></td>
						</tr>
						<?php
							$i++;
							}
						?>
					</tbody>
				</table>					
			</div>
			<!-- Partner -->
			<div class="tab-pane" id="tabs1-Partner" style="width: 60%;padding:4px;" >		
				<table id="data-table-par">
					<thead>
						<tr>
							<th>#</th>			
							<th>Partner</th>	
							<th>Email</th>	
							<th>Phone</th>						
					</thead>
					<tbody>
						<?php
							$i=1;
							foreach ($partners as $par) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $par['name'];?></td>
							<td><?php echo $par['email'];?></td>
							<td><?php echo $par['phone'];?></td>
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