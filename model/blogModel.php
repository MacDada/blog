<?php
class blogModel {
    //tablica do ktorej dodawane sa posty z Repo przy pomocy funkcji modelAddPost
    private $posts = [];
    
    //zwrocenie wyniku wszystkich postow do kontrolera
    public function modelFindAll() {
        return $this->posts;
    }
    
    //dodawanie postow - wykorzystywanie w Repo
    public function modelAddPost($post) {
        $this->posts[] = $post;
    }
}