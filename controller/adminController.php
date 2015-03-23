<?php
class adminController {
    private $aModel;
    private $aView;
    
    public function __construct(adminModel $aModelConstruct, adminView $aViewConstruct) {
        $this->aModel = $aModelConstruct;
        $this->aView = $aViewConstruct;
    }
    
    public function checkLogin() {
        $isset = $this->aModel->checkLogin();
        if($isset == FALSE) {
            $this->aView->viewForm();
        } else {
            $this->aView->viewPanel();
        }
    }
    
    public function login($login, $password) {
        $loginInfo = $this->aModel->login($login, $password);
        if($loginInfo == TRUE) {
            $this->aView->viewPanel();
        } else {
            $this->aView->viewInfo();
        }
    }
}

