<?php
try {
	$pdo= new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch (PDOException $e) {
	echo 'Połączenie nie mogło zostać utworzone: '.$e->getMessage();
}