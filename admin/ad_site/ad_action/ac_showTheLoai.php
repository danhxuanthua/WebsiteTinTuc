<?php 
	$sql_countID = "SELECT COUNT(`id`) AS total FROM `theloai` WHERE 1";
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
                <div class="panel panel-primary text-center table-responsive">
                    <div class="panel-heading text-left">
                        <h3 class="panel-title"> Thể loại</h3>
                    </div>

                    <div class="panel-body text-left">
                        <a class="btn btn-primary" href="addTheLoai.php" role="button">Thêm thể loại</a>
                    </div>

                    <!-- hien thi thong bao -->
                    <?php echo session_get('themTheLoaiThanhCong'); session_delete('themTheLoaiThanhCong'); ?>
                    <?php echo session_get('capNhatTheLoai'); session_delete('capNhatTheLoai'); ?>
                    <?php echo session_get('xoaTheLoai'); session_delete('xoaTheLoai'); ?>
                   <!-- /.hien thi thong bao -->

                    <!-- table user -->
                    <table class="table table-bordered text-left">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tên thể loại</th>
                                <th scope="col">Tên không dấu</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col" colspan="2" class="text-center">Tùy chọn</th>   
                            </tr>
                        </thead>

                        <tbody>
                            <!-- hien thi danh sach the loai -->
                            <?php
                                $sql_theLoai = "SELECT * FROM `theloai` ORDER BY `theloai`.`id` DESC LIMIT $start, $limit";
                                $data_theLoai = db_get_list($sql_theLoai);
                                for ($i=0; $i < count($data_theLoai); $i++) { 
                                    echo '<tr>
                                            <td >'.$data_theLoai[$i]['id'].'</td>
                                            <td>'.$data_theLoai[$i]['Ten'].'</td>
                                            <td>'.$data_theLoai[$i]['TenKhongDau'].'</td>
                                            <td>'.$data_theLoai[$i]['created_at'].'</td>
                                            <td>'.$data_theLoai[$i]['updated_at'].'</td>
                                            <td class="text-center"><a href="updateTheLoai.php?id='.$data_theLoai[$i]['id'].'"><span class="glyphicon glyphicon-edit" style="font-size: 20px"></span></a></td>
                                            <td class="text-center"><a href="../ad_site/ad_action/ac_deleteTheLoai.php?id='.$data_theLoai[$i]['id'].'"><span class="glyphicon glyphicon-minus-sign" style="font-size: 20px"></span></a></td>
                                        </tr>';
                                }  
                                
                            ?>
                            <!-- /.hien thi danh sach the loai -->   
                        </tbody>
                    </table>
                    <!-- /.table user -->
                            
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
