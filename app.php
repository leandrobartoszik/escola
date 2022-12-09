<?php 
	include 'conexao.php';
	$acao = $_REQUEST['acao'];
	if ($acao==exibir)  {
			// code...
			
		if (isset($_FILES['imagem'])) {
			$arquivo = $_FILES['imagem'];
			if ($arquivo[error]) { 
				die('Falha ao enviar o arquivo');
			}
			if ($arquivo['size'] > 4154304) {
				die('Aquivo muito grande!! maximo 4mb');
			}
			$pasta = "arquivos/";
			$nomedoarquivo = $arquivo['name'];
			$extensao = explode('.', $nomedoarquivo);
			$extensao = end($extensao);
			$novonomedoaquivo = uniqid();
			$path = $pasta . $nomedoarquivo ;
			$titulo = $_POST['titulo'];
			$deucerto = move_uploaded_file($arquivo["tmp_name"], $path);
			if ($deucerto) {
				try{
				$result = $base->prepare("INSERT INTO imagens (nome, path, titulo) VALUES ('$novonomedoaquivo','$path','$titulo');");
				
					$result->execute();
				}catch(Exception $e){
					echo 'Error: ' . $e->getMessage();
				}
				
				echo "Arquivo enviado com sucesso";
				header("Refresh: 4;url=painel.php");
			}else{
				echo "Falha ao enviar o arquivo";
			}
			 	
		
		}
	}elseif ($acao==login) {
		session_start();
		if (isset($_POST['nome']) && !isset($_POST['nome']) && isset($_POST['senha']) && !isset($_POST['senha'])) {
			$login = addslashes($_POST['nome']);
			$senha = addslashes($_POST['senha']);
			echo "ta indo";
		}
		$dados = filter_input_array(INPUT_POST);
		
		if (!empty($_POST['entrar'])) {
			try {
				
				
				
				$querry_nome = "SELECT id,nome,senha FROM usuarios WHERE nome = :nome LIMIT 1";

				$result_usuario = $base->prepare($querry_nome);
				$result_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);

				$result_usuario->execute();
				if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
					$row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
					if ($_POST['senha'] == $row_usuario['senha'] AND $_POST['nome'] == $row_usuario['nome']) {
						
					

					$_SESSION['nome'] = $row_usuario['nome'];
					echo "Login efetuado com sucesso! Logo tu serás redirecionado...";
					header("Refresh: 4;url=intermedio.php");
					}
				}else{
					echo"erro: Usuario ou senha não encontrados";
					header("Refresh: 4;url=login.php");
				}
				
				///'". $dados['nome'] ."'
			}catch(Exception $e){
					echo 'Error: ' . $e->getMessage();
			}
		}
	}elseif ($acao=="logout") {
		session_start();
		unset($_SESSION['nome']);
		session_destroy();
		echo "Fazendo logout, por favor aguarde";
		header("Refresh: 4;url=login.php");
	}elseif ($acao=="cadastrarimg") {
		
		$titulo = $_POST['titulo'];
		$noticia = $_POST['noticia'];
		try{
			$result = $base->prepare("INSERT INTO `noticias` set titulo = '$titulo',
																 noticia = '$noticia'
																 
									");

			$result->execute();
			
			echo "Gravado com sucesso!! logo tu seras redirecionado";
			header("Refresh: 5;url=imagem.php");
		} catch(PDOException $e) {
		   echo 'Error: ' . $e->getMessage();
		}
		
	}


 ?>