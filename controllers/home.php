<?php

$config = require basePath("config/db.php");
$db = new Database($config);

//query db for all recipes marked as favorite using our query functiop we created in Database.php
$recipes = $db->query("SELECT * FROM recipes WHERE favorite = 1")->fetchAll();

loadView('home', [ 'recipes' => $recipes ]);
