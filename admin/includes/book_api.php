<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

function saveBookings($svc_id,$user_id,
			$book_date,$book_starttime,$book_endtime,$status,$client_type,$lname,$fname){
	global $db;
	$sql = "INSERT into pasithea_bookings(svc_id,user_id,
	book_date,book_starttime,book_endtime,status)
	values($svc_id,$user_id,'$book_date',$book_starttime,$book_endtime,'$status')";
	$db->query($sql) or die(mysqli_error($db));
}

function checkAvailableBooking($dt,$str,$end){
	$q = "SELECT bookId FROM pasithea_bookings WHERE book_date = '$dt' 
	AND ((book_starttime BETWEEN $str AND $end) OR (book_endtime BETWEEN $str AND $end))";
	return s_query($q);
}

function getBookings(){
	$q = "SELECT b.*,s.service_name,a.Lastname,a.FirstName 
	FROM pasithea_bookings b
	INNER JOIN pasithea_services s ON b.svc_id = s.id
	INNER JOIN pasithea_account a ON b.user_id = a.userId
	ORDER BY b.book_date DESC";
	return s_query($q);
}

function parseTime($tym){
	for($i = 1;$i < 5;$i++){
		if(strlen($tym) < $i)
			$tym = '0'.$tym;
	}
	return implode(":",str_split($tym,2));	
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