<?php

namespace HtmlElements;

abstract class BaseElement
{
    protected  string $className = ''  ;
    protected  string $id  = '';

    /**
     * @param array $className
     * @param string $id
     */
    public function __construct(string $className ='', string $id='')
    {
        $this->className = $className;
        $this->id = $id;
    }


}