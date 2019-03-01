function plotgraph() {
	var sid=document.getElementById('sid');
	var uid=document.getElementById('uid');
	var div=document.createElement('div');
	document.getElementById('graph').appendChild(div);
	div.style.height = '200px'; div.style.width = '400px';div.style.display='inline';
	div.id = uid.options[uid.selectedIndex].text;
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        Highcharts.chart(uid.options[uid.selectedIndex].text, {
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.random();
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            title: {
                text: sid.options[sid.selectedIndex].text
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 10
            },
            yAxis: {
                title: {
                    text: uid.options[uid.selectedIndex].text
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#ababab'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: sid.options[sid.selectedIndex].text,
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -25; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: Math.random()
                        });
                    }
                    return data;
                }())
            }]
        });
}