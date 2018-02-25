<?php
	$user = $_POST;
	echo header('Content-Type: application/json');
	echo http_response_code(202);
	echo json_encode($user);
?>
