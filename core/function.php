<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function urlIs($uri){
    return $_SERVER["REQUEST_URI"] === $uri;

}

