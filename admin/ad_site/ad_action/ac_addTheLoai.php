<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>

<?php 
	if (isset($_POST['them'])) {
		$ten = $_POST['ten'];
		$tenKhongDau = $_POST['tenKhongDau'];

		// sql insert
		$sql_insertTheLoai = "INSERT INTO `theloai`(`id`, `Ten`, `TenKhongDau`, `created_at`, `updated_at`) VALUES (NULL,'$ten','$tenKhongDau',CURRENT_TIMESTAMP,NULL)";

		if(!empty($ten) && !empty($tenKhongDau)){
			//them thanh cong
			db_execute($sql_insertTheLoai);
			session_set('themTheLoaiThanhCong', '<div class="alert alert-success">Đã thêm một thể loại!</div>');
			header('location: ../../ad_system/theLoai.php');
		}else{
			//Them that bai
			session_set('themTheLoaiThatBai', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addTheLoai.php');
		}

	}
	
?>