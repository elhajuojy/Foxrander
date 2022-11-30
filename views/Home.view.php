<?php

use HtmlElements\Button;
use HtmlElements\Form;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;
use HtmlElements\Input;
use HtmlElements\Header;
use HtmlElements\Div;


$arrayStyle = [
    "./dist/output.css",

];

//$Head_title
$Home = new Htmlscaffold(
    title: $headTitle,
    linkStyle: $arrayStyle,
    body: [

        (new Header(title: $h1Title ,h: "h1",className:
            "text-2xl font-bold cursor-pointer
            "))->rander(),
        (new Form(
            method:"get" ,
            action:"#",
            childern: [
                (new Input(name: "mehdi",type: "text",value: "mehdi",className :"
                    block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100",
                class_id:"input-style"
                ))->rander(),
                (new Input(name: "password",type: "password",value: ""))->rander(),
                (new Button(type: "submit",value:"click me",class_id: "btn", className: "btn btn-primary",onclick:'alert(`Hello world`);'))->rander(),
            ],

        ))->rander(),
        (new Div(class: [""],id: 'div-1',children: [
            (new Image("./assets/images/foxrander.jpg","image"))->rander(),
        ]))->rander(),

        (new Header(title: "Foxrander is a Micro frontend framework PHP based on Object-Oriented 
                            Programming which is help developer rander HTML and CSS faster than ever"
            ,h: "h4",))->rander()
    ],

);

echo $Home->rander();

