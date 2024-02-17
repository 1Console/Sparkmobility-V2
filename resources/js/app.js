import './bootstrap';
import 'flowbite';
import { format } from 'date-fns';
import ApexCharts from 'apexcharts'

import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();

// Set current date on navbar
const today = new Date();
const formattedDate = format(today, 'eeee, MMMM do');

document.getElementById('todaysDate').innerText = formattedDate;

// Dashboard Stats Chart
// var options = {
//     chart: {
//         type: 'line'
//     },
//     series: [{
//         name: 'Total rides',
//         data: [30, 40, 135, 50, 49, 260, 70, 91, 125]
//     },
//     {
//         name: 'Total users',
//         data: [5, 12, 19, 37, 93, 98, 106, 114, 220, 308]
//     }],
//     xaxis: {
//         categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
//     },
//     dataLabels: {
//         enabled: false
//       },
//     stroke: {
//         curve: 'smooth',
//         width: 3
//     },
//     markers: {
//         size: 4,
//     },
//     foreColor: "#FF0000",
//     colors: ['#00E396', '#0090FF'],
// }

const options = {
    chart: {
        type: "line",
        //   height: 300,
        foreColor: "#999",
        stacked: true,
        dropShadow: {
            enabled: true,
            enabledSeries: [0],
            top: -2,
            left: 2,
            blur: 5,
            opacity: 0.06
        }
    },
    colors: ['#00E396', '#0090FF'],
    stroke: {
        curve: "smooth",
        width: 3
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        name: 'Total rides',
        data: [30, 40, 135, 50, 49, 210, 70, 91, 125]
    },
    {
        name: 'Total users',
        data: [5, 12, 19, 37, 93, 98, 106, 114, 220, 208]
    }],
    markers: {
        size: 0,
        strokeColor: "#fff",
        strokeWidth: 3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
            size: 6
        }
    },
    xaxis: {
        //   type: "datetime",
        type: 'category',
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        tickAmount: 12,
        tickPlacement: 'on',
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        }
    },
    yaxis: {
        labels: {
            offsetX: 14,
            offsetY: -5
        },
        tooltip: {
            enabled: true
        }
    },
    grid: {
        padding: {
            left: -5,
            right: 5
        }
    },
    tooltip: {
        x: {
            format: "dd MMM yyyy"
        },
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    },
    fill: {
        type: "solid",
        fillOpacity: 0.7
    }
};

var chart = new ApexCharts(document.querySelector("#statsChart"), options);
chart.render();

