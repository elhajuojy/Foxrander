<?php
require  "../vendor/autoload.php";


use Model\Form;
use Model\Input;
use Model\Button;
use Model\Image;


$form1 = new Form();
$form1->setAction("#");
$form1->setMethod("get");



$inputName = new Input("firstname","text","firstname");
$inputpassword = new Input("password","password","password");
$btn1 = new Button("submit","click me ","btn");


$form1->addElement($inputName);
$form1->addElement($inputpassword);
$form1->addElement($btn1);

echo $form1->rander();
$img = new Image("image.png","image");
echo $img->rander();