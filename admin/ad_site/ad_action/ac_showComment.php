<?php 
	$sql_countID = "SELECT COUNT(`id`) AS total FROM `comment` WHERE 1";
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
                        <h3 class="panel-title"> Comment </h3>
                    </div>

                    <div class="panel-body text-center">
                    <!-- hien thi thong bao -->
                    <?php echo session_get('xoaComment'); session_delete('xoaComment'); ?>
                   <!-- /.hien thi thong bao -->

                        <!-- table user -->
                        <table class="table table-bordered text-left">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Id User</th>
                                    <th scope="col">Id tin tức</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col" colspan="2" class="text-center">Tùy chọn</th>   
                                </tr>
                            </thead>

                            <tbody>
                                <!-- hien thi danh sach the loai -->
                            <?php
                                $sql_selectComment = "SELECT * FROM `comment` ORDER BY `id` DESC LIMIT $start, $limit";
                                $data_selectComment = db_get_list($sql_selectComment);
                                for ($i=0; $i < count($data_selectComment); $i++) { 
                                    echo '<tr>
                                            <td >'.$data_selectComment[$i]['id'].'</td>
                                            <td>'.$data_selectComment[$i]['idUser'].'</td>
                                            <td>'.$data_selectComment[$i]['idTinTuc'].'</td>
                                            <td>'.$data_selectComment[$i]['NoiDung'].'</td>
                                            <td>'.$data_selectComment[$i]['created_at'].'</td>

                                            <td class="text-center"><a href="../ad_site/ad_action/ac_deleteComment.php?idTinTuc='.$data_selectComment[$i]['idTinTuc'].'"><span class="glyphicon glyphicon-minus-sign" style="font-size: 20px"></span></a></td>
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
                    </div>
                    <!-- /.phan trang -->
                </div>