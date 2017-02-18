<div class="page-title">
                <div class="title-env">
                    <h1 class="title">Missions</h1>
                    <p>Capture, store and curate drone generated raw data with our intuitively designed Cloud based Drone File Management (DFM).</p>
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
                                    <div class="breadcrumb-env "> <a class="btn btn-primary popover-primary create" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="To get your drone data processed through DFM, you will have to first create a mission. Creating a mission is simple and a click away." data-original-title="Create Mission" href="<?php echo base_url();?>missions/create_mission">Create Mission</a></div>
                                </div>
                                    <div class="col-md-6">
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
                                            <option>Queued</option>
                                            <option>Error</option>
                                            <option> Waiting</option>
                                            <option>Ready</option>
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
                                 <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                    <thead style="white-space:nowrap;">
                                        <tr>
                                            <th>Mission Id</th>
                                            <th data-priority="1">CAD Linework</th>
                                            <th data-priority="3">Uploaded</th>
                                            <th data-priority="1">Collected</th>
                                            <th data-priority="3">Mission Address</th>
                                            <th data-priority="3">Status</th>
                                            <th data-priority="6">Date of completion</th>
                                            <th data-priority="6" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Generate reports from drone acquired data in multiple formats, through a single click. Choose from between orthomosaics, (DEMs), 3D elevation models, point clouds, and NDVI to access your DFM." data-original-title="Completed Apps">Completed Apps ?</th>
                                            <th data-priority="6">Shared Map</th>
                                            <th data-priority="6">Sharing</th>
                                        </tr>
                                    </thead>
                                    <tbody style="white-space:nowrap;">
                                        <tr>
                                            <th><a href="#" class="id-underline">M-120</th>
                                            <td>In Process</td>
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Queued</td>
                                            <td>________</td>
                                            <td><button type="button" class="btn btn-gray">

							Orthomosaic</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 121</th>
                                           <td><a href="javascript:;" onclick="jQuery('#modal-4').modal('show', {backdrop: 'static'});"   class="btn btn-default request-button" >Request CAD Linework</a></td>
                                            <td>5/02/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Waiting</td>
                                            <td>________</td>
                                            <td><button type="button" class="btn btn-gray">

							NDVI</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 122</th>
                                            <td>Completed</td>
                                            <td>4/03/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Error</td>
                                            <td>________</td>
                                            <td><button type="button"  class="btn btn-gray">

							DEM</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 123</th>
                                            <td>In Q.C.</td>
                                            <td>5/04/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Ready</td>
                                            <td>________</td>
                                             <td><button type="button"class="btn btn-gray">

							DVI</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 124</th>
                                           <td><a href="javascript:;" onclick="jQuery('#modal-4').modal('show', {backdrop: 'static'});"   class="btn btn-default request-button" >Request CAD Linework</a></td>
                                            <td>8/05/2016 </td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Ready</td>
                                            <td>________</td>
                                             <td><button type="button"  class="btn btn-gray">

						DSM	</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 125</th>
                                            <td>Completed</td>
                                            <td>9/06/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Waiting</td>
                                            <td>________</td>
                                            <td><button type="button"  class="btn btn-gray">

							Map Viewer</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 126</th>
                                            <td>In Q.C.</td>
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Waiting</td>
                                            <td>________</td>
                                             <td><button type="button"  class="btn btn-gray">

							Point Cloud</button></td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>
                                        <!-- Repeat -->
                                        <tr>
                                            <th><a href="#" class="id-underline">M- 127</th>
                                            <td>In Process</td>
                                            <td>4/01/2016</td>
                                            <td>_____</td>
                                            <td>_____</td>
                                            <td>Waiting</td>
                                            <td>________</td>
                                            <td>
                                                <li class="dropdown" style="list-style-type:none;">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DEM<b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">ORTHOMOSAIC</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">DEM</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">NDVI</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">MAP VIEWER</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">DVI</a>
                                                        </li>
                                                         <li>
                                                            <a href="#">DSM</a>
                                                        </li>
                                                         <li>
                                                            <a href="#">3D MODE</a>
                                                        </li>
                                                         <li>
                                                            <a href="#">KMZ EXPORT</a>
                                                        </li>
                                                         <li>
                                                            <a href="#">POINT CLOUD</a>
                                                        </li>
                                                          <li>
                                                            <a href="#">VOLUME CALCULATOR</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </td>
                                            <td>_____</td>
                                            <td>_____</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

					</div>



                            <div class="modal fade" id="modal-4" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Mission Address</h4>
				</div>


				<div class="modal-body">



					<div class="row">
						<div class="col-md-12">

							<div class="form-group">

								<label>Mission Address:</label>

                                <div><p>Please confirm your Mission address. If you want to process a CAD file request for this project, please click on Confirm and Proceed.</p></div>

							</div>

						</div>
					</div>


				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Confirm &amp; Proceed</button>
				</div>
			</div>
		</div>
	</div>