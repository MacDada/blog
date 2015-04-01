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
        }
        foreach ($users as $user) {
            $usersList .= 'User: id='.$user->getID().' username='.$user->getUsername().'<br />';
        }
        return 'Użytkownicy: <br>'.$usersList;
    }
    
    ///do zrobienia
    public function renderUser(array $user) {
        $singleUser = null;
        if (0 === count($user)) {
                return 'Nie znaleziono użytkownika.';
        }
        //var_dump($user);
        //echo $singleUser = $user['Userid'].$user['Userusername'].$user['Userpassword'].$user['Useremail'];
        
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