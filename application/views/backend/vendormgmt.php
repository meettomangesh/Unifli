<div class="page-title">
                <div class="title-env">
                    <h1 class="title">Vendor Management</h1>
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
                                    <h4 for="expenses">CAD Linework Expenses : $25,21,545</h4>
								</div>
                                </div>-->
                                <!--<div class="col-md-6">
                                    <div class="breadcrumb-env "> <button class="btn btn-primary create">Create Mission</button> </div>
                                </div>
                                <div class="col-md-6">
                                    <section class="search-env">
                                        <form method="get" action="" enctype="application/x-www-form-urlencoded">
                                            <input type="text" class="form-control input-lg" placeholder="Search..." name="s" />
                                            <button type="submit" class="btn-unstyled">
								<i class="linecons-search"></i>
							</button>
                                        </form>
                                    </section>
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
                        </div>
                        <div style="  overflow: scroll;">
                               <script type="text/javascript">
								jQuery(document).ready(function($)
								{
									var $state = $(".mail-table thead input[type='checkbox'], .mail-table tfoot input[type='checkbox']"),
										$chcks = $(".mail-table tbody input[type='checkbox']");
			
									// Script to select all checkboxes
									$state.on('change', function(ev)
									{
										if($state.is(':checked'))
										{
											$chcks.prop('checked', true).trigger('change');
										}
										else
										{
											$chcks.prop('checked', false).trigger('change');
										}
									});
								});
							</script>
                            <table cellspacing="0" class="table table-small-font table-bordered table-striped mail-table">
                                <thead style="white-space:nowrap;">
                                    <tr>
                                         <th class="col-cb">
                                           
                                            <input type="checkbox" class="cbr" /> 
                                        </th>
                                        <th>Mission Id</th>
                                        <th>User Id</th>
                                        <th data-priority="3">Date Of Receipt</th>
                                        <th data-priority="1">Completion Date</th>
                                        <th data-priority="3"> Address</th>
                                        <th data-priority="3">Status</th>
                                        <th data-priority="6">CAD Linework Amount</th>
                                        <th data-priority="6"> Coupon Code </th>
                                          <th data-priority="6">Discount</th>
                                           <th data-priority="6">Amount Paid</th>
                                        <th data-priority="6">Vendor Charge</th>
                                        <th data-priority="6">Vendor Billing Status</th>
                                          <th data-priority="6">Comment</th>

                                    </tr>
                                </thead>
                                <tbody style="white-space:nowrap;">
                                    <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" id="checkbox1" />
                                        </td>
                                        <th><a href="#" class="id-underline">M-120</th>
                                            <td>40120</td>
                                         
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                          
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                             <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>$450</td>
                                      
                                                      
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                       <td></td>
                                       
                                            </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 121</th>
                                            <td>50220</td>
                                         
                                            <td>5/02/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                       
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                            <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>$450</td>
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 122</th>
                                            <td>40320</td>
                                          
                                            <td>4/03/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                       
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                             <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>$450</td>
                                             <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                       <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 123</th>
                                            <td>40320</td>
                                            
                                            <td>5/04/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                       
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                              <td></td>
                                        <td></td>
                                        <td></td>
                                             <td>$450</td>
                                             <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                      <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 124</th>
                                            <td>50420</td>
                                         
                                            <td>8/05/2016 </td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                      
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                            <td></td>
                                           <td></td>
                                           <td></td>
                                             <td>$450</td>
                                             <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                           <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 125</th>
                                            <td>80520</td>
                                           
                                            <td>9/06/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                       
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                              <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>$450</td>
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                      <td></td>
                                        </tr>
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 126</th>
                                            <td>90620</td>
                                            
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                       
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                              <td></td>
                                        <td></td>
                                        <td></td>
                                             <td>$450</td>
                                             <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                      <td></td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>

                                            <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                            <th><a href="#" class="id-underline">M- 127</th>
                                            <td>50421</td>
                                           
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                                      
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option> Status</option> 
                                            <option>Received</option> 
                                            <option>In Process-Gsource</option>
                                            <option>Completed-Gsource</option>
                                            <option>Revisions</option>
                                            </select>
                                        </div>
                                        </td>
                                            <td>$500</td>
                                              <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>
                                               $450
                                            </td>
                                            <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                               <option>Paid</option> 
                                     <option>Unpaid</option>
                                            </select>
                                        </div>
                                        </td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><button class="btn btn-block btn-secondary vendor-btn" type="button" href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});"
                                    class=" id-underline">Vendor Billing Status</button></td>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td></td>
                                        <td ></td>
                                       
                                       
                                    </tr>
                                </tbody>
                            </table>
                           
                            
                           
                        </div>
                    </div>