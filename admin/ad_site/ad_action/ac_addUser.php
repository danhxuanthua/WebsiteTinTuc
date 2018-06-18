<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>

<?php 
	if (isset($_POST['them'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$passWord = md5($_POST['password']);
		$lever = $_POST['lever'];

		$sql_insertUser = "INSERT INTO  `users`(`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `lever`) VALUES (NULL,'$name','$email','$passWord',CURRENT_TIMESTAMP,NULL,'$lever')";

		//kiem tra email da ton tai
		$sql_getEmail = "SELECT `email` FROM `users` WHERE `email`='$email'";
		$data_email = db_get_row($sql_getEmail);

		if(empty($data_email) && !empty($name) && !empty($email) && !empty($passWord) && !empty($passWord)){
			//thuc thi
			db_execute($sql_insertUser);
			session_set('themUserThanhCong', '<div class="alert alert-success">Đã thêm một user thành công!</div>');
			header('location: ../../ad_system/users.php');

		}else{
			//Them that bai
			session_set('themUserThatBai', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addUser.php');
		}
	}
?>