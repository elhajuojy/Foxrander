<?php

namespace HtmlElements;


class Textarea extends BaseElement implements IElmenet{
    private string $src;
    private int $height;
    private int $width;
    private string $contrl="controls";
    private string $type;
    public function  __construct(string $src ,int $height='',int $width='',string $type ,string $contrl="controls", string $className= '',string $class_id=''){
         parent::__construct(className: $className, id: $class_id);
         $this->src=$src ;
         $this->height=$height ;
         $this->width=$width ;
         $this->type=$type ;
         $this->contrl;
    }


    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<video width='$this->width' id='$this->id' height='$this->height' controls src='$this->src' type='$this->tupe' >
</video>";
    }




}
