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
					    <h3 class="panel-title"> Thêm thể loại </h3>
					</div>

					<div class="panel-body text-left">
						<a class="btn btn-default" href="theLoai.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
						

					</div>
					<!-- hien thi loi -->
					<?php echo session_get('themTheLoaiThatBai'); session_delete('themTheLoaiThatBai'); ?>
					<!-- /.hien thi loi -->
					<form class="form-horizontal" role="form" method="POST" action="../ad_site/ad_action/ac_addTheLoai.php">
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tên thể loại</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control" placeholder="Tên thể loại" name="ten">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tên không dấu</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control" placeholder="Tên không dấu" name="tenKhongDau">
						    </div>
						</div>
						
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-success" name="them"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
						    </div>
						</div>
					</form>
				</div>

			</div>
		</div>

		<footer>
	        <div class="row">
	            <div class="col-md-12 text-center">
	                <p>Đồ án môn học lập trình website với PHP-Danh Xuân Thừa &copy;  2018</p>
	            </div>
	        </div>
		</footer>
	</div>
	<!-- /.content -->

		
</body>
</html>