<?php
namespace app\core;

class Controller {

    public static Controller $controller;
    public string $layout = 'main';
    public function __construct() {
        self::$controller = $this;
    }
    public function render($view, $params = []) {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }
}

?>
<!--
View method to load views
Model method to load models
-->