<?php

namespace HtmlElements;

class Input extends BaseElement implements IElmenet 
{
    private string $name ;
    private string $type ;
    private string $value ;

    /**
     * @param string $name
     * @param string $type
     * @param string $value
     */
    public function __construct(string $name, string $type, string $value, string $className= '',string $class_id='')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        parent::__construct(className: $className, id: $class_id);
    }

    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<input name='$this->name' class='$this->className' id='$this->id' value='$this->value' type='$this->type'>";
    }

}