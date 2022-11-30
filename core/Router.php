<?php

namespace core;

class Router
{
    private string $uri  ;
    private  array $routes ;

    /**
     * @param array $routes
     */
    public function __construct(string $uri,array $routes =[])
    {
        $this->routes = $routes;
        $this->uri = $uri;
    }


    public function reslove() {
        if (array_key_exists($this->uri, $this->routes)) {
            require $this->routes[$this->uri];
        } else {
           $this->abort();
        }
    }

    private function abort($code = 404) {
        http_response_code($code);

        require "views/{$code}.php";

        die();
    }



}