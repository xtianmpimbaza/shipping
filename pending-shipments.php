<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

$route = "shipments";
$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, pick_time, status
		FROM tbl_courier
		WHERE status = 'Pending'
		ORDER BY cid DESC";
$result = dbQuery($sql);

$sql2 = "SELECT *
		FROM tbl_courier";
$resulta = dbQuery($sql2);

$px = 0;
//$price = 0;
$type = '';
$zone = '';
$service = '';
$weight = 0;

while ($data = dbFetchAssoc($resulta)) {
    extract($data);
    $Shiptype = $type;
    $zone = $zone;
    $service = $service;
    $weight = $weight;
    //$price = $px;
    if ($service == 'Normal') {
        if ($zone == 'National Zone') {
            if ($Shiptype == 'Regular mail') {
                $px = 6.00;
            } else if ($Shiptype == 'Property titles') {
                $px = 15.00;
            } else if ($Shiptype == 'Bank Securities') {
                $px = 15.00;
            } else if ($Shiptype == 'Pharmaceutical products') {
                if ($weight <= 250) {
                    $px = 5.00;
                } else {
                    $px = 10.00;
                }
            } else if ($Shiptype == 'Ordinary packages') {
                if ($weight <= 3000) {
                    $px = 10.00;
                } else {
                    $px = 15.00;
                }
            } else if ($Shiptype == 'Laptop') {
                $px = 20.00;
            } else if ($Shiptype == 'Portable Tablet') {
                $px = 20.00;
            } else if ($Shiptype == 'Portable ipad') {
                $px = 20.00;
            } else if ($Shiptype == 'Cell phone') {
                $px = 10.00;
            } else if ($Shiptype == 'Accessories') {
                if ($weight <= 100) {
                    $px = 5.00;
                } else if ($weight >= 101 && $weight <= 300) {
                    $px = 10.00;
                } else if ($weight >= 301 && $weight <= 500) {
                    $px = 15.00;
                } else {
                    $px = 20.00;
                }
            }
        } else {
            if ($Shiptype == 'Regular mail') {
                $px = 15.00;
            } else if ($Shiptype == 'Property titles') {
                $px = 30.00;
            } else if ($Shiptype == 'Bank Securities') {
                $px = 30.00;
            } else if ($Shiptype == 'Pharmaceutical products') {
                if ($weight <= 250) {
                    $px = 15.00;
                } else {
                    $px = 20.00;
                }
            } else if ($Shiptype == 'Ordinary packages') {
                if ($weight <= 3000) {
                    $px = 15.00;
                } else {
                    $px = 30.00;
                }
            } else if ($Shiptype == 'Laptop') {
                $px = 40.00;
            } else if ($Shiptype == 'Portable Tablet') {
                $px = 40.00;
            } else if ($Shiptype == 'Portable ipad') {
                $px = 40.00;
            } else if ($Shiptype == 'Cell phone') {
                $px = 20.00;
            } else if ($Shiptype == 'Accessories') {
                if ($weight <= 100) {
                    $px = 15.00;
                } else if ($weight >= 101 && $weight <= 300) {
                    $px = 25.00;
                } else if ($weight >= 301 && $weight <= 500) {
                    $px = 30.00;
                } else {
                    $px = 35.00;
                }
            }

        }

    } else {
        if ($zone == 'National Zone') {
            if ($Shiptype == 'Regular mail') {
                $px = 2 * 6.00;
            } else if ($Shiptype == 'Property titles') {
                $px = 2 * 15.00;
            } else if ($Shiptype == 'Bank Securities') {
                $px = 2 * 15.00;
            } else if ($Shiptype == 'Pharmaceutical products') {
                if ($weight <= 250) {
                    $px = 2 * 5.00;
                } else {
                    $px = 2 * 10.00;
                }
            } else if ($Shiptype == 'Ordinary packages') {
                if ($weight <= 3000) {
                    $px = 2 * 10.00;
                } else {
                    $px = 2 * 15.00;
                }
            } else if ($Shiptype == 'Laptop') {
                $px = 2 * 20.00;
            } else if ($Shiptype == 'Portable Tablet') {
                $px = 2 * 20.00;
            } else if ($Shiptype == 'Portable ipad') {
                $px = 2 * 20.00;
            } else if ($Shiptype == 'Cell phone') {
                $px = 2 * 10.00;
            } else if ($Shiptype == 'Accessories') {
                if ($weight <= 100) {
                    $px = 2 * 5.00;
                } else if ($weight >= 101 && $weight <= 300) {
                    $px = 2 * 10.00;
                } else if ($weight >= 301 && $weight <= 500) {
                    $px = 2 * 15.00;
                } else {
                    $px = 2 * 20.00;
                }
            }
        } else {
            if ($Shiptype == 'Regular mail') {
                $px = 2 * 15.00;
            } else if ($Shiptype == 'Property titles') {
                $px = 2 * 30.00;
            } else if ($Shiptype == 'Bank Securities') {
                $px = 2 * 30.00;
            } else if ($Shiptype == 'Pharmaceutical products') {
                if ($weight <= 250) {
                    $px = 2 * 15.00;
                } else {
                    $px = 2 * 20.00;
                }
            } else if ($Shiptype == 'Ordinary packages') {
                if ($weight <= 3000) {
                    $px = 2 * 15.00;
                } else {
                    $px = 2 * 30.00;
                }
            } else if ($Shiptype == 'Laptop') {
                $px = 2 * 40.00;
            } else if ($Shiptype == 'Portable Tablet') {
                $px = 2 * 40.00;
            } else if ($Shiptype == 'Portable ipad') {
                $px = 2 * 40.00;
            } else if ($Shiptype == 'Cell phone') {
                $px = 2 * 20.00;
            } else if ($Shiptype == 'Accessories') {
                if ($weight <= 100) {
                    $px = 2 * 15.00;
                } else if ($weight >= 101 && $weight <= 300) {
                    $px = 2 * 25.00;
                } else if ($weight >= 301 && $weight <= 500) {
                    $px = 2 * 30.00;
                } else {
                    $px = 2 * 35.00;
                }
            }

        }

    }
}
$sql3 = "UPDATE tbl_courier SET price = '$px'";
dbQuery($sql3);


