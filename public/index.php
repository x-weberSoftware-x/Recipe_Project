<?php
require '../helpers.php';
require basePath('Router.php');

//define router first so we can access the variable in routes.php that we are requiring next
$router = new Router();

//get our routes
$routes = require basePath('routes.php');

//get the current uri ex) '/' or '/recipes'
$uri = $_SERVER['REQUEST_URI'];

//get the method from the server i.e. POST, GET, etc
$method = $_SERVER['REQUEST_METHOD'];

//call our route function with the uri and method for the current page being accessed
$router->route($uri, $method);