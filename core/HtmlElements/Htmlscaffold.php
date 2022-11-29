<?php

namespace HtmlElements;

class Htmlscaffold implements IElmenet
{
    private array $body = [];
    private string $title;
    public array $linkStyle = [] ;

    //we create mapLinks to return new array with the link element in the html for every link giving in the
    // creation of the object
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
    public function __construct( string $title, array $linkStyle = [],array $body = [],)
    {
        $this->body = $body;
        $this->title = $title;
        $this->linkStyle = $linkStyle;
        $this->linkStyle =  $this->mapLinks($this->linkStyle);

    }

    public function rander(): string
    {
        return "
               <!DOCTYPE html>
                <html lang='en'>
                <head>
                  <meta charset=utf-8>
                  <title>$this->title</title>
                    ".implode('',$this->linkStyle)."
                </head>
                <body>
                        ". implode("", array: $this->body) ."
                </body>
                </html>
        ";
    }
}