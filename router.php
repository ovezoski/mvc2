<?php

class Router
{
  protected $routes = [];

  public function get($url, $controller) {
    $this->routes["GET"][$url] = $controller;
  }

  public function post($url, $controller)
  {
    $this->routes["POST"][$url] = $controller;
  }

  public  function direct($url, $method){
    if(array_key_exists($url, $this->routes[$method] )){
      return $this->routes[$method][$url];

    }else{
      throw new Exception("No such path: ".$url);
    }

  }

}


 ?>
