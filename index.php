<?php
/*
 * index
 * 
 * Deps:
 * Doctrine{
 *  pear channel-discover pear.doctrine-project.org
 *  pear install --alldeps doctrine/DoctrineORM
 * }
 */
define('APP_PATH', realpath('.'));
header('Access-Control-Allow-Origin: *');
//load namespaces
use \com\ltd\controllers as Contr;

//start session
session_start();

//set paths
$_paths = array(
    APP_PATH,
    get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $_paths));

//class autoloader based on url
function __autoload($className) {
    require_once str_replace('\\', '/', $className) . '.php';;
}

//grab components of the url in order to pass them to the controller
list($prefix, $_controller, $_action) = explode('/', strtolower($_SERVER['REQUEST_URI']));

//echo $_controller;
//echo $_action;

switch ($_controller) {
    case "":
    case "main":
        $_controller = "main";
        $indexController = new Contr\mainController($_controller, $_action); //sends the contID and actionID to the 
        break;
    case "clear":
        $indexController = new Contr\mainController($_controller, $action);
        break;
}

$indexController->renderTemplate();