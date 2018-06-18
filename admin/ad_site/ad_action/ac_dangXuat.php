<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 

	session_start();
	session_destroy();
	
	header('location: ../../ad_system/login.php');

?>