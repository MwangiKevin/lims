
   
        <h4 class="lighter">
           <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
           <a href="#" data-toggle="modal" class="pink">View Users Details </a>
        </h4>
	    
    <div class="hr hr-18 hr-double dotted"></div>
    
    <div class="row my-infobox" id="userDetails">	
    <div class="table-header">
			Users Details
		</div>
		<table style="font-size:90%" id="tests_table_users" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
                    <th rowspan="2">#</th>
					<th rowspan="2">Username</th>
					<th rowspan="2">Name</th>
                    <th rowspan="2">Phone Number</th>
                    <th rowspan="2">Email</th>
                    <th rowspan="2">Type</th>
                    <th rowspan="2">Status</th>
					<th colspan="3"><center>Actions</center></th>
				</tr>
				<tr>
					<th>Reset Password</th>
					<th>Remove</th>
					<th>Edit Details</th>
				</tr>
			</thead>
			<tbody>
				<?php
                    //print_r($result); die();
					$i=1;
					foreach ($users as $user) {
				?>
				<tr id="tr_<?php echo $user["user_id"]; ?>">
					<td><?php echo $i;?></td>
					<td><?php echo $user['username'];?></td>
                    <td><?php echo $user['name'];?></td>
                    <td><?php echo $user['phone'];?></td>
                    <td><?php echo $user['email'];?></td>
                    <td><?php echo $user['user_group'];?></td>
                    <?php 
						$color = "";
						$class = "";

						if($user['status']==2){								
							$color = "#F23518";
							$class = "ace-icon fa fa-ok-sign fa-tint";								
						}elseif($user['status']==1){							
							$color = "#3e8f3e";
							$class = "ace-icon fa fa-ok-sign fa-tint";								
						}elseif($user['status']==3){									
							$color = "#c12e2a";
							$class = "ace-icon fa fa-pencil";							
						}else{							
							$color = "#eb9316";
							$class = "ace-icon fa fa-ok-sign fa-tin";														
						}
					?>
                    <td>
                        <center>
							<a title =" <?php echo $user['status'];?>" href="javascript:void(null);" style="border-radius:1px;" class="" onclick="edit_facility(<?php echo $user['user_id'];?>,'<?php echo $user['username'];?>','<?php echo $user['name'];?>','<?php echo $user['phone'];?>','<?php echo $user['email'];?>','<?php echo $user['user_group'];?>','<?php echo $user['status'];?>)">
								<span style="font-size: 1.4em;color: <?php echo $color;?>;" class="<?php echo $class;?>"></span>
								<i class="ace-icon fa fa-thumb bigger-130"></i>
							</a>
						</center>
                    </td>
                    
					<td><center><a class="green" title="Reset '<?php echo $user['username'];?>' Password" href="javascript:void(null);" style="border-radius:1px;" onclick="reset_password(<?php echo $user['user_id'];?>,'<?php echo $user["username"] ?>','<?php echo $user["name"] ?>','<?php echo $user["phone"] ?>','<?php echo $user["email"] ?>','<?php echo $user["user_group"] ?>','<?php echo $user["status"] ?>')"><i class="ace-icon fa fa-pencil bigger-130"></i></a></center></td>	
					<td><center><a class="red" href="<?php echo base_url('admin/users/remove_user/'.$user['user_id']);?>"><i class="ace-icon fa fa-trash-o bigger-130"></i></a></center></td>
                    <td><center><a class="blue" title =" Edit <?php echo $user['username'];?> Details" href="javascript:void(null);" style="border-radius:1px;" onclick="edit_user(<?php echo $user['user_id'];?>,'<?php echo $user["username"] ?>','<?php echo $user["name"] ?>','<?php echo $user["phone"] ?>','<?php echo $user["email"] ?>','<?php echo $user["user_group"] ?>','<?php echo $user["status"] ?>')"><i class="ace-icon fa fa-pencil bigger-130"></i></a></center></td>
                </tr>
				
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>

    </div>
    
    <div class="hr hr-18 hr-double dotted"></div>




<div class="modal fade" id="editdetailsdiv">
	<div class="modal-dialog" style="width:69%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h4 class="modal-title">
		    		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		            <a href="#" data-toggle="modal" class="pink">Edit User Details </a>
	            </h4>
	  		</div>
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open('admin/users/edit_user');?>

					<input required id="edituserid" type="hidden" name="edituserid" class="textfield form-control" readonly />
					<div class="input-group" style="width: 100%;padding:4px;">
						<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th rowspan="2">#</th>
									<th rowspan="2">Username</th>
									<th rowspan="2">Name</th>
				                    <th rowspan="2">Phone Number</th>
				                    <th rowspan="2">Email</th>
				                    <th rowspan="2">Type</th>
				                    <th rowspan="2">Status</th>
									<th colspan="3"><center>Actions</center></th>
								</tr>
								<tr>
									<th>Reset Password</th>
									<th>Remove</th>
									<th>Edit Details</th>
								</tr>
							</thead>
							<tbody>
								<tr id="edit_table_row">
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							<tbody>
						</table>	
		            </div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Username :</span>
						<input required id="editusername" name="username" class="textfield form-control" type="text" readonly />
					</div>		
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">User Type :</span>
						<input required id="editusertype" name="usertype" class="textfield form-control" type="text" readonly />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Name:</span>
						<input required id="editname" name="name" class="textfield form-control" type="text" />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">email:</span>
						<input required id="editemail" name="email" class="textfield form-control" type="text" />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Phone no.:</span>
						<input required id="editphone" name="phone" class="textfield form-control" type="text" />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Status :</span>
						<span class="input-group-addon" style="width: 10%;"><input type="radio" name="editstatus" value="1">  Active  <span style="font-size: 1.4em;color: #3e8f3e;" class="glyphicon glyphicon-ok-sign"></span></input></span>
						<span class="input-group-addon" style="width: 10%;"><input type="radio" name="editstatus" value="2">  Pending Activation  <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-question-sign"></span></input></span>
						<span class="input-group-addon" style="width: 10%;"><input disabled type="radio" name="editstatus" value="3">  lock(ed)  <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-remove-sign"></span></input></span>
						<span class="input-group-addon" style="width: 10%;"><input disabled type="radio" name="editstatus" value="4">  Password Reset  <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-pencil"></span></input></span>
						<span class="input-group-addon" style="width: 10%;"><input type="radio" name="editstatus" value="5">  Remove(d)  <span style="font-size: 1.4em;color: #c12e2a;" class="glyphicon glyphicon-remove-sign"></span></input></span>
	                </div>
					<div class="modal-footer" style="height:11px;padding-top:11px;">								
						<div class="" style="padding:7px;">
							<button name="save" type="submit" class="btn btn-primary btn-mini"><i class="glyphicon glyphicon-save"></i>Save</button>
							<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
						</div>
					</div>		      		 
		      	</form>
			</div>
			<div class="modal-footer" style="height:11px;padding-top:11px;">
      			<?php echo $this->config->item("copyrights");?>
      		</div> 
		</div>
	</div>
</div>

<div class="modal fade" id="resetpassworddiv">
	<div class="modal-dialog" style="width:69%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h4 class="modal-title">
		    		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		            <a href="#" data-toggle="modal" class="pink">Reset Password </a>
	            </h4>
	  		</div>
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open('admin/users/reset_password/');?>
				
					<input required id="resetuserid" type="hidden" name="resetuserid" class="textfield form-control" readonly />
					
		               	
		            <div class="hr hr-18 hr-single dotted"></div>

					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Username :</span>
						<input required id="resetusername" name="resetusername" class="textfield form-control" type="text" readonly />
					</div>		
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">User Type :</span>
						<input required id="resetusertype" name="resetusertype" class="textfield form-control" type="text" readonly />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Old Password:</span>
						<input required id="oldpassword" name="oldpassword" class="textfield form-control" type="text" />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">New Password:</span>
						<input required id="newpassword" name="newpassword" class="textfield form-control" type="text" />
					</div>	
					<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;">Confirm New Password:</span>
						<input required id="cofirmnewpassword" name="cofirmnewpassword" class="textfield form-control" type="text" />
					</div>	
					
					<div class="modal-footer" style="height:11px;padding-top:11px;">								
						<div class="" style="padding:7px;">
							<button name="save" type="submit" class="btn btn-primary btn-mini"><i class="glyphicon glyphicon-save"></i>Reset</button>
							<button name="discard" type="button"  onclick="hide_edit()" class="btn btn-default btn-minii"><i class="glyphicon glyphicon-remove"></i>Discard</button>
						</div>
					</div>		      		 
		      	</form>
			</div>
			<div class="modal-footer" style="height:11px;padding-top:11px;">
      			<?php echo $this->config->item("copyrights");?>
      		</div> 
		</div>
	</div>
</div>
    
<?php $this->load->view("user_footer_view.php"); ?>