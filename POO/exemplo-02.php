<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getMotor():float {
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno():int {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");  // Atribuição correta de modelo
$gol->setMotor("1.6");      // Atribuição de motor
$gol->setAno(2024);         // Atribuição de ano

print_r($gol->exibir());    // Exibe os dados do carro

echo "<br>";

var_dump($gol->exibir());

?>
