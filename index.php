<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once __DIR__.'\controller\blogController.php';
require_once __DIR__.'\model\blogModel.php';
require_once __DIR__.'\view\BlogView.php';

$blogController = new BlogController(new BlogView, new BlogModel);
if(!isset($_GET['id'])){
    $blogController->postsList();
} elseif($_GET['id']==NULL) {

    $blogController->url();

} else {
    $blogController->postOne($_GET['id']);
}

