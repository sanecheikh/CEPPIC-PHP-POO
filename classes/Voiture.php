<?php
class Voiture extends vehicule 
// extends appelle une classe//
{
    public string $couleur;
    

    public function __construct(string $color, int $mass, string $brand)
    {
        $this->couleur = $color;
        $this->masse = $mass;
        $this->marque = $brand;
    }
    //getter (ou assesseur)
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    //setter (mutateur)
    public function setCouleur(string $color): string
    {
        return  $this->coleur = $color;
    }

    public function afficherMessage()
    {
        echo "je suis une voiture";
    }

    public function afficherEnergiecinetique(): float
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }
    public function __destruct()
    {
        echo '<p>objet destroyed</p>';
    }
}
?>