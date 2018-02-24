<?php

if(empty($_POST)) {

	header('Content-Type: application/json');
	$data = '{"email":"samson.leung@stonybrook.edu","key":"abracadabra"}';
	echo ($data);

}else {
	$user = $_POST['jsonData'];
	echo json_encode($user);
}

?>
