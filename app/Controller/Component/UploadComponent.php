<?php
App::uses ('Component','Controller');

class UploadComponent extends Component{

	public $max_files = 20;

	


	



	public function uploadFotoPeca ($data = null, $id=null){
		$filename = $data['name'];
		$file_tmp_name = $data['tmp_name'];
		$dir = WWW_ROOT.'pecas';
		$dir1 = new Folder($dir.DS.$id, true);

		$allowed = array('png','jpg','jpeg','bmp' );
		move_uploaded_file($file_tmp_name, $dir1->path.DS.$filename);

			}

}

?>
