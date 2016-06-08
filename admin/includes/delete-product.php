<?php
header("Content-type: application/json");
require_once("product_api.php");

$id = $_POST['id'];
$result = deleteProduct($id);
$response = [];
if ($result ) {
	$response["status"] = "success";				
} else {
	$response["message"] = "$db->error";
}
print json_encode($response);
?>