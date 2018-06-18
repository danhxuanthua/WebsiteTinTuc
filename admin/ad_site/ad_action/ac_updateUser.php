<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if(isset($_POST['capnhat'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$passWord = md5($_POST['password']);
		$lever = $_POST['lever'];

		//cap nhat
		$sql_updateUser = "UPDATE `users` SET `name`='$name',`password`='$passWord',`lever` = $lever, `updated_at`=CURRENT_TIMESTAMP WHERE `email` = '$email'";
		
		if(!empty($name) && !empty($_POST['password'])){
			db_execute($sql_updateUser);
			session_set('capNhatTaiKhoan', '<div class="alert alert-success">Thông tin tài khoản đã được cập nhật ! </div>');
			header('location: ../../ad_system/users.php');
		}else{
			session_set('capNhatTaiKhoan', '<div class="alert alert-danger"> Lỗi: Vui lòng kiểm tra lại! </div>');
			header('location: ../../ad_system/users.php');
		}
	}	

?>