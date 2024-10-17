<?php   

define("SECRET_IV", pack("a16", "senha")); // Chave de 16 bytes
define("SECRET", pack("a16", "senha")); // Chave de 16 bytes

$data = ["nome" => "Hcode"];

$openssl = openssl_encrypt(json_encode($data), 'aes-128-cbc', SECRET, 0, SECRET_IV);
echo "Criptografado: ";
echo $openssl;
echo "<br>";
echo "Descriptografado: ";
$openssl = openssl_decrypt($openssl, 'aes-128-cbc', SECRET, 0, SECRET_IV);

echo $openssl;