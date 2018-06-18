<?php 

	require '../session/session.php';
	session_start();
	session_destroy();
	
	header('location: ../../system/index.php')

?>