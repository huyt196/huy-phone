<?php
error_reporting(E_ERROR | E_PARSE);
require_once 'define.php';
function my_autoloader($class)
{
    if (strpos($class, 'CI_') !== 0) {
        if (file_exists($file = LIBRARY_PATH . $class . '.php')) {
            require_once $file;
        }
    }
}

spl_autoload_register('my_autoloader');
//	function __autoload($clasName){
//		require_once LIBRARY_PATH . "{$clasName}.php";
//	}

Session::init();

$bootstrap = new Bootstrap();
$bootstrap->init();
?>