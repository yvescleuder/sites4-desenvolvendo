<?php

/**
 * Inclusão de nossos controladores
 */
require_once('Controller.php');
/**
 * Inclusão de nossos modelos de informações
 */
require_once(__DIR__.'/../model/Categoria.php');

class CategoriaController extends Controller
{
	private $categoria;
	/**
	 * Toda vez que utilizamos essa classe, esse método é chamado
	 */
	public function __construct()
	{
		// O método static "parrent", copia o método da classe Pai (Controller)
		parent::__construct();
		$this->categoria = new Categoria();
	}

	public function listar()
	{
		return $this->categoria->listar();
	}
}