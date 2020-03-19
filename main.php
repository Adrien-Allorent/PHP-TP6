<h1>TP6</h1>
<a href="main.php">Touche F5</a>
<h2>Exo1</h2>

<?php

class FootballTeam{
    const text = "Nombre d'équipes: ";
    static $nbTeams = 0;
    private $name;
    private $nbTitres;

    public function getName(){return $this->name;}
    public function getNbTitres(){return $this->nbTitres;}
    public function setName($name){$this->name = $name;}
    public function setNbTitres($nbTitres){$this->nbTitres = $nbTitres;}

    function display(){
        echo "L'équipe ". $this->name ." a ". $this->nbTitres ." titres.";
    }

    static function getNbTeams(){
        echo FootballTeam::text.FootballTeam::$nbTeams;
    }

    function __construct($nom, $titres){
        $name = $nom;
        $nbTitres = $titres;
        FootballTeam::$nbTeams++;
    }
    function __destruct()
    {
        echo "Destructor";
        FootballTeam::$nbTeams--;
    }
}

$equipe1 = new FootballTeam("Unknown", 0);
$equipe1->setName("Les Canaris de la Beaujoire");
$equipe1->setNbTitres(666);
$equipe1->display();
$equipe2 = new FootballTeam("Numéro39", 104);
$equipe3 = new FootballTeam("Papillopérative", 999);
$equipe4 = new FootballTeam("Simic Flash", 0);
FootballTeam::getNbTeams();
?>

