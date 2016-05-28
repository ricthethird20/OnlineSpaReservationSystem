<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

function getAllAccountInfo(){
	$q = "Select * from pasithea_account order by Lastname";
	return s_query($q);
}

function addClientAccount($lname,$fname,$contact){
	global $db;
	$q = "INSERT into pasithea_account(Lastname,FirstName,Mobile) VALUES ('$lname','$fname','$contact')";
	$db->query($q) or die(mysqli_error($db));
	echo "<script>location.href = 'index.php?page=client';</script>";
}

function deleteAccount($id){
	global $db;
	$q = "DELETE FROM pasithea_account WHERE acct_id = $id";
	$db->query($q) or die(mysqli_error($db));
}

function s_query($sql){
	
	global $db;
	$result = $db->query($sql) or die(mysqli_error($db));
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