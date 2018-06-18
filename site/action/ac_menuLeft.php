<?php 

        	$sql_TheLoai = "SELECT * FROM `theloai` WHERE 1";
        	$data_theLoai = db_get_list($sql_TheLoai);

                echo '<ul class="list-group" id="menu">';
                echo            '<li href="#" class="list-group-item menu1 active">';
                echo                    'Menu';
                echo            '</li>';

	for ($i=0; $i <count($data_theLoai); $i++) { 	
                            
                echo            '<li href="#" class="list-group-item menu1">';
                echo                $data_theLoai[$i]['Ten'];
                echo            '</li>';
                echo            '<ul>';

                $id_loaitin = $data_theLoai[$i]['id'];
                $qsl_loaiTin = "SELECT * FROM theloai tl, loaitin lt WHERE tl.id=lt.idTheLoai AND lt.idTheLoai=$id_loaitin";
                $data_loaiTin = db_get_list($qsl_loaiTin);

                for ($j=0; $j <count($data_loaiTin) ; $j++) { 
                      
                echo                    '<li class="list-group-item">';
                echo                            '<a href="loaitin.php?id='.$data_loaiTin[$j]['id'].'">'.$data_loaiTin[$j]['Ten'].'</a>';
                echo                    '</li>';

                }
                echo            '</ul>';
	}
                echo '</ul>';

?>