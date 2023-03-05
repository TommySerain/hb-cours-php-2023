<!--
    - Réalisez une classe Car qui aura les attributs suivants :
    - name, engine, year, km
    - Réalisez un tableau de Car que vous déposerez dans un fichier PHP, puis un moteur de recherche pour chercher les voitures (par année ou par kilométrage)
    - Pour l'année dans le moteur de recherche, générez une liste "select" en fonction des années qui se trouvent dans le tableau de voitures
-->

<?php


class Car
{
    // déclaration attributs
    private string $name;
    private string $engine;
    private int $year;
    private int $km;

    // déclaration du constructeur
    public function __construct(string $name, 
    string $engine,
    int $year,
    int $km)
    {
        $this->name = $name;
        $this->engine = $engine;
        $this->year = $year;
        $this->km = $km;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName($name):void{
        if($this->name!==""){
            $this->name=$name;
        }
    }

    public function getEngine():string {
        return $this->engine;
    }

    public function setEngine($engine):void{
        if($this->engine!==""){
            $this->engine=$engine;
        }
    }

    public function getYear():int {
        return $this->year;
    }

    public function getKm():int {
        return $this->km;
    }

    public function setKm($km):void{
        if($this->km!==""){
            $this->km=$km;
        }
    }
}
