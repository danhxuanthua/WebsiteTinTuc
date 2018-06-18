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
			<?php require '../ad_site/ad_widget/danhMuc.php'; ?>
			<div class="col-sm-9">

				<div class="panel panel-primary text-center">
					<div class="panel-heading text-left">
					    <h3 class="panel-title"> Sửa slider </h3>
					</div>
				
					<div class="panel-body text-left">
						<a class="btn btn-default" href="slider.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
						

					</div>
					
					<?php 
						$id = $_GET['id'];
						$sql_selectRowSlider = "SELECT * FROM `slide` WHERE `id` = $id";
						$dataRow_slider = db_get_row($sql_selectRowSlider);
					?>

					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="../ad_site/ad_action/ac_updateSlider.php">
						
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tên</label>
						    <div class="col-sm-10">
						    	<input type="text" name="id" value=" <?php echo $_GET['id'];?>" hidden>
						    	<input type="text" class="form-control" placeholder="Tên" name="ten" value="<?php echo $dataRow_slider['Ten'];?>">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Hình</label>
						    <div class="col-sm-10">
						    	<input class="form-control" type="file" name="image" />
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
		
		<?php require '../ad_site/ad_widget/footer.php'; ?>
	</div>
	<!-- /.content -->

		
</body>
</html>