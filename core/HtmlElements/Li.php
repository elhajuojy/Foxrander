<?php

namespace HtmlElements ;

class Li extends BaseElement implements  IElmenet
{
    private array $children = [];
    use THasChildren;


    public function __construct(array $children=[],string $className= '',string $class_id='')
    {
        // $this->text = $text;
        $this->children = $children;
        $this->mapBody();
        parent::__construct(className: $className, id: $class_id);
    }


    public function rander(): string
    {
        return " <li class='$this->className' id='$this->id'>
                    " . implode("", array: $this->children) ."
                </li>";
    }
}