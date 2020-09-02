<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
	[
		$config->application->controllersDir,
		$config->application->modelsDir
	]
)->register();

$loader->registerNamespaces([
	'App\Validations' => APP_PATH.'/validations/',
]);

