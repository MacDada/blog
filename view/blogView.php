<?php
class BlogView {
    
    public function renderAll($posts) {
        foreach($posts as $row) {
            echo $row['post_title'].'<br>'
                .'<i>'.$row['post_date'].'</i><br><br>'
                .$row['post_text'].'<br>'
                .'<a href="index.php?id='.$row['post_id'].'">więcej</a><br><br><br>';
        }
    }
    
    public function renderOne($post) {
        if($post == NULL) {
            echo 'Brak wpisu o podanym ID';
        } else {
            echo $post['post_title'].'<br>'.$post['post_text'];
        }
    }
    
    public function urlInfo() {
        echo 'Brak strony o podanym ID.';
    }
}