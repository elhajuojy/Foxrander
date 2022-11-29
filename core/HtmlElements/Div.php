<?php

namespace HtmlElements;

class Div implements  IElmenet
{
    private array $class=[] ;
    private string $id ;
    private array $children=[];


    /**
     * @param string $type
     * @param string $value
     * @param string $class_id
     */
    public function __construct(array $class=[], string $id="", array $children =[])
    {
        $this->class = $class;
        $this->id = $id;
        $this->children = $children;
    }


    public function rander(): string
    {
        return " <div class='" . implode("", array: $this->class) ."' id='$this->id'>"
                . implode("", array: $this->childern) .
                "</div>";
    }
}