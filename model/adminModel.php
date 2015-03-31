<?php
class AdminModel {
    public $user;
    private $db;
    private $query;
    private $result;
    private $row;
    //nawiazanie polaczenia z baza danych
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }

    public function usersList() {
        
    }
}
