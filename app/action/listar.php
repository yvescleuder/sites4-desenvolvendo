<?php

/**
 * Inclusão de todos os nossos controladores
 */
require_once(__DIR__.'/../controller/CategoriaController.php');


$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

switch($acao)
{
	case 'listarCategorias':
		$categoria = new CategoriaController();
		echo json_encode($categoria->listar());
		break;

	default:
		echo 'Nenhuma ação encontrada.';
		break;
}