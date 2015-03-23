<?php
class blogController {
    private $bView;
    private $bModel;
    
    public function __construct(blogView $blogViewConstruct, blogModel $blogModelConstruct) {
        $this->bView = $blogViewConstruct;
        $this->bModel = $blogModelConstruct;
    }
    
    //wywolanie funkcji modelFinAll w pliku blogModel.php i return do indexu
    public function postsList() {
        $posts = $this->bModel->findAll();
        $this->bView->renderAll($posts);
    }
    
    public function postOne($id) {
        $post = $this->bModel->findOne($id);
        $this->bView->renderOne($post);
    }
    
    public function url() {
        $this->bView->urlInfo();
    }
}