"use strict";
!(function (n) {
    function a() {
        (this.$body = n("body")), (this.$realData = []);
    }

    (a.prototype.createPlotGraph = function (a, o, t, r, e, i, l) {
        n.plot(
            n(a),
            [
                {data: o, label: r[0], color: e[0]},
                {data: t, label: r[1], color: e[1]},
            ],
            {
                series: {
                    lines: {
                        show: !0,
                        fill: !0,
                        lineWidth: 2,
                        fillColor: {
                            colors: [{opacity: 0.4}, {opacity: 0.4}],
                        },
                    },
                    points: {show: !1},
                    shadowSize: 0,
                },
                grid: {
                    hoverable: !0,
                    clickable: !0,
                    borderColor: i,
                    tickColor: "#f9f9f9",
                    borderWidth: 1,
                    labelMargin: 10,
                    backgroundColor: l,
                },
                legend: {
                    position: "ne",
                    margin: [0, -24],
                    noColumns: 0,
                    backgroundColor: "transparent",
                    labelBoxBorderColor: null,
                    labelFormatter: function (a, o) {
                        return a + "&nbsp;&nbsp;";
                    },
                    width: 30,
                    height: 2,
                },
                yaxis: {
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
                xaxis: {
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
                tooltip: !0,
                tooltipOpts: {
                    content: "%s: Value of %x is %y",
                    shifts: {x: -60, y: 25},
                    defaultTheme: !1,
                },
            }
        );
    }),
        (a.prototype.createPieGraph = function (a, o, t, r) {
            (t = [
                {label: o[0], data: t[0]},
                {label: o[1], data: t[1]},
                {label: o[2], data: t[2]},
            ]),
                (r = {
                    series: {pie: {show: !0}},
                    legend: {show: !0, backgroundColor: "transparent"},
                    grid: {hoverable: !0, clickable: !0},
                    colors: r,
                    tooltip: !0,
                    tooltipOpts: {content: "%s, %p.0%"},
                });
            n.plot(n(a), t, r);
        }),
        (a.prototype.randomData = function () {
            for (
                0 < this.$realData.length &&
                (this.$realData = this.$realData.slice(1));
                this.$realData.length < 300;
            ) {
                var a =
                    (0 < this.$realData.length
                        ? this.$realData[this.$realData.length - 1]
                        : 50) +
                    10 * Math.random() -
                    5;
                a < 0 ? (a = 0) : 100 < a && (a = 100), this.$realData.push(a);
            }
            for (var o = [], t = 0; t < this.$realData.length; ++t)
                o.push([t, this.$realData[t]]);
            return o;
        }),
        (a.prototype.createRealTimeGraph = function (a, o, t) {
            return n.plot(a, [o], {
                colors: t,
                series: {
                    grow: {active: !1},
                    shadowSize: 0,
                    lines: {show: !0, fill: !1, lineWidth: 2, steps: !1},
                },
                grid: {
                    show: !0,
                    aboveData: !1,
                    color: "#dcdcdc",
                    labelMargin: 15,
                    axisMargin: 0,
                    borderWidth: 0,
                    borderColor: null,
                    minBorderMargin: 5,
                    clickable: !0,
                    hoverable: !0,
                    autoHighlight: !1,
                    mouseActiveRadius: 20,
                },
                tooltip: !0,
                tooltipOpts: {
                    content: "Value is : %y.0%",
                    shifts: {x: -30, y: -50},
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
                xaxis: {
                    show: !1,
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
            });
        }),
        (a.prototype.createDonutGraph = function (a, o, t, r) {
            (t = [
                {label: o[0], data: t[0]},
                {label: o[1], data: t[1]},
                {label: o[2], data: t[2]},
                {label: o[3], data: t[3]},
            ]),
                (r = {
                    series: {pie: {show: !0, innerRadius: 0.7}},
                    legend: {
                        show: !0,
                        labelFormatter: function (a, o) {
                            return (
                                '<div style="font-size:14px;">&nbsp;' +
                                a +
                                "</div>"
                            );
                        },
                        backgroundColor: "transparent",
                        labelBoxBorderColor: null,
                        margin: 50,
                        width: 20,
                        padding: 1,
                    },
                    grid: {hoverable: !0, clickable: !0},
                    colors: r,
                    tooltip: !0,
                    tooltipOpts: {content: "%s, %p.0%"},
                });
            n.plot(n(a), t, r);
        }),
        (a.prototype.createCombineGraph = function (a, o, t, r) {
            (r = [
                {
                    label: t[0],
                    data: r[0],
                    lines: {show: !0, fill: !0},
                    points: {show: !0},
                },
                {
                    label: t[1],
                    data: r[1],
                    lines: {show: !0},
                    points: {show: !0},
                },
                {label: t[2], data: r[2], bars: {show: !0}},
            ]),
                (o = {
                    series: {shadowSize: 0},
                    grid: {
                        hoverable: !0,
                        clickable: !0,
                        tickColor: "#f9f9f9",
                        borderWidth: 1,
                        borderColor: "rgba(173, 181, 189, 0.1)",
                    },
                    colors: ["#ff8acc", "#5b69bc", "#10c469"],
                    tooltip: !0,
                    tooltipOpts: {defaultTheme: !1},
                    legend: {
                        position: "ne",
                        margin: [0, -24],
                        noColumns: 0,
                        labelBoxBorderColor: null,
                        backgroundColor: "transparent",
                        labelFormatter: function (a, o) {
                            return a + "&nbsp;&nbsp;";
                        },
                        width: 30,
                        height: 2,
                    },
                    yaxis: {
                        tickColor: "rgba(173, 181, 189, 0.1)",
                        font: {color: "#98a6ad"},
                    },
                    xaxis: {
                        ticks: o,
                        tickColor: "rgba(173, 181, 189, 0.1)",
                        font: {color: "#98a6ad"},
                    },
                });
            n.plot(n(a), r, o);
        }),
        (a.prototype.init = function () {
            this.createPlotGraph(
                "#website-stats",
                [
                    [0, 9],
                    [1, 8],
                    [2, 5],
                    [3, 8],
                    [4, 5],
                    [5, 14],
                    [6, 10],
                    [7, 8],
                    [8, 5],
                    [9, 14],
                    [10, 10],
                ],
                [
                    [0, 5],
                    [1, 12],
                    [2, 4],
                    [3, 3],
                    [4, 12],
                    [5, 11],
                    [6, 14],
                    [7, 12],
                    [8, 8],
                    [9, 4],
                    [10, 8],
                ],
                ["Visits", "Page views"],
                ["#188ae2", "#10c469"],
                "rgba(173, 181, 189, 0.1)",
                "transparent"
            );
            this.createPieGraph(
                "#pie-chart #pie-chart-container",
                ["Series 1", "Series 2", "Series 3"],
                [20, 30, 15],
                ["#ff8acc", "#5b69bc", "#f9c851"]
            );
            var o = this.createRealTimeGraph(
                "#flotRealTime",
                this.randomData(),
                ["#71b6f9"]
            );
            o.draw();
            var t = this;
            !(function a() {
                o.setData([t.randomData()]),
                    o.draw(),
                    setTimeout(a, (n("html").hasClass("mobile-device"), 1e3));
            })();
            this.createDonutGraph(
                "#donut-chart #donut-chart-container",
                ["Series 1", "Series 2", "Series 3", "Series 4"],
                [35, 20, 10, 20],
                ["#188ae2", "#10c469", "#f9c851", "#ff8acc"]
            );
            this.createCombineGraph(
                "#combine-chart #combine-chart-container",
                [
                    [0, "22h"],
                    [1, ""],
                    [2, "00h"],
                    [3, ""],
                    [4, "02h"],
                    [5, ""],
                    [6, "04h"],
                    [7, ""],
                    [8, "06h"],
                    [9, ""],
                    [10, "08h"],
                    [11, ""],
                    [12, "10h"],
                    [13, ""],
                    [14, "12h"],
                    [15, ""],
                    [16, "14h"],
                    [17, ""],
                    [18, "16h"],
                    [19, ""],
                    [20, "18h"],
                    [21, ""],
                    [22, "20h"],
                    [23, ""],
                ],
                ["Last 24 Hours", "Last 48 Hours", "Difference"],
                [
                    [
                        [0, 201],
                        [1, 520],
                        [2, 337],
                        [3, 261],
                        [4, 157],
                        [5, 95],
                        [6, 200],
                        [7, 250],
                        [8, 320],
                        [9, 500],
                        [10, 152],
                        [11, 214],
                        [12, 364],
                        [13, 449],
                        [14, 558],
                        [15, 282],
                        [16, 379],
                        [17, 429],
                        [18, 518],
                        [19, 470],
                        [20, 330],
                        [21, 245],
                        [22, 358],
                        [23, 74],
                    ],
                    [
                        [0, 311],
                        [1, 630],
                        [2, 447],
                        [3, 371],
                        [4, 267],
                        [5, 205],
                        [6, 310],
                        [7, 360],
                        [8, 430],
                        [9, 610],
                        [10, 262],
                        [11, 324],
                        [12, 474],
                        [13, 559],
                        [14, 668],
                        [15, 392],
                        [16, 489],
                        [17, 539],
                        [18, 628],
                        [19, 580],
                        [20, 440],
                        [21, 355],
                        [22, 468],
                        [23, 184],
                    ],
                    [
                        [23, 727],
                        [22, 128],
                        [21, 110],
                        [20, 92],
                        [19, 172],
                        [18, 63],
                        [17, 150],
                        [16, 592],
                        [15, 12],
                        [14, 246],
                        [13, 52],
                        [12, 149],
                        [11, 123],
                        [10, 2],
                        [9, 325],
                        [8, 10],
                        [7, 15],
                        [6, 89],
                        [5, 65],
                        [4, 77],
                        [3, 600],
                        [2, 200],
                        [1, 385],
                        [0, 200],
                    ],
                ]
            );
        }),
        (n.FlotChart = new a()),
        (n.FlotChart.Constructor = a);
})(window.jQuery),
    window.jQuery.FlotChart.init(),
    $(document).ready(function () {
        $(function () {
            for (var a = [], o = 0; o <= 10; o += 1)
                a.push([o, parseInt(30 * Math.random())]);
            for (var t = [], o = 0; o <= 10; o += 1)
                t.push([o, parseInt(30 * Math.random())]);
            for (var r = [], o = 0; o <= 10; o += 1)
                r.push([o, parseInt(30 * Math.random())]);
            var e = [];
            e.push({label: "Series One", data: a, bars: {order: 3}}),
                e.push({label: "Series Two", data: t, bars: {order: 2}}),
                e.push({label: "Series Three", data: r, bars: {order: 1}});
            var i = {
                bars: {show: !0, barWidth: 0.2, fill: 1},
                grid: {
                    show: !0,
                    aboveData: !1,
                    labelMargin: 5,
                    axisMargin: 0,
                    borderWidth: 1,
                    minBorderMargin: 5,
                    clickable: !0,
                    hoverable: !0,
                    autoHighlight: !1,
                    mouseActiveRadius: 20,
                    borderColor: "rgba(173, 181, 189, 0.1)",
                },
                series: {stack: 0},
                legend: {
                    position: "ne",
                    margin: [0, -24],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    backgroundColor: "transparent",
                    labelFormatter: function (a, o) {
                        return a + "&nbsp;&nbsp;";
                    },
                    width: 30,
                    height: 2,
                },
                yaxis: {
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
                xaxis: {
                    tickColor: "rgba(173, 181, 189, 0.1)",
                    font: {color: "#98a6ad"},
                },
                colors: ["#188ae2", "#10c469", "#ebeff2"],
                tooltip: !0,
                tooltipOpts: {
                    content: "%s : %y.0",
                    shifts: {x: -30, y: -50},
                },
            };
            $.plot($("#ordered-bars-chart"), e, i);
        });
    });
