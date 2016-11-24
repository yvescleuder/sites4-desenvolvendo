<?php

/**
 * Inclusão de nossos modelos de informações
 */
require_once('Model.php');

class Post extends Model
{
	/**
	 * Toda vez que utilizamos essa classe, esse método é chamado
	 */
	public function __construct()
	{
		// O método static "parrent", copia o método da classe Pai (Model)
		parent::__construct();
	}

	/**
	 * Faz a inserção de um novo post no banco
	 * @param  Array  $dados
	 * @return boolean
	 */
	public function inserir(Array $dados) : bool
	{
		$dados['datahora'] = date('Y-m-d H:i:s');
		return $this->banco()->insert('post', $dados);
	}	
}