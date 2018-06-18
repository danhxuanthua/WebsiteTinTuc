<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- title -->
    <?php require '../site/widget/title.php' ?>


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
<!--     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
    </div>
    /.container
</nav> -->

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
        <?php require '../site/widget/slider.php'; ?>
    	<!-- <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../public/image/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../public/image/800x300.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../public/image/800x300.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div> -->
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <?php require '../site/widget/menuLeft.php'; ?>
            <!-- <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>
            
                    <li href="#" class="list-group-item menu1">
                        Level 1
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>
            
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>
            
            
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
            
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>
            
            
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Level2</a>
                        </li>
                    </ul>
            
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Level 1</a>
                    </li>
                </ul>
            </div> -->

            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading">
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
					    
                        <div class="break"></div>
					   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                        <p> 320A Quốc lộ 61, Thị trấn Minh Lương, Huyện Châu Thành, Tỉnh Kiên Giang</p>

                        <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                        <p>danhxuanthua@gmail.com</p>

                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                        <p>0942779134</p>



                        <br><br>
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3930.2138232534276!2d105.14210081434187!3d9.91614199290864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1525272317996" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <?php require '../site/widget/footer.php' ?>
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
