<?php require '../site/session/session.php'; session_start(); ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../system/index.php">Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../system/gioithieu.php">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="../system/lienhe.php">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST" action="../system/timKiem.php?id=<?php echo $_GET['id']; ?>">
			        <div class="form-group">
			          <input type="text" name="keyWord" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Tìm</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    <!-- <li>
                        <a href="dangki.php">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap.php">Đăng nhập</a>
                    </li>
                     -->
                    <?php 
                    //dang ky dang nhap
                    session_set('dangKi_dangNhap', '
                        <li>
                            <a href="dangki.php">Đăng ký</a>
                        </li>
                        <li>
                            <a href="dangnhap.php">Đăng nhập</a>
                        </li>');

                    ?>
                    <!-- <li>
                        <a>
                            <span class ="glyphicon glyphicon-user"> -->
                    		  <?php  
                                if(!empty(session_get('dangNhapThanhCong'))){
                                    session_delete('dangKi_dangNhap');
                                    echo session_get('dangNhapThanhCong');
                                }else{
                                    echo session_get('dangKi_dangNhap');
                                }
                                
                              ?>
<!--                        </span>
                        </a>
                    </li>

                    <li>
                        <a href="../site/action/ac_dangXuat.php">Đăng xuất</a>
                    </li>
 -->
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>