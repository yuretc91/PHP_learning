<?php

class Registration{
    public $login;
    public $password;
    public $passwordConfirm;
    public $email;

    public function __construct($email, $name, $password, $contact){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->contact = $contact;
    }

}




?>