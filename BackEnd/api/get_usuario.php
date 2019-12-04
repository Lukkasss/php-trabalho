<?php
include __DIR__ . '/../control/UsuarioControl.php';
$pessoaControl = new UsuarioControl();

header('Content-type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){
    try {
        $usuarioControl = new UsuarioControl();
        echo $usuarioControl->findByEmail($obj->email);
        http_response_code(200);
        echo json_encode($obj);
    }
    catch (PDOException $e) {
        http_response_code(400);
        echo json_encode(array("mensagem" => "Parâmetros Inválidos"));
    }
}
else {
    if ($pessoaControl->findAll()) {
        http_response_code(200);
        echo json_encode($pessoaControl->findAll());

    }
    else {
        http_response_code(400);
        echo json_encode(array("mensagem" => "Não encontrado"));
    }
}

?>