<?php include 'conexao.php'; 
$result = $base->prepare("SELECT * from noticias ");
	$result->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>noticias</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<?php include 'nav.php'; ?>
	
	<div class="pgnoticias">
		<div class="row">
			<?php
			$result = $base->prepare("SELECT * from noticias");
			$result->execute();

			while($_rowDados = $result->fetch(PDO::FETCH_OBJ)){ 

		?>
			
			  <div class="col-md-4">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title"><?php echo $_rowDados->titulo; ?></h5>
			        <p class="card-text"><?php echo mb_strimwidth( $_rowDados->noticia, 0, 100, "...") ; ?></p>
			        <a href="conteudo.php?id=<?php echo $_rowDados->id; ?>&acao=exibir" class="btn btn-primary">Ler mais</a>
			      </div>
			    </div>
			  </div>
			
			<?php } ?>
		</div>
	</div>
	<?php   include 'rodape.php'; ?>
</body>
</html>