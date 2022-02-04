# Router-Nurassyl
1. Классты жариялаган кезде конструктордын комегимен ошибка беретин страницаны косамыз

include '../src/router.php';
$router = new Router('../templates/404.php');

2.Озимиз калагандай маршруттын атын жане сол файлга дейинги жолды жазамыз. Готовый приложение келеси куйдегидей болады

$router->add('', '../templates/homepage.php');
$router->add('post', '../templates/post.php');
$router->add('about', '../templates/about.php');
$router->run();
