<?php

require 'vendor/autoload.php';

$app = new \Slim\app;


$app->get('/postagem', function(){

    echo "Ola mundo";

});

$app->run();