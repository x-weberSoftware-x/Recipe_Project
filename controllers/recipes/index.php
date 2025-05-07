<?php

$config = require basePath("config/db.php");
$db = new Database($config);

//query db for all recipes using our query functiop we created in Database.php
$recipes = $db->query("SELECT * FROM recipes")->fetchAll();

loadView('recipes/index', [ 'recipes' => $recipes ]);