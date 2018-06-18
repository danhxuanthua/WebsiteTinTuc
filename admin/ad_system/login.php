<?php require '../ad_site/ad_database/database.php'; db_connect(); require '../ad_site/ad_session/session.php'; session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<!-- link my css -->
	<link rel="stylesheet" type="text/css" href="../ad_public/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../ad_public/css/style.css">

</head>
<body id = "particles-js" >

	<div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"  ></div>
            <div class="col-md-4">
                <div class="panel panel-default" >
				  	<div class="panel-heading">Đăng nhập</div>
				  	<div class="panel-body">
				  		<?php echo session_get('ad_dangNhapThatBai'); session_delete('ad_dangNhapThatBai');?>
				    	<form method="POST" action="../ad_site/ad_action/ac_dangNhap.php">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
							</div>
							<br>
							<button type="submit" name="dangNhap" class="btn">Đăng nhập
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
        </div>
        <!-- end slide -->
    </div>

</body>
	<script src="../ad_public/js/particles.js"></script>
	<script src="../ad_public/js/stats.js"></script>
	<script src="../ad_public/js/app.js"></script>
</html>