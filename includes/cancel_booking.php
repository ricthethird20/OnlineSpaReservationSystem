<?php
header("Content-type: application/json");
require_once("book_api.php");

$id = $_POST['bookId'];
$result = cancelBooking($id);
$response = [];
if ($result ) {
	$response["status"] = "ok";				
} else {
	$response["status"] = "error";
}
print json_encode($response);
?>