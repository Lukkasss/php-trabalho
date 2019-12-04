<?php

include __DIR__.'/../model/Sensor.php';

class SensorControl{

    function insert($obj){
        $sensor = new Sensor();
        return $sensor->insert($obj);
    }

    function update($obj,$id){
        $sensor = new Sensor();
        return $sensor->update($obj,$id);
    }

    function delete($obj,$id){
        $sensor = new Sensor();
        return $sensor->delete($obj,$id);
    }

    function find($id = null){
        $sensor = new Sensor();
        return $sensor->find($id);
    }

    function findAll(){
        $sensor = new Sensor();
        return $sensor->findAll();
    }

}