<?php 

$nome = "Vitor";

function teste() {
	global $nome;
	echo $nome;


}

function teste2() {
	$nome = "Paulo";
	echo $nome . " agora no teste2";

}

teste();
teste2();

?>
