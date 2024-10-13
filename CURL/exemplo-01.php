<?php

$cep = "15604218";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);
