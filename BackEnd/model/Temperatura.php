<?php

include __DIR__.'/Conexao.php';

class Temperatura extends Conexao{

    private $leitura;
    private $sensorId;
    private $data;

    /**
     * @return mixed
     */
    public function getLeitura()
    {
        return $this->leitura;
    }

    /**
     * @param mixed $leitura
     */
    public function setLeitura($leitura)
    {
        $this->leitura = $leitura;
    }

    /**
     * @return mixed
     */
    public function getSensorId()
    {
        return $this->sensorId;
    }

    /**
     * @param mixed $sensorId
     */
    public function setSensorId($sensorId)
    {
        $this->sensorId = $sensorId;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function insert($obj){
        $dt = new DateTime($obj->dataLeitura);
        $sql = "INSERT INTO leitura(leitura,sensorId, dataLeitura) VALUES (:leitura,:sensorId,:dataLeitura)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('leitura',  $obj->leitura);
        $consulta->bindValue('sensorId' , $obj->sensorId);
        $consulta->bindValue('dataLeitura' , $dt->format('Y-m-d H:i:s'));
        return $consulta->execute();

    }

    public function update($obj,$id = null){
        $sql = "UPDATE leitura SET leitura = :leitura, sensorId = :sensorId, dataLeitura = :dataLeitura WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('leitura', $obj->leitura);
        $consulta->bindValue('sensorId' , $obj->sensorId);
        $consulta->bindValue('dataLeitura' , $obj->dataLeitura);
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM leitura WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function find($id = null){
        $sql =  "SELECT * FROM leitura WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function findAll(){
        $sql = "SELECT * FROM leitura";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }


}