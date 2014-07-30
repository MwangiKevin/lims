<div class="page-header">
	<h1>
		Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			overview &amp; stats
		</small>
	</h1>
</div>



<div class = "row" >

	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header widget-header-flat widget-header-small">
				<h5 class="widget-title">
					<i class="ace-icon fa fa-signal"></i>
					Samples Testing Trend
				</h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">

					<div id ="samples" class ="" style="height:250px;">

					</div>
					<div class="hr hr8 hr-double"></div>

				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div>
	</div>
	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header widget-header-flat widget-header-small">
				<h5 class="widget-title">
					<i class="ace-icon fa fa-signal"></i>
					Average Monthly TAT
				</h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">

					<div id ="tat" class ="" style="height:250px;">

					</div>
					<div class="hr hr8 hr-double"></div>

				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div>

	</div>

</div>

<div class="hr  hr-dotted"></div>

<div class ="my-infobox">
	<div class ="row">

		<div class="col-sm-4">
			<div class="widget-box">
				<div class="widget-header widget-header-flat widget-header-small">
					<h5 class="widget-title">
						<i class="ace-icon fa fa-signal"></i>
						Todays Progress
					</h5>
				</div>

				<div class="widget-body">
					<div class="widget-main">

						<div id ="dat" class ="" style="height:250px;">

						</div>
						<div class="hr hr8 hr-double"></div>

					</div><!-- /.widget-main -->
				</div><!-- /.widget-body -->
			</div>

		</div>
		<div class="col-sm-4">
			<div class="widget-box transparent">
				<div class="widget-header widget-header-flat">
					<h4 class="widget-title lighter">
						<i class="ace-icon fa fa-star orange"></i>
						Facilities Info 
					</h4>

					<div class="widget-toolbar">
						<a href="#" data-action="collapse">
							<i class="ace-icon fa fa-chevron-up"></i>
						</a>
					</div>
				</div>

				<div class="widget-body"><div class="widget-body-inner" style="display: block;overflow-y:auto;height:250px;">
					<div class="widget-main no-padding">
						<table class="table table-bordered table-striped">


							<tbody>
								<tr>
									<td class="hidden-480">
										<span class="label label-info ">Cummulative Tests</span>
									</td>
									<td>
										<b class="green">0</b>
									</td>

								</tr>

								<tr>
									<td>
										<span class="label label-info arrowed-right">Received Samples</span>
									</td>

									<td>
										<b class="green">0</b>
									</td>
								</tr>

								<tr>
									<td>
										<span class="label  arrowed arrowed-in-right"><s>Rejected Samples</s></span>
									</td>

									<td>
										<b class="red">0</b>
									</td>
								</tr>

								<tr>
									<td><span class="label label-danger">Failed Tests</span></td>

									<td>
										<b class="red">0</b>
									</td>
								</tr>

								<tr>
									<td>
										<span class="label label-success arrowed arrowed-right">Tested Samples</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-success arrowed arrowed-right">positive</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-warning arrowed arrowed-right">Negative</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-success ">Total Tests done (including repeats)</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-info ">No of SMS printers served by lab</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
							</tbody>
						</table>
					</div><!-- /.widget-main -->
				</div>
			</div><!-- /.widget-body -->
			</div><!-- /.widget-box -->
		</div>
		<div class="col-sm-4">
			<div class="widget-box transparent">
				<div class="widget-header widget-header-flat">
					<h4 class="widget-title lighter">
						<i class="ace-icon fa fa-star orange"></i>
						Lab Statistics for <?php echo Date("F-Y");?>
					</h4>

					<div class="widget-toolbar">
						<a href="#" data-action="collapse">
							<i class="ace-icon fa fa-chevron-up"></i>
						</a>
					</div>
				</div>

				<div class="widget-body"><div class="widget-body-inner" style="display: block;overflow-y:auto;height:250px;">
					<div class="widget-main no-padding">
						<table class="table table-bordered table-striped">


							<tbody>
								<tr>
									<td class="hidden-480">
										<span class="label label-info ">Cummulative Tests</span>
									</td>
									<td>
										<b class="green">0</b>
									</td>

								</tr>

								<tr>
									<td>
										<span class="label label-info arrowed-right">Received Samples</span>
									</td>

									<td>
										<b class="green">0</b>
									</td>
								</tr>

								<tr>
									<td>
										<span class="label  arrowed arrowed-in-right"><s>Rejected Samples</s></span>
									</td>

									<td>
										<b class="red">0</b>
									</td>
								</tr>

								<tr>
									<td><span class="label label-danger">Failed Tests</span></td>

									<td>
										<b class="red">0</b>
									</td>
								</tr>

								<tr>
									<td>
										<span class="label label-success arrowed arrowed-right">Tested Samples</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-success arrowed arrowed-right">positive</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-warning arrowed arrowed-right">Negative</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-success ">Total Tests done (including repeats)</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
								<tr>
									<td>
										<span class="label label-info ">No of SMS printers served by lab</span>
									</td>

									<td>

										<b class="green">0</b>
									</td>

								</tr>
							</tbody>
						</table>
					</div><!-- /.widget-main -->
				</div></div><!-- /.widget-body -->
			</div><!-- /.widget-box -->
		</div>
	</div>
</div>





















<script type="text/javascript">

$(function () {
	$('#samples').highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: 'Stacked column chart'
		},
		xAxis: {
			categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total fruit consumption'
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: 'bold',
					color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
				}
			}
		},
		legend: {
			align: 'right',
			x: -70,
			verticalAlign: 'top',
			y: 20,
			floating: true,
			backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
			borderColor: '#CCC',
			borderWidth: 1,
			shadow: false
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.x +'</b><br/>'+
				this.series.name +': '+ this.y +'<br/>'+
				'Total: '+ this.point.stackTotal;
			}
		},
		plotOptions: {
			column: {
				stacking: 'normal',
				dataLabels: {
					enabled: true,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
					style: {
						textShadow: '0 0 3px black, 0 0 3px black'
					}
				}
			}
		},
		series: [{
			name: 'John',
			data: [5, 3, 4, 7, 2]
		}, {
			name: 'Jane',
			data: [2, 2, 3, 2, 1]
		}, {
			name: 'Joe',
			data: [3, 4, 4, 2, 5]
		}]
	});
});


$(function () {
	$('#tat').highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: 'Stacked column chart'
		},
		xAxis: {
			categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total fruit consumption'
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: 'bold',
					color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
				}
			}
		},
		legend: {
			align: 'right',
			x: -70,
			verticalAlign: 'top',
			y: 20,
			floating: true,
			backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
			borderColor: '#CCC',
			borderWidth: 1,
			shadow: false
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.x +'</b><br/>'+
				this.series.name +': '+ this.y +'<br/>'+
				'Total: '+ this.point.stackTotal;
			}
		},
		plotOptions: {
			column: {
				stacking: 'normal',
				dataLabels: {
					enabled: true,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
					style: {
						textShadow: '0 0 3px black, 0 0 3px black'
					}
				}
			}
		},
		series: [{
			name: 'John',
			data: [5, 3, 4, 7, 2]
		}, {
			name: 'Jane',
			data: [2, 2, 3, 2, 1]
		}, {
			name: 'Joe',
			data: [3, 4, 4, 2, 5]
		}]
	});
});


$(function () {
        $('#dat').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Stacked bar chart'
            },
            xAxis: {
                categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
                series: [{
                name: 'John',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Jane',
                data: [2, 2, 3, 2, 1]
            }, {
                name: 'Joe',
                data: [3, 4, 4, 2, 5]
            }]
        });
    });
    
</script>