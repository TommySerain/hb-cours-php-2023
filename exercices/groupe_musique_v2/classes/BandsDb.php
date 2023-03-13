<?php
require_once __DIR__."/Band.php";

class BandsDb
{
    private array $tabBands;
    private const GROUPES_DB_PATH = __DIR__."/../data/bands.txt";

    public function __construct()
    {
        $this->tabBands=$this->readAndExplodeFile(self::GROUPES_DB_PATH);
    }

    private function readAndExplodeFile($fichier)
    {
        $bandsDbFile= fopen($fichier,"r");
        $bandsDbFile=fread($bandsDbFile, filesize($fichier));
        $bandsDbTab= explode(PHP_EOL ,$bandsDbFile);
        foreach($bandsDbTab as $bandDbTab){
            $this->tabBands[]=explode(",",$bandDbTab);
        }
        return $this->tabBands;
        
    }
    public function getTabBands(){
            return $this->tabBands;
    }


}
