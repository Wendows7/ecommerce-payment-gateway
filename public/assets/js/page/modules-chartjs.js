"use strict";
// var ctx = document.getElementById("myChart").getContext('2d');
// var myChart = new Chart(ctx, {
//   type: 'line',
//   data: {
//     labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
//     datasets: [{
//       label: 'Statistics',
//       data: [460, 458, 330, 502, 430, 610, 488],
//       borderWidth: 2,
//       backgroundColor: '#6777ef',
//       borderColor: '#6777ef',
//       borderWidth: 2.5,
//       pointBackgroundColor: '#ffffff',
//       pointRadius: 4
//     }]
//   },
//   options: {
//     legend: {
//       display: false
//     },
//     scales: {
//       yAxes: [{
//         gridLines: {
//           drawBorder: false,
//           color: '#f2f2f2',
//         },
//         ticks: {
//           beginAtZero: true,
//           stepSize: 150
//         }
//       }],
//       xAxes: [{
//         ticks: {
//           display: false
//         },
//         gridLines: {
//           display: false
//         }
//       }]
//     },
//   }
// });

// import {months} from "../../library/moment/moment.js";

// Load data from API and create chart
document.addEventListener('DOMContentLoaded', function() {
    // Create Indonesian Rupiah formatter
    const rupiahFormatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    });

    fetch('/dashboard/admin/getEarningPerMonth')
        .then(response => response.json())
        .then(data => {
            const monthLabels = data.map(item => item.month);
            const earningsData = data.map(item => parseInt(item.total_earning));

            var ctx = document.getElementById("myChart2").getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: monthLabels,
                    datasets: [{
                        label: 'Earnings',
                        data: earningsData,
                        backgroundColor: '#6777ef',
                        borderColor: '#6777ef',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#ffffff',
                        pointRadius: 4
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                return rupiahFormatter.format(tooltipItem.value);
                            }
                        }
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                drawBorder: false,
                                color: '#f2f2f2',
                            },
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1000000,
                                callback: function(value) {
                                    return rupiahFormatter.format(value);
                                }
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                display: true
                            },
                            gridLines: {
                                display: false
                            }
                        }]
                    },
                }
            });
        })
        .catch(error => {
            console.error('Error fetching earnings data:', error);
        });

    fetch('/dashboard/admin/getMostSoldProduct')
        .then(response => response.json())
        .then(data => {
            const productName = data.map(item => item.product_name);
            const quantity = data.map(item => parseInt(item.total_quantity));
    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: quantity,
                backgroundColor: [
                    '#63ed7a',
                    '#191d21',
                    '#ffa426',
                    '#fc544b',
                    '#6777ef',
                ],
                label: 'Dataset 1'
            }],
            labels: productName,
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
        }
    });
        })
        .catch(error => {
            console.error('Error fetching earnings data:', error);
        });
});

// var ctx = document.getElementById("myChart3").getContext('2d');
// var myChart = new Chart(ctx, {
//   type: 'doughnut',
//   data: {
//     datasets: [{
//       data: [
//         80,
//         50,
//         40,
//         30,
//         20,
//       ],
//       backgroundColor: [
//         '#191d21',
//         '#63ed7a',
//         '#ffa426',
//         '#fc544b',
//         '#6777ef',
//       ],
//       label: 'Dataset 1'
//     }],
//     labels: [
//       'Black',
//       'Green',
//       'Yellow',
//       'Red',
//       'Blue'
//     ],
//   },
//   options: {
//     responsive: true,
//     legend: {
//       position: 'bottom',
//     },
//   }
// });

// var ctx = document.getElementById("myChart4").getContext('2d');
// var myChart = new Chart(ctx, {
//   type: 'pie',
//   data: {
//     datasets: [{
//       data: [
//         80,
//         50,
//         40,
//         30,
//         100,
//       ],
//       backgroundColor: [
//         '#191d21',
//         '#63ed7a',
//         '#ffa426',
//         '#fc544b',
//         '#6777ef',
//       ],
//       label: 'Dataset 1'
//     }],
//     labels: [
//       'Black',
//       'Green',
//       'Yellow',
//       'Red',
//       'Blue'
//     ],
//   },
//   options: {
//     responsive: true,
//     legend: {
//       position: 'bottom',
//     },
//   }
// });
