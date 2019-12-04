<?php
include __DIR__ . '/../control/TemperaturaControl.php';
$temperaturaControl = new TemperaturaControl();

header('Content-type: application/json');

if ($temperaturaControl->findAll()) {
    http_response_code(200);
    echo json_encode($temperaturaControl->findAll());


}
else {
    http_response_code(400);
    echo json_encode(array("mensagem" => "Não encontrado"));
}
?>