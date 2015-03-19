<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

} catch (PDOException $e) {
    print "Błąd: " . $e->getMessage() . "<br/>";
    die();
}
