<?php
include_once('database.php');

$db = new Database();
$db = $db->connect();

function isUserExist($username,$pwd){
	
	global $db;
	$hashed = md5($pwd);
	$sql = "SELECT userId FROM pasithea_users WHERE userName = '$userName' and passWord = '$hashed'";
	$result = $db->query($sql);
	if ( !$result || $result->num_rows == 0 ) {
		return false;
	}	
	$rows = array();
	while( $r = $result->fetch_object() ) {
		$rows[] = $r;
	}	
	return $rows;
}
?>