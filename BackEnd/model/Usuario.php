<?php
include __DIR__.'/Conexao.php';

class Usuario extends Conexao {

    private $senha;
    private $email;

    
    public function getSenha() {
        return $this->senha;
    }

   
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function insert($obj){    
    	$sql = "INSERT INTO usuario(senha,email) VALUES (:senha,:email)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('senha' , $obj->senha);
        $consulta->bindValue('email' , $obj->email);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE usuario SET senha = :senha, email = :email WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('senha' , $obj->senha);
        $consulta->bindValue('email' , $obj->email);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM usuario WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM usuario WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

    public function findByEmail($email = null){
        $sql =  "SELECT * FROM usuario WHERE email = :email";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('email',$email);
        $consulta->execute();
    }

	public function findAll(){
		$sql = "SELECT * FROM usuario";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>