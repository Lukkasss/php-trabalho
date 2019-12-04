<?php
include __DIR__ . '/../model/Temperatura.php';

class TemperaturaControl{
    function insert($obj){
        $temperatura = new Temperatura();
        return $temperatura->insert($obj);
    }

    function update($obj,$id){
        $temperatura = new Temperatura();
        return $temperatura->update($obj,$id);
    }

    function delete($obj,$id){
        $temperatura = new Temperatura();
        return $temperatura->delete($obj,$id);
    }

    function find($id = null){
        $temperatura = new Temperatura();
        return $temperatura->find($id);
    }

    function findAll(){
        $temperatura = new Temperatura();
        return $temperatura->findAll();
    }
}

?>