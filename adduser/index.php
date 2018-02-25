<?php
	$user = $_POST;
	header('Content-Type: application/json');
	echo json_encode($user);
?>
