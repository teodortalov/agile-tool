<?php
class DATABASE_CONFIG {

	public $default = array(
	);
	
	public $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'gali4e',
		'database' => 'agile-tool',
	);
	
	public $local = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'agile-tool',
	);
	public function __construct(){
		$mode = strtolower(APP_MODE);
		$this->default = $this->{$mode};
	}
}	
