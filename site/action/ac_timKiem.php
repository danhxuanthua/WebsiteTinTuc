<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$qsl_tinTuc = "SELECT * FROM loaitin WHERE id='".$id."'";
		$data_tinTuc = db_get_row($qsl_tinTuc);
	}	
?>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><b><?php echo $data_tinTuc['Ten']?></b></h4>
                    </div>

<?php 
	//TÌM TỔNG SỐ RECORDS
	$qsl_count_records = "SELECT COUNT(tt.id) as total FROM tintuc tt, loaitin lt, theloai tl WHERE tt.idLoaiTin = lt.id AND tl.id=lt.idTheLoai AND tt.idLoaiTin=$id ORDER BY tt.id DESC";
	$data_total_records = db_get_row($qsl_count_records);
	$total_records = $data_total_records['total'];

	//TÌM LIMIT VÀ CURRENT_PAGE
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	@$limit = 10;


	//TÍNH TOÁN TOTAL_PAGE VÀ START
	$total_page = ceil($total_records / $limit);

	//Giới hạn current_page trong khoảng 1 đến total_page
	if ($current_page > $total_page){
	    $current_page = $total_page;
	}
	else if ($current_page < 1){
	    $current_page = 1;
	}

	// Tìm Start
	@$start = ($current_page - 1) * $limit;

	//TRUY VẤN LẤY DANH SÁCH TIN TỨC
?>

<?php 
    if(isset($_GET['id'])){
		$tenKhongDau = $_GET['id'];
		$keyWord = $_POST['keyWord'];
		$qsl_tinTuc = "SELECT tt.id, tt.TieuDe, tt.TieuDeKhongDau, tt.TomTat, tt.NoiDung, tt.Hinh, tt.NoiBat, tt.SoLuotXem, tt.idLoaiTin, tt.created_at FROM tintuc tt, loaitin lt, theloai tl WHERE tt.TieuDe like '%$keyWord%' AND tt.idLoaiTin = lt.id AND tl.id=lt.idTheLoai AND tt.idLoaiTin=$id ORDER BY tt.id DESC LIMIT $start, $limit";
		$data_tinTuc = db_get_list($qsl_tinTuc);
		//Dem so tin tim duoc
		echo '<div><i> Tìm thấy '.count($data_tinTuc).' cho từ khóa <b>'.$keyWord.'</b> </i></div>';
		
		for ($i=0; $i <count($data_tinTuc) ; $i++) { 
		$data_tinTuc[$i]['TieuDe'];
    echo            '<div class="row-item row">

                        <div class="col-md-3">
                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="../public/image/tintuc/'.$data_tinTuc[$i]['Hinh'].'" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">';
    echo                    '<h3>'.$data_tinTuc[$i]['TieuDe'].'</h3>';
    echo                    '<p>'.$data_tinTuc[$i]['TomTat'].'</p>
                            <a class="btn btn-primary" href="chitiet.php?id='.$id.'&tieuDe='.$data_tinTuc[$i]['TieuDeKhongDau'].'&idTinTucCMT='.$data_tinTuc[$i]['id'].'">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>';

		}

    }

?>
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">


                                <?php 

									if($current_page >1 && $total_page >1){
										echo '<li>';
		                                echo     '<a href="loaitin.php?id='.$id.'&page='.($current_page-1).'">&laquo;</a>';
		                                echo '</li>';
									}

									// Lặp khoảng giữa
						            for ($i = 1; $i <= $total_page; $i++){
						                // Nếu là trang hiện tại thì hiển thị thẻ span
						                // ngược lại hiển thị thẻ a
						                if ($i == $current_page){
						         
						                echo '<li class="active">';
		                                echo 	'<a href="loaitin.php?id='.$id.'&page='.$i.'">'.$i.'</a>';
		                                echo '</li>';
						                }
						                else{
							                echo '<li >';
			                                echo    '<a href="loaitin.php?id='.$id.'&page='.$i.'">'.$i.'</a>';
			                                echo '</li>';
						                }
						            }

						             // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
						            if ($current_page < $total_page && $total_page > 1){
						                echo '<li>';
		                                echo    '<a href="loaitin.php?id='.$id.'&page='.$i.'">&raquo;</a>';
		                                echo '</li>';
						            }

                                ?>

                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
		</div>
