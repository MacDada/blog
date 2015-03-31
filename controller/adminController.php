<?php
class AdminController {
    private $view;
    private $userRepository;
    
    public function __construct(AdminView $aViewConstruct, PdoUserRepository $userRepository) {
        $this->view = $aViewConstruct;
        $this->pdoUser = $userRepository;
    }
    
    public function usersList()
    {
        $users = $this->userRepository->findAll();

        $pageContent = $this->view->renderUsersList($users);

        return $this->view->renderTemplate($pageContent);
    }

}

