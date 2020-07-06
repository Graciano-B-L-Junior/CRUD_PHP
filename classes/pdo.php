<?php
	/**
	* 
	*/
	class CRUD 
	{
		public static $pdo;


		public static function insert($nome,$preco,$descricao,$imagem){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("INSERT INTO `crud` VALUES(null,?,?,?,?)");
			$sql->execute(array($nome,$preco,$descricao,$imagem));
		}

		public static function delete($id){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("DELETE FROM `crud` WHERE id=?");
			$sql->execute(array($id));
		}

		public static function select(){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("SELECT * FROM `crud`");
			$sql->execute();
			$info = $sql->fetchAll();
			return $info;
		}

		public static function update($id,$nome,$preco,$descricao,$imagem){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("UPDATE crud SET nome = ?,preco = ?,descricao = ?, imagem = ? WHERE id = ?");
			$sql->execute(array($nome,$preco,$descricao,$imagem,$id));
		}

		public static function selectOne($id){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("SELECT * FROM `crud` WHERE id = $id");
			$sql->execute();
			$info = $sql->fetch();
			return $info;
		}

		public static function checkName($nome){
			self::$pdo = new PDO('mysql:host=localhost;dbname=bleez','root','');
			$sql = self::$pdo->prepare("SELECT * FROM `crud` WHERE nome =?");
			$sql->execute(array($nome));
			if($sql->rowCount()==1)
				return true;
			else
				return false;
		}

		public static function deleteFile($file){
			unlink('./images/'.$file);
		}
	}
?>