<?php

require_once "config.php";


echo "Carrega um usuário apenas: <br>";
$root = new Usuario();
$root->loadById(3);
echo ($root). "<br>";

echo "<br>";

echo "Carrega uma lista de usuarios: <br>";

$lista = Usuario::getList();

echo json_encode($lista). "<br>";

echo "<br>";

echo "Carrega uma lista de usuario buscando pelo login: <br>";

$search = Usuario::search("j");

echo json_encode($search). "<br><br>";

echo "Carrega um usuario usando o login e a senha: <br>";

$usuario = new Usuario();

$usuario->login("root", "!@#$");

echo $usuario;

