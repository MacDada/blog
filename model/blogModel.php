<?php
//blogModel.php
class blogModel {
 
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