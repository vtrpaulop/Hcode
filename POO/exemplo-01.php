<?php 

class Pessoa {

	public $nome;//atributo

	public function falar (){//método

		return "O meu nome é " . $this->nome;
	}


}

$vitor = new Pessoa();
$vitor->nome = "Vitor Paulo";
echo $vitor->falar();
 
 ?>