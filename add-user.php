<?php
session_start();
require_once('library.php');

$route = "add-user";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $full_namespass = $_POST['full_names'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $office = $_POST['office'];
    $user_type = $_POST['user_type'];

    $sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, user_type )
			VALUES('$full_namespass', '$pass','$address', '$email', '$phone_number','$office','$user_type')";
    $result = dbQuery($sql);
    if ($result == 1){
        $error = "Saved successifully";
    }
}
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
                                    <h2>New User </h2>
                                    <p>Add new User</p>
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
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">

                    <div>
                        <div class="panel modal-login">
                            <div class="panel-body text-center">
                                <div class="modal-header">

                                </div>
                                <div class="error text-center" style="color: red"> <?php if (isset($error)) {
                                        echo $error;
                                    } ?></div>
                                <div class="modal-body col-lg-6 col-lg-offset-3 col-md-12">

                                    <form method="post">
                                        <div class="form-example-int form-horizental">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Full Names :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control input-sm" name="full_names"
                                                                   placeholder="Enter Full Names">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int form-horizental">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Phone number :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control" name="phone_number"
                                                                   placeholder="Mobile Number"
                                                                   required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int form-horizental">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Address :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control" name="address"
                                                                   placeholder="Address"
                                                                   required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int form-horizental">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Office :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input class="form-control" name="office"
                                                                   placeholder="Office" required="required" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int form-horizental">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Email Address :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control input-sm" name="email"
                                                                   placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int form-horizental mg-t-15">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="hrzn-fm">Password :</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control input-sm" name="password"
                                                                   placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-example-int form-horizental mg-t-15">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="hrzn-fm">Role :</label>
                                                </div>
                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="user_type" id="exampleRadios1" value="admin-role"
                                                               checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Admin
                                                        </label>
                                                        <input class="form-check-input" type="radio"
                                                               name="user_type" id="exampleRadios2" value="officer">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Officer
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-example-int mg-t-15">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                </div>
                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                    <button type="submit" class="btn btn-primary notika-btn-primary" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

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
<!--<script src="js/tawk-chat.js"></script>-->
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
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
</body>

</html>