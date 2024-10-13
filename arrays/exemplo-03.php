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

array_push($pessoas, array(
    'nome' => 'YAYA',
    'idade'=>3
    ));

print_r($pessoas[2]['nome']);


 ?>