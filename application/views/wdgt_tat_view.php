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


<script>

$(function () {
    $('#tat').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov','Dec']
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
        credits:{
            enabled:false
        },
        legend: {
            align: 'center',
            x: 0,
            verticalAlign: 'bottom',
            y: 0,
            height:40,
            floating: false,
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
            name: 'Collection at facility - lab receipt',
            stack:'c',
            color:"#6fb3e0",
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Receipt at lab - processing',
            stack:'b',
            color:"#d43f3a",
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Processing - dispatch',
            stack:'b',
            color:"#ffb752",
            data: [3, 4, 4, 2, 5]
        }, {
            name: 'Collection at facility - dispatch',
            stack:'a',
            color:"#87b87f",
            data: [3, 4, 4, 2, 5]
        }]
    });
});

</script>

