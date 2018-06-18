<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if(isset($_GET['id'])){
		$idLoaiTin = $_GET['id'];
		$sql_deleteLoaiTin = "DELETE FROM `loaitin` WHERE `id`='$idLoaiTin'";
		db_execute($sql_deleteLoaiTin);

		// dieu huong sang trang loai tin
		session_set('xoaLoaiTin', '<div class="alert alert-success">Đã xóa một loại tin!</div>'); 
		header('location:  ../../ad_system/loaiTin.php');

	}
?>