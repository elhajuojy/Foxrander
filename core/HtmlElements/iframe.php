<?php

namespace HtmlElements;


class Iframe extends BaseElement implements IElmenet{
    private string $src;
    private int $height;
    private int $width;

    public function  __construct(string $src ,int $height='',int $width='', string $className= '',string $class_id=''){
         parent::__construct(className: $className, id: $class_id);
         $this->src=$src ;
         $this->height=$height ;
         $this->width=$width ;
        
    }


    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<iframe width='$this->width'  id='$this->id' height='$this->height' src='$this->src'>
        </iframe>";
    }
}