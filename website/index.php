<?php

require_once ("vendor/autoload.php");

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
    return $response->getBody()->write('Hello World!');
});

$app->get('/oi', function ($request, $response, $args) {
    return $response->getBody()->write(json_encode(date('Y-m-d H:i:s')));
});



$app->get('/hello/{name}', function ($request, $response, $args) {
    $name = $args['name'];
    return $response->getBody()->write('Hello, ' . $name);
});

$app->run();
