<?php
abstract class Vehicule //une classe qu'on peux pas force(classe abstract) //
{
    public const TVA=20;
    protected int $masse;
    protected float $vitesse;
    protected int $capacite;
    protected string $marque;


    public function afficherEnergiecinetique(): float
    {
        return 0.5 * $this->masse * ($this->vitesse ** 2);
    }
}