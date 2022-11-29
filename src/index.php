<?php
require  "../vendor/autoload.php";
use HtmlElements\Button;
use HtmlElements\Form;
use HtmlElements\Htmlscaffold;
use HtmlElements\Image;
use HtmlElements\Input;
use HtmlElements\Header;


$form1 = new Form(
    childern: [
        (new Input("firstname","text","firstname"))->rander(),
        (new Input("password","password","password"))->rander(),
        (new Button("submit","click me ","btn"))->rander(),
    ],
    method:"get" ,
    action:"#",

);



$arrayStyle = [
    "assets/css/style.css",
    "assets/css/style.css"
];




$Home = new Htmlscaffold(
    title: "Home Page",
    linkStyle: $arrayStyle,
    body: [
        (new Header("welcome to our project","h1","center"))->rander(),
        $form1->rander(),
        (new Image("assets/images/image.jpg","image"))->rander(),
    ],

);

echo $Home->rander();

