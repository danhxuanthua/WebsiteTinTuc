<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if(isset($_POST['dangNhap'])){

		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sql_user = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND `lever`=1";
		$data_user = db_get_row($sql_user);

		if (empty($data_user)) {
			
			//dang nhap that bai
			session_set('ad_dangNhapThatBai', '<div class="alert alert-danger"> Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại </div>');
			header('location: ../../ad_system/login.php');
			
		}else{

			//dang nhap thanh cong
			session_set('ad_dangNhapThanhCong', '
					<li>
                    	<a href="">
                            <span class ="glyphicon glyphicon-user"> </span> '.$data_user['name'].'
                    	</a>
                    </li>

                    <li>
                    	<a href="../ad_site/ad_action/ac_dangXuat.php"> <span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
                    </li>');

			session_set('id_user', $data_user['id']);
			header('location: ../../ad_system/index.php');

		}

	}
	
?>
