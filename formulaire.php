<?php

class Formulaire{
    function __construct($nom, $methode){
        echo "<form action='".$nom."' method='".$methode."'>";
    }
    public function addTextZone($text = ""){
        echo "$text"."<input type='text'/><br>";
    }
    public function addButton(){
        echo"<input type='submit' value='Envoi'/>";
    }
    public function getForm(){
        echo "</form>";
    }
}

?>

