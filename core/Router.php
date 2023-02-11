<?php

// namespace Core\Router;
namespace core;

class Router
{
    //todo : build a router class
    public $routes = [];


    public function add($uri, $controller, $method ){
        $this->routes[]= [
            'uri' => $uri,
            'controllers' => $controller,
            'method' => strtoupper($method)
        ];
    }

    public function get($uri, $controller){
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller){
        $this->add($uri, $controller, 'POST');
    }

    public function put($uri, $controller){
        $this->add($uri, $controller, 'PUT');
    }

    public function delete($uri, $controller){
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller){
        $this->add($uri, $controller, 'PATCH');
    }

    public function update($uri, $controller){
        $this->add($uri, $controller, 'UPDATE');
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require_once base_path($route['controllers']);
            }
        }

        authorize(false, Response::NOT_FOUND);
    }


}