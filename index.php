<?php
require_once __DIR__.'/boot.php';

$blogController = new BlogController(new BlogView, new BlogModel);
if(!isset($_GET['id'])){
    $blogController->postsList();
} elseif($_GET['id']==NULL) {

    $blogController->url();

} else {
    $blogController->postOne($_GET['id']);
}

