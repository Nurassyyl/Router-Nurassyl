<?php

include '../src/router.php';

$router = new Router('../templates/404.php');
$router->add('', '../templates/homepage.php');
$router->add('post', '../templates/post.php');
$router->add('about', '../templates/about.php'); 
$router->run();


























// var_dump($_SERVER['REQUEST_URI']);

// $routers = [
//   '/' => '../templates/post.php',
//   '/about' => '../templates/about.php'
// ];

// $route = $_SERVER['REQUEST_URI'];
// $file = 'arman';
// $a = $routers[$route] = ['file' => $file];
// var_dump($arman);die;
// if (array_key_exists($route, $routers)) {
//   include "$routers[$route]";
// } else {
//   include "../templates/404.php";
// }