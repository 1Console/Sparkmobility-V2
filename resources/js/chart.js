import ApexCharts from 'apexcharts'

// ApexCharts config
const options = {
    chart: {
        type: "line",
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
        data: [30, 40, 135, 50, 9, 21, 70, 11, 105]
    },
    {
        name: 'Total users',
        data: [5, 11, 19, 37, 93, 98, 106, 114, 220, 208]
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

// Conditionally render chart if available
const chartElement = document.querySelector("#statsChart");
chartElement ? new ApexCharts(chartElement, options).render() : null;
