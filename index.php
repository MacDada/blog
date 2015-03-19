<?php
//index.php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//require_once('config.php');
require_once('controller/blogController.php');
require_once('model/blogGetSet.php');
require_once('model/blogModel.php');
require_once('view/blogView.php');

$blogController = new blogController(new blogGetSet, new blogView, new blogModel);
$blogController->postsList();
