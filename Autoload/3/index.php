<?php

use Service\ExemploService;
use Helper\ExemploHelper;
use Validator\ExemploValidator;
use Pessoa\Pessoa;
use Animais\Animais;
use Carro\Carro;
use Mouse\Mouse;




define("DS", DIRECTORY_SEPARATOR);
define("DIR", __DIR__);

/* Carregar o autoloader */
require 'autoload.php';

// Instanciar as classes
$ExemploService = new ExemploService();
$ExemploHelper = new ExemploHelper();
$ExemploValidator = new ExemploValidator();
$Pessoa = new Pessoa(); 
$Animais = new Animais();
$Carro = new Carro();
$Mouse = new Mouse();



