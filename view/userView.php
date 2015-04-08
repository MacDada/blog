<?php
class UserView {

    private function renderMenu() {
        return '<a href="app.dev/admin/index.php?action=lista">Lista userów</a><br>'
        . '<a href="app.dev/admin/index.php?action=user">Jeden uzytkownik</a><br>'
        . '<a href="app.dev/admin/index.php?action=adduser">Dodaj uzytkownika</a><br>'
        . '<a href="app.dev/admin/index.php?action=edituser">Edytuj uzytkownika</a><hr>'
              ;
    }
    
    public function renderUsersList(array $users) {
        $usersList = null;
        if (0 === count($users)) {
                return 'Nie znaleziono użytkowników.';
        }
        foreach ($users as $user) {
            $usersList .= 'User: id='.$user->getID().' username='.$user->getUsername().'<br />';
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
            <html>
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
        return '<form method="POST" action="app.dev/admin/index.php?action=adduser">'
        . 'Nazwa użytkownika: <input type="text" name="username"><br>'
        . 'Hasło: <input type="password" name="password"><br>'
        . 'E-mail: <input type="text" name="email"><br>'
        . '<input type="submit" name="submit" value="Dodaj">'
        . '</form>';
    }
}