<?php 

function ola($texto = "Mundo", $periodo){

	return "Olá $texto! $periodo!<br>";
}


echo ola("", "Bom dia");
echo ola("","Boa noite");
echo ola("Vitor","Boa tarde");
echo ola("Pinto","");

 ?>