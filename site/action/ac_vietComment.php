<?php 
//xu ly viet binh luan
	if(isset($_POST['gui'])){

		$idTinTuc = $_POST['idTinTuc'];
		$noiDungCMT = $_POST['noidung'];
		$id_User = session_get('id_user');
		$sql_InsertCMT = "INSERT INTO `comment`(`id`, `idUser`, `idTinTuc`, `NoiDung`, `created_at`, `updated_at`) VALUES (NULL,$id_User,$idTinTuc,'$noiDungCMT',CURRENT_TIMESTAMP,NULL)";

		if (empty($id_User)) {
			session_set('loiCmt','<div class="alert alert-danger">  Đăng nhập để bình luận </div>');
		}else{
			if(!empty($noiDungCMT)){
				db_execute($sql_InsertCMT);	
			}else{
				session_set('loiNoiDung','<div class="alert alert-danger">  Bạn chưa nhập nội dung </div>');
			}
			session_delete('loiCmt');
		}

	}
?>
				<div class="well">
					<?php echo session_get('loiCmt'); echo session_get('loiNoiDung'); session_delete('loiCmt'); session_delete('loiNoiDung');?>
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form" method="POST"  >
                        <input type="hidden" name="idTinTuc" value="<?php echo $_GET['idTinTucCMT'];?>" />
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="noidung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="gui">Gửi</button>
                    </form>
                </div>

