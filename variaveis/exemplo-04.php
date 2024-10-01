<?php 

$nome = (int)$_GET['a'];

//var_dump($nome);

$ip = $_SERVER['REMOTE_ADDR'];   //pegar o ip di usuário
$ip2 = $_SERVER['SCRIPT_NAME'];  //INFORMA QUAL ARQUIVO FOI ACESSADO

echo $ip;
echo "<br>";
echo $ip2;

 ?>