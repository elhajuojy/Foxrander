<?php
namespace HtmlElements;

class Image implements IElmenet
{
    public string $src;
    public string $alt;


    public function __construct(string $src, string $alt)
    {
        $this->src = $src;
        $this->alt = $alt;
    }

    public function rander(): string
    {
        return "<img src=$this->src alt=$this->alt ></img>";
    }

}