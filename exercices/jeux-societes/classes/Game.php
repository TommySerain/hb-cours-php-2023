<?php

class Game
{
    public function __construct(
        private int $id,
        private string $name,
        private string $type,
        private string $category,
        private string $picture,
        private string $rules,
    )
    {
        
    }



public function getId():int
{
    return $this->id;
}
public function setId($id):int
{
if ($id!==""){
    return $this->id=$id;
}
}

public function getName():string
{
    return $this->name;
}
public function setname($name):string
{
if ($name!==""){
    return $this->name=$name;
}
}

public function getType():string
{
    return $this->type;
}
public function setType($type):string
{
if ($type!==""){
    return $this->type=$type;
}
}

public function getCategory():string
{
    return $this->category;
}
public function setCategory($category):string
{
if ($category!==""){
    return $this->category=$category;
}
}

public function getPicture():string
{
    return $this->picture;
}
public function setPicture($picture):string
{
if ($picture!==""){
    return $this->picture=$picture;
}
}

public function getRules():string
{
    return $this->rules;
}
public function setRules($rules):string
{
if ($rules!==""){
    return $this->rules=$rules;
}
}

}