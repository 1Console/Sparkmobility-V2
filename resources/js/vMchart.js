import ApexCharts from "apexcharts";

const options = {
    chart: {
      type: 'donut'
    },
    plotOptions: {
        donut: {
          expandOnClick: true
        }
      },
    dataLabels: {
        enabled: false
    },
    series: [4500, 100, 400],
    labels: ['Active', 'Damaged', 'Inactive']
}

// Conditionally render chart if available  
const vMelement = document.querySelector("#vMChart");
vMelement ? new ApexCharts(vMelement, options).render() : null;
