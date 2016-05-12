<?php
	switch($page){
		case 'home':
			include_once('home.php');
			break;
		case 'abt':
			include_once('about.php');
			break;
		case 'svc':
			include_once('services.php');
			break;
		case 'ctc':
			include_once('contact.php');
			break;
		case 'book':
			$svc_id = $_GET['svcId'];
			include_once('book.php');		
			break;
	}
?>