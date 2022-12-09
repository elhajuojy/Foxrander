<?php


namespace core;

abstract class Controller{
    
        public function view($view,$data=[]){
            $view = str_replace(".","/",$view);
            extract($data);
            require "views/".$view.".php";
        }
}