<?php
class PdoUserRepository {
    private $query;
    private $result;
    private $db;//PDO
    private $array;
    public $user;
    public $userdata;
    public $usersdata;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }

    private function createUser(array $userData) {
        $User = new User($userData['user_id'], $userData['user_name'], $userData['user_password'], $userData['user_email']);
        return $User;
    }
    
    public function createUsers(array $usersData) {
        $users = [];
        foreach ($usersData as $user) {
            $users[] = $this->createUser($user);
        }
        return $users;
    }

    public function findAll() {
        $query = $this->db->query('SELECT * FROM users');
        $array = $this->result = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = $this->createUsers($array);
        return $users;
    }
    
    public function findByID($id) {
        $query = $this->db->query('SELECT * FROM users WHERE user_id="'.$id.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
    
    public function findByUsername($username) {
        $query = $this->db->query('SELECT * FROM users WHERE user_name="'.$login.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
    
    public function findByEmail($email) {
        $query = $this->db->query('SELECT * FROM users WHERE user_email="'.$email.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
}
