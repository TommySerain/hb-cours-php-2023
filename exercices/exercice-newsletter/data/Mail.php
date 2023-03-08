<?php

class Mail
{
    private string $email;

    public function construct(string $email){
        $this->email=$email;
    }

    public function getMail():string{
        return($this->email);
    }
    public function setMail($email):void
    {
        if($this->email!==""){
            $this->email=$email;
        }
    }

}