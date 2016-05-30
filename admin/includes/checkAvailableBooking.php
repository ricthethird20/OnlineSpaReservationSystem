<?php
header("Content-type: application/json");
require_once("book_api.php");

$dt = $_POST['dt'];
$strTime = $_POST['startTime'];
$endTime = $_POST['endTime'];
$result = checkAvailableBooking($dt,$strTime,$endTime);
$response = [];
if ($result ) {
	$response["status"] = "exist";				
} else {
	$response["status"] = "ok";
}
print json_encode($response);
?>