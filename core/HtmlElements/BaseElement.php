<?php

namespace HtmlElements;

abstract class BaseElement
{
    protected  array $className =[]  ;
    protected  string $id  = '';

    /**
     * @param array $className
     * @param string $id
     */
    public function __construct(array $className =[], string $id='')
    {
        $this->className = $className;
        $this->id = $id;
    }


}