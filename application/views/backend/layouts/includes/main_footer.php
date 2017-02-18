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
</body>

</html>