<?php

$image = imagecreatefromjpeg("imgs/base.jpg");

if (!$image) {
    die("Falha ao carregar a imagem.");
}

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: " . date("d/m/Y")), $titleColor);

header("Content-type: image/png");
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);
imagedestroy($image);
?>
