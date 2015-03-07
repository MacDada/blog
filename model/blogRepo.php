<?php
class blogRepo {
	private $posts = [];
	public function __construct() {
		$post1 = new blogGetSet();
		$post1->setID('1');
		$post1->setDate('03-02-1025');
		$post1->setTitle('pierwszy tytul');
		$post1->setText('tekst pierwszy');
	}
}

?>