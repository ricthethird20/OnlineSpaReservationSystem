<?php
if(!class_exists('Database')) {
    require_once('database.php');
}
$db = new Database();
$db = $db->connect();

function saveProduct($prodName){
	global $db;
	$sql = "INSERT into pasithea_products(ProductName) values('$prodName')";
	$db->query($sql) or die(mysqli_error($db));
	echo "<script>location.href = 'index.php?page=products';</script>";
}

function getProducts(){
	$q = "SELECT * from pasithea_products";
	return s2_query($q);
}

function getProductById($id){
	$q = "SELECT * from pasithea_products where prodId = $id";
	return s2_query($q);
}

function deleteProduct($id){
	global $db;
	$sql = "DELETE from pasithea_products where prodId = $id";
	$db->query($sql) or die(mysqli_error($db));
}

function s2_query($sql){
	
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