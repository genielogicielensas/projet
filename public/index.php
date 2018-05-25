<?php

//echo "Requested URL : ". $_SERVER['QUERY_STRING'];

/*require "../App/Controllers/Posts.php";
require "../Core/Router.php";*/

require_once '../vendor/autoload.php';

set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


$router = new Core\Router();

$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('posts',['controller'=>'Posts','action'=>'index']);
//$router->add('newpost',['controller'=>'Posts','action'=>'addNew']);
//$router->add('posts/new',['controller'=>'Posts','action'=>'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

$router->add('private_images/{filename:[\w\.-]+}', ['controller' => 'Images', 'action' => 'show']); 

$router->add('admin/{controller}/{action}',['namespace' => 'Admin']);

$url = $_SERVER['QUERY_STRING'];

$router->dispatch($url);


?>