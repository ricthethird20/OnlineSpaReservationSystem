<?php
header("Content-type: application/json");
require_once("account_api.php");

$id = $_POST['id'];
$result = deleteAccount($id);
$response = [];
if ($result ) {
	$response["status"] = "success";				
} else {
	$response["message"] = "$db->error";
}
print json_encode($response);
?>