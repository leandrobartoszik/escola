<?php
	$host = 'localhost:8889';
	$usuario = 'root';
	$senha = 'root';
	$banco = 'floriano';
	$port = '8888';

	try {
		$base = new PDO('mysql:host='.$host.';dbname='.$banco, $usuario, $senha);
	    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage('denieuskkk');
	}
	?>