<?php

/**
 * Inclusão de todos os nossos controladores
 */

$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

switch($acao)
{
	case 'alguma_coisa':
		break;

	default:
		echo 'Nenhuma ação encontrada.';
		break;
}