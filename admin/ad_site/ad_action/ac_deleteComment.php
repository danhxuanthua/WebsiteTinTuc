<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if (isset($_GET['idTinTuc'])) {
		
		$idTinTuc = $_GET['idTinTuc'];

		//delete comment
		$sql_deleteComment = "DELETE FROM `comment` WHERE `idTinTuc` = $idTinTuc";
		db_execute($sql_deleteComment);

		//dieu huong sang trang user
		session_set('xoaComment', '<div class="alert alert-success">Đã xóa một tài khoản !</div>'); 
		header('location:  ../../ad_system/comment.php');
	}

?>