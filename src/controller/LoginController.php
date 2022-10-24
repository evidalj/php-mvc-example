<?php
import 
class LoginController {
    public __construct() {}

    public function login($username, $password){
        $isLogged = false
        if($username == "evidalj" && $password == "123456"){
            $isLogged = true;
        }
        return $isLogged;
    }
    
}