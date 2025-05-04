<?php

//set up our routes

//our GET routes
$router->get('/', 'controllers/home.php');
$router->get('/recipes', 'controllers/recipes/index.php');
$router->get('/recipes/add', 'controllers/recipes/add.php');