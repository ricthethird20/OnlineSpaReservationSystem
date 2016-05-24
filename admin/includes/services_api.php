<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

//GET
function getAllServices(){
	$sql = 'SELECT * from pasithea_services order by service_name';
	return squery($sql);
}

function getServices($svc_id){
	$sql = "SELECT * from pasithea_services where id like '$svc_id'";
	return squery($sql);
}

function squery($sql){
	
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

function deleteService($id){
	global $db;
	$sql = "DELETE from pasithea_services WHERE id = $id";
	return $db->query($sql);
}

function saveServices($img_url,$svc_name,
			$svc_details,$svc_cost,$feat,$disc){
	global $db;
	$sql = "INSERT into pasithea_services(image_url,service_name,
	service_details,service_cost,featured,discounted_price)
	values('$img_url','$svc_name','$svc_details','$svc_cost',$feat,'$disc')";
	$db->query($sql);
}

?>