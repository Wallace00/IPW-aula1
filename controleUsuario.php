<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];

include("usuario1.php");

$usuario = new Usuario();

$usuario->addUsuario($nome, $email, $login, $senha);

print_r($usuario);

?>
