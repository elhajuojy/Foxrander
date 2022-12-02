<?php   

namespace HtmlElements;

trait THasChildren
{
    public function mapBody(){
        
        $arr = [];
        foreach($this->children as $element ){
            array_push($arr,$element->rander());
        }
        $this->children = $arr;
    
    }

}
?>