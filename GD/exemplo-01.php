<?php

// Verifica se a extensão GD está carregada
if (!extension_loaded('gd')) {
    die('A extensão GD não está habilitada.');
}

header("Content-type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "CURSO PHP", $red);

imagepng($image);

imagedestroy($image);


