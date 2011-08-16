<?php

define('LI3_WORDPRESS_PATH', dirname(__DIR__));

require(LI3_WORDPRESS_PATH . '/config/bootstrap/error.php');

use \lithium\action\Dispatcher;

Dispatcher::applyFilter('_callable', function($self, $params, $chain) {
	
	$params['options']['render']['paths']['template'] = '{:library}/views/{:controller}/{:template}.html.php';
	$params['options']['render']['paths']['layout'] = LITHIUM_APP_PATH . '/views/layouts/default.html.php';
	$params['options']['render']['paths']['element'] = '{:library}/views/elements/{:template}.{:type}.php';
	$controller = $chain->next($self, $params, $chain);
	return $controller;
	
});

?>