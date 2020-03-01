<?php
//start session
session_start();

require_once('database.php');

$action = $_GET['action'];

switch ($action) {
    case 'add-cons':
        addCons();
        break;

    case 'delivered':
        markDelivered();
        break;

    case 'add-office':
        addNewOffice();
        break;

    case 'add-manager':
        addManager();
        break;

    case 'update-status':
        updateStatus();
        break;

    case 'update-shipment':
        updateShipment();
        break;

    case 'change-pass':
        changePass();
        break;

    case 'logOut':
        logOut();
        break;

    case 'print':
        printer();
        break;

}//switch

function addCons()
{

    $Shippername = $_POST['Shippername'];
    $Shipperphone = $_POST['Shipperphone'];
    $Shipperaddress = $_POST['Shipperaddress'];

    $Receivername = $_POST['Receivername'];
    $Receiverphone = $_POST['Receiverphone'];
    $Receiveraddress = $_POST['Receiveraddress'];

    $ConsignmentNo = $_POST['ConsignmentNo'];
    $zone = $_POST['zone'];
    $Shiptype = $_POST['Shiptype'];
    $service = $_POST['service'];
    $Weight = $_POST['Weight'];
    $Invoiceno = $_POST['Invoiceno'];
    $Qnty = $_POST['Qnty'];

    $Bookingmode = $_POST['Bookingmode'];
    $Totalfreight = $_POST['Totalfreight'];
    $Mode = $_POST['Mode'];


    $Packupdate = $_POST['Packupdate'];
    $Pickuptime = $_POST['Pickuptime'];
    $status = $_POST['status'];
    $Comments = $_POST['Comments'];

    $px = 0;

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

    $sql = "INSERT INTO tbl_courier (cons_no, ship_name, phone, s_add, rev_name, r_phone, r_add, zone, type, service, weight, invice_no, qty, book_mode, freight, mode, pick_date, pick_time, price, status, comments, book_date )
			VALUES('$ConsignmentNo', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername','$Receiverphone','$Receiveraddress', '$zone', '$Shiptype', '$service', $Weight , '$Invoiceno', $Qnty, '$Bookingmode', '$Totalfreight', '$Mode', '$Packupdate', '$Pickuptime', '$px', '$status', '$Comments', NOW())";


    if (isset($_POST['print'])){
        $last_id = dbQueryIdBack($sql);
        header('Location: invoice.php?cid='.$last_id);
    }else{
        dbQuery($sql);
        header('Location: shipments.php');
    }

//    print_r($reslt);
}//addCons

function markDelivered()
{
    $cid = (int)$_GET['cid'];
    $sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
    dbQuery($sql);
    header('Location: delivered-success.php');

}//markDelivered();

function addNewOffice()
{

    $OfficeName = $_POST['OfficeName'];
    $OfficeAddress = $_POST['OfficeAddress'];
    $City = $_POST['City'];
    $PhoneNo = $_POST['PhoneNo'];
    $OfficeTiming = $_POST['OfficeTiming'];
    $ContactPerson = $_POST['ContactPerson'];

    $sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
    dbQuery($sql);
    header('Location: office-add-success.php');
}//addNewOffice

function addManager()
{

    $ManagerName = $_POST['ManagerName'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $PhoneNo = $_POST['PhoneNo'];
    $OfficeName = $_POST['OfficeName'];

    $sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
    dbQuery($sql);
    header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus()
{

    $OfficeName = $_POST['OfficeName'];
    $status = $_POST['status'];
    $comments = $_POST['comments'];
    $cid = (int)$_POST['cid'];
    $cons_no = $_POST['cons_no'];
    //$OfficeName = $_POST['OfficeName'];

    $sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, status, comments, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', NOW())";
    dbQuery($sql);

    $sql_1 = "UPDATE tbl_courier 
				SET status = '$status' 
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
    dbQuery($sql_1);

    header('Location: shipments.php');

}//addNewOffice

function updateShipment()
{

    $Shippername = $_POST['Shippername'];
    $Shipperphone = $_POST['Shipperphone'];
    $Shipperaddress = $_POST['Shipperaddress'];

    $Receivername = $_POST['Receivername'];
    $Receiverphone = $_POST['Receiverphone'];
    $Receiveraddress = $_POST['Receiveraddress'];

    //$ConsignmentNo = $_POST['ConsignmentNo'];
    //$zone = $_POST['zone'];
    $Shiptype = $_POST['Shiptype'];
    //$service = $_POST['service'];
    $Weight = $_POST['Weight'];
    $Invoiceno = $_POST['Invoiceno'];
    //$Qnty = $_POST['Qnty'];

    $Bookingmode = $_POST['Bookingmode'];
    $Totalfreight = $_POST['Totalfreight'];
    $Mode = $_POST['Mode'];


    $Packupdate = $_POST['Packupdate'];
    $Pickuptime = $_POST['Pickuptime'];
    $status = $_POST['status'];
    $Comments = $_POST['comments'];

    $cid = (int)$_POST['cid'];
    $cons_no = $_POST['cons_no'];

    //$book_date = NOW();
    $sql_2 = "UPDATE tbl_courier 
				SET ship_name ='$Shippername' , phone ='$Shipperphone', s_add ='$Shipperaddress', rev_name ='$Receivername', r_phone ='$Receiverphone', r_add ='$Receiveraddress', type ='$Shiptype', weight ='$Weight', invice_no ='$Invoiceno', book_mode ='$Bookingmode', freight ='$Totalfreight', mode= '$Mode', pick_date = '$Packupdate', pick_time ='$Pickuptime', status = '$status', comments ='$Comments'
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
    dbQuery($sql_2);

    header('Location: shipments.php');


}//updteShipment


function logOut()
{
    if (isset($_SESSION['user_name'])) {
        unset($_SESSION['user_name']);
    }
    if (isset($_SESSION['user_type'])) {
        unset($_SESSION['user_type']);
    }
    session_destroy();
    header('Location: login.php');
}//logOut


function printer()
{

    if (isset($_POST['submit'])) {

        $Shippername = $_GET['Shippername'];
        $Shipperphone = $_GET['Shipperphone'];
        $Shipperaddress = $_GET['Shipperaddress'];

        $Receivername = $_GET['Receivername'];
        $Receiverphone = $_GET['Receiverphone'];
        $Receiveraddress = $_GET['Receiveraddress'];

        $ConsignmentNo = $_GET['ConsignmentNo'];
        $Shiptype = $_GET['Shiptype'];
        $Weight = $_GET['Weight'];
        $Invoiceno = $_GET['Invoiceno'];
        $Qnty = $_GET['Qnty'];

        $Bookingmode = $_GET['Bookingmode'];
        $Totalfreight = $_GET['Totalfreight'];
        $Mode = $_GET['Mode'];


        $Packupdate = $_GET['Packupdate'];
        $Pickuptime = $_GET['Pickuptime'];
        $status = $_GET['status'];
        $Comments = $_GET['Comments'];

        require("fpdf/fpdf.php");
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 10, "Invoice", 1, 1, 'C');

        $pdf->Cell(50, 10, "Shippername :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Shipperphone :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Shipperaddress :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Receivername :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Receiverphone :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Receiveraddress :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "ConsignmentNo :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Shiptype :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Weight :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Invoiceno :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Qnty :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Bookingmode :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Totalfreight :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Mode :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Packupdate :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Pickuptime :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Status :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->Cell(50, 10, "Comments :", 1, 0);
        //$pdf ->Cell(50,10,$Shippername ,1,0);

        $pdf->output();
    }

}

?>