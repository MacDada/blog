<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../controller/adminController.php');
require_once('../model/adminModel.php');
require_once('../view/adminView.php');

$adminController = new adminController(new adminModel, new adminView);
if(!isset($_POST['login'])) {
    $adminController->checkLogin();
} else {
    $adminController->login($_POST['login'], $_POST['password']);
}


