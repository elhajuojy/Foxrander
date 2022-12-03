<?php

namespace HtmlElements;



class Ul implements IElmenet
{
    
    private array $childern =[];

    /**
     * @param string $method
     * @param string $action
     * @param array $childern
     */
    public function __construct(array $childern = [] )
    {
        $this->childern = $childern;
    }

    use THasChildren;
  

    public  function childerns(array $arrayElment ){
            $this->childern = $arrayElment;
    }


    public function rander(): string
    {
        return " <ul> "
                . implode("", array: $this->childern) .
                "</ul>";
    }
}