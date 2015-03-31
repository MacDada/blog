<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../controller/adminController.php');
require_once('../model/adminModel.php');
require_once('../view/adminView.php');
require_once('../model/User.php');
require_once('../model/PdoUserRepository.php');

$adminController = new adminController(new AdminModel, new AdminView, new PdoUserRepository);
$adminController->menuList();

if ($_GET['action']==='lista') {
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
} elseif ($_GET['action']=='user') {
    
} elseif ($_GET['action']=='adduser') {
    
} elseif ($_GET['action']=='edituser') {
    
}


