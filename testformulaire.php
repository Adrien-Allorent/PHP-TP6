<?php
include 'formulaire.php';

$form1 = new Formulaire("testformulaire.php", "post");
$form1->addTextZone("name");
$form1->addTextZone("age");
$form1->addButton("Envoi");
$form1->getForm();

if(isset($_POST["name"]) && isset($_POST["age"])){
    echo $_POST["name"]."<br>";
    echo $_POST["age"];
}
?>