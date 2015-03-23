<?php
class User {
    private $id;
    private $username;
    private $password;
    private $email;
    
    public function __construct($id, $username, $password, $email) {
        $this->id = $id;
        $this->login = $username;
        $this->password = $password;
        $this->email = $email;
    }
    
    public function getID($id) {
        $this->id;
    }
    
    public function getUsername($username) {
        $this->username;
    }
    
    public function getPassword($password) {
        $this->password;
    }
    
    public function getEmail($email) {
        $this->email;
    }
}