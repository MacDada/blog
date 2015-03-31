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
        var_dump($users);
        //$pageContent = $this->view->renderUsersList($users);

        //return $this->view->renderTemplate($pageContent);
    }

}

