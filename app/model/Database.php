<?php

/**
 * Arquivo de de conexão com o banco de dados
 * Plugin: Medoo
 * Website: medoo.in
 */
require_once(__DIR__.'/../../vendor/catfan/medoo/medoo.php');

class Database 
{
	private $database_name = 'sistema_de_post';
	private $server = '127.0.0.1';
	private $username = 'root';
	private $password = '';
	private $charset = 'UTF8';
	private $port = '3306';
	private $prefix = '';
	private $option = [
		PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	];
	protected $database;

	public function abrir()
	{
		$this->database = new medoo([
			'database_type' => 'mysql',
			'database_name' => $this->database_name,
			'server' => $this->server,
			'username' => $this->username,
			'password' => $this->password,
			'charset' => $this->charset,
			'port' => $this->port,
			'prefix' => $this->prefix,
			'option' => $this->option
		]);
	}

	public function banco()
	{
		return $this->database;
	}
}