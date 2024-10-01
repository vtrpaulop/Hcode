<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero);

        if ($resultado === false) {
            throw new Exception("CPF informado não é válido.", 1);
        }

        $this->numero = $numero;
    }

    public static function validarCPF($cpf):bool{
        // Verifica se o CPF está vazio
        if(empty($cpf)) {
            return false;
        }
     
        // Remove qualquer máscara (pontos, traços) e deixa apenas os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
    
        // Padroniza o CPF para ter 11 dígitos
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        // Verifica se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }
        
        // Verifica se todos os dígitos são iguais, o que invalida o CPF
        if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
        }
    
        // Calcula os dígitos verificadores do CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                // Acessa os caracteres corretamente usando colchetes
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

}

// Testando o CPF
var_dump(Documento::validarCPF("87867147241"));

?>
