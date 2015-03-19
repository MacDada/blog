<?php
//blogController.php
class blogController {
    private $bGetSet;
    private $bView;
    private $bModel;
    
    public function __construct(blogGetSet $blogGetSetConstruct, blogView $blogViewConstruct, blogModel $blogModelConstruct) {
        $this->bGetSet = $blogGetSetConstruct;
        $this->bView = $blogViewConstruct;
        $this->bModel = $blogModelConstruct;
    }
    
    //wywolanie funkcji modelFinAll w pliku blogModel.php i return do indexu
    public function postsList() {
        $posts = $this->bModel->findAll();
        return $posts;
    }
}