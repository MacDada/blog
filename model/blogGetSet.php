<?php
class blogGetSet {
    private $post_id, $post_date, $post_title, $post_text;

    //ID
    public function setID($post_id) {
        $this->id = $post_id;
    }

    public function getID ($post_id) {
        return $this->id = $post_id;
    }

    //DATE
    public function setDate($post_date) {
        $this->id = $post_date;
    }

    public function getDate ($post_date) {
        return $this->id = $post_date;
    }

    //TITLE
    public function setTitle($post_title) {
        $this->id = $post_title;
    }

    public function getTitle ($post_title) {
        return $this->id = $post_title;
    }

    //TEXT
    public function setText($post_text) {
        $this->id = $post_text;
    }

    public function getText ($post_text) {
        return $this->id = $post_text;
    }
}