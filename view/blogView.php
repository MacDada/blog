<?php
class blogView {
    
    public function renderAll($posts) {
        foreach($posts as $row) {
            echo $row['post_title'].' -> '.$row['post_text'].'<br>';
        }
    }
    
    public function renderOne($post) {
        var_dump($post);
    }
}