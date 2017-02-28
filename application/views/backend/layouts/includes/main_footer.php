<!-- Bottom Scripts -->
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="<?= base_url();?>assets/backend/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/backend/js/TweenMax.min.js"></script>
    <script src="<?= base_url();?>assets/backend/js/resizeable.js"></script>
    <script src="<?= base_url();?>assets/backend/js/joinable.js"></script>
    <script src="<?= base_url();?>assets/backend/js/xenon-api.js"></script>
    <script src="<?= base_url();?>assets/backend/js/xenon-toggles.js"></script>
    <!--<script src="<?= base_url();?>assets/backend/js/selectboxit/jquery.selectBoxIt.min.js"></script>-->
    <script src="<?= base_url();?>assets/backend/js/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url();?>assets/backend/js/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?= base_url();?>assets/backend/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
    <!-- Imported scripts on this page -->
    <script src="<?= base_url();?>assets/backend/js/rwd-table/js/rwd-table.min.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="<?= base_url();?>assets/backend/js/xenon-custom.js"></script>
    
    <!-- Total Amount Spent -->
    <script>
        $(document).ready(function () {

            Highcharts.chart('bar-1', {

                chart: {
                    type: 'bar'
                },
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['August 2016', 'September 2016',
                        'November 2016', 'December 2016'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    labels: {
                        overflow: 'justify'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Usage',
                    data: [107, 31, 635, 203]
                }]

            });

        });
    </script>
    
    <!-- Missions Created -->
    <script>
        $(document).ready(function () {

            Highcharts.chart('bar-2', {

                chart: {
                    type: 'bar'
                },
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['August 2016', 'September 2016',
                        'November 2016', 'December 2016'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    labels: {
                        overflow: 'justify'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Usage',
                    data: [107, 31, 635, 203]
                }]

            });

        });
    </script>
        
    <!-- CAD Linework Requested/Completed -->
    <script>
        $(document).ready(function () {

            Highcharts.chart('bar-3', {

                chart: {
                    type: 'bar'
                },
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['August 2016', 'September 2016',
                        'November 2016', 'December 2016'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    labels: {
                        overflow: 'justify'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'Requested',
                        data: [107, 31, 635, 203]
                    },
                    {
                        name: 'Completed',
                        data: [107, 31, 635, 203]
                    }
                ]

            });

        });
    </script>
    
    <!-- Tickets Rised/Solved -->    
    <script>
        $(document).ready(function () {

            Highcharts.chart('bar-4', {

                chart: {
                    type: 'bar'
                },
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['August 2016', 'September 2016',
                        'November 2016', 'December 2016'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    labels: {
                        overflow: 'justify'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'Requested',
                        data: [107, 31, 635, 203]
                    },
                    {
                        name: 'Completed',
                        data: [107, 31, 635, 203]
                    }
                ]

            });

        });
    </script>
    
    <!-- Total Amount Spent -->
    <script>
        $(document).ready(function () {

            Highcharts.chart('bar-5', {

                chart: {
                    type: 'pie'
                },
                title: {
                    text: null
                },
                credits: {
                    enabled: false
                },
                series: [{
                    data: [{
                        name: 'Drone',
                        y: 56.33
                    }, {
                        name: 'CAD Linework',
                        y: 24.03
                    }, {
                        name: 'DFM',
                        y: 10.38
                    }]
                }]

            });
            
            Highcharts.chart('bar-6', {

                chart: {
                    type: 'pie'
                },
                title: {
                    text: null
                },
                credits: {
                    enabled: false
                },
                series: [{
                    data: [{
                        name: 'Total CAD Request',
                        y: 56.33
                    }, {
                        name: 'Pending CAD Request',
                        y: 24.03
                    }, {
                        name: 'Total Missions Created',
                        y: 10.38
                    }]
                }]

            });

        });
    </script>   
    
    <!-- Reporting -->     
    <script>
           
    //                     Highcharts.chart('container', {
    //                         xAxis: {
    //                                tickInterval: 1
    //                         },
    //                         yAxis: {
    //                             min: 0
    //                         },
    //                         title: {
    //                             text: 'Scatter plot with regression line'
    //                         },
    //                         series: [{
    //                             type: 'line',
    //                             name: 'Regression Line',
    //                             data: [[0, 0], [30, 25]],
    //                             marker: {
    //                                 enabled: false
    //                             },
    //                             {
    //     name: 'Rainfall',
    //     type: 'column',
    //     yAxis: 1,
    //     data: [3,5,9,11,17,20.]
    // },
    //                             states: {
    //                                 hover: {
    //                                     lineWidth: 0
    //                                 }
    //                             },
    //                             enableMouseTracking: false
    //                         }, {
    //                             type: 'scatter',
    //                             name: 'Observations',
    //                             data: [1, 2, 3, 4, 5, 6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22],
    //                             marker: {
    //                                 radius: 4
    //                             }
    //                         }]
    //                     });

        Highcharts.chart('container', {
            xAxis: {
                 title: {
                        text: 'Days of Month'
                    },
                     tickInterval: 1,
                     min: 0,
                     max:30
                  },
    
          yAxis: {
                     title: {
                        text: 'Cumulative Revenue'
                    },
                       min: 0
                      
                  },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
    
            plotOptions: {
                series: {
                    pointStart: 1,                    
                }
            },
    
            series: [{
                name:  'Drone Sales',
                data: [1,3,6,9,12,15,19,20,22,28,23,29,18,33,28,17,23,29,30,25,27,20,9,12,15,19,20,22,28,23,29]
            }, {
                name: 'CAD Linework',
                data: [1,4,6,28,23,29,18,33,28,17,23,29,30,20,25,28,30,13,15,12,19,25,20,9,12,15,19,20,18,33,28,17]
            }, {
                name: 'DFM Subscriptions',
                data: [3,5,9,12,22,15,19,20,9,12,15,19,20,18,28,23,29,18,33,28,17,23,29,30,20,25,29,30,20,25,28,30]
            }, ]
    
        });
    </script>
</body>

</html>