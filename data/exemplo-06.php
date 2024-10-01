<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");  //antes

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");	// somando + 15 dias


 ?>