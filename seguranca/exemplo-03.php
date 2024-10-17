<?php

$pasta = "arquivos";
$permissao = 0775; // Definindo as permissões (sem aspas, pois é um número)

// Verifica se o diretório existe
if (!is_dir($pasta)) {
    // Cria a pasta com as permissões especificadas
    mkdir($pasta, $permissao);
}

?>
