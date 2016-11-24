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
		
		$valido = GUMP::is_valid($dados, array(
    		'titulo' => 'required',
    		'autor' => 'required'
		));

		if($valido !== true)
		{
		    foreach($valido as $key => $value)
		    {
		    	$this->resposta .= $value."<br />";
		    }

		    return $this->resposta;
		}
		else
		{
			if($this->post->inserir($dados))
				$this->resposta = ["success" => true, "text" => "Post cadastrado com sucesso!"];
			else
				$this->resposta = ["success" => false, "text" => "Erro ao cadastrar o post!"];
			
			return $this->resposta;
		}
	}
}