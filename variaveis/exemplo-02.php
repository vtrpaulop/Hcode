<?php 

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "Vitor";
$sobreNome = "Paulo";


echo $anoNascimento;
echo "<br>";
echo $nome1;
echo "<br>";
echo $nome1 . " " . $sobreNome;

exit; //encerrando o código
unset($nome1); //matando a variavel
echo $nome1;

 ?>