<?php
//Hien thi noi dung comment 
if (isset($_GET['idTinTucCMT'])) {
    $idTinTuc = $_GET['idTinTucCMT'];
    $sql_getcomment = "SELECT cmt.id, cmt.idUser, cmt.idTinTuc, cmt.NoiDung, cmt.created_at, cmt.updated_at, us.name FROM comment cmt, tintuc tt, users us WHERE cmt.idTinTuc=tt.id AND us.id=cmt.idUser AND idTinTuc=$idTinTuc";
    $data_tinTucCMT = db_get_list($sql_getcomment);
}
?>                
<?php
        for ($i=0; $i <count($data_tinTucCMT) ; $i++) { 
            echo'<div class="media">
                    <a class="pull-left" href="">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">'.$data_tinTucCMT[$i]['name'].' 
                            <small>'.$data_tinTucCMT[$i]['created_at'].'</small>
                        </h4>
                        '.$data_tinTucCMT[$i]['NoiDung'].'
                    </div>
                </div>';
        }
?>

