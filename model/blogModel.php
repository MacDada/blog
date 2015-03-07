<?php
class blogModel {

	public function modelfindAll() {
		$query = $pdo->query('SELECT * FROM posts');
		while($row = $query->fetch()) {
			$tab = $row;
		}
		return $tab;
	}
}