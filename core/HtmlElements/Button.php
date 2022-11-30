<?php

namespace HtmlElements;


class Button extends BaseElement implements  IElmenet
{
    private string $type ;
    private string $value ;
    private mixed $onclick ;


    /**
     * @param string $type
     * @param string $value
     * @param mixed $onclick
     */
    public function __construct(string $type, string $value,  $className= '',string $class_id= '',mixed $onclick ='')
    {
        $this->type = $type;
        $this->value = $value;
        parent::__construct(className:  $className, id: $class_id);
        $this->onclick = $onclick;

    }


    public function rander(): string
    {
        return  "<Button  type='$this->type' class='$this->className' onclick='$this->onclick'>$this->value</Button>";
    }
}