<?php

$data = array(
    "empresa" => "Vitor treinamentos",
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);


echo "OK<br>";
echo json_encode($data);
