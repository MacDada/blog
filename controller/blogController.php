<?php
class blogController {
    private $bRepo;
    private $bGetSet;
    private $bView;
    private $bModel;
    
    public function __construct(blogRepo $blogRepoConstruct, blogGetSet $blogGetSetConstruct, blogView $blogViewConstruct, blogModel $blogModelConstruct) {
        $this->bRepo = $blogRepoConstruct;
        $this->bGetSet = $blogGetSetConstruct;
        $this->bView = $blogViewConstruct;
        $this->bModel = $blogModelConstruct;
    }
    
    //wywolanie funkcji modelFinAll w pliku blogModel.php i return do indexu
    public function postsList() {
        $posts = $this->bModel->modelFindAll();
        return $posts;
    }
}