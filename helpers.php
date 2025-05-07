<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = ''){
  return __DIR__ . "/" . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name, $data = []){
  $viewPath = basePath("views/{$name}.view.php");

  if(file_exists($viewPath)){
    //import variables from the $data array, so the keys become variables we can call in the file
    //that called this function
    extract($data);

    require $viewPath;
  }else{
    echo "View {$viewPath} not found!";
  }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name){
  $partialPath = basePath("views/partials/{$name}.php");

  if(file_exists($partialPath)){
    require $partialPath;
  }else{
    echo "Partial {$partialPath} not found!";
  }
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}