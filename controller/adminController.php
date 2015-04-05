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
        $user = $this->userRepository->findByUsername($getUsername);
        try {
            $pageContent = $this->view->renderUser($user);
        } catch (UserNotFoundException $ex) {
            $pageContent = $this->view->renderUserNotFound();
        }
        
        return $this->view->renderTemplate($pageContent);
    }

}

