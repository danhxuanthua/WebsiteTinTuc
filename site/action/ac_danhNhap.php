<?php require '../database/database.php'; db_connect();  
		require '../session/session.php'; session_start();			
?>
<?php
	if (isset($_POST['dangNhap'])) {

		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql_user = "SELECT *  FROM `users` WHERE `email`='$email' AND `password`='$password'";
		$data_user = db_get_row($sql_user);

		if (empty($data_user)) {
			//dang nhap that bai
			session_set('dangNhapThatBai', '<div class="alert alert-danger"> Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại </div>');
			header('location: ../../system/dangnhap.php');
			
		}else{
			//dang nhap thanh cong
			session_set('dangNhapThanhCong', '
					<li>
                    	<a href="../system/taikhoan.php">
                            <span class ="glyphicon glyphicon-user"> '.$data_user['name'].'</span>
                    	</a>
                    </li>

                    <li>
                    	<a href="../site/action/ac_dangXuat.php">Đăng xuất</a>
                    </li>');

			session_delete('dangKi_dangNhap');
			session_delete('loiCmt');
			session_set('id_user', $data_user['id']);
			header('location: ../../system/index.php');
		}

	}

?> 
	