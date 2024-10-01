<?php 

$json = 
'[{"nome":"Vitor","idade":34},{"nome":"Jaqueline","idade":30}]';

$data = json_decode($json, true);

var_dump($data);

 ?>