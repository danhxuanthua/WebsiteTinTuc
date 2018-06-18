<?php
    //xu ly tin lien quan
    if(isset($_GET['id'])){
        $idLoaiTin = $_GET['id'];
        $sql_chiTietTin = "SELECT tt.id, tt.TieuDe, tt.TieuDeKhongDau, tt.TomTat, tt.NoiDung, tt.Hinh, tt.NoiBat, tt.SoLuotXem, tt.idLoaiTin, tt.created_at FROM tintuc tt, loaitin lt, theloai tl WHERE tt.idLoaiTin = lt.id AND tl.id=lt.idTheLoai AND tt.idLoaiTin=$idLoaiTin ORDER BY tt.id DESC LIMIT 5";
        $data_chiTietTin = db_get_list($sql_chiTietTin); 
    } 

?>
                <!-- Tin liên quan -->
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
            <?php 
                for ($i=1; $i <count($data_chiTietTin) ; $i++) { 
                        
                    echo'<div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/tintuc/'.$data_chiTietTin[$i]['Hinh'].'" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?id='. $idLoaiTin.'&tieuDe='.$data_chiTietTin[$i]['TieuDeKhongDau'].'&idTinTucCMT='.$data_chiTietTin[$i]['id'].'"><b>'.$data_chiTietTin[$i]['TieuDe'].'</b></a>
                            </div>
                            <p>'.$data_chiTietTin[$i]['TomTat'].'</p>
                            <div class="break"></div>
                        </div>';
                }    
            ?>
                    </div>
                </div> 
                <!--Ket thuc Tin liên quan -->

<?php 
    //xu ly tin noi bat
    if(isset($_GET['id'])){
        $idLoaiTin = $_GET['id'];
        $sql_chiTietTin = "SELECT tt.id, tt.TieuDe, tt.TieuDeKhongDau, tt.TomTat, tt.NoiDung, tt.Hinh, tt.NoiBat, tt.SoLuotXem, tt.idLoaiTin, tt.created_at FROM tintuc tt, loaitin lt, theloai tl WHERE  tt.NoiBat=1 AND tt.idLoaiTin = lt.id AND tl.id=lt.idTheLoai AND tt.idLoaiTin=$idLoaiTin ORDER BY tt.id DESC LIMIT 4";
        $data_chiTietTin = db_get_list($sql_chiTietTin); 

    } 
?>
                    <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                    <!-- item -->
            <?php
                for ($i=0; $i < count($data_chiTietTin); $i++) { 
            
                    echo'<div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="../public/image/tintuc/'.$data_chiTietTin[$i]['Hinh'].'" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?id='.$idLoaiTin.'&tieuDe='.$data_chiTietTin[$i]['TieuDeKhongDau'].'&idTinTucCMT='.$data_chiTietTin[$i]['id'].'"><b>'.$data_chiTietTin[$i]['TieuDe'].'</b></a>
                            </div>
                            <p>'.$data_chiTietTin[$i]['TomTat'].'</p>
                            <div class="break"></div>
                        </div>';
                }        
             ?>
                    <!-- end item -->
                    </div>
                </div>
                     
