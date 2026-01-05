<?php

namespace app\core;
class Application
{
    // All properities that need to be globally accessible from the application
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;

    public function __construct($rootPath) {
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }
    
    # Resolves the current request and sends back the response
    public function run()
    {
        echo $this->router->resolve();
    }
}

?>