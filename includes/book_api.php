<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

function checkAvailableBooking($dt,$str,$end){
	$q = "SELECT bookId FROM pasithea_bookings 
	WHERE book_date = '$dt' 
	AND ((book_starttime BETWEEN $str AND $end) 
	OR (book_endtime BETWEEN $str AND $end))
	AND status IN('Pending','Book')";
	return s_query($q);
}

function getBookingsFor($id){
	$q = "SELECT b.*,s.service_name FROM pasithea_bookings b
	INNER JOIN pasithea_services s ON b.svc_id = s.id
	WHERE b.user_id = $id
	ORDER BY b.book_date DESC";
	return s_query($q);
}

function getBookings(){
	$q = "SELECT b.*,s.service_name,a.Lastname,a.FirstName 
	FROM pasithea_bookings b
	INNER JOIN pasithea_services s ON b.svc_id = s.id
	INNER JOIN pasithea_account a ON s.user_id = a.userId
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