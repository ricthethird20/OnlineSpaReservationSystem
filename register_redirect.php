<?php
include_once("includes/useraccount_api.php");
$lname =  $_POST['signup-lastname'];
$fname = $_POST['signup-firstname'];
$mobile = $_POST['signup-contact'];
$username = $_POST['signup-username'];
$password = $_POST['signup-password'];

saveUserAccount($username,$password);
session_start();
$_SESSION['userid'] = saveUserDetails($username,$password,$lname,$fname,$mobile);
$acct = getUserDetails($_SESSION['userid']);
	if($acct){
		foreach($acct as $acctId){
			$_SESSION['acctId'] = $acctId->acct_id;
		}
	}
header("Location: index.php");

?>