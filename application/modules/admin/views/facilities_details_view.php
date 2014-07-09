<div>
	
   
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
                   
                    <th rowspan="2"># Equipment</th>
                    <th rowspan="2"># Users</th>
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
                    
					<td>******</td>	
					<td>******</td>						
					<td><span class="glyphicon glyphicon-minus-sign"></span></td>
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
    
 
</div>
<?php $this->load->view("facilities_details_footer_view.php"); ?>