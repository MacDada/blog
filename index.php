<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('controller/blogController.php');
require_once('model/blogModel.php');
require_once('view/blogView.php');

$blogController = new blogController(new blogView, new blogModel);
if(!isset($_GET['id'])){
    $blogController->postsList();
} elseif($_GET['id']==NULL) {

    $blogController->url();

} else {
    $blogController->postOne($_GET['id']);
}

