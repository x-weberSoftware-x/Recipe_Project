<?php

class Router
{

  protected $routes = [];

  //helper method to register routes
  public function registerRoute($method, $uri, $controller)
  {

    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller
    ];
  }

  /**
   * Add a GET route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */
  public function get($uri, $controller)
  {

    //add the route to our routes array
    $this->registerRoute('GET', $uri, $controller);
  }

  /**
   * Add a POST route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */
  public function post($uri, $controller)
  {

    //add the route to our routes array
    $this->registerRoute('POST', $uri, $controller);
  }

  /**
   * Add a PUT route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */
  public function put($uri, $controller)
  {

    //add the route to our routes array
    $this->registerRoute('PUT', $uri, $controller);
  }

  /**
   * Add a DELETE route
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */
  public function delete($uri, $controller)
  {

    //add the route to our routes array
    $this->registerRoute('DELETE', $uri, $controller);
  }

  /**
   * Load error page
   * 
   * @param int $httpCpde
   * @return void
   */
  public function error($httpCode = 404)
  {

    http_response_code($httpCode);
    loadView("error/{$httpCode}");
    exit;
  }

  /**
   * Route the request
   * 
   * @param string $uri
   * @param string $method
   * @return void
   */
  public function route($uri, $method)
  {

    //since we are getting the actual uri and method that the user is trying to access
    //we need to loop through all our routes and find the matching one if it exists
    //and load the controller
    foreach ($this->routes as $route) {

      if ($route['uri'] === $uri && $route['method'] === $method) {
        //we found a match load that routes controller
        require basePath($route['controller']);
        //return out of the function since we have loaded our match
        return;
      }
    }

    //got through the whole for each loop wich means we did not find a matching route
    //so load our error view with a 404 error code
    $this->error();
  }
}