?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LOMAMI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!-- Main Menu area End-->
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>All shipments</h2>
                                    <p>All shipments all time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="add-courier.php"><button data-toggle="tooltip" data-placement="left" title="New Shipment" class="btn">
                                        <i class="notika-icon notika-flag"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">

                    <div class="">
                        <table id="data-table-basic" class="table table-striped table-hover table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th class="newtext" bgcolor="#EDEDED">#</th>
                                <th class="newtext" bgcolor="#EDEDED">Consignment No</th>
                                <th class="newtext" bgcolor="#EDEDED">Sender</th>
                                <th class="newtext" bgcolor="#EDEDED">Receiver</th>
                                <th class="newtext" bgcolor="#EDEDED">Pickup Date/Time</th>
                                <th class="newtext" bgcolor="#EDEDED">Status</th>
                                <th class="newtext" bgcolor="#EDEDED">Print</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            while ($data = dbFetchAssoc($result)) {
                            extract($data);
                            ?>
                                <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">

                                    <td class="gentxt" align="center">
                                        <a href="edit-courierb.php?cid=<?php echo $cid; ?>">
                                            <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
                                    </td>
                                    <td class="gentxt"><?php echo $cons_no; ?></td>
                                    <td class="gentxt"><?php echo $ship_name; ?></td>
                                    <td class="gentxt"><?php echo $rev_name; ?></td>
                                    <td class="gentxt"><?php echo $pick_date; ?> - <?php echo $pick_time; ?></td>
                                    <td class="gentxt"><?php echo $status; ?></td>
                                    <td class="gentxt" align="center">
                                        <a href="invoice.php?cid=<?php echo $cid; ?>">
                                            <img src="images/printer.png" border="0" height="20" width="20"></a>
                                    </td>
                                </tr>
                                <?php
                            }//while
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="newtext" bgcolor="#EDEDED">#</th>
                                <th class="newtext" bgcolor="#EDEDED">Consignment No</th>
                                <th class="newtext" bgcolor="#EDEDED">Sender</th>
                                <th class="newtext" bgcolor="#EDEDED">Receiver</th>
                                <th class="newtext" bgcolor="#EDEDED">Pickup Date/Time</th>
                                <th class="newtext" bgcolor="#EDEDED">Status</th>
                                <th class="newtext" bgcolor="#EDEDED">Print</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
<!-- Start Footer area-->
<?php include 'footer.php'; ?>
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- knob JS
    ============================================ -->
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/jquery.appear.js"></script>
<script src="js/knob/knob-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="js/chat/jquery.chat.js"></script>
<!--  todo JS
    ============================================ -->
<script src="js/todo/jquery.todo.js"></script>
<!--  wave JS
    ============================================ -->
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- Data Table JS
    ============================================ -->
<script src="js/data-table/jquery.dataTables.min.js"></script>
<script src="js/data-table/data-table-act.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
</body>

</html>