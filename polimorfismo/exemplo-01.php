<?php 

abstract class Animal {

	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Anda";
	}
}

class Cachorro extends Animal {

	public function falar(){
		return "Late";
	}
}

class Gato extends Animal {

	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal {

	public function falar(){
		return "Pia";
	}

	public function mover(){
		return "Voa e " . parent::mover();	
	}
}

$pluto = new Cachorro();

echo "O Cachorro " . $pluto->falar() . "<br>";
echo "O Cachorro " . $pluto->mover() . "<br>";

echo "--------------------------------<br>";

$tom = new Gato();

echo "O Gato " . $tom->falar() . "<br>";
echo "O Gato " . $tom->mover() . "<br>";

echo "--------------------------------<br>";

$piupiu = new Passaro();

echo "O passaro " . $piupiu->falar() . "<br>";
echo "O passaro " . $piupiu->mover() . "<br>";


 ?>