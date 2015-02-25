<?php

use System\Application\App;

error_reporting(E_ALL | E_ERROR | E_NOTICE | E_WARNING);
ini_set('display_errors', TRUE);
spl_autoload_register(function($class) {
	$file = str_replace('\\', '/', $class) . '.php';
	require_once $file;
});

App::init();