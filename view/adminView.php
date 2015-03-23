<?php
class adminView {

    public function viewForm() {
         echo '
            <form method="POST" method="index.php">
            Login: <input type="text" name="login">
            Hasło: <input type="password" name="password">
            <input type="submit" name="zaloguj">
            </form>
            ';
    }
    
    public function viewPanel() {
        echo 'panel';
    }
    
    public function viewInfo() {
        echo 'bledne dane logowania';
    }
}