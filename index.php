<?php
	include('config.php');
	$info = CRUD::select();
	if(isset($_GET['excluir'])){
		$id = intval($_GET['excluir']);
		$imagem = CRUD::selectOne($id);
		CRUD::deleteFile($imagem['imagem']);
		CRUD::delete($id);
		header('Location:index.php');
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
		<h2>Projeto CRUD</h2>
	</header>
	<div class="content">
		<div class="box-info">
			<table>
				<tr>
					<td>Nome</td>
					<td>Preço</td>
					<td>Descrição</td>
					<td>Imagem</td>
					<td>Excluir</td>
					<td>Editar</td>

				</tr>
				<?php
					foreach ($info as $key => $value) {
						# code...
					
				?>
				<tr class="info-list">
					<td><?php echo $value['nome']?></td>
					<td>R$ <?php echo $value['preco']?></td>
					<td><?php echo $value['descricao']?></td>
					<td><img style="width: 90px; height: 50px;padding: 5px; background-size: contain;" src="images/<?php echo $value['imagem']?>"></td>
					<td><a href="index.php?excluir=<?php echo $value['id'];?>">Excluir</a></td>
					<td><a href="editar.php?editar=<?php echo $value['id'];?>">Editar</a></td>
				</tr>
				<?php } ?>
			</table>
			<div class="box-cadastro">
				<a href="cadastrar.php">Novo Produto</a>
			</div>
		</div><!--box-info-->
	</div><!--content-->
</body>
</html>