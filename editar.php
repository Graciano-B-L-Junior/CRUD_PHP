<?php
	include('config.php');
	if(isset($_GET['editar'])){
		$id = intval($_GET['editar']);
		$info = CRUD::selectOne($id);
		$info;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Projeto CRUD</title>
</head>
<body>
	<header>
		<div class="box-voltar">
			<a href="index.php">Voltar</a>
		</div>	
	</header>
	<div class="content">
		<div class="box-info">
			<h2>Editar produto</h2>
			<form method="post" enctype="multipart/form-data">
				<?php
					if(isset($_POST['acao'])) {
						$imagem = $_FILES['imagem'];
						if($_POST['nome']==''||$_POST['preco']==''||$_POST['descricao']==''){
							echo '<div class="alerta">nenhum campo pode estar vazio</div>';
						}
						else
						{
							if(UploadFile::imagemValida($imagem)){
								$imagem = UploadFile::upload($imagem);
								if($info['nome']!=$_POST['nome']){
									if(CRUD::checkName($_POST['nome'])){
										echo '<div class="alerta">já existe um produto com esse nome</div>';
									}
									else
									{
										CRUD::deleteFile($info['imagem']);
										CRUD::update($id,$_POST['nome'],$_POST['preco'],$_POST['descricao'],$imagem);
										echo '<div class="sucesso">Produto atualizado com sucesso</div>';
									}
									
								}
								else
								{
									CRUD::deleteFile($info['imagem']);
									CRUD::update($id,$_POST['nome'],$_POST['preco'],$_POST['descricao'],$imagem);
										echo '<div class="sucesso">Produto atualizado com sucesso</div>';
								}	
							}else{
								echo '<div class="alerta">Arquivo invalido, por favor enviar somente arquivos de imagem de até 2MB</div>';
							}
						}
					}
				?>
				<label>Nome:</label>
				<input type="text" name="nome" value="<?php echo $info['nome'];?>">
				<label>Preço:</label>
				<input type="text" name="preco" value="<?php echo $info['preco'];?>">
				<label>Descrição:</label>
				<input type="text" name="descricao" value="<?php echo $info['descricao'];?>">
				<label>Imagem</label>
				<input type="file" name="imagem">
				<input type="hidden" name="id" value="<?php echo $info['id'];?>">
				<input type="submit" name="acao">
			</form>
		</div><!--box-info-->
	</div><!--content-->
</body>
</html>