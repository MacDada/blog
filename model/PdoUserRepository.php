<?php
class PdoUserRepository {
    private $query;
    private $result;
    private $db;//PDO
    
    private function createUser(array $userData) {
        $User = new User($this->result['user_id'], $this->result['user_name'], $this->result['user_password'], $this->result['user_email']);
    }
    
    public function findByID($id) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_id="'.$id.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
    
    public function findByUsername($username) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_name="'.$login.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
    
    public function findByEmail($email) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_email="'.$email.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(NULL == $result) {
            throw new UserNotFoundException();
        } else {
            $this->createUser($result);
        }
    }
}

