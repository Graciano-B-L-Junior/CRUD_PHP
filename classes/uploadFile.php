<?php
	
/**
* 
*/
//classe usada para armazenar e deletar imagens
class UploadFile
{
	public static function imagemValida($imagem){
			if($imagem['type'] == 'image/jpeg' ||
				$imagem['type'] == 'image/jpg' ||
				$imagem['type'] == 'image/png'){

				$tamanho = intval($imagem['size']/1024);
				if($tamanho < 2048)
					return true;
				else
					return false;
			}else{
				return false;
			}
		}

		public static function upload($file){
			$imagemNome = $file['name'];
			if(move_uploaded_file($file['tmp_name'],'./images/'.$imagemNome))
				return $imagemNome;
			else
				return false;
		}
}
?>