<?php

namespace Model;

class Input implements IElmenet
{
    private string $name ;
    private string $type ;
    private string $value ;

    /**
     * @param string $name
     * @param string $type
     * @param string $value
     */
    public function __construct(string $name, string $type, string $value)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }


    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<input name='$this->name' value='$this->value' type='$this->type'>";
    }

}