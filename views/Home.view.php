
<?php

use HtmlElements\Button;
use HtmlElements\Form;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;
use HtmlElements\Input;
use HtmlElements\Header;
use HtmlElements\Div;


$arrayStyle = [
    "./build/output.css",
];



//$Head_title
$Home = new Htmlscaffold(
    title: $headTitle,
    linkStyle: $arrayStyle,
    body: [

        (new Header(title: $h1Title ,h: "h1",className:"text-center text-6xl "))->rander(),
        (new Header(title: "Foxrander is a Micro frontend framework PHP based on Object-Oriented 
                            Programming which is help developer rander HTML and CSS faster than ever"
            ,h: "h3",))->rander(),
        (new Div(
            children: [
            (new Image(src:"./assets/images/foxrander.jpg",alt:"image",className: "bg-blue-500 w-48",))->rander(),
        ],
            className: "w-full"
        
        ))->rander(),


    ],

);

echo $Home->rander();




