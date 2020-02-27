<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$cid = (int)$_GET['cid'];
$route = "";

$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);
$result_1 = dbQuery($sql_1);
while ($data = dbFetchAssoc($result)) {
extract($data);

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

    <script type="text/JavaScript">
        <!--
        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_validateForm() { //v4.0
            var i, p, q, nm, test, num, min, max, errors = '', args = MM_validateForm.arguments;
            for (i = 0; i < (args.length - 2); i += 3) {
                test = args[i + 2];
                val = MM_findObj(args[i]);
                if (val) {
                    nm = val.name;
                    if ((val = val.value) != "") {
                        if (test.indexOf('isEmail') != -1) {
                            p = val.indexOf('@');
                            if (p < 1 || p == (val.length - 1)) errors += '- ' + nm + ' must contain an e-mail address.\n';
                        } else if (test != 'R') {
                            num = parseFloat(val);
                            if (isNaN(val)) errors += '- ' + nm + ' must contain a number.\n';
                            if (test.indexOf('inRange') != -1) {
                                p = test.indexOf(':');
                                min = test.substring(8, p);
                                max = test.substring(p + 1);
                                if (num < min || max < num) errors += '- ' + nm + ' must contain a number between ' + min + ' and ' + max + '.\n';
                            }
                        }
                    } else if (test.charAt(0) == 'R') errors += '- ' + nm + ' is required.\n';
                }
            }
            if (errors) alert('The following error(s) occurred:\n' + errors);
            document.MM_returnValue = (errors == '');
        }

        //-->
    </script>

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
                                    <h2>Edit </h2>
                                    <p>Edit shipment: <?php echo $cons_no; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <!--                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn">-->
                                <!--                                    <i class="notika-icon notika-sent"></i></button>-->
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
                        <table style="border: solid thin dimgrey" border="0" cellpadding="0" cellspacing="0" align="center">

                        <tbody>

                        <tr>

                            <td>

                                <script type="text/JavaScript">
                                    <!--
                                    function MM_findObj(n, d) { //v4.01
                                        var p, i, x;
                                        if (!d) d = document;
                                        if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                                            d = parent.frames[n.substring(p + 1)].document;
                                            n = n.substring(0, p);
                                        }
                                        if (!(x = d[n]) && d.all) x = d.all[n];
                                        for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
                                        for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
                                        if (!x && d.getElementById) x = d.getElementById(n);
                                        return x;
                                    }

                                    function MM_validateForm() { //v4.0
                                        var i, p, q, nm, test, num, min, max, errors = '',
                                            args = MM_validateForm.arguments;
                                        for (i = 0; i < (args.length - 2); i += 3) {
                                            test = args[i + 2];
                                            val = MM_findObj(args[i]);
                                            if (val) {
                                                nm = val.name;
                                                if ((val = val.value) != "") {
                                                    if (test.indexOf('isEmail') != -1) {
                                                        p = val.indexOf('@');
                                                        if (p < 1 || p == (val.length - 1)) errors += '- ' + nm + ' must contain an e-mail address.\n';
                                                    } else if (test != 'R') {
                                                        num = parseFloat(val);
                                                        if (isNaN(val)) errors += '- ' + nm + ' must contain a number.\n';
                                                        if (test.indexOf('inRange') != -1) {
                                                            p = test.indexOf(':');
                                                            min = test.substring(8, p);
                                                            max = test.substring(p + 1);
                                                            if (num < min || max < num) errors += '- ' + nm + ' must contain a number between ' + min + ' and ' + max + '.\n';
                                                        }
                                                    }
                                                } else if (test.charAt(0) == 'R') errors += '- ' + nm + ' is required.\n';
                                            }
                                        }
                                        if (errors) alert('The following error(s) occurred:\n' + errors);
                                        document.MM_returnValue = (errors == '');
                                    }

                                    //-->
                                </script>

                                <table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0"
                                       cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td id="ds_calclass"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    // <!-- <![CDATA[

                                    // Project: Dynamic Date Selector (DtTvB) - 2006-03-16
                                    // Script featured on JavaScript Kit- http://www.javascriptkit.com
                                    // Code begin...
                                    // Set the initial date.
                                    var ds_i_date = new Date();
                                    ds_c_month = ds_i_date.getMonth() + 1;
                                    ds_c_year = ds_i_date.getFullYear();

                                    // Get Element By Id
                                    function ds_getel(id) {
                                        return document.getElementById(id);
                                    }

                                    // Get the left and the top of the element.
                                    function ds_getleft(el) {
                                        var tmp = el.offsetLeft;
                                        el = el.offsetParent
                                        while (el) {
                                            tmp += el.offsetLeft;
                                            el = el.offsetParent;
                                        }
                                        return tmp;
                                    }

                                    function ds_gettop(el) {
                                        var tmp = el.offsetTop;
                                        el = el.offsetParent
                                        while (el) {
                                            tmp += el.offsetTop;
                                            el = el.offsetParent;
                                        }
                                        return tmp;
                                    }

                                    // Output Element
                                    var ds_oe = ds_getel('ds_calclass');
                                    // Container
                                    var ds_ce = ds_getel('ds_conclass');

                                    // Output Buffering
                                    var ds_ob = '';

                                    function ds_ob_clean() {
                                        ds_ob = '';
                                    }

                                    function ds_ob_flush() {
                                        ds_oe.innerHTML = ds_ob;
                                        ds_ob_clean();
                                    }

                                    function ds_echo(t) {
                                        ds_ob += t;
                                    }

                                    var ds_element; // Text Element...

                                    var ds_monthnames = [
                                        'January', 'February', 'March', 'April', 'May', 'June',
                                        'July', 'August', 'September', 'October', 'November', 'December'
                                    ]; // You can translate it for your language.

                                    var ds_daynames = [
                                        'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
                                    ]; // You can translate it for your language.

                                    // Calendar template
                                    function ds_template_main_above(t) {
                                        return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
                                            + '<tr>'
                                            + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
                                            + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
                                            + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
                                            + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
                                            + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
                                            + '</tr>'
                                            + '<tr>'
                                            + '<td colspan="7" class="ds_head">' + t + '</td>'
                                            + '</tr>'
                                            + '<tr>';
                                    }

                                    function ds_template_day_row(t) {
                                        return '<td class="ds_subhead">' + t + '</td>';
                                        // Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
                                    }

                                    function ds_template_new_week() {
                                        return '</tr><tr>';
                                    }

                                    function ds_template_blank_cell(colspan) {
                                        return '<td colspan="' + colspan + '"></td>'
                                    }

                                    function ds_template_day(d, m, y) {
                                        return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
                                        // Define width the day row.
                                    }

                                    function ds_template_main_below() {
                                        return '</tr>'
                                            + '</table>';
                                    }

                                    // This one draws calendar...
                                    function ds_draw_calendar(m, y) {
                                        // First clean the output buffer.
                                        ds_ob_clean();
                                        // Here we go, do the header
                                        ds_echo(ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
                                        for (i = 0; i < 7; i++) {
                                            ds_echo(ds_template_day_row(ds_daynames[i]));
                                        }
                                        // Make a date object.
                                        var ds_dc_date = new Date();
                                        ds_dc_date.setMonth(m - 1);
                                        ds_dc_date.setFullYear(y);
                                        ds_dc_date.setDate(1);
                                        if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
                                            days = 31;
                                        } else if (m == 4 || m == 6 || m == 9 || m == 11) {
                                            days = 30;
                                        } else {
                                            days = (y % 4 == 0) ? 29 : 28;
                                        }
                                        var first_day = ds_dc_date.getDay();
                                        var first_loop = 1;
                                        // Start the first week
                                        ds_echo(ds_template_new_week());
                                        // If sunday is not the first day of the month, make a blank cell...
                                        if (first_day != 0) {
                                            ds_echo(ds_template_blank_cell(first_day));
                                        }
                                        var j = first_day;
                                        for (i = 0; i < days; i++) {
                                            // Today is sunday, make a new week.
                                            // If this sunday is the first day of the month,
                                            // we've made a new row for you already.
                                            if (j == 0 && !first_loop) {
                                                // New week!!
                                                ds_echo(ds_template_new_week());
                                            }
                                            // Make a row of that day!
                                            ds_echo(ds_template_day(i + 1, m, y));
                                            // This is not first loop anymore...
                                            first_loop = 0;
                                            // What is the next day?
                                            j++;
                                            j %= 7;

                                        }
                                        // Do the footer
                                        ds_echo(ds_template_main_below());
                                        // And let's display..
                                        ds_ob_flush();
                                        // Scroll it into view.
                                        ds_ce.scrollIntoView();
                                    }

                                    // A function to show the calendar.
                                    // When user click on the date, it will set the content of t.
                                    function ds_sh(t) {
                                        // Set the element to set...
                                        ds_element = t;
                                        // Make a new date, and set the current month and year.
                                        var ds_sh_date = new Date();
                                        ds_c_month = ds_sh_date.getMonth() + 1;
                                        ds_c_year = ds_sh_date.getFullYear();
                                        // Draw the calendar
                                        ds_draw_calendar(ds_c_month, ds_c_year);
                                        // To change the position properly, we must show it first.
                                        ds_ce.style.display = '';
                                        // Move the calendar container!
                                        the_left = ds_getleft(t);
                                        the_top = ds_gettop(t) + t.offsetHeight;
                                        ds_ce.style.left = the_left + 'px';
                                        ds_ce.style.top = the_top + 'px';
                                        // Scroll it into view.
                                        ds_ce.scrollIntoView();
                                    }

                                    // Hide the calendar.
                                    function ds_hi() {
                                        ds_ce.style.display = 'none';
                                    }

                                    // Moves to the next month...
                                    function ds_nm() {
                                        // Increase the current month.
                                        ds_c_month++;
                                        // We have passed December, let's go to the next year.
                                        // Increase the current year, and set the current month to January.
                                        if (ds_c_month > 12) {
                                            ds_c_month = 1;
                                            ds_c_year++;
                                        }
                                        // Redraw the calendar.
                                        ds_draw_calendar(ds_c_month, ds_c_year);
                                    }

                                    // Moves to the previous month...
                                    function ds_pm() {
                                        ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
                                        // We have passed January, let's go back to the previous year.
                                        // Decrease the current year, and set the current month to December.
                                        if (ds_c_month < 1) {
                                            ds_c_month = 12;
                                            ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
                                        }
                                        // Redraw the calendar.
                                        ds_draw_calendar(ds_c_month, ds_c_year);
                                    }

                                    // Moves to the next year...
                                    function ds_ny() {
                                        // Increase the current year.
                                        ds_c_year++;
                                        // Redraw the calendar.
                                        ds_draw_calendar(ds_c_month, ds_c_year);
                                    }

                                    // Moves to the previous year...
                                    function ds_py() {
                                        // Decrease the current year.
                                        ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
                                        // Redraw the calendar.
                                        ds_draw_calendar(ds_c_month, ds_c_year);
                                    }

                                    // Format the date to output.
                                    function ds_format_date(d, m, y) {
                                        // 2 digits month.
                                        m2 = '00' + m;
                                        m2 = m2.substr(m2.length - 2);
                                        // 2 digits day.
                                        d2 = '00' + d;
                                        d2 = d2.substr(d2.length - 2);
                                        // YYYY-MM-DD
                                        return d2 + '/' + m2 + '/' + y;
                                    }

                                    // When the user clicks the day.
                                    function ds_onclick(d, m, y) {
                                        // Hide the calendar.
                                        ds_hi();
                                        // Set the value of it, if we can.
                                        if (typeof(ds_element.value) != 'undefined') {
                                            ds_element.value = ds_format_date(d, m, y);
                                            // Maybe we want to set the HTML in it.
                                        } else if (typeof(ds_element.innerHTML) != 'undefined') {
                                            ds_element.innerHTML = ds_format_date(d, m, y);
                                            // I don't know how should we display it, just alert it to user.
                                        } else {
                                            alert(ds_format_date(d, m, y));
                                        }
                                    }

                                    function getSelected(opt) {

                                        var opt = document.frmExport.opt;
                                        for (var intLoop = 0; intLoop < opt.length; intLoop++) {
                                            if (!(opt.options[intLoop].selected)) {
                                                alert("Select any one field!");
                                                return false;
                                            }
                                        }
                                        return true;
                                    }

                                    // And here is the end.

                                    // ]]> -->
                                </script>


                                <form action="process.php?action=update-shipment" method="post" name="frmShipment"
                                      id="frmShipment">

                                    <table cellpadding="2" cellspacing="2" align="center">


                                        <tbody>
                                        <tr>

                                            <td class="Partext1" bgcolor="#FFFFFF" align="right">
                                                <div align="center">

                                                    <table border="0" cellpadding="1" cellspacing="2" width="80%">
                                                        <br>
                                                        <tbody>
                                                        <tr>

                                                            <td width="55%">
                                                                <div align="left" class="style3">Sender's Name :</div>
                                                            </td>

                                                            <td width="45%">
                                                                <div align="left" class="style3">

                                                                    <input name="Shippername" type="text"
                                                                           value=<?php echo $ship_name; ?>>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td>
                                                                <div align="left" class="style3">Sender's Phone :</div>
                                                            </td>

                                                            <td>
                                                                <div align="left" class="style3">

                                                                    <input name="Shipperphone" type="text"
                                                                           value=<?php echo $phone; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>

                                                            <td>
                                                                <div align="left" class="style3">Sender's Address :
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div align="left" class="style3">
                                                                    <input name="Shipperaddress" type="text"
                                                                           value=<?php echo $s_add; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </td>

                                            <td class="Partext1" bgcolor="#FFFFFF">
                                                <div align="center">

                                                    <table border="0" cellpadding="1" cellspacing="1" width="80%">

                                                        <tbody>
                                                        <tr>

                                                            <td width="55%" class="style3">
                                                                <div align="left">Receiver's Name :</div>
                                                            </td>

                                                            <td width="45%" class="style3">
                                                                <div align="left"><input name="Receivername" type="text"
                                                                                         value=<?php echo $rev_name; ?>>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td class="style3">
                                                                <div align="left">Receiver's Phone :</div>
                                                            </td>

                                                            <td class="style3">
                                                                <div align="left">
                                                                    <input name="Receiverphone" type="text"
                                                                           value=<?php echo $r_phone; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>

                                                            <td class="style3">
                                                                <div align="left">Receiver's Address :</div>
                                                            </td>

                                                            <td class="style3">
                                                                <div align="left">
                                                                    <input name="Receiveraddress" type="text"
                                                                           value=<?php echo $r_add; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

                                            <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment
                                                No :
                                            </td>

                                            <td class="style3" bgcolor="#FFFFFF" width="394"><font
                                                        color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type :</td>

                                            <td class="style3" bgcolor="#FFFFFF">
                                                <select id="Shiptype" name="Shiptype">
                                                    <option value="<?php echo $type; ?>"
                                                            selected="selected"><?php echo $type; ?></option>
                                                    <option value="Regular mail" selected="selected">Regular mail
                                                    </option>
                                                    <option value="Property titles">Property titles</option>
                                                    <option value="Bank securities">Bank Securities</option>
                                                    <option value="Pharmaceutical products">Pharmaceutical products
                                                    </option>
                                                    <option value="Ordinary packages">Ordinary Packages</option>
                                                    <option value="Parcel">Parcel</option>
                                                    <option value="Computer hardware">Computer Hardware</option>
                                                    <option value="Laptop">Laptop</option>
                                                    <option value="Portable Tablet">Portable Tablet</option>
                                                    <option value="Portable ipad">Portable ipad</option>
                                                    <option value="Cell phone">Cell phone</option>
                                                    <option value="Accessories">Accessories</option>

                                                </select>&nbsp;
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right">Weight :</td>

                                            <td class="style3" bgcolor="#FFFFFF"><input name="Weight" type="text"
                                                                                        value=<?php echo $weight; ?>>&nbsp;kg
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#F3F3F3" align="right">Invoice no :</td>

                                            <td class="style3" bgcolor="#FFFFFF"><input name="Invoiceno" type="text"
                                                                                        value=<?php echo $invice_no; ?>>&nbsp;
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>
                                            <td class="style3" bgcolor="#FFFFFF">
                                                <select name="Bookingmode" id="Bookingmode">
                                                    <option selected="selected"
                                                            value="<?php echo $book_mode; ?>"><?php echo $book_mode; ?></option>
                                                    <option value="Paid">Paid</option>
                                                    <option value="ToPay">ToPay</option>
                                                    <option value="TBB">TBB</option>
                                                </select>&nbsp;
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#F3F3F3" align="right">Total freight :</td>

                                            <td class="style3" bgcolor="#FFFFFF"><input name="Totalfreight" type="text"
                                                                                        value=<?php echo $freight; ?>>&nbsp;Rs.
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#F3F3F3" align="right">Mode :</td>

                                            <td class="style3" bgcolor="#FFFFFF">
                                                <select name="Mode" id="Mode">
                                                    <option selected="selected"
                                                            value="<?php echo $mode; ?>"><?php echo $mode; ?></option>
                                                    <option value="Air">Air</option>
                                                    <option value="Road">Road</option>
                                                    <option value="Train">Train</option>
                                                    <option value="Sea">Sea</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date :</td>

                                            <td class="style3" bgcolor="#FFFFFF">
                                                <input name="Packupdate" id="Packupdate" readonly="True"
                                                       style="cursor: text;"
                                                       onClick="ds_sh(this);" maxlength="15" type="TEXT"
                                                       value="<?php echo $pick_date; ?>">
                                                <span class="REDLink">*</span>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Time :</td>

                                            <td class="style3" bgcolor="#FFFFFF">
                                                <input name="Pickuptime" id="Pickuptime" maxlength="50" size="20"
                                                       type="TEXT"
                                                       value="<?php echo $pick_time; ?>">
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td>

                                            <td class="style3" bgcolor="#FFFFFF">&nbsp;<select name="status">
                                                    <option value="<?php echo $status; ?>"
                                                            selected="selected"><?php echo $status; ?></option>
                                                    <option value="Landed">Sent</option>
                                                    <option value="In Transit">In Transit</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Canceled">Canceled</option>
                                                    <option value="Completed">Delivered</option>
                                                    <option value="Onhold">Received</option>
                                                </select>

                                            </td>
                                        </tr>


                                        <tr>

                                            <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :
                                            </td>

                                            <td class="style3" bgcolor="#FFFFFF">&nbsp;<textarea name="comments"
                                                                                                 cols="40" rows="3"
                                                                                                 id="comments"><?php echo $comments; ?></textarea>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

                                            <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

