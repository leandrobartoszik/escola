<?php include 'conexao.php'; 
$result = $base->prepare("SELECT * from imagens ");
	$result->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>galeria</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<?php include 'nav.php'; ?>
	
	
		<div class="row">
			<?php
			$result = $base->prepare("SELECT * from imagens");
			$result->execute();

			while($_rowDados = $result->fetch(PDO::FETCH_OBJ)){ 

		?>
			
			  <div class="col-md-4">
			    <div class="card">
			      <div class="card-body">
			        <img src="<?php echo $_rowDados->path; ?>">
			        
			      </div>
			    </div>
			  </div>
			
			<?php } ?>
		</div>
	
	<?php   include 'rodape.php'; ?>
</body>
</html>