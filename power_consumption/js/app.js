$(function() {
    $.ajax({

        url: 'data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                //"caption": "Top 10 wicket takes ODI Cricket in 2015",
                "xAxisName": "Time",
                "yAxisName": "Unit(KWH)",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'line',
                renderAt: 'chart-container',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});