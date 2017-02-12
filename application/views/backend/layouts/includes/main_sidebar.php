<div class="sidebar-menu toggle-others fixed">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo -->
                <div class="logo">
                    <a href="dashboard-1.html" class="logo-expanded">
                        <img src="<?= base_url();?>assets/backend/images/logo.png" width="80" alt="" />
                    </a>
                    <a href="dashboard-1.html" class="logo-collapsed">
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
                    <a href="#" class="user-profile">
                        <img src="http://themes.laborator.co/xenon/assets/images/user-4.png" width="60" height="60" class="img-circle img-corona"
                            alt="user-pic">
                            <span> <strong>John Smith</strong>Page admin</span> </a>
                </div>
            </section>
            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class=" has">
                    <a href="missions.html">
                        <i class="fa-globe"></i>
                        <span class="title">Missions</span>
                    </a>
                </li>
                <li class="active has">
                    <a href="cad-linework-app.html">
                        <i class="fa-pencil"></i>
                        <span class="title">CAD Linework Application</span>
                    </a>
                </li>
                <li class=" has">
                    <a href="invoicing-receipts.html">
                        <i class="fa-file-text-o"></i>
                        <span class="title">Invoicing / Receipts</span>
                    </a>
                </li>
                <li class=" has">
                    <a href="support-raise-ticket.html">
                        <i class="fa-support"></i>
                        <span class="title">Support</span>
                    </a>
                </li>
                <li class=" has">
                    <a href="raise-ticket.html">
                        <i class="fa-ticket"></i>
                        <span class="title">Raise a Ticket</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>