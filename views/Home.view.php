
<?php
use HtmlElements\Ahref;
use HtmlElements\Button;
use HtmlElements\Form;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;
use HtmlElements\Input;
use HtmlElements\Header;
use HtmlElements\Div;
use HtmlElements\P;



$arrayStyle = [
    "./build/output.css",
];



//$Head_title
$Home = new Htmlscaffold(
    title: $headTitle,
    linkStyle: $arrayStyle,
    body: [

        new Header(title: $h1Title ,h: "h1",className:"text-center text-5xl mt-6"),
        new P(text:"<br>Foxrander is a Micro frontend framework PHP based on Object-Oriented 
        Programming which is help developer rander HTML and CSS faster than ever",className:"text-center w-96 m-auto  mb-6"),
        new Div(
            children: [
                new Image(src:"./assets/images/foxrander.jpg",alt:"image",className: "bg-blue-500 w-96 m-auto rounded-3xl mb-6",),
        ],
            className: "w-full m-auto"
        
        ),
        
        new Ahref(link :"github.com/elhajuojy/Foxrander",message:"Github",className:"text-center grid content-center m-auto border-solid w-36 bg-indigo-700 text-white rounded  p-2 curser-pointer")

    ],

);





