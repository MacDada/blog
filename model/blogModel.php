<?php
class blogModel {
    public $db;
    public $resultsAll;
    public $resultOne;
    public $queryOne;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }    
    //zwrocenie wyniku wszystkich postow do kontrolera
    public function findAll() {
        $queryAll = $this->db->query('SELECT * FROM posts');
        $this->resultsAll = $queryAll->fetchAll(PDO::FETCH_ASSOC);
        return $this->resultsAll;
    }
    
    public function findOne($id) {
        $queryOne = $this->db->query('SELECT * FROM posts WHERE post_id="'.$id.'"');
        $this->resultOne = $queryOne->fetch();
        return $this->resultOne;
    }
}