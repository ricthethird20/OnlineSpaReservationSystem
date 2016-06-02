<?php

include_once("includes/useraccount_api.php");
include_once("includes/misc_api.php");
$username = $_POST['signin-username'];
$password = $_POST['signin-password'];

session_start();
if(!isUserExist($username,$password)){
	alert('No user found');
}else{
	$result = isUserExist($username,$password);
	foreach($result as $rows){		
		$_SESSION['userid'] = $rows->userId;
	}
	$acct = getUserDetails($_SESSION['userid']);
	if($acct){
		foreach($acct as $acctId){
			$_SESSION['acctId'] = $acctId->acct_id;
		}
	}
	
	header("Location: index.php");
}

?>