<?php

$config = require basePath("config/db.php");
$db = new Database($config);

//query db for all recipes marked as favorite using our query functiop we created in Database.php
$recipes = $db->query("SELECT * FROM recipes WHERE favorite = 1")->fetchAll();

//get the id for the recipe that was selected
$id = $_GET['id'] ?? '';

//set the param so we are not passing in the id directly since the user can edit this in the url
$params = [
  'id' => $id
];

// run the query and use the :id instead of $id
// and pass in the params so the query function can bind the correct id
$recipe = $db->query("SELECT * FROM recipes WHERE id = :id", $params)->fetch();

//TODO: add a new table that will store the ingredients based on the recipe id
//get our ingredients since they are currently put in as a comma seperated list
$ingredients = explode(',', $recipe->ingredients);

//load the view and pass in the recipe and ingredients
loadView('recipes/show', [ 'recipe' => $recipe, 'ingredients' => $ingredients ]);