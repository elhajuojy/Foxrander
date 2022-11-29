<?php
namespace Model;

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
        return "<img src=../assets/$this->src alt=$this->alt ></img>";
    }

}