<?php

namespace Model;

class Style implements IElmenet{
    private $bg;
    private $color;
    private $font_size;
    private $font_family;
    private $border;
    private $border_radius;
    private $margin;

    public function __construct(string $bg,string $color,string$font_size,string $font_family,string $border,string $border_radius,string $margin)
    {
        $this->bg=$bg;
        $this->color=$color;
        $this->font_size=$font_size;
        $this->font_family=$font_family;
        $this->border=$border;
        $this->border_radius=$border_radius;
        $this->margin=$margin;
    }
    

public function  rander(): string
{

    return "<style> body{
                    background-color:$this->bg ;<br>
                    color:$this->color; 
                    <br> font_size:$this->font_size;<br>
                    font_family:$this->font_family;<br> 
                    border:$this->border;<br> 
                    border_radius:$this->border_radius;<br>
                    margin:$this->margin;}
                   
                    img{

                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;
                    }
                    </style>";
                }
    
}




