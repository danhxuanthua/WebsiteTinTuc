<?php require '../site/database/database.php'; ?>
<?php 
	if (isset($_GET['tieuDe'])) {
		$tieuDeKhongDau = $_GET['tieuDe'];
		$sql_chiTietTin = "SELECT * FROM `tintuc` WHERE `TieuDeKhongDau`='$tieuDeKhongDau'";
		$data_chiTietTin =db_get_row($sql_chiTietTin);
		
	}
?>
				<!-- Blog Post -->
                
                <!-- Title -->
                <h1><?php echo $data_chiTietTin['TieuDe']; ?></h1>

                <!-- Author -->


                <!-- Preview Image -->
                <img class="img-responsive" src="../public/image/tintuc/<?php echo $data_chiTietTin['Hinh'] ?>" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span><?php echo $data_chiTietTin['created_at']; ?></p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $data_chiTietTin['NoiDung']; ?></p>

                <hr>
