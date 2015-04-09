<?php
class PdoUserRepository {
    /**
     * @var PDO
     */
    private $pdo;//PDO

    public function __construct($pdo) {
        $this->pdo = $pdo;
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
        $query = $this->pdo->query('SELECT * FROM users');
        $array = $this->result = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = $this->createUsers($array);
        return $users;
    }
    
    public function findByID($id) {
        $query = $this->pdo->query('SELECT * FROM users WHERE id="'.$id.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }

    public function findByUsername($username) {
        $query = $this->pdo->query('SELECT * FROM users WHERE username="'.$username.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }
    
    public function findByEmail($email) {
        $query = $this->pdo->query('SELECT * FROM users WHERE email="'.$email.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            return $this->createUser($result);
        }
    }
    
    public function save(User $user) {
        if($user->getID() === NULL) {
            $query = $this->pdo->prepare('INSERT INTO `users` (`username`, `password`, `email`) VALUES(:username, :password, :email)');
            $username = $user->getUsername();
            $query->bindParam(':username', $username);
        } else {
            $query = $this->pdo->prepare("
                UPDATE `users`
                SET
                    `password` = :password,
                    `email` = :email
                WHERE `username` = :username
            ");
        }
        $username = $user->getUsername();
        $query->bindParam(':username', $username);
        
        $password = $user->getPassword();
        $query->bindParam(':password', $password);
        
        $email = $user->getEmail();
        $query->bindParam(':email', $email);
        
        if(!$query->execute()) {
            throw new Exception('Błąd execute.');
        }
    }
}
