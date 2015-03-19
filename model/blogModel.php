<?php
//blogModel.php
class blogModel {
    //tablica do ktorej dodawane sa posty z Repo przy pomocy funkcji modelAddPost
    private $posts = [];
    
    public function __construct() {
        $db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }
    
    //zwrocenie wyniku wszystkich postow do kontrolera
    public function findAll() {
        $query = $db->query('SELECT * FROM posts');
    }
    
    //dodawanie postow - wykorzystywanie w Repo
    public function modelAddPost($post) {
        //
    }
}