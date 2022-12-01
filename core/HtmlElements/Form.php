<?php

namespace HtmlElements;



class Form implements IElmenet
{
    private string $method;
    private string $action;
    private array $childern =[];

    /**
     * @param string $method
     * @param string $action
     * @param array $childern
     */
    public function __construct(string $method, string $action,array $childern = [] )
    {
        $this->method = $method;
        $this->action = $action;
        $this->childern = $childern;
    }

    public function mapBody(){
        
        $arr = [];
        foreach($this->children as $element ){
            array_push($arr,$element->rander());
        }
        $this->children = $arr;
    
    }


    public  function childerns(array $arrayElment ){
            $this->childern = $arrayElment;
    }


    public function rander(): string
    {
        return " <form action='$this->action' method='$this->method'>"
                . implode("", array: $this->childern) .
                "</form>";
    }
}