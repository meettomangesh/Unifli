<div class="page-title">
    <div class="title-env">
        <h1 class="title">Reporting</h1>
    </div>
</div>

<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">
                    <div class="row">
                        <!--<div class="col-md-8">
                                <div class="form-group  ">
                                    <h4 for="expenses">Total Expenses : $25,21,545</h4>
								</div>
                                </div>-->
                                    <div class="col-md-12">
                                    <section class="search-env">
                                        <div class="clear-fix">
                                        </div>
                                        <form method="get" action="" enctype="application/x-www-form-urlencoded">
                                            <input type="text" class="form-control input-lg" placeholder="Search..." name="s" />
                                            <button type="submit" class="btn-unstyled">
								<i class="linecons-search"></i>
							</button>
                                        </form>
                                    </section>
                                </div>
                                <!--<div><h3>Subscriber Details</h3></div>-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" placeholder="From Date" class="form-control datepicker" data-format="D, dd MM yyyy">
                                            <div class="input-group-addon"> <a href="#"><i class="linecons-calendar"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" placeholder="To Date" class="form-control datepicker" data-format="D, dd MM yyyy">
                                            <div class="input-group-addon"> <a href="#"><i class="linecons-calendar"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-md-4  pull-right">
                            <div class="form-group">
                                <select class="form-control">
                                            <option>Download as</option>
											<option>xl</option>
											<option>csv</option>
										</select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <!--<strong class="num">05</strong>-->
                            <span>Users List</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <!--<strong class="num">02</strong>-->
                            <span>Drone Sales</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <!--<strong class="num">21</strong>-->
                            <span>DFM Sales</span>
                        </div>
                    </div>
                </div>
              
            </div>
            
            <div class="row">
              
                <!--<div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                        
                            <span>CAD Linework Pending List</span>
                        </div>
                    </div>
                </div>-->
                  <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <!--<strong class="num">00</strong>-->
                            <span>CAD Linework Revenue</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                        
                            <span>CAD Linework Pending List</span>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            
                            <span>CAD Linework Complete vs CAD Linework Pending - PIE</span>
                        </div>
                    </div>
                </div>-->
            </div>
            
            <div class="row">
                <div class="col-sm-12 ">
                    <div id="container"></div>
                </div>
            </div>
            
            <div class="row high-chart">
                <div class="col-sm-3">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            
                            <span>CLOSING THIS MONTH</span>
                            <strong class="num">$65,000</strong>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <span>NEW USERS THIS MONTH</span>
                            <strong class="num">100</strong>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <span>DFM SUBSCRIBERS THIS
MONTH</span>
<strong class="num">$65,000</strong>
                        </div>
                    </div>
                </div>
                  <div class="col-sm-3">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <span>CAD LINE WORK
REQUESTS THIS MONTH</span>
<strong class="num">100</strong>
                        </div>
                    </div>
                </div>
                       </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div id="bar-5"></div>
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
                                                name: 'Total DFM Subscription - PIE',
                                                y: 56.33
                                            },  {
                                                name: 'Total Users ',
                                                y: 10.38
                                            }]
                                        }]

                                    });

                                });
                            </script>
                            <div id="bar-6"></div>
                            <script>
                                $(document).ready(function () {

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
                                                name: 'Total DFM Subscription - PIE',
                                                y: 56.33
                                            },  {
                                                name: 'CAD Linework Revenue vs',
                                                y: 10.38
                                            }]
                                        }]

                                    });

                                });
                            </script>
                        </div>
                    </div>