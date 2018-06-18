				<div class="panel panel-primary">
					<div class="panel-heading">
					    <h3 class="panel-title">Tổng quan</h3>
					</div>

					
					<div class="panel-body">
					    <div class="row">
						<!-- xu ly thong ke user -->
							
							<!-- dem so luong user -->
							<?php 
								$sql_selectUser = "SELECT COUNT(`id`) AS total FROM `users` WHERE 1";
								$data_user = db_get_row($sql_selectUser);
							?>		

							<!-- hien thi user new -->
							<?php 
								$sql_selectUserNew = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT 1";
								$dataUserNew = db_get_list($sql_selectUserNew);
							?>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-user" style="font-size: 50px;"></span> Users: <?php echo $data_user['total']; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> <?php for ($i=0; $i <count($dataUserNew); $i++) { 
								        	echo $dataUserNew[$i]['name'];
								        } ?></p>
								        <p><a href="../ad_system/users.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
						<!-- /.xu ly thong ke user -->
							
						<!-- xu ly thong ke comment -->
							<!-- dem so luong commetn -->
							<?php 
								$sql_selectComment = "SELECT COUNT(`id`) AS total_comment FROM `comment` WHERE 1";
								$data_comment = db_get_row($sql_selectComment);
							?>

							<!-- comment new -->
							<?php 
								$sql_selectCommentNew = "SELECT * FROM `comment` ORDER BY `id` DESC LIMIT 1";
								$datacommentNew = db_get_list($sql_selectCommentNew);
							?>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-comment" style="font-size: 50px;"></span> Comment: <?php echo $data_comment['total_comment']; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> <?php for ($i=0; $i < count($datacommentNew) ; $i++) { 
								        	$st_comment = $datacommentNew[$i]['NoiDung'];
								        	$count_comment = str_word_count($st_comment);
								        	if ($count_comment >=5) {
								        		$sub_comment = substr($st_comment, 0, 35);
								        		echo $sub_comment.'...';
								        	}else{
								        		echo $datacommentNew[$i]['NoiDung']; ;
								        	}
								        } ?></p>
								        <p><a href="../ad_system/comment.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
						<!-- /.xu ly thong ke comment -->
						
						<!-- xu ly hien thi tin tuc -->
							<?php 
								$sql_selectTinTuc = "SELECT COUNT(`id`) AS total_TinTuc FROM `tintuc` WHERE 1";
								$dataTinTuc = db_get_row($sql_selectTinTuc);
							?>
							<!-- tin tuc new -->
							<?php 
								$sql_selectTinTucNew = "SELECT * FROM `tintuc` ORDER BY `id` DESC LIMIT 1";
								$dataTinTucNew = db_get_list($sql_selectTinTucNew);
							?>

							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-file" style="font-size: 50px;"></span> Tin tức: <?php echo $dataTinTuc['total_TinTuc'] ; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b><?php for ($i=0; $i <count($dataTinTucNew) ; $i++) { 
								        	$st_tieuDe = $dataTinTucNew[$i]['TieuDe'] ;
								        	$count_tieuDe = str_word_count($st_tieuDe);
								        	if ($count_tieuDe >=5) {
								        		$sub_tieuDe = substr($st_tieuDe, 0, 35);
								        		echo $sub_tieuDe.'...';
								        	}else{
								        		echo $dataTinTucNew[$i]['TieuDe'];
								        	}
								        } ?></p>
								        <p><a href="../ad_system/tinTuc.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
						<!-- xu ly hien thi tin tuc -->

						<!-- xu ly hien thi The Loai -->
							<!-- dem the loai -->
							<?php 
								$sql_selectTheLoai = "SELECT COUNT(`id`) AS total_TheLoai FROM `theloai` WHERE 1";
								$dataTheLoai = db_get_row($sql_selectTheLoai);
							?>
							<!-- the loai new -->
							<?php 
								$sql_selectTheLoaiNew = "SELECT * FROM `theloai` ORDER BY `id` DESC LIMIT 1";
								$dataTheLoaiNew = db_get_list($sql_selectTheLoaiNew);
							?>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
										<h3> <span class="glyphicon glyphicon-th-list" style="font-size: 50px;"></span> Thể loại: <?php echo $dataTheLoai['total_TheLoai']; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> <?php for ($i=0; $i <count($dataTheLoaiNew) ; $i++) { 
								        	echo $dataTheLoaiNew[$i]['Ten'];
								        } ?></p>
								        <p><a href="../ad_system/theLoai.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								        
								    </div>
							    </div>
							</div>
						<!-- /.xu ly hien thi The Loai -->

						<!-- xu ly hien thi loai tin -->
							<!-- dem loai tin -->
							<?php 
								$sql_selectLoaiTin = "SELECT COUNT(`id`) AS total_loaiTin FROM `loaitin` WHERE 1";
								$dataLoaiTin = db_get_row($sql_selectLoaiTin);
							?>
							<!-- loai tin new -->
							<?php 
								$sql_selectLoaiTinNew = "SELECT * FROM `loaitin` ORDER BY `id` DESC LIMIT 1";
								$dataLoaiTinNew = db_get_list($sql_selectLoaiTinNew);
							?>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-glass" style="font-size: 50px;"></span> Loại tin: <?php echo $dataLoaiTin['total_loaiTin']; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> <?php for ($i=0; $i <count($dataLoaiTinNew) ; $i++) { 
								        	echo $dataLoaiTinNew[$i]['Ten'];
								        } ?></p>
								        <p><a href="../ad_system/loaiTin.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
						<!-- /.xu ly hien thi loai tin -->
						
						<!-- xu ly hien thi slider -->
							<!-- dem loai tin -->
							<?php 
								$sql_selectSlider = "SELECT COUNT(`id`) AS total_slider FROM `slide` WHERE 1";
								$dataSlider = db_get_row($sql_selectSlider);
							?>
							<!-- loai tin new -->
							<?php 
								$sql_selectSliderNew = "SELECT * FROM `slide` ORDER BY `id` DESC LIMIT 1";
								$dataSliderNew = db_get_list($sql_selectSliderNew);
							?>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
								    <div class="caption">
								    	<h3> <span class="glyphicon glyphicon-sound-stereo" style="font-size: 50px;"></span> Slider: <?php echo $dataSlider['total_slider']; ?></h3>
								        <p> <span class="glyphicon glyphicon-pushpin"></span> <b>Mới:</b> <?php for ($i=0; $i <count($dataSliderNew) ; $i++) { 
								        	echo $dataSliderNew[$i]['Ten'];
								        } ?></p>
								        <p><a href="../ad_system/slider.php" class="btn btn-primary" role="button">Chi tiết</a></p>
								      </div>
							    </div>
							</div>
						<!-- /.xu ly hien thi slider -->
							

						</div>
					</div>
