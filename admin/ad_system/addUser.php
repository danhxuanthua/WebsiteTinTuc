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
		<!-- /.danh muc -->
			<div class="col-sm-9">

				<div class="panel panel-primary text-center">
					<div class="panel-heading text-left">
					    <h3 class="panel-title"> Add User </h3>
					</div>

					<div class="panel-body text-left">
						<a class="btn btn-default" href="users.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>

					</div>
					<!-- hien thi loi -->
					<?php echo session_get('themUserThatBai'); session_delete('themUserThatBai') ?>
					<!-- /.hien thi loi -->
					<form class="form-horizontal" role="form" method="POST" action="../ad_site/ad_action/ac_addUser.php">
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label" >Name</label>
						    <div class="col-sm-10">
						    	<input type="input" class="form-control" placeholder="Name" name="name">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
						    <div class="col-sm-10">
						    	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
						    </div>
						  </div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						    	<input type="password" class="form-control" id="inputPassword3" placeholder="Password"  name="password">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Lever</label>
						    <div class="col-sm-10">						
								<select class="form-control" name="lever">
									<option value="NULL">0</option>
									<option value="1">1</option>
								</select>
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

		<!-- footer -->
		<?php require '../ad_site/ad_widget/footer.php'; ?>
		<!-- /.footer -->
	</div>
	<!-- /.content -->

		
</body>
</html>