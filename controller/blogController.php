<?php
class BlogController {
    private $view;
    private $model;
    
    public function __construct(BlogView $blogViewConstruct, BlogModel $blogModelConstruct) {
        $this->view = $blogViewConstruct;
        $this->model = $blogModelConstruct;
    }
    
    //wywolanie funkcji modelFinAll w pliku blogModel.php i return do indexu
    public function postsList() {
        $posts = $this->model->findAll();
        $this->view->renderAll($posts);
    }
    
    public function postOne($id) {
        $post = $this->model->findOne($id);
        $this->view->renderOne($post);
    }
    
    public function url() {
        $this->view->urlInfo();
    }
}