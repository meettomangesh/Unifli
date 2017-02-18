 <div class="page-title">
                <div class="title-env">
                    <h1 class="title">Create Mission</h1>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body scroll-x">
                          <div class="">
                            <h4 for="">Create Mission</h4>
                            <p class="bg-muted create-p">
                              Select all mission files at once <br>
                              DDMS currently requires images to be geotagged or that you include a .tlog or CSV file with location data.<br>
                              Please, do not reload this page during upload. If your upload is interrupted, return to the mission page and select all original mission files. Files will be reuploaded, but duplicates will automatically be skipped.<br>
                            </p>
                          </div>
                          <div class="mt10">
                            <h5 for="">Description</h5>
                            <div class="col-sm-12 nopad mb10">
          										<textarea class="form-control" cols="5" id="description"></textarea>
          									</div>

                          </div>
                          <div class=" mt10">
                              <h5 for="">Upload</h5>
            									<div class="col-sm-12 nopad mb10">
            										<input type="file" class="form-control" id="Upload">
            									</div>
                          </div>
                          <a href="javascript:;" onclick="jQuery('#modal-4').modal('show', {backdrop: 'static'});"   class="" ><button class="btn btn-danger mb10 upload">Upload, <b>and process mosaic</b> </button></a>





                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal fade" id="modal-4" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Uploaded Files</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                              <div class="col-md-8">
                                                <label>Files</label>
                                              </div>
                                              <div class="col-md-4">
                                                  <label>Status</label>
                                                    <!-- <button class="btn btn-default">retry</button> -->
                                              </div>


                                            </div>
                                            <div class="row">
                                              <div class="col-md-8">
                                                <p class="bg-muted file-p">
                                                abc.jpg
                                                </p>
                                              </div>
                                              <div class="col-md-4">
                                                <label for="">succes</label>
                                                <!-- <button class="btn btn-default">retry</button> -->
                                              </div>


                                            </div>
                                               <div class="row">
                                                    <div class="col-md-8">
                                                      <p class="bg-muted file-p">
                                                      abc.jpg
                                                      </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <label for="">succes</label>
                                                      <!-- <button class="btn btn-default">retry</button> -->
                                                    </div>


                                                  </div>
                                            <div class="row">
                                              <div class="col-md-8">
                                                <p class="bg-muted file-p">
                                                abc.jpg
                                                </p>
                                              </div>
                                              <div class="col-md-4">
                                                <button class="btn btn-default retry">failed/retry</button>
                                              </div>


                                            </div>
                                            <div class="row">
                                              <div class="col-md-8">
                                                <p class="bg-muted file-p">
                                                abc.jpg
                                                </p>
                                              </div>
                                              <div class="col-md-4">
                                                <label for="">succes</label>
                                                <!-- <button class="btn btn-default">retry</button> -->
                                              </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                  <a href="<?php echo base_url();?>missions/mission_analyze" class="id-underline"><button type="button" class="btn btn-info" > Proceed</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                            // This JavaScript Will Replace Checkboxes in dropdown toggles
                            jQuery(document).ready(function($) {
                                setTimeout(function() {
                                    $(".checkbox-row input").addClass('cbr');
                                    cbr_replace();
                                }, 0);
                            });
                        </script>
            </div>
        </div>
    </div>
    </div>
    <!-- Main Footer -->
    <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
    <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
    <!-- Or class "fixed" to  always fix the footer to the end of page -->
    <div class="footer-inner">
        <!-- Add your copyright text here -->
        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <!-- <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div> -->
    </div>
    </footer>
    </div>