<?php

/**
 * Inclusão de nossos controladores
 */
require_once('Controller.php');
/**
 * Inclusão de nossos modelos de informações
 */
require_once(__DIR__.'/../model/Post.php');

class PostController extends Controller
{
	/**
	 * Toda vez que utilizamos essa classe, esse método é chamado
	 */
	public function __construct()
	{
		// O método static "parrent", copia o método da classe Pai (Controller)
		parent::__construct();
		$this->post = new Post();
	}

	/**
	 * Verificação e validação de um novo post a ser inserido
	 * @return array
	 */
	public function inserir()
	{
		$dados = $this->input->get("post");
		
		if($this->post->inserir($dados))
		{
			$this->resposta = "Post cadastrado com sucesso!";
		}
		else
		{
			http_response_code(422);
			$this->resposta = "Erro ao cadastrar o post!";
		}
		
		return $this->resposta;
	}
}