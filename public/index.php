<?php
require '../helpers.php';

$routes = [
  '/' => 'controllers/home.php',
  '/recipes' => 'controllers/recipes/index.php',
  '/recipes/add' => 'controllers/recipes/add.php',
  '404' => 'controllers/error/404.php'
];

//get the current uri ex) '/' or '/recipes'
$uri = $_SERVER['REQUEST_URI'];

//check the current uri is in our routes array and if it is then require it
//else load the 404 route
if (array_key_exists($uri, $routes)){
  require basePath($routes[$uri]);
}else{
  require basePath($routes['404']);
}

