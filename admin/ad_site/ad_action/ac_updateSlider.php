<?php require '../ad_database/database.php'; db_connect(); require '../ad_session/session.php'; session_start();?>
<?php
   if(isset($_FILES['image']) && isset($_POST['capNhat'])){
	    $errors= array();
	    $file_name = $_FILES['image']['name'];
	    $file_size =$_FILES['image']['size'];
	    $file_tmp =$_FILES['image']['tmp_name'];
	    $file_type=$_FILES['image']['type'];
	    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		//du lieu goi tu updateSlider      	
      	$ten = $_POST['ten'];
      	$id = $_POST['id'];

	    //kiem tra dinh dang file
	    $expensions = array("jpeg","jpg","png");
	    if(in_array($file_ext,$expensions) === false){
	        $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
	    }
	      
	    //kiem tra kich thuoc file
	    if($file_size > 2097152){
	        $errors[]='Kích cỡ file nên là 2 MB';
	    }

	      	
	    if(empty($errors)==true && !empty($ten)){
	    	//di chuyen file tam sang thu muc chua file tren sever
	        move_uploaded_file($file_tmp,'../../../public/image/slide/'.$file_name);

	        //Thuc hien update
	        $sql_updateSlider = "UPDATE `slide` SET `Ten`='$ten',`Hinh`='$file_name',`updated_at`=CURRENT_TIMESTAMP WHERE  `id`=$id";
	        db_execute($sql_updateSlider);
	        session_set('capNhatSlider', '<div class="alert alert-success">Thông tin đã được cập nhật ! </div>');
			header('location: ../../ad_system/slider.php');
	    }else{
	        
	        //print_r($errors);
	        session_set('capNhatSlider', '<div class="alert alert-danger"> Lỗi: Vui lòng kiểm tra lại! </div>');
			header('location: ../../ad_system/slider.php');

	    }

   }else{
   			session_set('capNhatSlider', '<div class="alert alert-danger"> Lỗi: Vui lòng kiểm tra lại! </div>');
			header('location: ../../ad_system/slider.php');
   }
?>