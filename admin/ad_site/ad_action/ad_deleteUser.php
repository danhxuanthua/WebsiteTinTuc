<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if (isset($_GET['id'])) {
		
		$idUser = $_GET['id'];

		//delete comment
		$sql_deleteComment = "DELETE FROM `comment` WHERE `idUser` = $idUser";
		db_execute($sql_deleteComment);

		//delete user
		$sql_deleteUser = "DELETE FROM `users` WHERE `id`= $idUser";
		db_execute($sql_deleteUser);

		//dieu huong sang trang user
		session_set('xoaTaiKhoan', '<div class="alert alert-success">Đã xóa một tài khoản !</div>'); 
		header('location:  ../../ad_system/users.php');
	}

?>