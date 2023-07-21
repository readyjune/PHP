<?php
//require_once 'greeting.php';
spl_autoload_register(function ($path){
	$path = str_replace('\\', '/', $path);
	$path = $path.'.php';
	var_dump("path: {$path}");
	require_once $path;;
});



use \greeting\en\Hi as HiEn, \greeting\ko\Hi as HiKo;

new HiEn();
new HiKo();
?>

