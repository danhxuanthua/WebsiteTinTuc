<?php 	
	require '../database/database.php';
	db_connect();
	require '../session/session.php';
	session_start();
?>
<?php

	if (isset($_POST['dangki'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password= md5($_POST['password']);
		$passwordAgain = md5($_POST['passwordAgain']);

		$sql_dangKi = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES (NULL,'$name','$email','$password',CURRENT_TIMESTAMP,NULL)";
		
		//kiem tra email da ton tai
		$sql_getEmail = "SELECT `email` FROM `users` WHERE `email`='$email'";
		$data_email = db_get_row($sql_getEmail);

		if (empty($data_email) && $password == $passwordAgain && !empty($password) && !empty($passwordAgain) && !empty($name) && !empty($email)) {
			//thuc thi dang ki
			db_execute($sql_dangKi);

			session_set('dangKiThanhCong', '<div class="alert alert-success">Đăng kí thành công </div>');
			session_delete('dangKiThatBai');
			header('Location: ../../system/dangki.php');
		}else{
			session_set('dangKiThatBai', '<div class="alert alert-danger"> Đăng kí thất bại. Vui lòng kiểm tra lại thông tin! </div>');
			session_delete('dangKiThanhCong');
			header('Location: ../../system/dangki.php');
		}
	
	}

?>