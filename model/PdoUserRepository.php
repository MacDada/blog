<?php
class PdoUserRepository {
    private $db;//PDO

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function createUser(array $userData) {
        $user = new User($userData['username'], $userData['password'], $userData['email'], $userData['id']);
        return $user;
    }
    
    private function createUsers(array $usersData) {
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
        $query = $this->db->query('SELECT * FROM users WHERE id="'.$id.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }

    public function findByUsername($username) {
        $query = $this->db->query('SELECT * FROM users WHERE username="'.$username.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }
    
    public function findByEmail($email) {
        $query = $this->db->query('SELECT * FROM users WHERE email="'.$email.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }
    
    public function save(User $user) {
        try {
            $this->db->exec('INSERT INTO `users` (`username`, `password`, `email`) VALUES(
                    \''.$user->getUsername().'\',
                    \''.$user->getPassword().'\',
                    \''.$user->getEmail().'\')');
        } catch (PDOException $ex) {
            echo 'Wystapił blad biblioteki PDO: ' . $ex->getMessage();
        }

    }
}
