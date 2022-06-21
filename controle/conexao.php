<?php
	$conexao = null;
	try{  
		$conexao = new PDO('mysql:host=localhost;dbname=projeto_macenaria','root', '');
		echo "Conectado com sucesso <br>";
	}catch(Exception $e){
		// echo $e.getMessage();
		die();
		// echo "F";
	}
	return $conexao;
?>