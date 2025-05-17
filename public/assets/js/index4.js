$(function () {
    "use strict";

    // chart 1
    var options = {
        series: [
            {
                name: "Today",
                data: [450, 650, 440, 160, 350, 414, 555, 257, 400, 555, 257],
            },
            {
                name: "Yestreday",
                data: [580, 350, 760, 350, 687, 352, 785, 241, 352, 685, 425],
            },
        ],
        chart: {
            foreColor: "#9a9797",
            type: "area",
            height: 320,
            toolbar: { show: !1 },
            zoom: { enabled: !1 },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.12,
                color: "#3461ff",
            },
            sparkline: { enabled: !1 },
        },
        markers: {
            size: 0,
            colors: ["#3461ff", "#12bf24"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: { size: 7 },
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded",
            },
        },
        legend: {
            show: false,
            position: "top",
            horizontalAlign: "left",
            offsetX: -20,
        },
        dataLabels: { enabled: !1 },
        grid: { show: true },
        stroke: { show: !0, width: 3, curve: "smooth" },
        colors: ["#3461ff", "#12bf24"],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        tooltip: {
            theme: "dark",
            y: {
                formatter: function (val) {
                    return "" + val + "";
                },
            },
        },
    };

    var chart1 = new ApexCharts(document.querySelector("#chart1"), options);
    chart1.render();

    // chart 2 : Pie chart pour annuaires par statut
    var options2 = {
        series: window.annuairesByStatutData || [0],
        chart: { height: 250, type: "pie" },
        labels: window.annuairesByStatutLabels || ["Aucune donnée"],
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "vertical",
                shadeIntensity: 0.5,
                gradientToColors: ["#00c6fb", "#ff6a00", "#98ec2d"],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
            },
        },
        colors: [
            "#005bea",
            "#ee0979",
            "#17ad37",
            "#ffb207",
            "#12bf24",
            "#6c757d",
        ],
        legend: {
            show: false,
            position: "top",
            horizontalAlign: "left",
            offsetX: -20,
        },
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: { height: 270 },
                    legend: { position: "bottom" },
                },
            },
        ],
    };

    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();

    // chart 3 : Donut chart pour utilisateurs par rôle
    var options3 = {
        series: window.usersByRoleData || [0],
        chart: { width: 340, type: "donut" },
        labels: window.usersByRoleLabels || ["Aucune donnée"],
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "vertical",
                shadeIntensity: 0.5,
                gradientToColors: ["#667eea", "#00c6fb", "#f77062", "#98ec2d"],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
            },
        },
        colors: [
            "#764ba2",
            "#005bea",
            "#fe5196",
            "#12bf24",
            "#ffb207",
            "#6c757d",
        ],
        legend: {
            show: false,
            position: "top",
            horizontalAlign: "left",
            offsetX: -20,
        },
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: { height: 260 },
                    legend: { position: "bottom" },
                },
            },
        ],
    };

    var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
    chart3.render();

    new PerfectScrollbar(".client-message");
});
