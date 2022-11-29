<?php
namespace Model;
class Title implements IElmenet{
    public $h;
    public $title;
    public $margin;
    public function __construct(string $title,string $h,string $margin)
        {
        $this->h=$h;
        $this->title=$title;
        $this->margin=$margin;
        }
    public function  rander(): string
    {

        return " <$this->h style= text-align:"."$this->margin".";>$this->title</$this->h>";
    }


    }