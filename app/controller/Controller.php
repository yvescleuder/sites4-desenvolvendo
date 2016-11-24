<?php

/**
 * Inclusão da classes externas.
 */
require_once(__DIR__.'/../lib/Input.php');
require_once(__DIR__.'/../../vendor/wixel/gump/gump.class.php');

class Controller
{
	protected $input;
	protected $resposta;

	public function __construct()
	{
		$this->input = new Input;
		$this->resposta = "";
	}
}