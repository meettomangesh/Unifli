<div class="page-title">
                <div class="title-env">
                    <h1 class="title"> Raise a Ticket</h1>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="panel-body">


                           	<form role="form">
                                   <div class="form-group">
									<label class="control-label"> Ticket Raised for</label>

									<!--<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#sboxit-2").selectBoxIt({
												showFirstOption: false
											}).on('open', function()
											{
												// Adding Custom Scrollbar
												$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
											});
										});
									</script>-->

									<select class="form-control " id="sboxit-2">
										<option>Ticket Raised for</option>
										<option >Drone</option>
										<option >DFM Subsription</option>
										<option >CAD Linework</option>

				                        </select>

								</div>


								<div class="form-group">
									<label for="receipt">Date of Receipt</label>
									<input type="date" class="form-control" id="receipt" placeholder="Date of Receipt;" readonly value="2017-01-11">
								</div>

								<div class="form-group">
									<label for="details">Ticket Details</label>
									<textarea class="form-control" id="details" placeholder="Ticket Details"></textarea>
								</div>



								<div class="form-group">

									<button type="button" class="btn btn-info btn-single pull-right">Submit</button>
								</div>


							</form>


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