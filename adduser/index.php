<?php

if(empty($_POST)) {

	header('Content-Type: application/json');
	$data = '{ "username" : "sam", "password" : "1234", "email" : "samson.leung@stonybrook.edu"}';
	echo ($data);

}else {
	$user = $_POST['jsonData'];
	echo json_encode($user);
}

?>
