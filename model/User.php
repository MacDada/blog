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
        return $this->id;
    }
    
    public function getUsername($username) {
        return $this->username;
    }
    
    public function getPassword($password) {
        return $this->password;
    }
    
    public function getEmail($email) {
        return $this->email;
    }
}