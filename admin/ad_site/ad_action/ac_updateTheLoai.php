<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 

	if (isset($_POST['capNhat'])) {
		$id = $_POST['id'];
		$ten = $_POST['tenTheLoai'];
		$tenKhongDau = $_POST['tenKhongDau'];

		//sql update the loai
		$sql_updateTheLoai = "UPDATE `theloai` SET `Ten`='$ten',`TenKhongDau`='$tenKhongDau',`updated_at`=CURRENT_TIMESTAMP WHERE `id`='$id'";
		if (!empty($id) && !empty($ten) && !empty($tenKhongDau)) {
			db_execute($sql_updateTheLoai);
			session_set('capNhatTheLoai', '<div class="alert alert-success">Thông tin tài khoản đã được cập nhật ! </div>');
			header('location: ../../ad_system/theLoai.php');
		}else{
			session_set('capNhatTheLoai', '<div class="alert alert-danger"> Lỗi: Vui lòng kiểm tra lại! </div>');
			header('location: ../../ad_system/theLoai.php');
		}

	}
?>