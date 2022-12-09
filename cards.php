<?php include 'conexao.php'; 
	$result = $base->prepare("SELECT * from imagens");
	$result->execute();
	

	
while($_rowDados = $result->fetch(PDO::FETCH_OBJ)){ 
	?><img src="<?php echo $_rowDados->path; ?>"><?php

}








?>