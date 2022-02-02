<?php

class Router {
  protected $routers = [];
  protected $route = [];
  protected $page404 = '';

  public function __construct(string $page404) {
    $this->page404 = $page404;
  }

  public function debug($src) {
    echo "<pre>";
    var_dump($src);
    echo "</br>";
  }

  public function add($url, $file) {
    $this->routers[$url] = [ 'file' => $file ];
  }

  protected function match() {
    $url = trim($_SERVER['REQUEST_URI'], '/');
    foreach($this->routers as $route => $params) {
      if ($route === $url){
        $this->route = $params;
        return true;
      }
    }
    return false;
  }

  public function run() {
   if ($this->match()) {
     if (file_exists($this->route['file'])) {
       include $this->route['file'];
     } else {
       include $this->page404;
     }
   } else {
    include $this->page404;
   }
  }

  // public function match() {
  //   $url =  explode(' ', trim($_SERVER['REQUEST_URI'], '/'));
  //   // var_dump($url);
  //   // $this->debug($this->routers);
  //   echo "<br>";
  //   foreach($this->routers as $route => $params) {
  //     if (preg_match($route, $url, $matches)) {
  //        foreach($matches as $key => $match) {
  //          $this->debug($match);
  //        }
  //     }
  //   }
  // }

  // public function run() {
  //   $route = $_SERVER['REQUEST_URI'];
  //   $this->debug($route);
  //   $this->debug($this->routers);
  //   foreach($this->routers as $router => $params) {
  //     $this->debug($router);
  //     $this->debug($params['file']);
      
  //   } 
  // }

}