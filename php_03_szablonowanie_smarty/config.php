<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/szablonowanie_projekt');
define('_APP_URL', _SERVER_URL._APP_ROOT);
//inkluduj plik z tej ścieżki np. C:/xampp/htdocs/php_zajecia/php_02_kalk_kred_ochr_dost
define("_ROOT_PATH", dirname(__FILE__));

/*function out(&$param){
	if (isset($param)){
		echo $param;
	}
}*/
