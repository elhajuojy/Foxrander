<?php

namespace Model;

use function Sodium\add;

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
    public function __construct(array $childern = [],string $method, string $action, )
    {
        $this->method = $method;
        $this->action = $action;
        $this->childern = $childern;
    }


    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }


    public  function  addElement(IElmenet $element){
        array_push($this->elements,$element->rander());
    }

    public  function childerns(array $arrayElment  ){
            $this->childern = $arrayElment;
    }


    public function rander(): string
    {
        return " <form action='$this->action' method='$this->method'>"
                . implode("<br> <br>", array: $this->childern) .
                "</form>"."<br>";
    }
}