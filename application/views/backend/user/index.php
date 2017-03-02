<div class="page-title">
                <div class="title-env">
                    <h1 class="title">Users</h1>
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
								<div class="col-md-6">
                                    <div class="breadcrumb-env "> <a class="btn btn-primary popover-primary create" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Creating a user is simple and a click away." data-original-title="Create User" href="<?php echo base_url();?>user/create_user">Create User</a></div>
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="from_date" placeholder="From Date" class="form-control datepicker" data-format="D, dd MM yyyy">
                                            <div class="input-group-addon"> <a href="#"><i class="linecons-calendar"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="to_date" placeholder="To Date" class="form-control datepicker" data-format="D, dd MM yyyy">
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
										<select class="form-control">../assets/
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
                            <table cellspacing="0" id="result-table" class="table table-small-font table-bordered table-striped  mail-table">
                                <thead style="white-space:nowrap;">
                                    <tr>
                                        <th class="col-cb">
                                           
                                            <input type="checkbox" class="cbr" /> 
                                        </th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th data-priority="1">Address</th>
                                        <th data-priority="3">City</th>
                                        <th data-priority="1">State</th>
                                        <th data-priority="3">Website</th>
                                        <th data-priority="3">DFM Status</th>
                                        <th data-priority="6">DFM Plan</th>
                                        <th data-priority="6">Drone</th>
                                        <th data-priority="6">Total Revenue</th>
                                        <th data-priority="6">Coupon Status </th>
                                        <th data-priority="6">User Settings</th>
                                    </tr>
                                </thead>
								<tbody style="white-space:nowrap;">	
									<?php 
										foreach( $all_user as $user ) { 
									?>
									<tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                       <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline"><?php echo $user->uuid;?></a>
                                        </td>
                                        <td><?php echo $user->name;?></td>
                                        <td><?php echo $user->email;?></td>
                                        <td><?php echo $user->address;?></td>
                                        <td><?php echo $user->city;?></td>
                                        <td><?php echo $user->state;?></td>
                                        <td><?php echo $user->website;?></td>
                                        <td>Active</td>
                                        <td>Standard</td>
                             
                                        <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option <?php ($user->drone == 1)?'selected=selected':''; ?> >Unifli</option>
                                                <option <?php ($user->drone == 0)?'selected=selected':''; ?> >No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                        <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <?php
										}
									?>
                                </tbody>    
                                <!--<tbody style="white-space:nowrap;">
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                       <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">4032016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Active
                                        </td>
                                        <td>Standard</td>
                             
                                        <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                        <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">5042016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Suspended</td>
                                        <td>PRO</td>
                                    <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                         <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                         <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">8052016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Active</td>
                                        <td>Free</td>
                                        <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                         <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">9062016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Suspended</td>
                                        <td>Standard</td>
                                       <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                         <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">4032016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Active</td>
                                        <td>PRO</td>
                                     <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                         <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">4032016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Suspended</td>
                                        <td>Free</td>
                                      <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">4032016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Active</td>
                                        <td>Standard</td>
                                        <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control  sel-app2">
                                                <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                            </select>
                                        </div></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="cbr" />
                                        </td>
                                        <td>
                                            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class=" id-underline">4032016</a>
                                        </td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>________</td>
                                        <td>Active</td>
                                        <td>PRO</td>
                                       <td>
                                        <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Unifli</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        </td>
                                        <td>________</td>
                                           <td> <div class="form-group ">
                                            <select class="form-control select-w">
                                                <option>Active</option>
                                                <option>Suspended</option>
                                            </select>
                                        </div></td>
                                        <td> <div class="form-group ">
                                            <select class="form-control sel-app2">
                                                 <option>Reset Password Link</option>
                                                <option>Deactivate</option>
                                                <option>Activate</option>
                                               
                                                
                                            </select>
                                        </div></td>
                                    </tr>
                                </tbody>-->
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
                    <!--
<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Mission Address</h4>-->
                    <!--</div>
				
				<div class="modal-body">
				
				
				
					<div class="row">
						<div class="col-md-12">-->
                    <!--<div class="form-group">
								
								
								<input type="text" class="form-control" id="field-3" placeholder="Address">
							</div>	-->
                    <div class="modal fade custom-width" id="modal-6">
                        <div class="modal-dialog" style="width: 60%;">
                            <div class="modal-content modal-con">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <!--<h4 class="modal-title">T-105</h4>-->
                                </div>
                                <div class="modal-body">
                                     <div class="row">
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num">  $25000</strong>
                            <span>Drone Sales</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num num2">   $4500</strong>
                            <span>DFM Subscription</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num">   $12500</strong>
                            <span>CAD Linework</span>
                        </div>
                    </div>
                </div>
                                     </div>
                                      <div class="row">
                <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num">  $42000</strong>
                            <span>Total Revenue</span>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num">25</strong>
                            <span>Total Missions Created</span>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="xe-widget xe-counter">
                        <div class="xe-label text-center">
                            <strong class="num">100</strong>
                            <span>Total CAD Requests</span>
                        </div>
                    </div>
                </div>
            </div>
                                 <div class="row hg-chart">
                                    <div class="col-md-12">
                                        
                                        <div class="bar-back"> <div id="bar-3" ></div>  <div><h4 class="text-center">TOTAL REVENUE</h4></div> </div>
                                        <script>
                                $(document).ready(function () {

                                    Highcharts.chart('bar-3', {

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
                                                name: 'Drone Sales($25000)',
                                                y: 40.0
                                            }, {
                                                name: 'DFM Subscription($4500)',
                                                y: 10.03
                                            }, {
                                                name: 'CAD Linework($12500)',
                                                y: 8.38
                                            },
                                            {
                                                name: 'Total Revenue($42000)',
                                                y: 15.38
                                            },
                                            {
                                                name: 'Total Missions Created(25)',
                                                y: 25.38
                                            },
                                            {
                                                name: 'Total CAD Requests(100)',
                                                y: 12.38
                                            }
                                         ]
                                        }]

                                    });

                                });
                            </script>
                            <!--<div><h4 class="text-center">TOTAL REVENUE</h4></div>-->
                                    </div>
                                 </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
	
<!--
	<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.min.js" ></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" ></script>
	<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
	<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js" ></script>
	<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.13/filtering/row-based/range_dates.js" ></script>
	




	<script>
	$(document).ready(function() {
    var table = $('#result-table').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
	  // Add event listeners to the two range filtering inputs
      $('#from_date').keyup( function() { table.draw(); } );
      $('#to_date').keyup( function() { table.draw(); } );
	  
   // table.buttons().container().appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
	</script>
	--->