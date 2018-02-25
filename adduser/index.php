<?php
	$user = $_POST;
	header('Content-Type: application/json');
	http_response_code(202);
	echo json_encode($user);
?>
