<?php

class Registration{
    public $login;
    public $password;
    public $passwordConfirm;
    public $email;

    public function __construct($login, $password, $email){
        $this->login = $login;
        $this->passowrd = $password;
        $this->email = $email;
    }
}




?>