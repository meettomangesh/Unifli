<?php 
$is_active_link = isset($is_active_link)?$is_active_link:'dashboard';
$user_access_id = $_SESSION['user_access_id'];
$user_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];
?>
<div class="sidebar-menu toggle-others fixed">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo base_url();?>" class="logo-expanded">
                        <img src="<?= base_url();?>assets/backend/images/logo.png" width="80" alt="" />
                    </a>
                    <a href="<?php echo base_url();?>" class="logo-collapsed">
                        <img src="<?= base_url();?>assets/backend/images/logo.png" width="40" alt="" />
                    </a>
                </div>
                <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                <div class="mobile-menu-toggle visible-xs">
                    <a href="#" data-toggle="user-info-menu">
                        <i class="fa-bell-o"></i>
                        <span class="badge badge-success">7</span>
                    </a>
                    <a href="#" data-toggle="mobile-menu">
                        <i class="fa-bars"></i>
                    </a>
                </div>
                <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
            </header>
            <section class="sidebar-user-info">
                <div class="sidebar-user-info-inner">
                    <a href="<?php echo base_url();?>user/profile" class="user-profile">
                        <img src="http://themes.laborator.co/xenon/assets/images/user-4.png" width="60" height="60" class="img-circle img-corona"
                            alt="user-pic">
                            <span> <strong><?php echo $user_name;?></strong>Page admin</span> </a>
                </div>
            </section>
            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<?php if(in_array($user_access_id, array(1, 3))) { ?>
				<li class="<?php echo ($is_active_link == 'dashboard')?'active':''; ?> has">
					<a href="<?php echo base_url();?>user/dashboard">
						<i class="linecons-cog"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1, 3))) {
				?>
				<li class="<?php echo ($is_active_link == 'missions')?'active':''; ?>  has">
					<a href="<?php echo base_url();?>missions">
						<i class="fa-globe"></i>
						<span class="title">Missions</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'users')?'active':''; ?>  has">
					<a href="<?php echo base_url();?>user">
						<i class="fa-won"></i>
						<span class="title">Users</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(2))) {
				?>
				<li class="<?php echo ($is_active_link == 'billing')?'active':''; ?>  has">
					<a href="#">
						<i class="fa-won"></i>
						<span class="title">Billing</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(3))) {
				?>

				<li class="<?php echo ($is_active_link == 'request_work')?'active':''; ?>  has">
					<a href="<?php echo base_url();?>cadlinework/request_work">
						<i class="fa-won"></i>
						<span class="title">Request CAD Line Work</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1, 2, 3))) {
				?>
				<li class="<?php echo ($is_active_link == 'work_application')?'active':''; ?> has">
					<a href="<?php echo base_url();?>cadlinework/work_application">
						<i class="fa-pencil"></i>
						<span class="title">CAD Linework Application</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(3))) {
				?>
				<li class="<?php echo ($is_active_link == 'receipts')?'active':''; ?> has">
					<a href="<?php echo base_url();?>receipts">
						<i class="fa-file-text-o"></i>
						<span class="title">Invoicing / Receipts</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(3))) {
				?>
				<li class="<?php echo ($is_active_link == 'plans')?'active':''; ?> has">
					<a href="<?php echo base_url();?>plans">
						<i class="fa-copy"></i>
						<span class="title"> Plans</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(3))) {
				?>	
				<li class="<?php echo ($is_active_link == 'support')?'active':''; ?> has">
					<a href="<?php echo base_url();?>tickets/support">
						<i class="fa-support"></i>
						<span class="title">Support</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(3))) {
				?>
				<li class="<?php echo ($is_active_link == 'tickets')?'active':''; ?> has">
					<a href="<?php echo base_url();?>tickets">
						<i class="fa-ticket"></i>
						<span class="title">Raise a Ticket</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'drone_sale')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">Drone Sale Application</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'dfm_subsription')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">DFM Subscription</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'reporting')?'active':''; ?> has">
					<a href="<?php echo base_url();?>reporting">
						<i class="fa-ticket"></i>
						<span class="title">Reporting</span>
					</a>
				</li>		
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'setting')?'active':''; ?> has">
					<a href=#>
						<i class="fa-ticket"></i>
						<span class="title">Setting</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'support_ticket')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">Support Ticket</span>
					</a>
				</li>
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'blogger_access')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">Blogger Access</span>
					</a>
				</li>				
				<?php 
					}
					if(in_array($user_access_id, array(1))) {
				?>
				<li class="<?php echo ($is_active_link == 'vendor_mgmt')?'active':''; ?> has">
					<a href="<?php echo base_url();?>vendormgmt">
						<i class="fa-ticket"></i>
						<span class="title">Vendor Management</span>
					</a>
				</li>				
				<?php 
					}
					if(in_array($user_access_id, array(4))) {
				?>
				<li class="<?php echo ($is_active_link == 'create_blog')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">Create Blog</span>
					</a>
				</li>				
				<?php 
					}
					if(in_array($user_access_id, array(4))) {
				?>
				<li class="<?php echo ($is_active_link == 'blogs')?'active':''; ?> has">
					<a href="#">
						<i class="fa-ticket"></i>
						<span class="title">Blogs</span>
					</a>
				</li>				
				<?php 
					}
				?>	
            </ul>
        </div>
    </div>