<?php
require_once __DIR__.'/../boot.php';

$adminController = new adminController(new AdminView(), new PdoUserRepository());

switch ($_GET['action']) {
    case 'lista':
        echo $adminController->usersList();
        break;
    
    case 'user':
        echo $adminController->singleUser($_GET['username']);
        break;
    
    case 'adduser':
        //
        break;
    
    case 'edituser':
        //
        break;
    
    default:
        break;
}


