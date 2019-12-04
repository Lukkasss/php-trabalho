<?php
include __DIR__.'/Conexao.php';

class Sensor extends Conexao{

    private $endereco;
    private $resolucao;


    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getResolucao()
    {
        return $this->resolucao;
    }

    /**
     * @param mixed $resolucao
     */
    public function setResolucao($resolucao)
    {
        $this->resolucao = $resolucao;
    }

    public function insert($obj){
        $sql = "INSERT INTO sensor(endereco, resolucao) VALUES (:endereco,:resolucao)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('endereco',  $obj->endereco);
        $consulta->bindValue('resolucao' , $obj->resolucao);
        return $consulta->execute();

    }

    public function update($obj,$id = null){
        $sql = "UPDATE sensor SET endereco = :endereco, resolucao = :resolucao WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('endereco', $obj->endereco);
        $consulta->bindValue('resolucao' , $obj->resolucao);
        return $consulta->execute();
    }

    public function delete($obj,$id = null){
        $sql =  "DELETE FROM sensor WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function find($id = null){
        $sql =  "SELECT * FROM sensor WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
    }

    public function findAll(){
        $sql = "SELECT * FROM sensor";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }



}