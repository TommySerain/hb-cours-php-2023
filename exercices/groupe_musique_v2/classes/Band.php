<?php
require_once __DIR__."/BandsDb.php";

class Band
{
    private int $id;
    private string $name;
    private int $date;
    private int $styleId;

    public function __construct($id=0)
        {
            $this->id=$id;
            $this->setId($id);

        }
    
    public function getId()
    {
        return ($this->id);
    }

    public function setId($number){
        $bandsDb=new BandsDb;
        $bands=$bandsDb->getTabBands();
        // var_dump($bands);
        foreach ($bands as $band){
            in_array($number-1,$band);
        }
        var_dump($bands[$number-1]) ;
    }
}