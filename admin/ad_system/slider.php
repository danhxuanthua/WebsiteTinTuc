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
			
			<?php  require '../ad_site/ad_widget/danhMuc.php'; ?>

			<div class="col-sm-9">
				<?php require '../ad_site/ad_action/ac_showSlider.php'; ?>
				<!-- <div class="panel panel-primary text-center table-responsive">
					<div class="panel-heading text-left">
					    <h3 class="panel-title"> Slider </h3>
					</div>
				
					<div class="panel-body text-left">
						<a class="btn btn-primary" href="addUser.php" role="button">Thêm hình</a>
					</div>
				
					table user
					<table class="table table-bordered text-left table-condensed table-hover" size="20">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Tên</th>
								<th scope="col">Hình</th>
								<th scope="col">Created_at</th>
								<th scope="col">Updated_at</th>
								<th scope="col" colspan="2" class="text-center">Tùy chọn</th>   
							</tr>
						</thead>
				
						<tbody>
							
							<tr>
							    <td >1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td>@mdo</td>
								<td class="text-center"><a href="updateUser.php"><span class="glyphicon glyphicon-edit" style="font-size: 20px"></span></a></td>
								<td class="text-center"><a href="#"><span class="glyphicon glyphicon-minus-sign" style="font-size: 20px"></span></a></td>
							</tr>
						</tbody>
					</table>
					/.table user
							
					phan trang
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					/.phan trang
				</div>  -->

			</div>
		</div>

		<?php require '../ad_site/ad_widget/footer.php'; ?>
	</div>
	<!-- /.content -->

		
</body>
</html>