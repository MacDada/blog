<?php
class UserController {
    private $view;
    private $userRepository;
    
    public function __construct(UserView $view, PdoUserRepository $userRepository) {
        $this->view = $view;
        $this->userRepository = $userRepository;
    }
    
    public function usersList()
    {
        $users = $this->userRepository->findAll();
        $pageContent = $this->view->renderUsersList($users);

        return $this->view->renderTemplate($pageContent);
    }
    
    public function singleUser($getUsername) {
        $user = $this->userRepository->findByUsername($getUsername);
        try {
            $pageContent = $this->view->renderUser($user);
        } catch (UserNotFoundException $ex) {
            $pageContent = $this->view->renderUserNotFound();
        }

        return $this->view->renderTemplate($pageContent);
    }

    public function create() {
        if('POST' === $_SERVER['REQUEST_METHOD']) {
            $user = new User($_POST['username'], $_POST['password'], $_POST['email']);
            $this->userRepository->save($user);
            $urlParameters = html_build_query([
                'action' => 'user',
                'username' => $user->getUsername()
            ]);
            header('Location: /admin/index.php?'.$urlParameters);
        } else {
            return $this->view->createUserForm();
        }
    }
}

