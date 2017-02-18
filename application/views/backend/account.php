            <div class="page-title">

                <div class="title-env">
                    <h1 class="title">Account</h1></div>




            </div>

            <!-- Responsive Table -->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body scroll-x">

        						<!--<div class="member-form-add-header">
        							<div class="row">
        								<div class="col-md-2 col-sm-4 pull-right-sm">

        									<div class="action-buttons">
        										<button type="submit" class="btn btn-block btn-secondary">Save Changes</button>
        										<button type="reset" class="btn btn-block btn-gray">Reset to Default</button>
        									</div>

        								</div>
        								<div class="col-md-10 col-sm-8">

        									<div class="user-img">
        										<img src="assets/images/user-2.png" class="img-circle" alt="user-pic" />
        									</div>
        									<div class="user-name">
        										<a href="#">Jack Gates</a>
        										<span>Administrator</span>
        									</div>

        								</div>
        							</div>
        						</div>-->
                                <div class="row">
                                    <div class="col-md-6">
                            <h4>Card Details</h4>
<div class="account">


                            <div class="form-group">
              									<label class="control-label">Card Type:</label>



              									<select class="form-control" id="sboxit-1">
                                  <option>Master-card</option>
            											<option>visa</option>
              									</select>

              								</div>
                              <div class="form-group">
              									<label for="CardNumber">Card Number:</label>
              									<input type="number" class="form-control" id="CardNumber" placeholder="Card Number">
              								</div>
                              <div class="form-group">
              									<label for="Code">Security Code:</label>
              									<input type="number" class="form-control" id="Code" placeholder="Security Code">
              								</div>
                              <div class="form-group">
              									<label for="name">Name on card:</label>
              									<input type="text" class="form-control" id="name" placeholder="Name on card">
              								</div>
                              <!--<div class="form-group">
                									<button type="button" class="btn btn-info create btn-single">Submit</button>

                								</div>-->
<div class="form-group">
									<button type="button" class="btn btn-info btn-single create">Submit</button>
									<button type="button" class="btn btn-info btn-single pull-right create">Add Card</button>
								</div>
			
</div>
			
</div>
 <div class="col-md-6">
     <table class="table table-bordered table-striped">
         		<thead>
											<tr>
												<th colspan="2" class="text-center">DFM Stats</th>
											
												
											</tr>
										</thead>
										<thead>
											<tr>
												<th>Status</th>
												<th>Active</th>
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>Usage</td>
												<td>43 days left</td>
											</tr>
											
											<tr>
												<td>Plan</td>
												<td>Standard</td>
											</tr>
											
											<tr>
												<td>Auto Renewal</td>
												<td>Yes/No</td>
											</tr>
                                            <tr>
												<td>Change Plan</td>
												<td>Standard/PRO</td>
											</tr>
                                            <tr>
												<th colspan="2" class="text-center">SAVE CHANGES</th>
												
											</tr>
       
										</tbody>
									</table>
</div>
</div>
                								</div>
                        </div>



                        </form>
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
            <div class="go-up">

                <a href="#" rel="go-top">
                    <i class="fa-angle-up"></i>
                </a>

            </div>

        </div>

        </footer>
    </div>


    <div id="chat" class="fixed">
        <!-- start: Chat Section -->

        <div class="chat-inner">


            <h2 class="chat-header">
					<a  href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>

					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>

            <script type="text/javascript">
                // Here is just a sample how to open chat conversation box
                jQuery(document).ready(function($) {
                    var $chat_conversation = $(".chat-conversation");

                    $(".chat-group a").on('click', function(ev) {
                        ev.preventDefault();

                        $chat_conversation.toggleClass('is-open');

                        $(".chat-conversation textarea").trigger('autosize.resize').focus();
                    });

                    $(".conversation-close").on('click', function(ev) {
                        ev.preventDefault();
                        $chat_conversation.removeClass('is-open');
                    });
                });
            </script>


            <div class="chat-group">
                <strong>Favorites</strong>

                <a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
                <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
            </div>


            <div class="chat-group">
                <strong>Work</strong>

                <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
            </div>


            <div class="chat-group">
                <strong>Other</strong>

                <a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
                <a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
                <a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
                <a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
                <a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
            </div>

        </div>

        <!-- conversation template -->
        <div class="chat-conversation">

            <div class="conversation-header">
                <a href="#" class="conversation-close">
						&times;
					</a>

                <span class="user-status is-online"></span>
                <span class="display-name">Arlind Nushi</span>
                <small>Online</small>
            </div>

            <ul class="conversation-body">
                <li>
                    <span class="user">Arlind Nushi</span>
                    <span class="time">09:00</span>
                    <p>Are you here?</p>
                </li>
                <li class="odd">
                    <span class="user">Brandon S. Young</span>
                    <span class="time">09:25</span>
                    <p>This message is pre-queued.</p>
                </li>
                <li>
                    <span class="user">Brandon S. Young</span>
                    <span class="time">09:26</span>
                    <p>Whohoo!</p>
                </li>
                <li class="odd">
                    <span class="user">Arlind Nushi</span>
                    <span class="time">09:27</span>
                    <p>Do you like it?</p>
                </li>
            </ul>

            <div class="chat-textarea">
                <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
            </div>

        </div>

        <!-- end: Chat Section -->
    </div>

    </div>



    <!-- End: Footer Sticked Chat -->
    </div>