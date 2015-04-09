<?php
class PdoUserRepository {
    private $db;//PDO

    public function __construct($pdo) {
        $this->db = $pdo;
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
        $query = $this->db->prepare('INSERT INTO `users` (`username`, `password`, `email`) VALUES(:username, :password, :email)');
        $query->bindParam(':username', $username);
        $username = $user->getUsername();
        $query->bindParam(':password', $password);
        $password = $user->getPassword();
        $query->bindParam(':email', $email);
        $email = $user->getEmail();
        $query->execute();
    }
    
    public function update(User $user) {
        $query = $this->db->prepare('UPDATE `users` SET `username` = :username, `password` = :password, `email` = :email WHERE `username` = '.$user->getUsername().'');
        var_dump($query);
        $query->bindParam(':username', $username);
        $username = $user->getUsername();
        $query->bindParam(':password', $password);
        $password = $user->getPassword();
        $query->bindParam(':email', $email);
        $email = $user->getEmail();
        $query->execute();
    }
}
