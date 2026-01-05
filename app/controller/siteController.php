<?php

namespace app\controller;
use app\core\Application;
use app\core\Controller;

class SiteController extends Controller {

    public static function courses() {
        $params = [
            'courses' => [
                ['id' => 1, 'name' => 'Mathematics 101', 'description' => 'An introduction to Mathematics.'],
                ['id' => 2, 'name' => 'Physics 101', 'description' => 'Basics of Physics.'],
                ['id' => 3, 'name' => 'Chemistry 101', 'description' => 'Fundamentals of Chemistry.'],
            ]
        ];

        return Application::$app->router->renderView('displayCourses', $params);
    }

    public static function profile() {
        return Application::$app->router->renderView('displaySelf');
    }

    public static function users() {
        return Application::$app->router->renderView('displayUsers');
    }

    public static function login() {
        return Application::$app->router->renderView('displayLogin');
    }

    public static function handleLogin() {
        // Handle authentication in the authController
    }
}

?>