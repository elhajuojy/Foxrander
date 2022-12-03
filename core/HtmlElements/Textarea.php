<?php

namespace HtmlElements;


class Textarea extends BaseElement implements IElmenet{
    private string $name;
    private int $rows;
    private int $cols;
    private string $text;

    public function  __construct(string $name='',int $rows='',int $cols='',string $text , string $className= '',string $class_id=''){
         parent::__construct(className: $className, id: $class_id);
         $this->name=$name ;
         $this->rows=$rows ;
         $this->cols=$cols ;
         $this->text=$text ;
    }


    public function  rander(): string
    {
        // TODO: Implement rander() method.
        return "<textarea id='$this->id' name='$this->name' rows='$this->rows' cols='$this->cols'>
          $this->text
        </textarea>";
    }




}
