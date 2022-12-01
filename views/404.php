<?php

use HtmlElements\Div;
use HtmlElements\Header;
use HtmlElements\Htmlscaffold;



$arrayStyle = [
    "./build/output.css",
];


$mainSection  =  (new Div(children:[
    (
    new Header(title:"404 🦊",h:"h1",
    className:" text-center text-white font-bold text-6xl"
    
    ))->rander(),
    
    (new Header("Oops ! This Page could not be Found",h:"h5",className:"text-center text-white font-bold text-3xl leading-normal "))->rander()

],

className: "grid content-center h-screen w-full  bg-indigo-700"
))->rander();




$PageNotFOund = new Htmlscaffold(
    title:"Page Note Found",
    linkStyle:$arrayStyle,
    icon: "../assets/icons/FoxIco.ico",
    body:[
        $mainSection
        
    ]
);


echo $PageNotFOund->rander();