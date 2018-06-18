<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if (isset($_GET['id'])) {
		
		$idSlider = $_GET['id'];

		//delete slider
		$sql_deleteSlier = "DELETE FROM `slide` WHERE `id` = '$idSlider'";
		db_execute($sql_deleteSlier);

		//dieu huong sang trang slier
		session_set('xoaSlider', '<div class="alert alert-success">Đã xóa một thể loại!</div>'); 
		header('location:  ../../ad_system/slider.php');
	}

?>