<?php
require_once __DIR__.'/../boot.php';

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$userController = new UserController(new UserView(), new PdoUserRepository($pdo));

if(!isset($_GET['action'])) {
    echo $userController->usersList();
} else {
    switch ($_GET['action']) {
        case 'list':
            echo $userController->usersList();
            break;

        case 'user':
            echo $userController->singleUser($_GET['username']);
            break;

        case 'adduser':
            echo $userController->create();
            break;

        case 'edituser':
            echo $userController->edit($_GET['username']);
            break;
        
        default:
            echo $userController->pageNotFound();
            break;
    }
}


