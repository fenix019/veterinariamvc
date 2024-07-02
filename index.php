<?php

require_once 'config/config.php'; 
spl_autoload_register(function ($className) {
    require_once 'app/' . $className . '.php'; 
});


$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        
        require_once 'app/controller/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
      
        require_once 'app/controller/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;

    case 'register':
        
        require_once 'app/controller/AuthController.php';
        $controller = new AuthController();
        $controller->register();
        break;

    default:
       
        http_response_code(404);
        echo 'Página no encontrada';
        break;
}
