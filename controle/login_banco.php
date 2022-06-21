<?php 
    $pdo = require 'conexao.php';
    $sql = 'select * from login';

    foreach ($pdo->query($sql) as $key => $valor){
        if (($_POST['nome']==$valor['email']) && ($_POST['senha']==$valor['senha'])) {
            echo "Login realizado";
        }else{
            echo "faça o cadastro";
        }
    }
?>