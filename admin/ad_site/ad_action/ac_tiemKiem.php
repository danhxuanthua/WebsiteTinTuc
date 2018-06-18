
<?php
    $sql_countID = "SELECT COUNT(`id`) AS total FROM `tintuc` "; 
	
	$data_countID = db_get_row($sql_countID);
	$total_records = $data_countID['total'];

	//TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 10;

    // TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);
 
    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
            $current_page = $total_page;
    }
    else if ($current_page < 1){
            $current_page = 1;
    }
    // Tìm Start
    $start = ($current_page - 1) * $limit;
?>

                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tin tức</h3>
                    </div>
                    <div class="panel-body text-left">
                        <a class="btn btn-primary" href="addTinTuc.php" role="button">Viết bài</a>
                    </div>
                    <!-- hien thi thong bao -->
                    <?php echo session_get('themTinTuc'); session_delete('themTinTuc') ?>
                    <?php echo session_get('suaTinTuc'); session_delete('suaTinTuc') ?>
                    <?php echo session_get('xoaTinTuc'); session_delete('xoaTinTuc') ?>
                    <!-- /.hien thi thong bao -->
        
                        <table class="table table-bordered text-left table-hover">
                    
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Tóm tắt</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Nổi bật</th>
                                        <th scope="col">Created_at</th>
                                        <th scope="col">Updated_at</th>
                                        <th scope="col" colspan="2" class="text-center">Tùy chọn</th>   
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        <?php

                                            if (isset($_GET['timKiem']) && !empty($_GET['keyWord'])) {
                                                $keyWord = $_GET['keyWord'];
                                                $sql_selectTinTuc = "SELECT * FROM `tintuc` WHERE TieuDe like '%$keyWord%' ORDER BY `tintuc`.`id` DESC LIMIT $start, $limit";
                                                $dataTinTuc = db_get_list($sql_selectTinTuc);

                                                $count=0;
                                                for ($i=0; $i <count($dataTinTuc) ; $i++) { 
                                                $count++; 
                                                echo '<tr>
                                                       <td>'.$dataTinTuc[$i]['id'].'</td>
                                                        <td>'.$dataTinTuc[$i]['TieuDe'].'</td>
                                                        <td>'.$dataTinTuc[$i]['TomTat'].'</td>
                                                        <td> <img src="../../public/image/tintuc/'.$dataTinTuc[$i]['Hinh'].' " class="img-responsive"></td>
                                                        <td>'.$dataTinTuc[$i]['NoiBat'].'</td>
                                                        <td>'.$dataTinTuc[$i]['created_at'].'</td>
                                                        <td>'.$dataTinTuc[$i]['updated_at'].'</td>
                                                        <td class="text-center"><a href="updateTinTuc.php?id='.$dataTinTuc[$i]['id'].'"><span class="glyphicon glyphicon-edit" style="font-size: 20px"></span></a></td>
                                                        <td class="text-center"><a href="../ad_site/ad_action/ac_deleteTinTuc.php?id='.$dataTinTuc[$i]['id'].'"><span class="glyphicon glyphicon-minus-sign" style="font-size: 20px"></span></a></td>
                                                    </tr>';
                                                }
                                                echo '<i>Tìm thấy '.$count.' cho từ khóa <b>'.$keyWord.'</b></i>';
                                            }else{
                                                $sql_selectTinTuc = "SELECT * FROM `tintuc` ORDER BY `tintuc`.`id` DESC LIMIT $start, $limit";
                                                $dataTinTuc = db_get_list($sql_selectTinTuc);
                                                for ($i=0; $i <count($dataTinTuc) ; $i++) { 
                                               
                                                echo '<tr>
                                                       <td>'.$dataTinTuc[$i]['id'].'</td>
                                                        <td>'.$dataTinTuc[$i]['TieuDe'].'</td>
                                                        <td>'.$dataTinTuc[$i]['TomTat'].'</td>
                                                        <td> <img src="../../public/image/tintuc/'.$dataTinTuc[$i]['Hinh'].' " class="img-responsive"></td>
                                                        <td>'.$dataTinTuc[$i]['NoiBat'].'</td>
                                                        <td>'.$dataTinTuc[$i]['created_at'].'</td>
                                                        <td>'.$dataTinTuc[$i]['updated_at'].'</td>
                                                        <td class="text-center"><a href="updateTinTuc.php?id='.$dataTinTuc[$i]['id'].'"><span class="glyphicon glyphicon-edit" style="font-size: 20px"></span></a></td>
                                                        <td class="text-center"><a href="../ad_site/ad_action/ac_deleteTinTuc.php?id='.$dataTinTuc[$i]['id'].'"><span class="glyphicon glyphicon-minus-sign" style="font-size: 20px"></span></a></td>
                                                    </tr>';
                                                }
                                            }   
                                                   
                                        
                                        ?>

                                </tbody>
                            </table>
                        
                   

                        <!-- phan trang -->
                        <ul class="pagination">
                            <?php 
                                // HIỂN THỊ PHÂN TRANG
                                // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                if ($current_page > 1 && $total_page > 1){
                                    echo '<li><a href="?page='.($current_page-1).'">&laquo;</a></li>';
                                }

                                // Lặp khoảng giữa
                                for ($i = 1; $i <= $total_page; $i++){
                                    // Nếu là trang hiện tại thì hiển thị thẻ span
                                    // ngược lại hiển thị thẻ a
                                    if ($i == $current_page){
                                        echo '<li class="active"><a href="#">'.$i.'</a></li>';
                                    }
                                    else{
                                        echo '<li><a href="?page='.$i.'">'.$i.'</a></li>';
                                    }
                                }
                                
                                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                if ($current_page < $total_page && $total_page > 1){
                                    echo '<li><a href="?page='.($current_page+1).'">&raquo;</a></li>';
                                }

                            ?>
                        </ul>
                        <!-- /.phan trang -->
                    </div>
                </div>

