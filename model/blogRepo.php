<?php
class blogRepo {    
    public function __construct() {
        $modelPost1 = new blogModel();
        $post1 = new blogGetSet();
        $post1->setID('1');
        $post1->setDate('03-02-1025');
        $post1->setTitle('pierwszy tytul');
        $post1->setText('tekst pierwszy');
        $modelPost1->modelAddPost($post1);
                
        $modelPost2 = new blogModel();
        $post2 = new blogGetSet();
        $post2->setID('3');
        $post2->setDate('01-08-2125');
        $post2->setTitle('drugi tytul');
        $post2->setText('tekst drugi');
        $modelPost2->modelAddPost($post2);
    }
}