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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>painel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style type="text/css">
		body {
		    background-color: #1d2b3a;
		}
		h1{
			color: white;
		}
	</style>
</head>
<body>

	<center><h1>Area restrita</h1>
		<div class="intermedio">
			<a href="painel.php" class="botao">Cadastro de noticias</a>
			<a href="imagem.php" class="botao1">Cadastro de imagens</a>
		</div>
	</center>
	
</body>
</html>