<?php

$link = "https://conteudo.imguol.com.br/c/home/layout/vueland/icons/brand/uol-logo-full.svg?v9";
$content = file_get_contents($link);

$parse = parse_url($link);
$basename = basename($parse['path']);

$file = fopen($basename, 'w+');

fwrite($file, $content);

fclose($file);


?>

<img src="<?=$basename ?>" alt="">