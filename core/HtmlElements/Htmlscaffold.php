<?php

namespace HtmlElements;

class Htmlscaffold implements IElmenet
{
    private array $body = [];
    private array $children = [];
    private string $title;
    private array $linkStyle = [] ;
    private string $icon = "";
    use THasChildren;
    //we create mapLinks to return new array with the link element in the html for every link giving in the creation of the object
   private function mapLinks($array):array{
        $mappedArrya = [];
        foreach ($array as $item){
           array_push($mappedArrya,"<link rel='stylesheet' href='$item'></link>") ;
       }
        return $mappedArrya ;

    }
    /**
     * @param array $body
     * @param string $title
     * @param string $linkStyle
     */
    
    public function __construct( string $title, array $linkStyle = [],array $body = [],string $icon = '')
    {
        $this->body = $body;
        $this->title = $title;
        $this->linkStyle = $linkStyle;
        $this->linkStyle =  $this->mapLinks($this->linkStyle);
        $this->icon = $icon;
        $this->children = $body;
        $this->mapBody();
        $this->body = $this->children;
        echo $this->rander();
    }
    
    

    public function rander(): string
    {
        return "
               <!DOCTYPE html>
                <html lang='en'>
                <head>
                  <meta charset=utf-8>
                  <title>$this->title</title>
                  <link rel='shortcut icon' href='$this->icon'>
                    ".implode('',$this->linkStyle)."
                </head>
                <body>
                        ". implode("", array: $this->body) ."
                </body>
                </html>
        ";
    }
}