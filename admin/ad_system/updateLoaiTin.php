<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin-Tin tức</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<!-- link my css -->
	<link rel="stylesheet" type="text/css" href="../../admin/ad_public/css/my.css">
</head>
<body>
	
	<!-- navigation -->
	<?php require '../ad_site/ad_widget/navigation.php'; ?>
	<!-- /.navbar-collapse -->
	
	<!-- content -->
	<div class="container-fluid">
		
		<div class="row">
			<!-- danh muc -->
			<?php require '../ad_site/ad_widget/danhMuc.php'; ?>
			<!--/. danh muc -->

			<div class="col-sm-9">

				<div class="panel panel-primary text-center">
					<div class="panel-heading text-left">
					    <h3 class="panel-title"> Sửa loại tin </h3>
					</div>

					<div class="panel-body text-left">
						<a class="btn btn-default" href="loaiTin.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
					</div>
					<?php
						$id = $_GET['id']; 
						$sql_selectLoaiTin = "SELECT * FROM `loaitin` WHERE `id` = $id";
						$data_loaiTin = db_get_row($sql_selectLoaiTin);

					?>

					<form class="form-horizontal" role="form" method="POST" action="../ad_site/ad_action/ac_updateLoaiTin.php">
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Id thể loại</label>
						    <div class="col-sm-10">

						    	<input type="text" name="id" value="<?php echo $_GET['id'];?>" hidden>

								<select class="form-control" name="idTheLoai">
								<?php
									//get data cua bang the loai   
									$sql_theLoai = "SELECT * FROM `theloai` WHERE 1";
			                        $data_theLoai = db_get_list($sql_theLoai);

			                        // get id the loai cua bang loai tin
			                        $id = $_GET['id'];
			                        $sqlRow_loaiTin = "SELECT * FROM `loaitin` WHERE `id`='$id'";
			                        $dataRow_loaiTin = db_get_row($sqlRow_loaiTin);
			                        $dataRowID_loaiTin = $dataRow_loaiTin['idTheLoai'];

			                        //hien thi cac value cua bang the loai ra option
			                        for ($i=0; $i <count($data_theLoai) ; $i++) {
			                        	//neu id cua the loai == id cua loai tin thi  selected
			                        	if( $data_theLoai[$i]['id'] == $dataRowID_loaiTin){
			                        		echo '<option value="'.$data_theLoai[$i]['id'].'"selected>'.$data_theLoai[$i]['id'].' - '.$data_theLoai[$i]['Ten'].'</option>';
			                        	}else{
			                        		echo '<option value="'.$data_theLoai[$i]['id'].'">'.$data_theLoai[$i]['id'].' - '.$data_theLoai[$i]['Ten'].'</option>';
			                        	}
			                        	
			                        }
								?>
								</select>

							</div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tên loại tin</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control" placeholder="Tên loại tin" name="tenLoaiTin" value="<?php echo $data_loaiTin['Ten']; ?>">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tên không dấu</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control" placeholder="Tên không dấu" name="tenKhongDau" value="<?php echo $data_loaiTin['TenKhongDau']; ?>">
						    </div>
						</div>
						
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-success" name="capNhat"><span class="glyphicon glyphicon-refresh"></span> Cập nhật</button>
						    </div>
						</div>
					</form>
				</div>

			</div>
		</div>

		<!-- footer -->
		<?php require '../ad_site/ad_widget/footer.php'; ?>
		<!--/. footer -->
		
	</div>
	<!-- /.content -->

		
</body>
</html>