<?php
include 'formulaire.php';

$form1 = new Formulaire("testformulaire.php", "get");
$form1->addTextZone("Votre nom : ");
$form1->addTextZone("Votre age : ");
$form1->addButton("Envoi");
$form1->getForm();
?>