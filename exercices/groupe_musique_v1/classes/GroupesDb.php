<?php
class GroupesDb
{
    public array $groupes;
    private const GROUPES_DB_PATH = __DIR__."/../bands.txt";

    public function __construct()
    { 
        $groupesFile = fopen(self::GROUPES_DB_PATH, 'r');
        $read = fread($groupesFile,filesize(self::GROUPES_DB_PATH));
        fclose($groupesFile);

        $groupesTab = explode(PHP_EOL, $read);
            // var_dump($groupesTab);
        foreach ($groupesTab as $groupeTab){
            // var_dump($groupeTab);
            $this->groupes []=explode(",",$groupeTab);
            
            // $id=$this->groupes[0];
            // $name=$this->groupes[1];
            // $date=$this->groupes[2];
            // $styleId=$this->groupes[3];
            // var_dump($id);
            // var_dump($name);
            // var_dump($date);
            // var_dump($styleId);
            
        }
        // var_dump($this->groupes);
        
        // var_dump($this->groupes);
    }
}