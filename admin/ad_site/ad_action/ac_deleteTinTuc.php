<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		//delete slider
		$sql_deleteTinTuc = "DELETE FROM `tintuc` WHERE `id` = '$id'";
		db_execute($sql_deleteTinTuc);

		//dieu huong sang trang slier
		session_set('xoaTinTuc', '<div class="alert alert-success">Đã xóa một bản tin!</div>'); 
		header('location:  ../../ad_system/tinTuc.php');
	}

?>