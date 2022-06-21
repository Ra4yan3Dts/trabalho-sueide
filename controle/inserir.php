<?php

$pdo = require 'conexao.php';
$sql = 'insert into user(nome, email, Senha,telefone,sexo, data_nasc,cidade,estado,endereco ) value(?, ?, ?, ?, ?, ?, ?, ?, ?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['nome']);
$prepare->bindParam(2, $_POST['email']);
$prepare->bindParam(3, $_POST['senha']);
$prepare->bindParam(4, $_POST['telefone']);
$prepare->bindParam(5, $_POST['sexo']);
$prepare->bindParam(6, $_POST['data_nascimento']);
$prepare->bindParam(7, $_POST['cidade']);
$prepare->bindParam(8, $_POST['estado']);
$prepare->bindParam(9, $_POST['endereco']);


$prepare ->execute();

echo $prepare ->rowCount();