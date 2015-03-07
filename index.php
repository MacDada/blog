<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('config.php');
require_once('controller/blogController.php');
require_once('model/blogRepo.php');
require_once('model/blogGetSet.php');
require_once('view/blogView.php');
//testowy komentarz
$blogController = new blogController(new blogRepo, new blogGetSet, new blogView);