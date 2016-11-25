<?php

/**
 * Inclusão de nossos modelos de informações
 */
require_once('Model.php');

class Categoria extends Model
{
	/**
	 * Toda vez que utilizamos essa classe, esse método é chamado
	 */
	public function __construct()
	{
		// O método static "parrent", copia o método da classe Pai (Model)
		parent::__construct();
	}

	public function listar()
	{
		return $this->banco()->select('categoria', "*");
	}	
}