<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if (isset($_GET['id'])) {
		
		$idTheLoai = $_GET['id'];

		//delete loai tin
		$sql_deleteLoaiTin = "DELETE FROM `loaitin` WHERE `idTheLoai` = $idTheLoai";
		db_execute($sql_deleteLoaiTin);

		//delete the loai
		$sql_deleteTheLoai = "DELETE FROM `theloai` WHERE `id`= $idTheLoai";
		db_execute($sql_deleteTheLoai);

		//dieu huong sang trang user
		session_set('xoaTheLoai', '<div class="alert alert-success">Đã xóa một thể loại!</div>'); 
		header('location:  ../../ad_system/theLoai.php');
	}

?>