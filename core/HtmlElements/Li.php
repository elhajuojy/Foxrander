<?php

namespace HtmlElements ;

class Li extends BaseElement implements  IElmenet
{
    private string $text;



    public function __construct( string $text ="",string $className= '',string $class_id='')
    {
        $this->text = $text;
        parent::__construct(className: $className, id: $class_id);
    }


    public function rander(): string
    {
        return " <li class='$this->className' id='$this->id'>
                 $this->text
                </li>";
    }
}