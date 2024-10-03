<?php 

define("DS", DIRECTORY_SEPARATOR);
define("DIR", __DIR__);

$pagina = "teste" . DS . "testedenovo" . DS . "teste.php"; // Caminho absoluto para teste.php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Teste link</title>
</head>
<body>
    <br>
    <!-- Link para teste.php usando caminho relativo -->
    <a href="teste/testedenovo/teste.php">Teste</a>
    <br>
    <!-- Link para teste.php usando a variável $pagina -->
    <a href="<?php echo str_replace(DS, '/', $pagina); ?>">Teste</a> 
</body>
</html>
