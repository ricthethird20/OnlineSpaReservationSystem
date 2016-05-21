<?php
header("Content-type: application/json");
require_once("services_api.php");

$id = $_POST['id'];
$result = deleteService($id);
$response = [];
if ($result ) {
	$response["status"] = "success";				
} else {
	$response["message"] = "$db->error";
}
print json_encode($response);
?>