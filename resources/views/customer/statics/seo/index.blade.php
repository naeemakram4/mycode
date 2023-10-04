@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="card card-bordered">
        <div class="card-body">
            <div id="kt_apexcharts_3" style="height: 300px;"></div>
        </div>
    </div>

    <div class="row my-20">
        <div class="col-md-6">
            <canvas id="kt_chartjs_3" class="mh-400px"></canvas>
        </div>
        <div class="col-md-6 m-auto">
            <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
        </div>
    </div>
@endsection


@push('pageInnerScript')
    <script>
        var element = document.getElementById('kt_apexcharts_3');

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-info');
        var lightColor = KTUtil.getCssVariableValue('--bs-light-info');


        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 40, 60, 90, 10, 70, 20, 50]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {

            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [baseColor]
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    position: 'front',
                    stroke: {
                        color: baseColor,
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return '$' + val + ' thousands'
                    }
                }
            },
            colors: [lightColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            markers: {
                strokeColor: baseColor,
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();


        // --------------------


        var ctx = document.getElementById('kt_chartjs_3');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var successColor = KTUtil.getCssVariableValue('--bs-success');
        var warningColor = KTUtil.getCssVariableValue('--bs-warning');
        var infoColor = KTUtil.getCssVariableValue('--bs-info');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart data
        const data = {
            labels: [
                'Web',
                'Mobile'
            ],
            datasets: [{
                label: 'Testing',
                data: [300, 50],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)'
                ],
                hoverOffset: 4
            }]
        };

        // Chart config
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: true,
                    }
                },
                responsive: true,
            },
            defaults:{
                global: {
                    defaultFont: fontFamily
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);

     // --------------------------------



        var ctx2 = document.getElementById('kt_chartjs_1');

        // Chart labels
        const labels = ['Direct', 'Organic Search', 'Organic Social', 'Referral', 'Unassigned'];

        // Chart data
        const data2 = {
            labels: labels,
            datasets: [{
                axis: 'y',
                label: 'Sessions',
                data: [65, 59, 80, 81, 56],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        // Chart config
        const config2 = {
            type: 'line',
            data: data2,
            options: {
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart2 = new Chart(ctx2, config2);


    </script>
@endpush
