<?php
require_once __DIR__. "/GroupesDb.php";
class Groupe
{
    private int $id;
    private string $name;
    private int $date;
    private int $styleId;

    public function __construct()
    {
        $groupes= new GroupesDb();
        // var_dump($groupes);
        foreach ($groupes as $groupe){
            $this->id=$groupe[0];
            $this->name=$groupe[1];
            $this->date=$groupe[2];
            $this->styleId=$groupe[3];
            var_dump($groupe);
        }
    }

}