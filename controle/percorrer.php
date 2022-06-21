<?php

$conexao = require 'conexao.php';
if ($_POST['entrar']) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = 'SELECT email,senha FROM user';

    $consulta=$conexao->query($sql);

    $login = false;

    foreach ($consulta as $key => $valor) {
        if ($valor['email'] == $email && $valor['senha'] == $senha) {
            $login = true;
            // echo $login;
        }
    }
}
if ($login == true) {
    header('location:../index.php');
} else {
    header('location:../pagina');
}
