<?php 
// require("/routes/Routes.php");

class LoginController {
    function __construct() {
        session_start();
    }

    public function login($username, $password){
        // session_start();
        include("../model/UserModel.php");
        $isLogged = false;
        if($username == "evidalj" && $password == "123456"){
            $user = new UserModel("Erik Vidal Jimenez");
            $_SESSION["user"] = $user;
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

    // public function index(){
    //     if($this->validateSession()){
    //         $this->goRoute("home");
    //         // require('view/HomeView.php');
    //     } else {
    //         $this->goRoute("login");
    //         // require('view/LoginView.php');
    //     }
    // }

}