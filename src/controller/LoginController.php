<?php 
class LoginController {
    function __construct() {
        session_start();
    }

    public function login($username, $password){
        // session_start();
        $isLogged = false;
        if($username == "evidalj" && $password == "123456"){
            $_SESSION["user"] = new UserModel("Erik Vidal Jimenez");
            $isLogged = true;
        }
        return $isLogged;
    }

    public function validateSession() {
        return isset($_SESSION["user"]);
    }

    public function logout(){
        unset($_SESSION["user"]);
    }

    public function index(){
        if($this->validateSession()){
            require('view/HomeView.php');
        } else {
            require('view/LoginView.php');
        }
    }
    
}