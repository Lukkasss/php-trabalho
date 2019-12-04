<?php
include __DIR__ . '/../control/SensorControl.php';
$sensorControl = new SensorControl();

header('Content-type: application/json');

if ($sensorControl->findAll()) {
    http_response_code(200);
    echo json_encode($sensorControl->findAll());


}
else {
    http_response_code(400);
    echo json_encode(array("mensagem" => "Não encontrado"));
}
?>