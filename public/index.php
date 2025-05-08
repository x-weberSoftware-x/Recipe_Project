<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

//define router first so we can access the variable in routes.php that we are requiring next
$router = new Router();

//get our routes
$routes = require basePath('routes.php');

//get the current uri ex) '/' or '/recipes', 
//and parse the url to not include anything after the ? so we go to the right path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//get the http method from the server i.e. POST, GET, etc
$method = $_SERVER['REQUEST_METHOD'];

//call our route function with the uri and method for the current page being accessed
//so we can route our request
$router->route($uri, $method);