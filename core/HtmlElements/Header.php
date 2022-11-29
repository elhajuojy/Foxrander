<?php
namespace HtmlElements;
class Header implements IElmenet{
    private $h;
    private $title;

    public function __construct(string $title,string $h)
        {
        $this->h=$h;
        $this->title=$title;
        }
    public function  rander(): string
    {

        return " <$this->h >$this->title</$this->h>";
    }


    }