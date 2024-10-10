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

$search = Usuario::search("v");

echo json_encode($search). "<br><br>";

echo "Carrega um usuario usando o login e a senha: <br>";

$usuario = new Usuario();

$usuario->login("user", "123456");

echo $usuario;

/*echo "<br><br>";
echo "Carrega um usuario usando INSERT<br>";
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();*/

echo $aluno . "<br><br>";

echo "Carrega um usuario usando UPDATE<br>";
$usuario = new Usuario();
$usuario->loadById(32);
$usuario->update("professor","123456");
echo $usuario . "<br><br>";

