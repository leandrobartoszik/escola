<?php $acao = login; 
include 'conexao.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/input.css">
</head>
<body>
	
	<div class="login">
		<form method="POST" action="app.php">
		
		<div class="inputbox">
			<input type="hidden" class="form-control" name="acao" value="<?php echo $acao; ?>">
			<input type="text" name="nome" required>
			<span>nome</span>
		</div>
		<div class="inputbox">
			<input type="password" name="senha" required>
			<span>senha</span>
		</div>
		<input type="submit" class="botao" value="entrar" name="entrar">
		
		</form>
	</div>	
	<script type="text/javascript" src="main.js"></script>
</body>
</html>