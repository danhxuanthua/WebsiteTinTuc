<?php require '../site/database/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- title -->
    <?php require '../site/widget/title.php'; ?>


    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/shop-homepage.css" rel="stylesheet">
    <link href="../public/css/my.css" rel="stylesheet">
    <link href="../public/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php require '../site/widget/navbar.php'; ?>
    <!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            Brand and toggle get grouped for better mobile display
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> Tin Tức</a>
            </div>
            Collect the nav links, forms, and other content for toggling
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>
    
                <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
    
                    <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">Đăng ký</a>
                    </li>
                    <li>
                        <a href="#">Đăng nhập</a>
                    </li>
                    <li>
                        <a>
                            <span class ="glyphicon glyphicon-user"></span>
                            Hương Hương
                        </a>
                    </li>
    
                    <li>
                        <a href="#">Đăng xuất</a>
                    </li>
                    
                </ul>
            </div>
    
    
            
            /.navbar-collapse
        </div> -->
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading">Thông tin tài khoản</div>
				  	<div class="panel-body">

                        <?php
                            //xu ly hien thi thong tin tai khoan 
                            $id_user = session_get('id_user');
                            $sql_user = "SELECT * FROM `users` WHERE `id`= $id_user";
                            $data_user = db_get_row($sql_user);
                        ?>
                        <!-- Quan li session PHP-->
                        <?php echo session_get('capNhatTaiKhoan');session_delete('capNhatTaiKhoan');?>

				    	<form method="POST" action="../site/action/ac_capNhatThongTinTaiKhoan.php">
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="<?php echo $data_user['name']; ?>">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							  	disabled value="<?php echo $data_user['email']; ?>">
							</div>
							<br>	
							<div>
								<input type="checkbox" class="" name="checkpassword" value="1">
				    			<label>Đổi mật khẩu</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<button type="submit" name="sua" class="btn btn-default">Cập nhật
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <?php require '../site/widget/footer.php'; ?>
    <!-- <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer> -->
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/my.js"></script>

</body>

</html>
