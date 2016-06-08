<?php
error_reporting(0);
include_once('includes/misc_api.php');
include_once('includes/services_api.php');
if(!empty($_POST['hidden_id'])){
	$svcId = $_POST['hidden_id'];
	deleteService($svcId);	
	saveServiceFunc();
}else{
	saveServiceFunc();
}
echo "<script>setTimeout(\"location.href = 'index.php?page=svcs';\",300);</script>";

function saveServiceFunc(){
	$svcName = $_POST['serviceName'];
	$svcDetail = $_POST['serviceDetails'];
	$svcCost = $_POST['serviceCost'];
	$svcDisc = $_POST['serviceDisc'];
	$featured = $_POST['radButton'];

	$target_dir = "assets/img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	if($target_dir == $target_file){
		$target_file = $target_dir ."noImage.png";
		
	}
		
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			alert("File is not an image. File was not uploaded.");
			$uploadOk = 0;
		}
		saveServices($target_file,$svcName,$svcDetail,$svcCost,$featured,$svcDisc);
	}
	// Check if file already exists
	/*if (file_exists($target_file)) {
		alert("Sorry, file already exists.");
		exit;
		$uploadOk = 0;
	}*/
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000 && $uploadOk == 1) {
		alert("Sorry, your file is too large. File was not uploaded.");
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $uploadOk == 1) {
		alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed. File was not uploaded.");
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk != 0) {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
<<<<<<< HEAD
			//alert("New service added. ");
		} else {
			alert("Sorry, there was an error uploading your file.");
=======
			alert("New service added/modified. ");
>>>>>>> 9f4e26564ba13cae46c8080856a96b7d9725d7f4
		}
	}
	echo "<script>document.getElementById('save_prods').click();</script>";
	
}
?> 