<?php
class AdminView {

    public function menuList() {
        echo '<a href="index.php?action=lista">Lista userów</a><br>'
        . '<a href="index.php?action=user">Jeden uzytkownik</a><br>'
        . '<a href="index.php?action=adduser">Dodaj uzytkownika</a><br>'
        . '<a href="index.php?action=edituser">Edytuj uzytkownika</a><hr>'
              ;
    }
    
    public function usersList() {
        echo 'długa lista asdflkas dflkas dflkasd lfsdf';
    }
}