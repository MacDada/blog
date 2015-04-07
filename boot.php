<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//index.php
require_once __DIR__.'/controller/blogController.php';
require_once __DIR__.'/model/blogModel.php';
require_once __DIR__.'/view/BlogView.php';
//admin/index.php
require_once __DIR__.'/controller/userController.php';
require_once __DIR__.'/view/userView.php';
require_once __DIR__.'/model/User.php';
require_once __DIR__.'/model/PdoUserRepository.php';
require_once __DIR__.'/model/UserNotFoundException.php';