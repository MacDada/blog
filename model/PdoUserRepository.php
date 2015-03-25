<?php
class PdoUserRepository {
    private $query;
    private $result;
    private $db;//PDO
    
    public function findByID($id) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_id="'.$id.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($this->result != NULL) {
            $User = new User($this->result['user_id'], $this->result['user_name'], $this->result['user_password'], $this->result['user_email']);
        }
    }
    
    public function findByUsername($username) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_name="'.$login.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($this->result != NULL) {
            $User = new User($this->result['user_id'], $this->result['user_name'], $this->result['user_password'], $this->result['user_email']);
        }
    }
    
    public function findByEmail($email) {
        //trzeba dodać polaczenie z baza
        $query = $this->db->query('SELECT * FROM users WHERE user_email="'.$email.'"');
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($this->result != NULL) {
            $User = new User($this->result['user_id'], $this->result['user_name'], $this->result['user_password'], $this->result['user_email']);
        }
    }
}

