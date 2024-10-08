<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Vitor Paulo");
$cad->setEmail("vtrpaulop@gmail.com");
$cad->setSenha("1234567");


$cad->registrarVenda();

 ?>