var XMLHttpRequestObject = false;

if (window.XMLHttpRequest)
{
    XMLHttpRequestObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getCampaignMetrics(data, variables, btn)
{
    var l = Ladda.create(btn);
    if(XMLHttpRequestObject)
    {

        XMLHttpRequestObject.open("POST", "get-metrics-report");


        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
            {
                var response = $.parseJSON(XMLHttpRequestObject.responseText);
                console.log(response);

                var selectColors = ["#d12610", "#37b7f3", "#52e136", '#26B99A'];
                $('#graphContainer').empty();
                for(var i = 0; i < variables.length; i++){
                    $color =  selectColors[Math.floor(Math.random() * 4)];
                    if(response['count'] > 15 || variables[i] == 'VCCP'){
                        var colClass = 'col-md-12';

                    }else{
                        var colClass = 'col-md-6';
                    }
                    if(variables[i] == 'CV' || variables[i] == 'CR' || variables[i] == 'CTR'){
                        var metricsTitle = variables[i];
                        var yLabelFormat = function (y) { return y.toString() + '%'; }
                    }else if(variables[i] == 'EPV' ||variables[i] == 'CPV') {
                        var metricsTitle = variables[i];
                        var yLabelFormat = function (y) {
                            return '$' + y.toString();
                        }
                    }else if(variables[i] == 'VCCP'){
                        var metricsTitle = 'Visits, Conversions, Cost, Profit';
                    }


                    $('#graphContainer').append(
                        '<div class="'+ colClass +' col-sm-12">' +
                        ' <div class="portlet light">' +
                        ' <div class="portlet-title">'+
                        ' <div class="caption font-green-sharp">'+
                        ' <i class="fa fa-area-chart font-green-sharp"></i>'+
                        ' <span class="caption-subject bold uppercase"> ' + metricsTitle + '</span>'+
                        ' </div>'+
                        ' </div>'+
                        ' <div class="portlet-body">'+
                        '<div id="graph_area_'+variables[i]+'" style="width:100%; height:300px;"></div>' +
                        ' </div>'+
                        ' </div>'+
                        ' </div>'
                    );

                    if(variables[i] != 'VCCP'){
                        $data = [];
                        $.each(response['data'], function(date, val) {
                            $.each(val, function(obj, data) {
                                if(obj == variables[i].toLowerCase()){
                                    if(obj == 'cv' || obj == 'cr' || obj == 'ctr'){
                                        var dataValue = data.toFixed(2);

                                    }else if(obj == 'epv' || obj == 'cpv'){
                                        var dataValue = data.toFixed(4);
                                    }
                                   // $data.push({ period: date, value: dataValue });
                                    $data.push([Date.parse(date), parseFloat(dataValue)]);
                                }
                            });
                        });

                        $("#graph_area_"+variables[i]).highcharts({
                            chart: {
                                zoomType: 'x',
                                style: {
                                    fontFamily: 'Open Sans'
                                }
                            },
                            title: {
                                text: variables[i]
                            },
                            subtitle: {
                                text: document.ontouchstart === undefined ?
                                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                            },
                            xAxis: {
                                type: 'datetime'
                            },
                            yAxis: {
                                title: {
                                    text: variables[i]
                                }
                            },
                            legend: {
                                enabled: false
                            },
                            plotOptions: {
                                area: {
                                    fillColor: {
                                        linearGradient: {
                                            x1: 0,
                                            y1: 0,
                                            x2: 0,
                                            y2: 1
                                        },
                                        stops: [
                                            [0, $color],
                                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                        ]
                                    },
                                    marker: {
                                        radius: 2
                                    },
                                    lineWidth: 1,
                                    states: {
                                        hover: {
                                            lineWidth: 1
                                        }
                                    },
                                    threshold: null
                                }
                            },

                            series: [{
                                type: 'area',
                                color: $color,
                                name: variables[i],
                                data: $data
                            }]
                        });
                    }else {
                        $visits = [];
                        $conversions = [];
                        $cost = [];
                        $profit = [];
                        $.each(response['data'], function (date, val) {
                            var visits, conversions, cost, profit;
                            $.each(val, function (obj, data) {

                                if (obj == 'visits') {
                                    visits = data;

                                } else if (obj == 'conversions') {
                                    conversions = data

                                } else if (obj == 'cost') {
                                    cost = data.toFixed(2);
                                } else if (obj == 'profit') {
                                    profit = data.toFixed(2);
                                }
                            });

                            //$data.push({ period: date, visits: visits, conversions: conversions, cost: cost, profit: profit});
                            $visits.push([Date.parse(date),  parseFloat(visits)]);
                            $conversions.push([Date.parse(date),  parseFloat(conversions)]);
                            $cost.push([Date.parse(date),  parseFloat(cost)]);
                            $profit.push([Date.parse(date),  parseFloat(profit)]);
                        });

                        $("#graph_area_" + variables[i]).highcharts({
                            chart: {
                                zoomType: 'x',
                                style: {
                                    fontFamily: 'Open Sans'
                                },
                                type: 'areaspline'
                            },
                            title: {
                                text: variables[i]
                            },
                            subtitle: {
                                text: document.ontouchstart === undefined ?
                                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                            },
                            xAxis: {
                                type: 'datetime'
                            },
                            yAxis: {
                                title: {
                                    text: 'VCCP'
                                }
                            },
                            legend: {
                                layout: 'vertical',
                                align: 'left',
                                verticalAlign: 'top',
                                x: 150,
                                y: 100,
                                floating: true,
                                borderWidth: 1,
                                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                            },
                            tooltip: {
                                shared: true
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

                                name: 'Visits',
                                data: $visits
                            },
                                {

                                    name: 'Conversions',
                                    data: $conversions
                                },
                                {

                                    name: 'Cost',
                                    data: $cost
                                },
                                {

                                    name: 'Profit',
                                    data: $profit
                                }
                            ]
                        });


                    }

                }

                function showTooltip(x, y, contents) {
                    $('<div id="tooltip">' + contents + '</div>').css({
                        position: 'absolute',
                        display: 'none',
                        top: y + 5,
                        left: x + 15,
                        border: '1px solid #333',
                        padding: '4px',
                        color: '#fff',
                        'border-radius': '3px',
                        'background-color': '#333',
                        opacity: 0.80
                    }).appendTo("body").fadeIn(200);
                }

                l.stop();
                showNotification('success', 'Success', 'Metrics Successfully Generated')
            }
            if (XMLHttpRequestObject.status == 408 || XMLHttpRequestObject.status == 503 || XMLHttpRequestObject.status == 500){
                showNotification('error', '', '');
                l.stop();
            }
        }

        //   $cellValue =  $('#modalCampaignTable tr td:first').text();

        l.start();

        var dataArray = JSON.stringify(data);
        XMLHttpRequestObject.send("param=" + dataArray);

    }

    return false;
}
