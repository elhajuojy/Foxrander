<?php

use HtmlElements\Div;
use HtmlElements\Header;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;

$arrayStyle = [
    "./build/output.css",
];



$imageFox =(
    new Div(children:[
        (new Image(src:"../assets/images/FoxIcon.png",alt:"fox image",className:"w-96 m-auto"))->rander(),  
    ],
    className:"w-full "
    )
)->rander(); 



$mainSection  =  (new Div(children:[
    (
    new Header(title:"404",h:"h1",
    className:" text-center text-white font-bold text-7xl"
    
    ))->rander(),
    
    (new Header("Oops ! This Page could not be Found",h:"h5",className:"text-center text-white font-bold text-3xl leading-loose "))->rander(),
    $imageFox
    ],

className: "grid content-center h-screen w-full  bg-indigo-700"
))->rander();





$PageNotFOund = new Htmlscaffold(
    title:"Page Not Found",
    linkStyle:$arrayStyle,
    icon: "../assets/images/foxIco.ico",
    body:[
        $mainSection,
    ]
);


echo $PageNotFOund->rander();