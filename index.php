<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inicio</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<?php
		include 'nav.php';
	 ?>
	 <div class="sobre">
		 <h1>Sobre:</h1>
		 <p>O colégio Floriano Peixoto é um centro de ensino localizado no centrode Laranjeiras do sul. Com professores capacitados, a instituição pode oferecer ensinos na modalidade: fundamental II (6º ano ao 9º ano) e ensino médio.</p>
	 </div>
	 <div class="carttitle">
	 	<h3>
	 		Noticias
	 	</h3>
	 	<a href="noticias.php" class="plus"><i class="bi bi-plus-circle"></i></a>
	 </div>
	 <div class="noticias">
	 	<main class="carts">	
	 		<?php $result = $base->prepare("SELECT * from noticias order by id desc limit 3");
			$result->execute();
			$cont=1;
			while($_rowDados = $result->fetch(PDO::FETCH_OBJ)){ 
			if ($cont==1) {
			 	$cardid="um";
			 }else if ($cont==2) {
			 	$cardid="dois";
			 }else{
			 	$cardid="tres";
			 } ?>
	 
			<section class="cart" id="<?php echo $cardid; ?>">
				<h3><?php echo $_rowDados->titulo; ?></h3>
				<span><?php echo mb_strimwidth( $_rowDados->noticia, 0, 100, "...") ; ?>
				</span>
				<a href="conteudo.php?id=<?php echo $_rowDados->id; ?>&acao=exibir"><button>ler mais</button></a>
			</section>
			<?php $cont++; } ?>
			
		</main>
	 </div>
	 <div class="carttitle">
	 	<h3>
	 		Fotos
	 	</h3>
	 	<a href="fotos.php" class="plus"><i class="bi bi-plus-circle"></i></a>
	 </div>
	
	 <div>
	 	<section class="galeria">
	 		<?php $result = $base->prepare("SELECT * from imagens order by id desc limit 4"); 
	 				$result->execute();
	 				$cont=1;

	 				while($_rowDados = $result->fetch(PDO::FETCH_OBJ)){ 
	 					if ($cont==1) {
	 						$inputid="img-1";
	 					}else if ($cont==2) {
	 						$inputid="img-2";
	 					}else if ($cont==3) {
	 						$inputid="img-3";
	 					}else{
	 						$inputid="img-4";
	 					}

	 				
	 			?>
	 		<div class="galeria_item">
	 			
	 			<input type="radio" id="<?php echo $inputid; ?>" checked name="galeria" class="galeria-seletor">
	 			<img class="galeria-img" src="<?php echo $_rowDados->path; ?>">
	 			<label for="<?php echo $inputid; ?>"class="galeria-tumb">
	 				<img src="<?php echo $_rowDados->path; ?>">
	 			</label>
	 		</div>
	 		<?php $cont++; } ?>
	 		
	 	</section>
	 </div>
	 <?php include 'rodape.php'; ?>
</body>
</html>