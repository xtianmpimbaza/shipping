
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li>
                                <a href="dashboard.php">Home</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#demoevent" href="#">Shipments</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="shipments.php">All</a>
                                    </li>
                                    <li><a href="pending-shipments.php">Pending</a>
                                    </li>
                                    <li><a href="intransit-shipments.php">In Transit</a>
                                    </li>
                                    <li><a href="delivered-shipments.php">Delivered</a>
                                    </li>
                                    <li><a href="cancelled-shipments.php">Cancelled</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="add-courier.php">Add</a>
                            </li>
                            <li>
                                <a href="profile.php">Profile</a>
                            </li>
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="<?php echo isset($route) && $route == "dashboard" ? "active" : "";?>">
                        <a href="dashboard.php">
                            <i class="notika-icon notika-house"></i>
                            Home</a>
                    </li>
                    <li class="<?php echo $route == "shipments" ? "active" : "";?>">
                        <a data-toggle="tab" href="#shipments"><i class="notika-icon notika-"></i> Shipments</a>
                    </li>
                    </li>
                    <li class="<?php echo $route == "add-courier" ? "active" : "";?>">
                        <a data-toggle="tab" href="#addnew"><i class="notika-icon notika-windows"></i> Add New</a>
                    </li>
                    <li class="<?php echo $route == "profile" ? "active" : "";?>">
                        <a href="profile.php"><i class="notika-icon notika-form"></i> Profile</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="notika-icon notika-app"></i> Logout</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">

                    <div id="shipments" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li class="<?php echo $route == "shipments" ? "active" : "";?>">
                                <a href="shipments.php">All</a>
                            </li>
                            <li class="<?php echo $route == "pending-shipments" ? "active" : "";?>">
                                <a href="pending-shipments.php">Pending</a>
                            </li>
                            <li class="<?php echo $route == "intransit-shipments" ? "active" : "";?>">
                                <a href="intransit-shipments.php">In Transit</a>
                            </li>
                            <li class="<?php echo $route == "delivered-shipments" ? "active" : "";?>">
                                <a href="delivered-shipments.php">Delivered</a>
                            </li>
                            <li class="<?php echo $route == "cancelled-shipments" ? "active" : "";?>">
                                <a href="cancelled-shipments.php">Cancelled</a>
                            </li>

                        </ul>
                    </div>

                    <div id="addnew" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li class="">
                                <a href="#">User</a>
                            </li>
                            <li class="<?php echo $route == "add-courier" ? "active" : "";?>">
                                <a href="add-courier.php">Shipment</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>