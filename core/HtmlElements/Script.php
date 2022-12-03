<?php
namespace HtmlElements ;
class Script implements  IElmenet 
{
    
    private  string $src  = ''  ;
    private  string $type  = ''  ;
    private  string $content  = ''  ;
    private array $childern =[];
    /**
     * @param string $method
     * @param string $action
     * @param array $childern
     */
    //construct the script element
    public function __construct(string $src ='', string $type ='',array $childern = [] )
    {
        $this->src = $src;
        $this->type = $type;
        $this->childern = $childern;
    }
use THasChildren;
public  function childerns(array $arrayElment ){
    $this->childern = $arrayElment;
}
    public function rander(): string
    {
        return " <script src='$this->src' type='$this->type'>".implode("", array: $this->childern)."</script>";     
    }
}
