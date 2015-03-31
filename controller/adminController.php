<?php
class AdminController {
    private $model;
    private $view;
    private $pdoUser;
    
    public function __construct(AdminModel $aModelConstruct, AdminView $aViewConstruct, PdoUserRepository $PdoUserRepositoryConstruct) {
        $this->model = $aModelConstruct;
        $this->view = $aViewConstruct;
        $this->pdoUser = $PdoUserRepositoryConstruct;
    }
    
    public function menuList() {
        $this->view->menuList();
    }
    
    public function usersList() {
        return $this->pdoUser->findAll();
    }

}

