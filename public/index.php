<?php

use Amaur\App\controller\HomePageController;

require_once "../vendor/autoload.php";

session_start();

if(isset($_GET['controller'])) {
    $controller = "Amaur\\App\\controller\\" . ucfirst(filter_var($_GET['controller'], FILTER_SANITIZE_STRING)) . "Controller";

    if(class_exists($controller)) {
        $controller = new $controller();

        if(isset($_GET['action'])) {
            $action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);

            try {
                $reflection = new ReflectionClass($controller);

                if($reflection->hasMethod($action)) {
                    $controller->action();
                }
                else {
                    $controller->homePage();
                }
            }
            catch (ReflectionException $e) {}
        }
        else {
            $controller->homePage();
        }
    }
    else {
        (new HomePageController())->homePage();
    }
}
else {
    (new HomePageController())->homePage();
}