<!--                                                <input class="btn btn-success btn-" name="submit" value="Update Shipment" type="submit">-->
                                                <button type="submit" class="btn btn-success notika-btn-success" name="submit">Update Shipment</button>
                                                <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

                                                <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>"
                                                       type="hidden"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>

  </span>

                                <form action="process.php?action=update-status" method="post" name="frmShipment"
                                      id="frmShipment">
                                    <hr>
                                    <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

                                        <tbody>
                                        <tr>

                                            <td colspan="3" bgcolor="#FFFFFF" align="right">
                                                <div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
                                        </tr>

                                        <tr>

                                            <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">New
                                                Location:
                                            </td>

                                            <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

                                                <select name="OfficeName">
                                                    <?php
                                                    while ($data = dbFetchAssoc($result_1)) {
                                                        ?>
                                                        <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
                                                        <?php
                                                    }//while
                                                    ?>
                                                </select></td>
                                        </tr>

                                        <tr>

                                            <td class="Partext1" bgcolor="#FFFFFF" align="right">New Status:</td>

                                            <td class="Partext1" bgcolor="#FFFFFF" width="26%">


                                                <select name="status">
                                                    <option value="Landed">Sent</option>
                                                    <option value="In Transit">In Transit</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Canceled">Canceled</option>
                                                    <option value="Completed">Delivered</option>
                                                    <option value="Onhold">Received</option>
                                                </select>

                                                <br></td>

                                            <td class="Partext1" bgcolor="#FFFFFF" width="58%">
                                                <div align="center" style="padding-bottom: 2px;">
                                                    <a href="process.php?action=delivered&cid=<?php echo $cid; ?>">
                                                        <button type="submit" class="btn btn-danger btn-sm" name="submit">Mark as delivered</button>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td bgcolor="#FFFFFF" align="right"><span class="Partext1">Comments:</span>
                                            </td>

                                            <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
                                                <textarea name="comments" cols="70" rows="3" id="comments"></textarea>
                                            </td>
                                        </tr>


                                        <tr>

                                            <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

                                            <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

<!--                                                <input name="submit" value="Submit" type="submit">-->
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                                                <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

                                                <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>"
                                                       type="hidden"></td>
                                        </tr>

                                        <tr>

                                            <td colspan="3" bgcolor="#FFFFFF" align="right">
                                                <div align="center">


                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <br>

                                </form>
                            </td>

                        </tr>


                        </tbody>
                    </table>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
?>
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
</body>

</html>