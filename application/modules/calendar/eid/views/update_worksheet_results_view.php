
	<style>
			/* some elements used in demo only */
			.spinner-preview {
				width: 100px;
				height: 100px;
				text-align: center;
				margin-top: 60px;
			}
			
			.dropdown-preview {
				margin: 0 5px;
				display: inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
		</style>
<body class="login-layout light-login">
	<div class="main-container">
		<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
			<div class="widget-title smaller">
				<strong><h2>Update Worksheet Results</h2></strong>
			</div>
		</div><!--widget-header widget-header-flat-->
			
			<div class="row" style="height:50%; margin-bottom: 0px;"><!-- first row-->
				
				<div id="col-sm-7 infobox-container" style="margin-top: 1%;">
					<div class="profile-user-info profile-user-info-striped">
						<div class="profile-info-row">
							
								<table id="data-table">
											<thead>
												<tr>
													<th rowspan = "2" >#</th>
													<th rowspan = "1" colspan= "2" style="width:27%"><center>Dates</center></th>
													<th rowspan = "2" ># Facilities Reported</th>
													<th rowspan = "2" style="font-size: 1.0em;color: #2d6ca2;" ># of total tests</th>
													<th rowspan = "2" style="font-size: 1.0em;color: #2aabd2;" ># of valid tests</th>
													<th rowspan = "2" style="font-size: 1.0em;color: #3e8f3e; width:15%;"># of tests &gt= 350 cells/mm3 </th>
													<th rowspan = "2" style="font-size: 1.0em;color: #eb9316; width:15%;"># of tests &lt 350 cells/mm3</th>
													<th rowspan = "2" style="font-size: 1.0em;color: #c12e2a;" ># of errors</th>
												</tr>
												<tr>
													<th>From </th>
													<th> To </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Something</td>
													<td>Something</td>
													<td>Something</td>
													<td>Something</td>
													<td style="font-size: 1.1em;color: #2d6ca2;">Something</td>
													<td style="font-size: 1.1em;color: #2aabd2;">Something</td>
													<td style="font-size: 1.1em;color: #3e8f3e;">Something</td>
													<td style="font-size: 1.1em;color: #eb9316;">Something</td>
													<td style="font-size: 1.1em;color: #c12e2a;">Something</td>
												</tr>
											</tbody>
									</table>
										
						</div><!--profile-info-row-->
					</div><!--profile-user-info profile-user-info-striped-->
				</div><!--col-sm-7 infobox-container-->
			</div><!-- first row-->
			
			<div class="widget-header widget-header-flat" style="margin-bottom: 10px;">
				<div class="widget-title smaller">
					<strong><h4> Drag a file below to upload </h4></strong>
				</div>
			</div><!--widget-header widget-header-flat-->
			
			
				<form id="dropzone" class="dropzone dz-clickable" action="../dummy.html">
					<div class="dz-default dz-message">
						<span>
							<span class="bigger-150 bolder">
								<i class="ace-icon fa fa-caret-right red"></i>
								Drop files
							</span>
							to upload
							<span class="smaller-80 grey">
								(or click)
							</span>
							<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>
						</span>
					</div>
				</form>
			
			
			<div class="row" style="text-align: center;">
				<input type="button" value="Save & Print"/>
				
			</div>
	</div><!-- /.main-container -->

	<div class="footer">
		<div class="footer-inner" style="position :fixed;background:#fff;">
			<div class="footer-content" style = "height: 35px;">
				<!-- <span class="bigger-120" >
					<span class="blue"><?php echo $this->config->item("copyrights");?></span>
				</span> -->
			</div>
		</div>
	</div>


	<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
	


	
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	

	
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});

	  $('#data-table').dataTable({
		    "bProcessing": true,
		    "iDisplayLength": 5,
		    "bJQueryUI":true,
		    "bLengthChange": false,
		    "bFilter": false
	  	});
	});
	</script>

</body>