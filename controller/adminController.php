<?php
class AdminController {
    private $view;
    private $userRepository;
    
    public function __construct(AdminView $view, PdoUserRepository $userRepository) {
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
        $objectUser = $this->userRepository->findByUsername($getUsername);
        $user = (array) $objectUser;
        var_dump($objectUser);
        var_dump($user);
        $pageContent = $this->view->renderUser($user);
        return $this->view->renderTemplate($pageContent);
    }

}

