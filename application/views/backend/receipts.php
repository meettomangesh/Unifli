<div class="page-title">
                <div class="title-env">
                    <h1 class="title">Invoicing / Receipts</h1>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <!--<div class="col-md-8">
                                <div class="form-group  ">
                                    <h4 for="expenses">Total Expenses : $25,21,545</h4>
								</div>
                                </div>-->
                                <div class="col-md-12">
                                <section class="search-env" >
						<form method="get" action="" enctype="application/x-www-form-urlencoded">
							<input type="text" class="form-control input-lg" placeholder="Search..." name="s"  />

							<button type="submit" class="btn-unstyled">
								<i class="linecons-search"></i>
							</button>
						</form>
                                </section>
                                </div>

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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Select Status</option>
                                            <option>Replied</option>
                                            <option>Resolved</option>
                                            <option>In Process</option>
                                            <option>Closed</option>
                                            <option>No Reply</option>
                                            </select>
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

                            <div style="  overflow: scroll;">
                                <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                    <!--<thead style="white-space:nowrap;">
                                        <tr>
                                            <th>Tickets ID</th>
                                            <th data-priority="1">Ticket Details</th>
                                            <th data-priority="3">Date of Receipt</th>
                                            <th data-priority="1">Ticket Raised For</th>
                                            <th data-priority="1">User ID</th>
                                            <th data-priority="1">Tickets Status</th>
                                            <th data-priority="1">Ticket Closing Date</th>
                                        </tr>
                                    </thead>-->
                                    <thead style="white-space:nowrap;">
                                        <tr>
                                            <th>Payment ID</th>
                                            <th data-priority="1">Sold Items</th>
                                            <th data-priority="3">Cost</th>
                                            <th data-priority="1">Transaction Date</th>
                                            <th data-priority="1">Payment Status</th>
                                            <th data-priority="1">Payment Mode</th>
                                            <th data-priority="1">Payment Date</th>
                                            <th data-priority="1">Payment Receipt</th>

                                        </tr>
                                    </thead>
                                    <tbody style="white-space:nowrap;">
                                        <tr>
                                            <td>P226</td>
                                            <td>Drone</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Declined</td>
                                            <td><button type="button"  class="btn btn-gray">Pay now</button></td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>P225</td>
                                            <td>DFM</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Received</td>
                                            <td>Card</td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>P224</td>
                                            <td>CAD Linework</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Received</td>
                                            <td>Wire</td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>P223</td>
                                            <td>CAD Linework</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Unpaid</td>
                                            <td><button type="button" class="btn btn-gray">Pay now</button></td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>P222</td>
                                            <td>Drone</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Received</td>
                                            <td>Wire</td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>P221</td>
                                            <td>DFM</td>
                                            <td>$500</td>
                                            <td>9/06/2016</td>
                                            <td>Received</td>
                                            <td>Card</td>
                                            <td>9/06/2016</td>
                                            <td class="text-center"><button class="btn btn-default"><i class="fa-download"></i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="disabled"><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                            // This JavaScript Will Replace Checkboxes in dropdown toggles
                            jQuery(document).ready(function ($) {
                                setTimeout(function () {
                                    $(".checkbox-row input").addClass('cbr');
                                    cbr_replace();
                                }, 0);
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
    </div>
    <!-- End: Footer Sticked Chat -->
    </div>