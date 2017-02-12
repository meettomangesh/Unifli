        <!-- Bottom Scripts -->
        <script src="<?= base_url();?>assets/backend/js/jquery-1.11.1.min.js"></script>
    	<script src="<?= base_url();?>assets/backend/js/bootstrap.min.js"></script>
    	<!--<script src="<?= base_url();?>assets/backend/js/TweenMax.min.js"></script>
    	<script src="<?= base_url();?>assets/backend/js/resizeable.js"></script>
    	<script src="<?= base_url();?>assets/backend/js/joinable.js"></script>
    	<script src="<?= base_url();?>assets/backend/js/xenon-api.js"></script>
    	<script src="<?= base_url();?>assets/backend/js/xenon-toggles.js"></script>-->
    	<script src="<?= base_url();?>assets/backend/js/jquery-validate/jquery.validate.min.js"></script>
    	<!--<script src="<?= base_url();?>assets/backend/js/toastr/toastr.min.js"></script>-->
    
    
    	<!-- JavaScripts initializations and stuff -->
    	<script src="assets/js/xenon-custom.js"></script>
        
        <script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
	
	
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
	
								passwd: {
									required: true
								}
							},
	
							messages: {
								username: {
									required: 'Please enter your username.'
								},
	
								passwd: {
									required: 'Please enter your password.'
								}
							},
	
							// Form Processing via AJAX
							submitHandler: function(form)
							{
								show_loading_bar(70); // Fill progress bar to 70% (just a given value)
	
								var opts = {
									"closeButton": true,
									"debug": false,
									"positionClass": "toast-top-full-width",
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								};
	
								$.ajax({
									url: "data/login-check.php",
									method: 'POST',
									dataType: 'json',
									data: {
										do_login: true,
										username: $(form).find('#username').val(),
										passwd: $(form).find('#passwd').val(),
									},
									success: function(resp)
									{
										show_loading_bar({
											delay: .5,
											pct: 100,
											finish: function(){
	
												// Redirect after successful login page (when progress bar reaches 100%)
												if(resp.accessGranted)
												{
																									window.location.href = 'dashboard-1.html';
																								}
																						}
										});
	
										
										// Remove any alert
										$(".errors-container .alert").slideUp('fast');
	
	
										// Show errors
										if(resp.accessGranted == false)
										{
											$(".errors-container").html('<div class="alert alert-danger">\
												<button type="button" class="close" data-dismiss="alert">\
													<span aria-hidden="true">&times;</span>\
													<span class="sr-only">Close</span>\
												</button>\
												' + resp.errors + '\
											</div>');
	
	
											$(".errors-container .alert").hide().slideDown();
											$(form).find('#passwd').select();
										}
																		}
								});
	
							}
						});
	
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
                
    </body>
</html>