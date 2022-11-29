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
        (new Header(title: "welcome to our project",h: "h1",margin: "center"))->rander(),
        (new Form(
            method:"get" ,
            action:"#",
            childern: [
                (new Input(name: "mehdi",type: "text",value: "mehdi"))->rander(),
                (new Input(name: "password",type: "password",value: "password"))->rander(),
                (new Button(type: "submit",value:"click me",class_id: "btn", onclick:'alert(`Hello world`);'))->rander(),
            ],

        ))->rander(),
        (new Div(class: [],id: '',children: [
            (new Image("../assets/images/foxrander.jpg","image"))->rander(),
        ]))->rander()

    ],

);

echo $Home->rander();

