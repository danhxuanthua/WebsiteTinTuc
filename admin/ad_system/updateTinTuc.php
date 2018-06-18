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

	<script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script>
	
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
					    <h3 class="panel-title"> Sửa tin tức</h3>
					</div>

					<div class="panel-body text-left">
						<a class="btn btn-default" href="tinTuc.php" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
						

					</div>
					
					<!-- hien thi loi -->
					<?php echo session_get('themTinTuc'); session_delete('themTinTuc'); ?>
					<!-- /.hien thi loi -->

					<?php 
						$id = $_GET['id'];
						$sql_selectRowTintuc = "SELECT * FROM `tintuc` WHERE `id` = $id";
						$dataRow_tinTuc = db_get_row($sql_selectRowTintuc);
					?>

					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="../ad_site/ad_action/ac_updateTinTuc.php">
						<div class="form-group">
							<input type="text" name="id" value="<?php echo $dataRow_tinTuc['id']?>" hidden>

						    <label for="inputName3" class="col-sm-2 control-label">Id thể loại</label>
						    <div class="col-sm-10">						
								<select class="form-control" name="idloaiTin">
								<?php
									//get data cua bang loai tin  
									$sql_loaiTin = "SELECT * FROM `loaitin` WHERE 1";
			                        $data_loaiTin = db_get_list($sql_loaiTin);

			                        // get id the loai cua bang tin tuc
			                        $sqlRow_tinTuc2 = "SELECT * FROM `tintuc` WHERE `id` = $id";
			                        $dataRow_tinTuc2 = db_get_row($sqlRow_tinTuc2);
			                        $dataRowID_tinTuc = $dataRow_tinTuc2['idLoaiTin'];

			                        //hien thi cac value cua bang the loai ra option
			                        for ($i=0; $i <count($data_loaiTin) ; $i++) {
			                        	//neu id cua the loai == id cua loai tin thi  selected
			                        	if( $data_loaiTin[$i]['id'] == $dataRowID_tinTuc){
			                        		echo '<option value="'.$data_loaiTin[$i]['id'].'"selected>'.$data_loaiTin[$i]['id'].' - '.$data_loaiTin[$i]['Ten'].'</option>';
			                        	}else{
			                        		echo '<option value="'.$data_loaiTin[$i]['id'].'">'.$data_loaiTin[$i]['id'].' - '.$data_loaiTin[$i]['Ten'].'</option>';
			                        	}
			                        }

								?>
								</select>

							</div>
						</div>
					
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Trạng thái</label>
						    <div class="col-sm-10">
						    	<select class="form-control" name="noiBat">
									<!-- hien thi trang thai tin-->
									<?php 
										$value = $dataRow_tinTuc['NoiBat'];
										if($value == 1){
											echo '<option value ="1">1-Tin nổi bật</option>
												<option value ="NULL">0-Không nổi bật</option>';
										}else{
											echo '<option value ="NULL">0-Không nổi bật</option>
												<option value ="1">1-Tin nổi bật</option>';
										}
									?>
									<!-- /.hien thi trang thai tin -->
								</select>
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Têu đề</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control"  placeholder="Tiêu đề" name="tieuDe" value="<?php echo $dataRow_tinTuc['TieuDe']?>">
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tiêu đề không dấu</label>
						    <div class="col-sm-10">
						    	<input type="text" class="form-control" placeholder="Tiêu đề không dấu" name="tieuDeKhongDau" value=" <?php echo $dataRow_tinTuc['TieuDeKhongDau']   ?>">
						    </div>
						</div>
						
						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Tóm tắt</label>
						    <div class="col-sm-10">
						    	<textarea class="form-control" rows="3" name="tomTat"><?php echo $dataRow_tinTuc['TomTat']?></textarea>
						    </div>

						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label">Hình</label>
						    <div class="col-sm-10">
						    	<input class="form-control" type="file" name="image"/>
						    </div>
						</div>

						<div class="form-group">
						    <label for="inputName3" class="col-sm-2 control-label" >Nội dung</label>
						    <div class="col-sm-10">
						    	<textarea name="noiDung" id="editor"><?php echo $dataRow_tinTuc['NoiDung']?></textarea>
						    </div>
							<script>
								ClassicEditor
									.create( document.querySelector( '#editor' ) )
									.then( editor => {
										console.log( editor );
									} )
									.catch( error => {
										console.error( error );
									} );
							</script>
						</div>

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						       <button type="submit" class="btn btn-success" name="capNhat"><span class="glyphicon glyphicon-refresh"></span> Cập nhật</button>
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