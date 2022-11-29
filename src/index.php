<?php
require "../vendor/autoload.php";
use HtmlElements\Button;
use HtmlElements\Form;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;
use HtmlElements\Input;
use HtmlElements\Header;
use HtmlElements\Div;


$arrayStyle = [
    "../assets/css/style.css",
    "../assets/css/style.css"
];




$Home = new Htmlscaffold(
    title: "Home Page",
    linkStyle: $arrayStyle,
    body: [

        (new Header(title: "Welcome to FoxRander ",h: "h1"))->rander(),
        (new Form(
            method:"get" ,
            action:"#",
            childern: [
                (new Input(name: "mehdi",type: "text",value: "mehdi"))->rander(),
                (new Input(name: "password",type: "password",value: ""))->rander(),
                (new Button(type: "submit",value:"click me",class_id: "btn", className: ["btn btn-primary"],onclick:'alert(`Hello world`);'))->rander(),
            ],

        ))->rander(),
        (new Div(class: ["img-div img-container"],id: 'div-1',children: [
            (new Image("../assets/images/foxrander.jpg","image"))->rander(),
        ]))->rander(),

        (new Header(title: "Foxrander is a Micro frontend framework PHP based on Object-Oriented 
                            Programming which is help developer rander HTML and CSS faster than ever"
                            ,h: "h4",))->rander()
    ],

);

echo $Home->rander();

