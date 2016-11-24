<?php

/**
 * Inclusão de todos os nossos controladores
 */
require_once(__DIR__.'/../controller/PostController.php');

$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

switch($acao)
{
	case 'inserirPost':
		$post = new PostController;
		$resultado = $post->inserir();
		echo json_encode($resultado);
		break;

	default:
		echo 'Nenhuma ação encontrada.';
		break;
}