<?php
// ---------------------- database connection config
//$dbHost = 'localhost';
//$dbUser = 'sageacad';
//$dbPass = 'Academia@2020';
//$dbName = 'sageacad_courier_db';

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'sageacad_courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQLi connect failed. ' . mysqli_error($dbConn));
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error($dbConn));

function dbQuery($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn,$sql) or die(mysqli_error($dbConn));
	return $result;
}
function dbQueryIdBack($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn,$sql) or die(mysqli_error($dbConn));
	if ($result){
        $last_id = mysqli_insert_id($dbConn);
        return $last_id;
    }else{
        return mysqli_error($dbConn);
    }
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result) {
	return mysqli_fetch_array($result);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysqli_select_db($dbName);
}

function dbInsertId()
{
	return mysqli_insert_id();
}
?>