<?php
class AdminView {

    private function renderMenu() {
        return '<a href="index.php?action=lista">Lista userów</a><br>'
        . '<a href="index.php?action=user">Jeden uzytkownik</a><br>'
        . '<a href="index.php?action=adduser">Dodaj uzytkownika</a><br>'
        . '<a href="index.php?action=edituser">Edytuj uzytkownika</a><hr>'
              ;
    }
    
    public function renderUsersList(array $users) {
        if (0 === count($users)) {
                echo 'Nie znaleziono użytkowników.';
        } else {
                echo 'Użytkownicy:<br />';
                var_dump($users);
                foreach ($users as $user) {
                        echo 'User: id='.$user->getId().' username='.$user->getUsername().'<br />';
            }
        }
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
}