$(document).ready(function () {

    var d1 = [[1262304000000, 50], [1264982400000, 57], [1267401600000, 43], [1270080000000, 98], [1272672000000, 60], [1275350400000, 26], [1277942400000, 02], [1280620800000, 37], [1283299200000, 04], [1285891200000, 44], [1288569600000, 77], [1291161600000, 95]];
 
    var data1 = [
        { label: "Sensor Data", data: d1, color: '#46bb00' }
    ]; 
    $.plot($("#chart3"), data1, {
        xaxis: {
            min: (new Date(2009, 12, 1)).getTime(),
            max: (new Date(2010, 11, 2)).getTime(),
            mode: "time",
            tickSize: [1, "month"],
            monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
            tickLength: 0,
            axisLabel: 'Week',
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 11,
            axisLabelPadding: 5
        },
        yaxis: {
            axisLabel: 'Sensor Value',
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 11,
            autoscaleMargin: 0.01,
            axisLabelPadding: 5,
            tickLength: "full"
        },
        series: {
            lines: {
                show: true, 
                fill: true,
                fillColor: { colors: [ { opacity: 0.5 }, { opacity: 0.2 } ] },
                lineWidth: 1.5
            },
            points: {
                show: true,
                radius: 2.5,
                fill: true,
                fillColor: "#ffffff",
                symbol: "circle",
                lineWidth: 1.1
            }
        },
        grid: { hoverable: true, clickable: true },
        legend: {
            show: false
        }
    });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip" class="chart-tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y - 46,
            left: x - 9,
            'z-index': '9999',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#chart3").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#chart3").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(0),
                        y = item.datapoint[1].toFixed(0);
                    
                    showTooltip(item.pageX, item.pageY,
                                item.series.label + ": " + "<strong>" + y + "</strong>");
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    });

    $("#chart3").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });


});