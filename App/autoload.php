<?php

spl_autoload_register(function($class){
	require_once "../App/Config/{$class}.php";
});

$GLOBALS['path'] = "/framework-awp/public/css/";

function route($url) {
	return "http://localhost:8888/framework-awp/public/$url";
}



 ?>
