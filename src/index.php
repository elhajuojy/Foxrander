<?php
require  "../vendor/autoload.php";


use Model\Form;
use Model\Input;
use Model\Button;
use Model\Image;
<<<<<<< HEAD
use Model\Style;
use Model\Title;

$style = new Style("#ccccff","blue","20px","arial","1px solid black","10px","50%");
=======
>>>>>>> add09d0886bf54c4976d537ca0707b58481973ba


$form1 = new Form();
$form1->setAction("#");
$form1->setMethod("get");
<<<<<<< HEAD
=======



>>>>>>> add09d0886bf54c4976d537ca0707b58481973ba
$inputName = new Input("firstname","text","firstname");
$inputpassword = new Input("password","password","password");
$btn1 = new Button("submit","click me ","btn");


$form1->addElement($inputName);
$form1->addElement($inputpassword);
$form1->addElement($btn1);

<<<<<<< HEAD
$title = new Title("welcome to our project","h1","center");
echo $title->rander();
echo $style->rander();
echo $form1->rander();
$img = new Image("image.jpg","image");
=======
echo $form1->rander();
$img = new Image("image.png","image");
>>>>>>> add09d0886bf54c4976d537ca0707b58481973ba
echo $img->rander();