<?php

class Formulaire{
    function __construct($nom, $methode){
        echo "<form action='".$nom."' method='".$methode."'>";
    }
    public function addTextZone($text = ""){
        echo "$text"."<input name='".$text."' type='text'/><br>";
    }
    public function addButton($text = ""){
        echo"<input type='submit' value='".$text."'/>";
    }
    public function getForm(){
        echo "</form>";
    }
}


?>

