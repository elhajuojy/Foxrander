<?php

namespace HtmlElements;
class Ol extends BaseElement implements IElmenet 
{
    
    private array $children =[];

    /**
     * @param string $method
     * @param string $action
     * @param array $childern
     */
    use THasChildren;
    public function __construct(array $children = [] ,string $className= '',string $class_id='')
    {
        $this->children = $children;
        $this->mapBody();
        parent::__construct(className: $className, id: $class_id);
    }


    public function rander(): string
    {
        return " <ol class='$this->className'> "
                . implode("", array: $this->children) .
                "</ol>";
    }
}