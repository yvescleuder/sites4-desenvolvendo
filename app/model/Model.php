<?php

/**
 * Inclusão de nossos modelos de informações
 */
require_once('Database.php');

class Model extends Database
{
	/**
	 * Toda vez que utilizamos essa classe, esse método é chamado
	 */
	public function __construct()
	{
		// Este é um método da classe Pai (Database)
		$this->abrir();
	}
}