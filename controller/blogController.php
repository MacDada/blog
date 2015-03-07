<?php
class blogController {

    private $model;
    private $view;
    private $baza;
    
    public function __construct(blogModel $blogModelConstruct, blogRepo $blogRepoConstruct, blogView $blogViewConstruct) {
        $this->model = $blogModelConstruct;
        $this->view = $blogViewConstruct;
        $this->baza = $blogViewConstruct;
    }
	public function findAll() {
		$all = $this->model->modelfindAll();
		return $this->view->renderAll($all);
	}
}