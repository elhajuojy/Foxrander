<?php

namespace HtmlElements;

class Button implements  IElmenet
{
    private string $type ;
    private string $value ;
    private string $class_id ;


    /**
     * @param string $type
     * @param string $value
     * @param string $class_id
     */
    public function __construct(string $type, string $value, string $class_id)
    {
        $this->type = $type;
        $this->value = $value;
        $this->class_id = $class_id;
        $this->rander();
    }


    public function rander(): string
    {
        return  "<div type='$this->type' class='$this->class_id'>$this->value</div>";
    }
}