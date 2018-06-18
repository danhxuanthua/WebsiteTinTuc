<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php 
	if(isset($_POST['capNhat'])){
		$id = $_POST['id'];
		$idTheLoai = $_POST['idTheLoai'];
		$tenLoaiTin = $_POST['tenLoaiTin'];
		$tenKhongDau = $_POST['tenKhongDau'];

		$sql_updateLoaiTin = "UPDATE `loaitin` SET `idTheLoai`='$idTheLoai',`Ten`='$tenLoaiTin',`TenKhongDau`='$tenKhongDau',`updated_at`=CURRENT_TIMESTAMP WHERE `id`= '$id'";
		if (!empty($id) && !empty($idTheLoai) && !empty($tenLoaiTin) && !empty($tenKhongDau)) {
			db_execute($sql_updateLoaiTin);
			session_set('capNhatLoaiTin', '<div class="alert alert-success">Thông tin đã được cập nhật! </div>');
			header('location: ../../ad_system/loaiTin.php');
		}else{
			session_set('capNhatLoaiTin', '<div class="alert alert-danger"> Lỗi: Vui lòng kiểm tra lại! </div>');
			header('location: ../../ad_system/loaiTin.php');
		}
	}
	
?>