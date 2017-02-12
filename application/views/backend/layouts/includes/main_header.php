<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />
    <title><?php echo isset($title) ? $title : NULL; ?></title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/xenon-core.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/xenon-forms.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/xenon-components.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/xenon-skins.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/backend/css/custom.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="page-body">
    <!--<div class="settings-pane">
        <a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
        <div class="settings-pane-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="user-info">
                        <div class="user-image">
                            <a href="extra-profile.html">
                                <img src="<?= base_url();?>assets/backend/images/user-2.png" class="img-responsive img-circle" />
                            </a>
                        </div>
                        <div class="user-details">
                            <h3>
                                <a href="extra-profile.html">John Smith</a>
                                <span class="user-status is-online"></span>
                            </h3>
                            <p class="user-title">Web Developer</p>
                            <div class="user-links">
                                <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                                <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 link-blocks-env">
                    <div class="links-block left-sep">
                        <h4>
                            <span>Notifications</span>
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
                                <label for="sp-chk1">Messages</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                                <label for="sp-chk2">Events</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                                <label for="sp-chk3">Updates</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                                <label for="sp-chk4">Server Uptime</label>
                            </li>
                        </ul>
                    </div>
                    <div class="links-block left-sep">
                        <h4>
                            <a href="#">
                                <span>Help Desk</span>
                            </a>
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i> Support Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i> Submit a Ticket
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i> Domains Protocol
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i> Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
        <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
        <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->