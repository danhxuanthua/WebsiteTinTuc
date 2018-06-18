<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php
   if(isset($_FILES['image']) && isset($_POST['them'])){
	    $errors= array();
	    $file_name = $_FILES['image']['name'];
	    $file_size =$_FILES['image']['size'];
	    $file_tmp =$_FILES['image']['tmp_name'];
	    $file_type=$_FILES['image']['type'];
	    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      	
      	$idloaiTin = $_POST['idloaiTin'];
      	$noiBat = $_POST['noiBat'];
      	$tieuDe = $_POST['tieuDe'];
      	$tieuDeKhongDau = $_POST['tieuDeKhongDau'];
      	$tomTat = $_POST['tomTat'];
      	$noiDung = $_POST['noiDung'];

	    //kiem tra dinh dang file
	    $expensions = array("jpeg","jpg","png");
	    if(in_array($file_ext,$expensions) === false){
	        $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
	    }
	      
	    //kiem tra kich thuoc file
	    if($file_size > 2097152){
	        $errors[]='Kích cỡ file nên là 2 MB';
	    }
	      	
	    if(empty($errors)==true && !empty($idloaiTin) && !empty($noiBat) && !empty($tieuDe) && !empty($tomTat) && !empty($noiDung) ){
	    	//di chuyen file tam sang thu muc chua file tren sever
	        move_uploaded_file($file_tmp,'../../../public/image/tintuc/'.$file_name);

	        //Thuc hien insert 
		    $hinh = $_FILES['image']['name'];
	        $sql_insertTinTuc = "INSERT INTO `tintuc`(`id`, `TieuDe`, `TieuDeKhongDau`, `TomTat`, `NoiDung`, `Hinh`, `NoiBat`, `SoLuotXem`, `idLoaiTin`, `created_at`, `updated_at`) VALUES (NULL,'$tieuDe','$tieuDeKhongDau','$tomTat','$noiDung','$hinh','$noiBat',NULL,'$idloaiTin',CURRENT_TIMESTAMP,NULL)";
	        db_execute($sql_insertTinTuc);

			session_set('themTinTuc', '<div class="alert alert-success">Đã thêm một bài viết!</div>');
			header('location: ../../ad_system/tinTuc.php');
	    }else{
	        
	        print_r($errors);
	        session_set('themTinTuc', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addTinTuc.php');
	    }

   }else{
   		session_set('themTinTuc', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
		header('location: ../../ad_system/addTinTuc.php');
   }
?>