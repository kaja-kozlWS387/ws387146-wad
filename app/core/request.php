<?php

namespace app\core;
class Request {
    // Get the current path from the request and parse it
    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '/'; # Retrieve the URI from the server variable
        $position = strpos($path, '?'); # Find the position of the '?' character if any

        if ($position === false) {
            return $path;
        } else {
            return substr($path, 0, $position);
        }
    }

    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'] ?? 'GET'; # Determines the request method
    }

    public function getBody() {

    }
}

?>