<?php
require_once __DIR__."/Game.php";

class GamesDb
{
    private array $game;
    private const GAMES_FILE = __DIR__."/../data/jeux.txt";
    
    public function __construct()
    {
        $gamesContent = file(self::GAMES_FILE,  FILE_IGNORE_NEW_LINES);
        // var_dump($gamesContent);
        
        foreach ($gamesContent as $line){
            $gameInfos = explode(",",$line);
            [$id, $name, $type, $category, $picture, $rules] = $gameInfos;
            // var_dump($gameInfos);
            $this->game []= new Game (
                intval($id),
                $name,
                $type,
                $category,
                $picture,
                $rules
            );
            
        }
    }

    public function getGames():array
    {
        return $this->game;
    }
}