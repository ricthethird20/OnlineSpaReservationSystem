<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

function saveBookings($svc_id,$user_id,
			$book_date,$book_starttime,$book_endtime,$status){
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