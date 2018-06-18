<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php
   if(isset($_FILES['image']) && isset($_POST['them'])){
	    $errors= array();
	    $file_name = $_FILES['image']['name'];
	    $file_size =$_FILES['image']['size'];
	    $file_tmp =$_FILES['image']['tmp_name'];
	    $file_type=$_FILES['image']['type'];
	    $ten = $_POST['ten'];
	    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
	    //kiem tra dinh dang file
	    $expensions = array("jpeg","jpg","png");
	    if(in_array($file_ext,$expensions) === false){
	        $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
	    }
	      
	    //kiem tra kich thuoc file
	    if($file_size > 2097152){
	        $errors[]='Kích cỡ file nên là 2 MB';
	        session_set('themSlider', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addSlider.php');
	    }
	      	
	    if(empty($errors)==true && !empty($ten)){
	    	//di chuyen file tam sang thu muc chua file tren sever
	        move_uploaded_file($file_tmp,'../../../public/image/slide/'.$file_name);

	        //Thuc hien insert 
		        $hinh = $_FILES['image']['name'];
	        $sql_insertSlider = "INSERT INTO `slide`(`id`, `Ten`, `Hinh`, `link`, `created_at`, `updated_at`) VALUES (NULL,'$ten','$hinh',NULL,CURRENT_TIMESTAMP,NULL)";
	        db_execute($sql_insertSlider);

			session_set('themSlider', '<div class="alert alert-success">Đã thêm một hình ảnh!</div>');
			header('location: ../../ad_system/slider.php');
	    }else{
	        
	        //print_r($errors);
	        session_set('themSlider', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
			header('location: ../../ad_system/addSlider.php');
	    }

   }else{
   		session_set('themSlider', '<div class="alert alert-danger">Lỗi: Vui lòng kiểm tra lại thông tin!</div>');
		header('location: ../../ad_system/addSlider.php');
   }
?>