<h1>TP6</h1>
<a href="main.php">Touche F5</a>
<h2>Exo1</h2>

<?php

class FootballTeam{
    public $name;
    public $nbTitres;
    function display(){
        echo "L'équipe ". $this->name ." a ". $this->nbTitres ." titres.";
    }
}

$Canaris = new FootballTeam();
$Canaris->name = "Les Canaris de la Beaujoire";
$Canaris->nbTitres = 666;
$Canaris->display();
?>

