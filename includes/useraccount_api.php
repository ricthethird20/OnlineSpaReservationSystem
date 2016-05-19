<?php
include_once('database.php');

$db = new Database();
$db = $db->connect();
global $userId;

//GET
function isUserExist($username,$pwd){
	
	$hashPw = md5($pwd);
	$sql = "SELECT userId FROM pasithea_users WHERE userName = '$username' and passWord = '$hashPw'";
	return query($sql);
}
function getUserDetails($userId){
	$sql = "SELECT * FROM pasithea_account WHERE userId = $userId";
	return query($sql);
}

function query($sql){
	
	global $db;
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

//SET
function saveUserAccount($username,$password){
	global $db;
	$hashPw = md5($password);
	$sql = "INSERT into pasithea_users(userName,passWord)
	values('$username','$hashPw')";
	$db->query($sql);
}

function saveUserDetails($username,$password,$lname,$fname,$mobile){
	$result = isUserExist($username,$password);
	foreach($result as $row){
		$userId = $row->userId;
	}
	global $db;
	$sql = "INSERT into pasithea_account(userId,Lastname,Firstname,Mobile)
	values($userId,'$lname','$fname','$mobile')";
	$db->query($sql);
	
	return $userId;
}
?>