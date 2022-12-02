<?php

namespace core;

use core\func;

class Router
{
    private string $uri  ;
    private  array $routes ;
    
    /**
     * @param array $routes
     */
    private function mapRoute($array):array{
        $mappedArry = [];
        foreach ($array as $item){
            array_keys($mappedArry,$this->uri.$item) ;
        }
        func::dd($mappedArry);
        return $mappedArry ;

    }
    
    public function __construct(string $uri,array $routes =[])
    {
        $this->routes = $routes;
        $this->uri = $uri;
        // $this->routes =  $this->mapRoute($this->routes);
    }
    
    public function reslove() {
        if (array_key_exists($this->uri, $this->routes)) {
            require  $this->routes[$this->uri];
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