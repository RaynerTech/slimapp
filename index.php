<?php

require 'vendor/autoload.php';

$app = new \Slim\app;


$app->get('/usuarios', function(){

    echo "Listagem de postagem ";

});

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){ //com colchetes [] seria opcional 


    $ano = $request->getAttribute('ano');
    $mes = $request->getAttribute('mes');
    // vberificar se ID é valido no Banco de dados

    echo "Listagem de postagens Ano :  " . $ano . " mes: " . $mes;
});

    $app->get('/lista/{itens:.*}', function($request, $response){ 

        $itens = $request->getAttribute('itens');
        
        // vberificar se ID é valido no Banco de dados
    
        //echo $itens;
        var_dump(explode("/", $itens));

});

    $app->get('/blog/postagens/{id}: ' , function($request, $response){

        echo 'lista de postagens';
})->setName("blog");

    $app->get('/meusite', function($request, $response){
        $retorno = $this->get("router")->pathFor("blog", ["id" => "5"] );

        echo $retorno;
});

$app->get('/v1/usuarios', function(){

    echo "Listagem de usuarios ";

});

$app->get('/v1/usuarios', function(){

    echo "Listagem de postagens ";

});

$app->run();