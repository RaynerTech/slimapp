<?php

use \Psr\Http\Message\ServeRequestInterface as rest;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\app;

$app->get('/postagens', function($request, Response $response){

    $response->getBody()->write("Listagens de Postagens");
    //echo "Lisntagens De Postagens";

    return; $response;
});



/*
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

//rotas
$app->group('/v1/usuarios', function(){

    echo "Listagem de usuarios ";

    $this->get('/usuarios', function(){

        echo "Listagem de postagens ";
    
    
    });

    $this->get('/postagens', function(){

        echo "Listagem de postagens ";
    
    
    });


});

*/

//resquest Post
$app->post('/usuarios/adiciona', function($request, Response $response){

    //Recuperando post ($_Post)
    $post = $request->getParsedBody();
    $nome = $post['nome'];
    $email = $post['email'];

    return $response->getBody()->write($nome . "-" . $email);
    
});

$app->run();