<?php 
namespace DEV;

use DEV\Model;

class Usuario extends Model {
	
	private $table = "usuarios";
	protected $fields = [
		"id",
		"nome",
		"email",
		"telefone",
		"data_cadastrado"
	];

	function insertUsuario($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateUsuario($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteUsuario($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectUsuario($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
}