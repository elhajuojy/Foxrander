<?php
namespace HtmlElements ;
class Header extends BaseElement implements IElmenet{
    private $h;
    private $title;

    public function __construct(string $title,string $h,$className="",string $class_id= '')
        {
        $this->h=$h;
        $this->title=$title;
        parent::__construct(className:  $className, id: $class_id);
        }
        public function  rander(): string
        {

            return " <$this->h class='$this->className' >$this->title</$this->h>";
        }


    }