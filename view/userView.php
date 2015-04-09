<?php
class UserView {

    private function renderMenu() {
        return '<a href="index.php?action=list">Lista userów</a><br>'
        . '<a href="index.php?action=adduser">Dodaj uzytkownika</a><br>'
              ;
    }
    
    public function renderUsersList(array $users) {
        $usersList = null;
        if (0 === count($users)) {
                return 'Nie znaleziono użytkowników.';
        }
        foreach ($users as $user) {
            $usersList .= '[<a href="/admin/index.php?action=edituser&username='.$user->getUsername().'">E</a>] <a href="/admin/index.php?action=user&username='.$user->getUsername().'">'.$user->getUsername().'</a><br />';
        }
        return 'Użytkownicy: <br>'.$usersList;
    }
    
    ///do zrobienia
    public function renderUser(User $user) {
        return 'Użytkownik o ID: '.$user->getID().'<br>'.
                    'Nazwa użytkownika: '.$user->getUsername().'<br>'.
                    'E-mail: '.$user->getEmail().'<br>'.
                    'Hasło: '.$user->getPassword();
    }
    
    public function renderUserNotFound() {
        return 'Nie znaleziono użytkownika.';
    }
    
    public function renderTemplate($pageContent)
    {
        $menu = $this->renderMenu();

        return '
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
            </head>
                <body>
                    <header>
                        '.$menu.'
                    </header>
                    <div id="pageContent">
                        '.$pageContent.'
                    </div>
                </body>
            </html>
        ';
    }
    
    public function createUserForm() {
        return '<form method="POST" action="/admin/index.php?action=adduser">'
        . 'Nazwa użytkownika: <input type="text" name="username"><br>'
        . 'Hasło: <input type="password" name="password"><br>'
        . 'E-mail: <input type="text" name="email"><br>'
        . '<input type="submit" name="submit" value="Dodaj">'
        . '</form>';
    }
    
    private function htmlEscape($string) {
        return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
    
    public function editUserForm(User $user) {
        return '<form method="POST" action="/admin/index.php?action=edituser&username='.$user->getUsername().'">'
        . 'Nazwa użytkownika: <input type="text" name="username" value="'.$user->getUsername().'"><br>'
        . 'Hasło: <input type="password" name="password" value="'.$user->getPassword().'"><br>'
        . 'E-mail: <input type="text" name="email" value="'.$user->getEmail().'"><br>'
        . '<input type="submit" name="submit" value="Zapisz">'
        . '</form>';
    }
}