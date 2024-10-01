<?php 

class endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct (){

		//var_dump("DESTRUIR");
	}

	public function __toString(){

		return $this->logradouro . ", ".$this->numero. ", ".$this->cidade;

	}
}


$meuEndereco = new Endereco("Rua Geraldo Filetti", "1948", "Fernandópolis");

echo $meuEndereco;

//var_dump($meuEndereco);

//unset($meuEndereco);

 ?>