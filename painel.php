  <?php 
   include 'conexao.php'; 
   session_start(); 


if($_SESSION['nome'] != ''){
	

}else{
	$_SESSION['nome'] = '';
	session_destroy();
	echo "caiu 2";
	header("Location:login.php");
	
}
$acao = exibir;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>painel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    	.bodyimg{
    			margin: 2rem;
    	}
    	
    </style>
</head>
<body>
	<?php 
	include 'nav.php'; ?>
    
   <div class="bodyimg">
	    <h1>Imagens</h1>
	</div>
		<hr>
	<div class="bodyimg">
	<form action="app.php" enctype="multipart/form-data" method="POST">
		<input type="hidden" class="form-control" name="acao" value="<?php echo $acao; ?>">
		<label for="imagem">Escolha uma imagem *</label><br>
		<input type="file" id="imagem" name="imagem" accept="image/png, image/jpg, image/jpeg"><br>
		<label>Titulo *</label><br>
		<input type="text" name="titulo"><br>
		<input type="submit" name="enviar" class="botao">
		<hr>
	</form>
