<?php
require_once __DIR__.'/../boot.php';

$adminController = new adminController(new AdminView(), new PdoUserRepository());

switch ($_GET['action']) {
    case 'lista':
        echo $adminController->usersList();
        break;
    
    case 'user':
        //
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


