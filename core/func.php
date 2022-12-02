<?php

namespace core;

class func{
        
        
    public static function   dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    
        die();
    }
    
    public static function urlIs($value) {
        return $_SERVER['REQUEST_URI'] === $value;
    }

}
