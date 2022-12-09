<?php include 'conexao.php';
$id=$_GET['id'];
        $result=$base->prepare("SELECT * FROM `noticias` WHERE `id` = '$id' ");
   	    $result->execute();
        $_rowDados = $result->fetch(PDO::FETCH_OBJ);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_rowDados->titulo ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<?php include 'nav.php'; ?>
	<div class="pgconteudo">
		<center><h1><?php echo $_rowDados->titulo; ?></h1></center>
	
		<p><?php echo $_rowDados->noticia ?></p>
	</div>
	<?php include 'rodape.php'; ?>
</body>
</html>	