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
$acao = cadastrarimg;
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
	    <h1>Noticais</h1>
	</div>
		<hr>
	<div class="bodyimg">
		<form method="POST" action="app.php">
			<input type="hidden" class="form-control" name="acao" value="<?php echo $acao; ?>">
			<label>Titulo</label><br>
			<input type="text" name="titulo" ><br>
			<label>Notica</label><br>
			<textarea id="msg" name="noticia" rows="6" cols="50"></textarea><br>
			<input type="submit" name="enviar" class="botao">
		</form>
	</div>
   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
