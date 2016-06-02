<?php
header("Content-type: application/json");
require_once("services_api.php");

$svcName = $_POST['svcName'];
$prodId = $_POST['prodId'];
$qty = $_POST['qty'];

$result = saveProductsToService($svcName,$prodId,$qty);
$response = [];
if ($result ) {
	$response["status"] = "success";				
} else {
	$response["message"] = "$db->error";
}
print json_encode($response);
?>