<?php
class UserController {
    private $view;
    private $userRepository;
    
    public function __construct(UserView $view, PdoUserRepository $userRepository) {
        $this->view = $view;
        $this->userRepository = $userRepository;
    }
    
    public function usersList()
    {
        $users = $this->userRepository->findAll();
        $pageContent = $this->view->renderUsersList($users);

        return $this->view->renderTemplate($pageContent);
    }
    
    public function singleUser($getUsername) {
        $user = $this->userRepository->findByUsername($getUsername);
        try {
            $pageContent = $this->view->renderUser($user);
        } catch (UserNotFoundException $ex) {
            $pageContent = $this->view->renderUserNotFound();
        }

        return $this->view->renderTemplate($pageContent);
    }

    public function create() {
        if('POST' === $_SERVER['REQUEST_METHOD']) {
            $user = new User($_POST['username'], $_POST['password'], $_POST['email']);
            $this->userRepository->save($user);
            $urlParameters = http_build_query([
                'action' => 'user',
                'username' => $user->getUsername()
            ]);
            header('Location: /admin/index.php?'.$urlParameters);
        } else {
            return $this->view->createUserForm();
        }
    }
    
    public function pageNotFound() {
        return $this->view->pageNotFound();
    }
    
    public function edit($getUsername) {
        $userfromdb = $this->userRepository->findByUsername($getUsername);
        if('POST' === $_SERVER['REQUEST_METHOD']) {
            $user = new User($userfromdb->getUsername(), $_POST['password'], $_POST['email'], $userfromdb->getID());
            $this->userRepository->save($user);
            $urlParameters = http_build_query([
                'action' => 'user',
                'username' => $user->getUsername()
            ]);
            header('Location: /admin/index.php?'.$urlParameters);
        } else {
            return $this->view->editUserForm($userfromdb);
        }
    }
}

