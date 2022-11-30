
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
        (new Header(title: $h1Title ,h: "h1",className:"
            text-center font-medium text-slate-500
        "))->rander(),
        (new Form(
            method:"get" ,
            action:"#",
            childern: [
                (new Input(name: "mehdi",type: "text",value: "mehdi",
                class_id:"input-style"
                ))->rander(),
                (new Input(name: "password",type: "password",value: ""))->rander(),
                (new Button(type: "submit",value:"click me",class_id: "btn", className: "btn btn-primary",onclick:'alert(`Hello world`);'))->rander(),
            ],

        ))->rander(),
        (new Div(
            className: "w-full",

            children: [
            (new Image(src:"./assets/images/foxrander.jpg",alt:"image",className: "bg-blue-500",))->rander(),
        ]
        
        ))->rander(),

        (new Header(title: "Foxrander is a Micro frontend framework PHP based on Object-Oriented 
                            Programming which is help developer rander HTML and CSS faster than ever"
            ,h: "h4",))->rander()
    ],

);

echo $Home->rander();

