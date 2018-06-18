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
	<link rel="stylesheet" type="text/css" href="../ad_public/css/my.css">
	
</head>
<body >
	
	<!-- navigation -->
	<?php require '../ad_site/ad_widget/navigation.php'; ?>
	<!-- /.navbar-collapse -->
	
	<!-- content -->
	<div class="container-fluid">
		
		<div class="row">
			<!-- danh muc -->
			<?php require '../ad_site/ad_widget/danhMuc.php'; ?>
			<!-- /.danh muc -->
			<div class="col-sm-9">
				<!-- show index -->
				<?php require '../ad_site/ad_action/ac_index.php'; ?>
				<!--/.show index -->

				<!-- <div class="panel panel-primary">
					<div class="panel-heading">
					    <h3 class="panel-title">Tổng quan</h3>
					</div>
					<div class="panel-body">
					    <div class="row">
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-user" style="font-size: 50px;"></span> Users: 50</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-comment" style="font-size: 50px;"></span> Comment: 50</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-file" style="font-size: 50px;"></span> Tin tức: 100</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-th-list" style="font-size: 50px;"></span> Thể loại: 100</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-glass" style="font-size: 50px;"></span> Loại tin: 100</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-sound-stereo" style="font-size: 50px;"></span> Slider: 100</h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> danh xuan thua</p>
								        <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
							

						</div>
					</div>
 -->				</div>


			</div>
		</div>

		<footer>
	        <div class="row">
	            <div class="col-md-12 text-center">
	                <p>Đồ án môn học lập trình website với PHP-Danh Xuân Thừa &copy;  2018</p>
	            </div>
	        </div>
		</footer>

	<!-- /.content -->	
</body>
</html>