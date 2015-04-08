<?php
require_once __DIR__.'/../boot.php';

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$userController = new UserController(new UserView(), new PdoUserRepository($pdo));

switch ($_GET['action']) {
    case 'lista':
        echo $userController->usersList();
        break;
    
    case 'user':
        echo $userController->singleUser($_GET['username']);
        break;
    
    case 'adduser':
        echo $userController->create();
        break;
    
    case 'edituser':
        //
        break;
}


