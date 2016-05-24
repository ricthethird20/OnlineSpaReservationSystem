<?php
	header("Content-type: application/json");
	echo "<script>alert('panget');</script>";
	require_once("book_api.php");
	$dt = $_POST['dt'];
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];
	$result = checkAvailableBooking($dt,$startTime,$endTime);
	$response = [];
	if ($result ) {
		$response["status"] = "success";				
	} else {
		$response["status"] = "none";
	}
	print json_encode($response);
?>