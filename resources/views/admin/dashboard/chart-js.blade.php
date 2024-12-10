<script>
    /**
     * Dashboard Analytics
     */

    'use strict';

    (function() {
        let cardColor, headingColor, axisColor, shadeColor, borderColor;

        cardColor = config.colors.white;
        headingColor = config.colors.headingColor;
        axisColor = config.colors.axisColor;
        borderColor = config.colors.borderColor;

        // Income Chart - Area chart
        // --------------------------------------------------------------------
        const incomeChartEl = document.querySelector('#incomeChartDashboard'),
            incomeChartConfig = {
                series: [{
                    name: 'Revenue',
                    type: 'column',
                    data: @json($thisYearTotalEarnedMonthWise)
                }],
                chart: {
                    height: 215,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                }, 
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    
                }
            };
        if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
            var incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
            incomeChart.render();
        }
    

        document.querySelector('.thisYearEarning').addEventListener('click', () => {
            incomeChart.updateSeries([{
                data: @json($thisYearTotalEarnedMonthWise)
            }])
        });

        document.querySelector('.previousYearEarning').addEventListener('click', () => {
            incomeChart.updateSeries([{
                data: @json($previousYearTotalEarnedMonthWise)
            }])
        });
    })();


    var options = {
        series: [
            {
                name: 'Bookings',
                type: 'column',
                data: @json($thisYearTotalBookingMonthWise)
            }, {
                name: 'Completed',
                type: 'column',
                data: @json($thisYearTotalBookingCompletedMonthWise)
            },  
            {
                name: 'Disputed',
                type: 'column',
                data: @json($thisYearTotalBookingDisputedMonthWise)
            }
        ],
        chart: {
            height: 300,
            type: 'line',
            stacked: false,
        },
        stroke: {
            width: [2, 2, 2],
            curve: 'smooth'
        },
        plotOptions: {
            bar: {
                columnWidth: '40%'
            }
        }, 
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        yaxis: {
            title: {
                text: 'Booking',
            },

        }
    };

    var chart = new ApexCharts(document.querySelector("#bookingStatisticsChart"), options);
    chart.render();


     
    document.querySelector('.thisYear').addEventListener('click', () => {
        chart.updateSeries([
            {
                name: 'Bookings',
                type: 'column',
                data: @json($thisYearTotalBookingMonthWise)
            }, {
                name: 'Completed',
                type: 'column',
                data: @json($thisYearTotalBookingCompletedMonthWise)
            },  
            {
                name: 'Disputed',
                type: 'column',
                data: @json($thisYearTotalBookingDisputedMonthWise)
            }
        ])
    });

    document.querySelector('.previousYear').addEventListener('click', () => {
        chart.updateSeries([
            {
                name: 'Bookings',
                type: 'column',
                data: @json($previousYearTotalBookingMonthWise)
            }, {
                name: 'Completed',
                type: 'column',
                data: @json($previousYearTotalBookingCompletedMonthWise)
            },  
            {
                name: 'Disputed',
                type: 'column',
                data: @json($previousYearTotalBookingDisputedMonthWise)
            }
        ])
    });
</script>
