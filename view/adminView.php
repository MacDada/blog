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
        $usersList = null;
        if (0 === count($users)) {
                return 'Nie znaleziono użytkowników.';
        } else {
            echo 'Użytkownicy:<br />';
            foreach ($users as $user) {
                $usersList .= 'User: id='.$user->getId().' username='.$user->getUsername().'<br />';
            }
            return $usersList;
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