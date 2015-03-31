<?php
require_once __DIR__.'/../boot.php';
require_once __DIR__.'/../controller/adminController.php';
require_once __DIR__.'/../view/adminView.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/PdoUserRepository.php';

$adminController = new adminController(new AdminView(), new PdoUserRepository());
echo $adminController->menuList();


switch ($_GET['action']) {
    case 'lista':
        $users = $adminController->usersList();
        var_dump($users);
        if (0 === count($users)) {
                echo 'Nie znaleziono użytkowników.';
        } else {
                echo 'Użytkownicy:<br />';
                foreach ($users as $user) {
                        echo 'User: id='.$user->getId().' username='.$user->getUsername().'<br />';
            }
        }
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


