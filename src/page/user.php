<?php 
	require_once("../servers/users.php");
	$user = new User($pdo);
	echo json_encode($user->get_users());
?>