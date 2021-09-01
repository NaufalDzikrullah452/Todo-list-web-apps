<script>

function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

var categoryCount = JSON.parse(httpGet('<?php echo site_url('index.php/dashboard/performance/statistics'); ?>'));
var totalTask = JSON.parse(httpGet('<?php echo site_url('index.php/dashboard/performance/total_task'); ?>')).totalCount[0].total;

/*--------------  overview-chart start ------------*/
 if ($('#monthly_task').length) {

    Highcharts.chart('monthly_task', {
  chart: {
    type: 'areaspline'
  },
  title: {
    text: 'Average Tasks this Month'
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    verticalAlign: 'top',
    x: 150,
    y: 100,
    floating: true,
    borderWidth: 1,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
  },
  xAxis: {
    categories: [
      'Weeks One',
      'Weeks Two',
      'Weeks Three',
      'Weeks Four'
    ],
    plotBands: [{ // visualize the weekend
      from: 4.5,
      to: 6.5,
      color: 'rgba(68, 170, 213, .2)'
    }]
  },
  yAxis: {
    title: {
      text: 'Task'
    }
  },
  tooltip: {
    shared: true,
    valueSuffix: ' task'
  },
  credits: {
    enabled: false
  },
  plotOptions: {
    areaspline: {
      fillOpacity: 0.5
    }
  },
  series: [{
    name: 'Complete',
    data: [3, 4, 3, 5]
  }, {
    name: 'Uncomplete',
    data: [1, 3, 4, 3]
  }]
});
} 

/*--------------  overview-chart END ------------*/

/*--------------  coin distrubution chart END ------------*/
if ($('#category_task').length) {

    zingchart.THEME = "classic";

    var myConfig = {
        "globals": {
            "font-family": "Roboto"
        },
        "graphset": [{
                "type": "pie",
                "background-color": "#fff",
                "legend": {
                    "background-color": "none",
                    "border-width": 0,
                    "shadow": false,
                    "layout": "float",
                    "margin": "auto auto 16% auto",
                    "marker": {
                        "border-radius": 3,
                        "border-width": 0
                    },
                    "item": {
                        "color": "%backgroundcolor"
                    }
                },
                "plotarea": {
                    "background-color": "#FFFFFF",
                    "border-color": "#DFE1E3",
                    "margin": "25% 8%"
                },
                "labels": [{
                    "x": "45%",
                    "y": "47%",
                    "width": "10%",
                    "text": totalTask + " Task",
                    "font-size": 20,
                    "font-weight": 700
                }],
                "plot": {
                    "size": 70,
                    "slice": 90,
                    "margin-right": 0,
                    "border-width": 0,
                    "shadow": 0,
                    "value-box": {
                        "visible": true
                    },
                    "tooltip": {
                        "text": "%v %",
                        "shadow": false,
                        "border-radius": 2
                    }
                },
                "series": [{
                        "values": [(categoryCount["Work"] ? categoryCount["Work"] : 0) * (100/totalTask)],
                        "text": "Work",
                        "background-color": "#4cff63"
                    },
                    {
                        "values": [(categoryCount["Sport"] ? categoryCount["Sport"] : 0) * (100/totalTask)],
                        "text": "Sport",
                        "background-color": "#fd9c21"
                    },
                    {
                        "values": [(categoryCount["Study"] ? categoryCount["Study"] : 0) * (100/totalTask)],
                        "text": "Study",
                        "background-color": "#2c13f8"
                    },
                    {
                        "values": [(categoryCount["Rest"] ? categoryCount["Rest"] : 0) * (100/totalTask)],
                        "text": "Rest",
                        "background-color": "#596275"
                    },
                    {
                        "values": [(categoryCount["Grocery"] ? categoryCount["Grocery"] : 0) * (100/totalTask)],
                        "text": "Grocery",
                        "background-color": "#706fd3"
                    },
                    {
                        "values": [(categoryCount["Others"] ? categoryCount["Others"] : 0) * (100/totalTask)],
                        "text": "Others",
                        "background-color": "#c8d6e5"
                    }
                ]
            }

        ]
    };

    zingchart.render({
        id: 'category_task',
        data: myConfig,
    });
}
/*--------------  coin distrubution chart END ------------*/
</script>