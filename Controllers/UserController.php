<?php
require_once "Models/UserModel.php";
class UserController extends BaseController {
    private $users;
    public function __construct() {
        $this->users = new UserModel();
    }
    public function index() {
        $users = $this->users->getUsers();
        $this->view("users/users_list", ['users' => $users]);
    }

    public function create() {
        $this->view("users/create");
    }
    // store
    public function store() {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $role = htmlspecialchars($_POST['role']);
        $this->users->createUser($name, $email, $encrypted_password, $role);
        header("Location: /users");
    }
    // edit
     public function edit($id) {
        session_start();
        if ($_SESSION['user_role'] !== 'admin') {
            echo "You don't have permission to edit users.";
            return;
        }
        $user = $this->users->getUserById($id);
        $this->view("users/edit", ['user' => $user]);
    }
    // update
    public function update($id) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $role = htmlspecialchars($_POST['role']);
        $this->users->updateUser($id, $name, $email, $role);
        header("Location: /users");
    }  
    // delete 
    public function delete($id) {
        $this->users->deleteUser($id);
        header("Location: /users");
    }
    // login
    public function login() {
        $this->view("users/login");
    }
    
    //authenticate 
    public function authenticate() {
        session_start();
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = $this->users->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
           $this->redirect("/users");
        } else {
            $this->view("users/login", ['error' => 'Invalid email or password']);
        }
    }
    // logout
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        $this->redirect("/");
    }

    

}