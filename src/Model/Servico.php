<?php 
namespace App\Model;

use App\Model\Model;

class Servico extends Model {
	
	private $table = "servicos";
	protected $fields = [
		"id",
		"titulo",
		"url_amigavel",
        "descricao",
		"imagem_principal",
		"data_cadastro",
        "status"
	];

	function insertServico($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateServico($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteServico($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectServico($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
}