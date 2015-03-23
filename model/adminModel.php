<?php
class adminModel {
    private $db;
    private $query;
    private $result;
    private $row;
    //nawiazanie polaczenia z baza danych
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }
    
    public function checkLogin() {
        if(isset($_SESSION['admin'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function login($login, $password) {
        $query = $this->db->query('SELECT * FROM users WHERE user_name="'.$login.'"');
        $this->result = $query->fetch(PDO::FETCH_ASSOC);
        if($this->result['user_name']==$login && $this->result['user_password']==sha1($password)) {
            $_SESSION['admin'] == $this->result['user_name'];//error?
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
