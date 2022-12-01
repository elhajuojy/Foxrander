<?php

use HtmlElements\Div;
use HtmlElements\Header;
use HtmlElements\Htmlscaffold;



$arrayStyle = [
    "./build/output.css",
];


$mainSection  =  (new Div(children:[
    (
    new Header(title:"404 not found 🦊",h:"h1",
    className:" text-center text-white font-bold text-4xl"
    
    ))->rander(),

],

className: "grid content-center h-screen w-full  bg-indigo-700"
))->rander();




$PageNotFOund = new Htmlscaffold(
    title:"Page Note Found",
    linkStyle:$arrayStyle,
    body:[
        $mainSection
        
    ]
);


echo $PageNotFOund->rander();