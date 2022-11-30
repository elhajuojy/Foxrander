<?php
namespace HtmlElements;

class Image extends BaseElement implements IElmenet
{
    public string $src;
    public string $alt;


    public function __construct(string $src, string $alt , string $className= '',string $class_id='')
    {
        $this->src = $src;
        $this->alt = $alt;
        parent::__construct(className: $className, id: $class_id);
    }

    public function rander(): string
    {
        return "<img src=$this->src class = '$this->className' id = '$this->id' alt=$this->alt ></img>";
    }

}