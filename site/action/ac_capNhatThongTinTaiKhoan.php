<?php require '../database/database.php'; db_connect(); require '../session/session.php'; session_start(); ?>

<?php
    //xu ly hien thi thong tin tai khoan 
    $id_user = session_get('id_user');
    $sql_user = "SELECT * FROM `users` WHERE `id`= $id_user";
    $data_user = db_get_row($sql_user);
?>

<?php
	

	if (isset($_POST['sua'])) {
		$name = $_POST['name'];
		$email =  $data_user['email'];
		$passWord = md5($_POST['password']);
		$passWordAgain = md5($_POST['passwordAgain']);
		
		//update name
		if(!empty($name)){
			
			$sql_updateUser_name = "UPDATE `users` SET `name`='$name',`updated_at`=CURRENT_TIMESTAMP WHERE `email` = '$email'";
			db_execute($sql_updateUser_name);
			session_set('capNhatTaiKhoan', '<div class="alert alert-success">Thông tin tài khoản đã được cập nhât ! </div>');
			header('location: ../../system/taikhoan.php');

		}else{
			header('location: ../../system/taikhoan.php');
		}
		
		//update pass
		if(isset($_POST['checkpassword']) && $passWord == $passWordAgain && !empty($passWord) && !empty($passWordAgain)){
			
			$sql_update_passWord = "UPDATE `users` SET `password`='$passWord',`updated_at`=CURRENT_TIMESTAMP WHERE `email` = '$email'";
			db_execute($sql_update_passWord);
			session_set('capNhatTaiKhoan', '<div class="alert alert-success">Thông tin tài khoản đã được cập nhât ! </div>');

		}else if(isset($_POST['checkpassword'])){
			session_set('capNhatTaiKhoan', '<div class="alert alert-danger"> Mật khẩu không khớp. Vui lòng kiểm tra lại! </div>');
			header('location: ../../system/taikhoan.php');
		}


	}
?>