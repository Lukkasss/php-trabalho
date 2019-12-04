<?php

header("Access-Control-Allow-Origin: *");
define('PASTAPROJETO', 'TrabalhoFinal/BackEnd');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'PUT':
            $answer = "update";
            break;
        case 'POST':
            $answer = "post";
            break;
        case 'GET':
            $answer = "get";
            break;
        case 'DELETE':
            $answer = "delete";
            break;
        default:
            handle_error($method);
            break;
    }
    return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/'.PASTAPROJETO:
        require __DIR__ . '/api/api.php';
        break;
    case '/'.PASTAPROJETO.'/usuario' :
        require __DIR__ . '/api/'.$answer.'_usuario.php';
        break;
    case '/'.PASTAPROJETO.'/sensor' :
        require __DIR__ . '/api/'.$answer.'_sensor.php';
        break;
    case '/'.PASTAPROJETO.'/temperatura' :
        require __DIR__ . '/api/'.$answer.'_temperatura.php';
        break;
    default:
        //require __DIR__ . '/api/404.php';
        break;
}