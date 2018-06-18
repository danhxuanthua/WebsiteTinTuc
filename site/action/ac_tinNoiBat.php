
<?php 
	$sql_TheLoai = "SELECT * FROM `theloai` WHERE 1";
    $data_theLoai = db_get_list($sql_TheLoai);
?>
<?php 
	for ($i=0; $i <count($data_theLoai) ; $i++) { 
		$id_loaitin = $data_theLoai[$i]['id'];
        $qsl_loaiTin = "SELECT * FROM theloai tl, loaitin lt WHERE tl.id=lt.idTheLoai AND lt.idTheLoai=$id_loaitin";
        $data_loaiTin = db_get_list($qsl_loaiTin);


echo	'<div class="row-item row">
		    <h3>';
echo		        '<a href="#" style="color: #599a6a;">'.$data_theLoai[$i]['Ten'].'</a> | ';
		for ($j=0; $j <count($data_loaiTin); $j++) { 
echo		        '<small><a href="loaitin.php?id='.$data_loaiTin[$j]['id'].'"  style="color: #9d9d9d;"> '.$data_loaiTin[$j]['Ten'].'</a>/ </small>';
		}
			        
echo		'</h3>.<br>';

for ($j=0; $j <count($data_loaiTin); $j++) { 
	$id =$data_loaiTin[$j]['id']; 
	$qsl_tinTuc = "SELECT tt.id, tt.TieuDe, tt.TieuDeKhongDau, tt.TomTat, tt.NoiDung, tt.Hinh, tt.NoiBat, tt.SoLuotXem, tt.idLoaiTin, tt.created_at FROM tintuc tt, loaitin lt, theloai tl WHERE tt.NoiBat=1 AND tt.idLoaiTin = lt.id AND tl.id=lt.idTheLoai AND tt.idLoaiTin=$id ORDER BY tt.id DESC LIMIT 1 ";
	$data_tinTuc = db_get_list($qsl_tinTuc);
	for ($t=0; $t <count($data_tinTuc) ; $t++) { 

		echo		'<div class="col-md-12 border-right">';
		echo		    '<div class="col-md-3">';
		echo				    '<a href="chitiet.php?id='.$id.'">';
		echo				        '<img class="img-responsive" src="../public/image/tintuc/'.$data_tinTuc[$t]['Hinh'].'" alt="">';
		echo				    '</a>';
		echo				'</div>';

		echo				'<div class="col-md-9">';
		echo			    	'<h3>'.$data_tinTuc[$t]['TieuDe'].'</h3> <br>';
		echo			   		 '<p>'.$data_tinTuc[$t]['TomTat'].'</p>';
		echo				    '<a class="btn btn-primary" href="chitiet.php?id='.$id.'&tieuDe='.$data_tinTuc[$t]['TieuDeKhongDau'].'&idTinTucCMT='.$data_tinTuc[$t]['id'].'">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>';
		echo				'</div>';
		echo			'</div>.<br>';
	}
}

echo		'<div class="break"></div>';
echo		'</div>';

}

?>


