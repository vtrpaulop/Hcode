<?php

$images = scandir("images2");

$data = array();   

foreach ($images as $img) {
    if(in_array($img, array(".",".."))) continue;
$filename = "images" . DIRECTORY_SEPARATOR . $img;
$info = pathinfo($filename);
$info['size'] = filesize($filename);
$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
$info['url'] = "http://localhost/Hcode/DIR/" . str_replace("\\", "/", $filename);


array_push($data, $info);

}
echo json_encode($data);
