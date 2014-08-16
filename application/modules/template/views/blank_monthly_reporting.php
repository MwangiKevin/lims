<div class="row my-infobox" style="overflow: auto;">
		<div class="table-header">
			FACILITY CONSUMPTION DATA REPORT & REQUEST(F-CDRR) FOR ART LABORATORY MONITORING REAGENTS
		</div>

		<table style="font-size:90%; overflow: auto;" id="tests_table" class="table table-bordered table-responsive" width="100%">
			<tr>
				<th>Name of Facility:</th>
				<td><?php echo form_input(array('name' => 'facility', 'id' => 'username', 'placeholder' => 'Facility', 'size' => '5'));?></td>
				<th>Facility Code:</th>
				<td><?php echo form_input(array('name' => 'code', 'id' => 'username', 'placeholder' => 'Facility Code', 'size' => '5'));?></td>
				<th>District:</th>
				<td><?php echo form_input(array('name' => 'district', 'id' => 'username', 'placeholder' => 'District', 'size' => '5'));?></td>
				<th>Province/County:</th>
				<td><?php echo form_input(array('name' => 'county', 'id' => 'username', 'placeholder' => 'Province/County', 'size' => '5'));?></td>
				<th>Affiliation:</th>
				<td><?php echo form_input(array('name' => 'affiliation', 'id' => 'username', 'placeholder' => 'Affiliation', 'size' => '5'));?></td>
			</tr>
			<tr>
				<th>REPORT FOR THE PERIOD:</th>
				<th>Year</th>
				<td>
					<select>
						<option value="" >**Select a Year**</option>
						<option value="">2013</option>
						<option  value="">2014</option>
					</select>
				</td>
				<th>Month</th>
				<td>
					<select>
						<option value="" >**Select a Month**</option>
						<option value="">January</option>
						<option value="">February</option>
						<option value="">March</option>
						<option value="">April</option>
						<option value="">May</option>
						<option value="">June</option>
						<option value="">July</option>
						<option value="">August</option>
						<option value="">September</option>
						<option value="">October</option>
						<option value="">Novemebr</option>
						<option value="">December</option>
					</select>
				</td>
				<td colspan="5"></td>
			</tr>
			
			<tr>
				<th colspan="6">TOTAL NUMBER OF CD4 TESTS DONE DURING THE MONTH(REPORTING PERIOD):</th>
				<td colspan="4"><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
			</tr>
		</table>
		<br />
		<table style="font-size:90%" id="tests_table" class="table table-bordered table-responsive" width="100%">
			<thead>
				<tr>
					<th rowspan="2">COMMODITY NAME</th>
					<th rowspan="2">UNIT OF ISSUE</th>
					<th rowspan="2">BEGINNING BALANCE</th>
					<th rowspan="1" colspan="2">QUANTITY RECEIVED FROM CENTRAL 
						WAREHOUSE (e.g. KEMSA)
					</th>
					<th rowspan="2">QUANTITY USED</th>
					<th rowspan="2">LOSSES/WASTAGE</th>
					<th rowspan="1" colspan="2">ADJUSTMENTS 
						Indicate if (+) or (-)
					</th>
					<th rowspan="2">ENDING BALANCE 
						PHYSICAL COUNT at end of the Month
					</th>
					<th rowspan="2">QUANTITY REQUESTED</th>
				</tr>
				<tr>
					<td rowspan="1">Quantity</td>
					<td rowspan="1">Lot No.</td>
					<td rowspan="1">Positive</td>
					<td rowspan="1">Negative</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th colspan="11">Cobas</th>
				</tr>
				<tr>
					<td>Cobas Reagents (Paediatrcics)</td>
					<td>100T Pack</td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
				</tr>
				<tr>
					<td>Cobas Control check beads</td>
					<td>25mL Pack</td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
				</tr>
				<tr>
					<th colspan="11">Abbott</th>
				</tr>
				<tr>
					<td>Abbott Kit 50T</td>
					<td>50T</td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
				</tr>
				<tr>
					<td>Abbott Controls</td>
					<td>25T</td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
					<td><?php echo form_input(array('name' => '', 'id' => '', 'placeholder' => '', 'size' => '5'));?></td>
				</tr>
			</tbody>
		</table>

</div>