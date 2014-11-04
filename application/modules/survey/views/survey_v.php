<style>
	.main-content {
		padding-bottom: 10%;
	}
	.rotate {
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		transform: rotate(-90deg);
		/* also accepts left, right, top, bottom coordinates; not required, but a good idea for styling */
		-webkit-transform-origin: 50% 50%;
		-moz-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		-o-transform-origin: 50% 50%;
		transform-origin: 50% 50%;
		/* Should be unset in IE9+ I think. */
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
	}
</style>
<div style="width:60%;margin:auto;margin-top:5%;background:white">
	<table class="table-responsive" >
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th colspan="8">Please fill out the following Survey</th>

				</tr>
				<tr>
					<td>
					<div class="form-group">
						<label class="sr-only" for="studentNumber">Student Number</label>
						<input type="email" class="form-control" id="studentNumber" placeholder="Enter Student Number">
					</div></td>
					<td colspan="6">
					<div class="form-group">
						<label class="sr-only" for="studentNumber">Student Name</label>
						<input type="email" class="form-control" id="studentName" placeholder="Enter Student Name">
					</div></td>
					
				</tr>

				<tr>
					<th rowspan="3" colspan="2">Criteria</th>
					<th colspan="5">Grade</th>

				</tr>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th rowspan="7">Part 1</th>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test1"/>
					</td>
				</tr>
				<tr>
					<td>Testefefefefefefefeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</td>
					<td>
					<input type="radio" id="test1_1"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test2"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test3"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test4"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test5"/>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th rowspan="7">Part 2</th>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test1"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test2"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test3"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test4"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test5"/>
					</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<th rowspan="7">Part 2</th>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test1"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test1"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test2"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test2"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test3"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test3"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test4"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test4"/>
					</td>
				</tr>
				<tr>
					<td>Test</td>
					<td>
					<input type="radio" id="test1_1"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_2"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_3"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_4"name="test5"/>
					</td>
					<td>
					<input type="radio" id="test1_5"name="test5"/>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7">
					<button class="btn btn-primary">
						Submit
					</button></td>
				</tr>
			</tfoot>
		</table>
	</table>
</div>