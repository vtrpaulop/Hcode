<?php 

$pessoas = array();

array_push($pessoas, array(
'nome' => 'Vitor',
'idade'=>34
));

array_push($pessoas, array(
'nome' => 'Jaqueline',
'idade'=>30
));

echo json_encode($pessoas);


 ?>