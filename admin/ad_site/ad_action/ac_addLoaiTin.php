<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if(isset($_POST['them'])){
		$idTheLoai = $_POST['idTheLoai'];
		$tenLoaiTin = $_POST['tenLoaiTin'];
		$tenKhongDau = $_POST['tenKhongDau'];

		$sql_insertLoaiTin = "INSERT INTO `loaitin`(`id`, `idTheLoai`, `Ten`, `TenKhongDau`, `created_at`, `updated_at`) VALUES (NULL,'$idTheLoai','$tenLoaiTin','$tenKhongDau',CURRENT_TIMESTAMP,NULL)";
		if(!empty($idTheLoai) && !empty($tenLoaiTin) && !empty($tenKhongDau)){
			//them thanh cong
			db_execute($sql_insertLoaiTin);
			session_set('themLoaiTin', '<div class="alert alert-success">Đã thêm một loại tin!</div>');
			header('location: ../../ad_system/loaiTin.php');
		}else{
			//Them that bai
			session_set('themLoaiTin', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addLoaiTin.php');
		}

	}
?>