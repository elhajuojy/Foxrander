<?php

namespace HtmlElements ;

class Ahref extends BaseElement implements  IElmenet
{
    private string $link;
    private string $message;



    public function __construct( string $link ="",string $message="" , string $className= '',string $class_id='')
    {
        $this->link = $link;
        $this->message=$message;
        parent::__construct(className: $className, id: $class_id);
        
    }


    public function rander(): string
    {
        return " <a href='$this->link' class='$this->className' id='$this->id'>
                 $this->message
                </a>";
    }
}