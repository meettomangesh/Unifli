<div class="login-container">	
	<div class="row">
		<div class="col-sm-4"></div>	
		<div class="col-sm-6">
			<!-- Errors container -->
			<div class="errors-container">
				<?php if(!empty($error_message)) { 
				echo "<div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".$error_message."</div>";
				} ?>
			</div>

			<!-- Add class "fade-in-effect" for login form effect -->
			<form method="post" role="form" id="login" class="login-form fade-in-effect">

				<div class="login-header">
					<a href="<?php echo base_url();?>" class="logo">
						<img src="<?= base_url();?>assets/backend/images/3.png" alt="" width="120" />
					</a>

					<p>Dear user, log in to access the admin area!</p>
				</div>
                
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" name="username" id="username" autocomplete="off" />
				</div>

				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" id="passwd" autocomplete="off" />
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary  btn-block text-left">
						<i class="fa-lock"></i>
						Log In
					</button>
				</div>

				<div class="login-footer">
					<a href="<?php echo base_url();?>user/forget_password">Forgot your password?</a>

					<div class="">
						<a href="<?php echo base_url();?>user/reset_password">Reset Password</a> 
					</div>	
				</div>	
			</form>	
			<!-- External login -->				
		</div>	
	</div>	
</div>
