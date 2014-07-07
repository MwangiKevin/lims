<div>
	
   
        <h4 class="lighter">
           <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
           <a href="#" data-toggle="modal" class="pink">View Users Details </a>
        </h4>
	    
    <div class="hr hr-18 hr-double dotted"></div>
    
    <div class="row my-infobox" id="facilityDetails">	
    <div class="table-header">
			Users Details
		</div>
		<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive">
			<thead>
				<tr class="active">
                    <th rowspan="2">#</th>
					<th rowspan="2">Username</th>
					<th rowspan="2">Name</th>
                    <th rowspan="2">Phone Number</th>
                   
                    <th rowspan="2">Email</th>
                    <th rowspan="2">Type</th>
                    <th rowspan="2">Status</th>
					<th colspan="4"><center>Actions</center></th>
				</tr>
				<tr>
					<th>Reset Password</th>
					<th>Activate</th>
                    <th>Remove</th>
					<th>Edit Details</th>
				</tr>
			</thead>
			<tbody>
				<?php
                    //print_r($result); die();
					$i=1;
					foreach ($users as $facility) {
				?>
				<tr id="tr_<?php echo $facility["user_id"]; ?>">
					<td><?php echo $i;?></td>
					<td><?php echo $facility['username'];?></td>
                    <td><?php echo $facility['name'];?></td>
                    <td><?php echo $facility['phone'];?></td>
                    <td><?php echo $facility['email'];?></td>
                    <td><?php echo $facility['user_group'];?></td>
                    <?php 
						$color = "";
						$class = "";

						if($facility['status']==4){								
							$color = "#2d6ca2";
							$class = "glyphicon glyphicon-minus-sign";								
						}elseif($facility['status']==1){							
							$color = "#3e8f3e";
							$class = "glyphicon glyphicon-ok-sign";								
						}elseif($facility['status']==3){									
							$color = "#c12e2a";
							$class = "glyphicon glyphicon-remove-sign";							
						}else{							
							$color = "#eb9316";
							$class = "glyphicon glyphicon-question-sign";														
						}
					?>
                    <td>
                        <center>
							<a title =" <?php echo $facility['status'];?>" href="javascript:void(null);" style="border-radius:1px;" class="" onclick="edit_facility(<?php echo $facility['user_id'];?>,'<?php echo $facility['username'];?>','<?php echo $facility['name'];?>','<?php echo $facility['phone'];?>','<?php echo $facility['email'];?>','<?php echo $facility['user_group'];?>','<?php echo $facility['status'];?>)">
								<span style="font-size: 1.4em;color: <?php echo $color;?>;" class="<?php echo $class;?>"></span>
							<a>
						</center>
                    </td>
                    
					<td><center><a class="blue" href""><i class="ace-icon fa fa-pencil bigger-130"></i></a></center></td>	
					<td>******</td>						
					<td><center><a class="red" href""><i class="ace-icon fa fa-trash-o bigger-130"></i></a></center></td>
                    <td><center><a class="green" href""><i class="ace-icon fa fa-pencil bigger-130"></i></a></center></td>
                </tr>
				
				<?php
					$i++;
					}
				?>
			</tbody>
		</table>

    </div>
    
 
</div>
<?php $this->load->view("facilities_details_footer_view.php"); ?>