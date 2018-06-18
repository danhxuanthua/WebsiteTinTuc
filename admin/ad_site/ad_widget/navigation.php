<?php require '../ad_site/ad_database/database.php'; db_connect(); require '../ad_site/ad_session/session.php'; session_start();?>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only" >Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../ad_system/index.php" ><span class="glyphicon glyphicon-home"></span> Trình quản lý-Tin tức</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				

				<ul class="nav navbar-nav navbar-right">
					<?php 
                    //dang ky dang nhap
                    session_set('dangKi_dangNhap', '
                        <li>
                            <a href="dangnhap.php">Đăng nhập</a>
                        </li>');

                    ?>
                    		<?php  
                                if(!empty(session_get('ad_dangNhapThanhCong'))){
                                    session_delete('ad_dangKi_dangNhap');
                                    echo session_get('ad_dangNhapThanhCong');
                                }else{
                                	header('location: ../ad_system/login.php');

                                }
                                
                            ?>
				</ul>
				
				<form class="navbar-form navbar-right" role="search" method="GET" action="../ad_system/timKiem.php">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="keyWord" value="<?php 
							if(isset($_GET['keyWord'])){
								echo $_GET['keyWord'];
							}else{
								echo '';
							}

						?>">
					</div>
					<button type="submit" class="btn btn-default" name="timKiem">Tìm</button>
				</form>

			</div>
		</div>
	</nav>

					