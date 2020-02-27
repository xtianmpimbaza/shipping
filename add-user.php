<?php
session_start();
require_once('library.php');
$rand = get_rand_id(8);
//echo $rand;

$route = "add-user";
$invoice_no = rand(1000,9999);
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
                                    <h2>Add </h2>
                                    <p>Add new shipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">

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
                <div class="form-example-wrap">
                    <!--                   =========================================================================================== start inner body-->

                    <div class="">
                        <form action="process.php?action=add-cons" method="post" name="frmShipment">
                            <div class="gentxt" align="right">
                                <table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
                                    <tbody>
                                    <tr>
                                        <td width="60%">&nbsp;</td>
                                        <td width="40%">
                                            <div align="right"></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table  align="center" class="coutier_tbl">
                                <tbody>
                                <tr>
                                    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18">
                                    </td>
                                    <td background="images/boxtopBG.gif" width="734"></td>
                                    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13"
                                                        width="18"></td>
                                </tr>
                                <tr>
                                    <td background="images/boxleftBG.gif"></td>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                                            <tbody>
                                            <tr>
                                                <td colspan="2" height="4"></td>
                                            </tr>
                                            <tr>
                                                <td height="18">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="Partext1" cellpadding="2" cellspacing="2"
                                                           align="center" width="100%">
                                                        <tbody>
                                                        <tr>
                                                            <?php

                                                            ?>
                                                            <td colspan="3" class="TrackMediumBlue" align="right">
                                                                <div class="gentxt" align="right">
                                                                    <div class="headtext13" align="left"><strong>Sender's
                                                                            info
                                                                            : </strong></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right" width="138">
                                                                Sender's Name :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                <input name="Shippername" size="40" type="TEXT">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Phone :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Shipperphone" id="Shipperphone"
                                                                       maxlength="13" size="40"
                                                                       onkeypress='validate(event)'
                                                                       type="number"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Email :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Shipperemail" id="Shipperemail"
                                                                       type="email"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Address :</td>
                                                            <td>&nbsp;</td>
                                                            <td><span class="REDLink">
              <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
              *</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="TrackMediumBlue" align="right">
                                                                <div class="headtext13" align="left"><strong>Receiver's
                                                                        info : </strong>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Receiver's Name
                                                                :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Receivername" id="Receivername"
                                                                       maxlength="100" size="40"
                                                                       type="TEXT">
                                                                <span class="REDLink">*</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Phone :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Receiverphone" id="Receiverphone"
                                                                       maxlength="13" size="40"
                                                                       onkeypress='validate(event)'
                                                                       type="number"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Email :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Receiveremail" id="Receiveremail" size="40"
                                                                       type="email"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right"> Address: :</td>
                                                            <td>&nbsp;</td>
                                                            <td><span class="REDLink">
              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
              *</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="TrackMediumBlue" align="right">
                                                                <div class="headtext13" align="left"><strong>Shipment
                                                                        info : </strong>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Consignment No :
                                                            </td>
                                                            <td width="13">&nbsp;</td>
                                                            <td width="477">
                                                                <input name="ConsignmentNo"
                                                                       value="<?php echo "LTALW" . strtoupper($rand); ?>"
                                                                       id="ConsignmentNo" readonly="true"
                                                                       maxlength="13"
                                                                       size="40" type="TEXT">
                                                                <span class="REDLink">*</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Type of Shipment
                                                                :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><select id="Shiptype" name="Shiptype">
                                                                    <option value="Regular mail" selected="selected">
                                                                        Regular mail
                                                                    </option>
                                                                    <option value="Propert titles">Property titles
                                                                    </option>
                                                                    <option value="Bank securities">Bank Securities
                                                                    </option>
                                                                    <option value="Pharmaceutical products">
                                                                        Pharmaceutical products
                                                                    </option>
                                                                    <option value="Ordinary packages">Ordinary
                                                                        Packages
                                                                    </option>
                                                                    <option value="Parcel">Parcel</option>
                                                                    <option value="Computer hardware">Computer
                                                                        Hardware
                                                                    </option>
                                                                    <option value="Laptop">Laptop</option>
                                                                    <option value="Portable Tablet">Portable Tablet
                                                                    </option>
                                                                    <option value="Portable ipad">Portable ipad</option>
                                                                    <option value="Cell phone">Cell phone</option>
                                                                    <option value="Accessories">Accessories</option>

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Weight :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input id="Weight" size="10" maxlength="10"
                                                                       onkeypress='validate(event)'
                                                                       name="Weight">
                                                                (kg)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Invoice no :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Invoiceno" id="Invoiceno" value="<?php echo $invoice_no;?>" type="number">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Quantity :</td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Qnty" id="Qnty" maxlength="10" size="20"
                                                                       onkeypress='validate(event)'
                                                                       type="number"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Booking Mode :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="Bookingmode" id="Bookingmode">
                                                                    <option selected="selected" value="Paid">Paid
                                                                    </option>
                                                                    <option value="ToPay">ToPay</option>
                                                                    <option value="TBB">TBB</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Total freight :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><input id="Totalfreight" size="10" maxlength="13"
                                                                       type="number"
                                                                       onkeypress='validate(event)'
                                                                       name="Totalfreight">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackMediumBlue" align="right">Mode :</td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="Mode" id="Mode">
                                                                    <option selected="selected" value="Air">Air</option>
                                                                    <option value="Road">Road</option>
                                                                    <option value="Train">Train</option>
                                                                    <option value="Sea">Sea</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right"><span
                                                                        class="TrackMediumBlue">Dept time : </span>
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Depttime" id="Depttime" maxlength="50"
                                                                       size="20"
                                                                       type="TEXT"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right">Destination
                                                                Office:
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Destination" id="Destination"
                                                                       maxlength="50" size="40"
                                                                       type="TEXT">
                                                                <span class="REDLink">*</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right">Pickup Date :</td>
                                                            <td>&nbsp;</td>
                                                            <td>
<!--                                                                <input name="Packupdate" id="Packupdate" readonly="True"-->
<!--                                                                       style="cursor: text;" onClick="ds_sh(this);"-->
<!--                                                                       maxlength="15"-->
<!--                                                                       type="TEXT" value="">-->
                                                                <input name="Packupdate" id="Packupdate"
                                                                       style="cursor: text;"
                                                                       placeholder="DD/MM/YYYY"
                                                                        type="TEXT">
                                                                <span class="REDLink">*</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right" valign="top">
                                                                Pickup Time :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><input name="Pickuptime" id="Pickuptime" maxlength="50"
                                                                       size="20"
                                                                       type="TEXT"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right" valign="top">
                                                                Status :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><select name="status" id="status">
                                                                    <option selected="selected" value="In Transit">In
                                                                        Transit
                                                                    </option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="TrackNormalBlue" align="right" valign="top">
                                                                Comments :
                                                            </td>
                                                            <td>&nbsp;</td>
                                                            <td><textarea name="Comments" cols="40" rows="4"
                                                                          id="Comments"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td><button class="btn btn-primary btn-sm" name="Submit" type="submit"
                                                                       onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','Totalfreight','','R','Pickuptime','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','Totalfreight','','R');return document.MM_returnValue">Add Courier</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td background="images/boxrightBG.gif"></td>
                                </tr>
                                <tr>
                                    <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18">
                                    </td>
                                    <td background="images/boxbtmBG.gif" width="734"></td>
                                    <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12"
                                                        width="18"></td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>
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
<!-- tawk chat JS
    ============================================ -->
<script src="js/tawk-chat.js"></script>
<script>
    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
</body>

</html>