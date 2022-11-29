<?php
namespace Model;

class Image implements IElmenet{
public $src;
public $alt;

<<<<<<< HEAD
=======

>>>>>>> add09d0886bf54c4976d537ca0707b58481973ba
public function __construct(string $src,string $alt)
{
    $this->src=$src;
    $this->alt=$alt;
}

public function  rander(): string
{

<<<<<<< HEAD
    return "<img src=../assets/$this->src alt=$this->alt ></img>";
=======
    return "<img src=$this->src alt=$this->alt ></img>";
>>>>>>> add09d0886bf54c4976d537ca0707b58481973ba
}

}
