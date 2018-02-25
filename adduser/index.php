<?php

if(empty($_POST)) {

	header('Content-Type: application/json');
	$data = '{"username":"sam","password":"123,"email":"samson.leung@stonybrook.edu"}';
	echo ($data);

}else {
	$user = $_POST['jsonData'];
	echo json_encode($user);
}

?>
