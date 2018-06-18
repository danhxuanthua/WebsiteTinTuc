<?php 

	db_connect();
	$sql_slider = "SELECT * FROM `slide` WHERE 1";
	$data_slider = db_get_list($sql_slider);
	for ($i=0; $i <count($data_slider); $i++) { 
		if($i==0){
			echo	'<div class="item active">';
            echo     	'<img class="slide-image" src="../public/image/slide/'.$data_slider[$i]['Hinh'].'" alt="">';
            echo    '</div>';
		}else{
			echo	'<div class="item">';
            echo     	'<img class="slide-image" src="../public/image/slide/'.$data_slider[$i]['Hinh'].'" alt="">';
            echo    '</div>';
		}

	}

?>
	