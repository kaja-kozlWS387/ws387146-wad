<?php

namespace app\core;
use app\controllers;
class Router
{
    public Request $request;
    public Response $response;
    // Maps a request method and path to a callback function
    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    // Define a GET route, whenever it gets $path, the $callback is called (from routes mapping)
    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    // Define a POST route, same as above but can handle form data
    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    // Resolve the current request (send back the response)
    public function resolve() {

        # Parses the request to get the path and method
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
        
        # Error if no route found in the mapping
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);

        //$body = $this->request->getBody();
    }

    public function renderView($view, $params = []) {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }


    protected function layoutContent() {
        ob_start();
        include_once Application::$ROOT_DIR . "\app\\view\\layouts\\main.php";
        return ob_get_clean();
    }
    
    protected function renderOnlyView($view, $params) {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "\app\\view\\$view.php";
        return ob_get_clean();
    }
}

?>