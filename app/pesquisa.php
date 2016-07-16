<?php

require '../vendor/autoload.php';


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$usuario = $request->nome;

if ($usuario == NULL) {
    echo "Nenhum usuario digitado";
} else {

    $client = new \Github\Client();
    $repos = $client->api('user')->repositories($usuario);
    echo json_encode($repos);
 
}