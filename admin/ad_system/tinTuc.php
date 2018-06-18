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
				<?php require '../ad_site/ad_action/ac_showTinTuc.php'; ?>
<!-- 				<div class="panel panel-primary">
					<div class="panel-heading">
					    <h3 class="panel-title">Tin tức</h3>
					</div>
					<div class="panel-body">
					    <div class="row">

						</div>
					</div>
				</div> -->
	

			</div>
		</div>

	</div>
	<!-- /.content -->
</body>
</html>