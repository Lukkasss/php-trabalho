<?php
include __DIR__ . '/../model/Usuario.php';

class UsuarioControl{
	function insert($obj){
		$usuario = new Usuario();
		return $usuario->insert($obj);
	}

	function update($obj,$id){
        $usuario = new Usuario();
		return $usuario->update($obj,$id);
	}

	function delete($obj,$id){
        $usuario = new Usuario();
		return $usuario->delete($obj,$id);
	}

	function find($id = null){
        $usuario = new Usuario();
		return $usuario->find($id);
	}

    function findByEmail($email = null){
        $usuario = new Usuario();
        return $usuario->findByEmail($email);
    }

	function findAll(){
        $usuario = new Usuario();
		return $usuario->findAll();
	}
}

?>