<?php
header("Content-type: application/json");
require_once("book_api.php");

$id = $_POST['bookId'];
$status = $_POST['status'];
$result = updateBooking($id,$status);
$response = [];
if ($result ) {
	$response["status"] = "ok";				
} else {
	$response["status"] = "error";
}
print json_encode($response);
?>