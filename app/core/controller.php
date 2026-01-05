<?php
namespace app\core;

class Controller {

    public static Controller $controller;
    public function __construct() {
        self::$controller = $this;
    }
    public function render($view, $params = []) {
        return Application::$app->router->renderView($view, $params);
    }
}

?>
<!--
View method to load views
Model method to load models
-->