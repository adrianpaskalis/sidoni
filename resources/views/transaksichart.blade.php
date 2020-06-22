<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
    
<body>
 
<div id="container"></div>
</body>
 
<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
 
<script type="text/javascript">
   let chart =  JSON.parse(`<?php echo $chart ?>`);
    
    Highcharts.chart('container', {
        title: {
            text: 'Laporan Transaksi Donasi Tahun'
        },
        subtitle: {
            text: 'SIDONI'
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Jumlah Transaksi'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Total',
            data: chart
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>
